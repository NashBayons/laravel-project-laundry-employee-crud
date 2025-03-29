@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Employees</h1>

    <a href="{{ route('admin.employee.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
        Add New Employee
    </a>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full bg-white shadow-md rounded">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Position</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr class="border-b">
                <td class="px-4 py-2">{{ $employee->getFullName() }}</td>
                <td class="px-4 py-2">{{ $employee->email }}</td>
                <td class="px-4 py-2">{{ $employee->position ?? 'N/A' }}</td>
                <td class="px-4 py-2">
                    <span class="{{ $employee->status == 'active' ? 'text-green-600' : 'text-red-600' }}">
                        {{ ucfirst($employee->status) }}
                    </span>
                </td>
                <td class="px-4 py-2">
                    <div class="flex space-x-2">
                        <a href="{{ route('admin.employee.edit', $employee) }}" class="text-blue-500">Edit</a>
                        <form action="{{ route('admin.employee.destroy', $employee) }}" method="POST" 
                              onsubmit="return confirm('Are you sure you want to delete this employee?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $employees->links() }}
</div>
@endsection