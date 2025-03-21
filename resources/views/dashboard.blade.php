@extends('layouts.app')

@section('content')
<div class="intro">
    <div class="content">
        <h1>Laundry Lessons: Finding Clean Moments in the Chaos</h1>
        <p>Dirty laundry can be overwhelming, but it’s a reminder that even messes can be cleaned. Each load brings us closer to a fresh start.</p>
        <a href="{{ route('orders.index') }}" class="get-started">Get started!</a>
    </div>
    <div class="image-container">
    <img src="{{ asset('img/1ds-removebg-preview.png') }}" alt="Image">
    </div>
</div>
@endsection