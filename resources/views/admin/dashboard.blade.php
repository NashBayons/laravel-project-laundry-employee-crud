<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css') {{-- Laravel Breeze asset compilation --}}
    <style>
        /* Your existing CSS */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1a1a1a;
            color: white;
        }
        
        .header {
            background-color: #1a1a1a;
            padding: 10px 20px;
            color: #9e9e9e;
            font-size: 14px;
        }
        
        .dashboard {
            background-color: #1c3856;
            margin: 0 20px;
            border-radius: 5px;
            overflow: hidden;
        }
        
        .top-nav {
            display: flex;
            background-color: #1a2d45;
            padding: 15px 20px;
            align-items: center;
        }
        
        .top-nav h1 {
            flex: 1;
            margin: 0;
            font-size: 24px;
            font-weight: normal;
        }
        
        .nav-links {
            display: flex;
            align-items: center;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 16px;
        }
        
        /* Rest of your existing CSS */
    </style>
</head>
<body>
    <div class="header">Admin Dash</div>

    <div class="dashboard">
        <div class="top-nav">
            <h1>Administrator</h1>
            <div class="nav-links">
                <a href="#">Order Track</a>
                <a href="{{ route('admin.employee.index') }}">Employee Assignment</a>
                <a href="#">Sales Report</a>
                
                {{-- Logout Form --}}
                <form method="POST" action="{{ route('logout') }}" class="ml-4">
                    @csrf
                    <button type="submit" class="text-white hover:text-gray-300">
                        Logout
                    </button>
                </form>
            </div>
        </div>

        <div class="dashboard-content">
            <div class="track-label">Track</div>
            <div class="charts-container">
                <div class="line-chart">
                    <div class="sales-label">Sales:</div>
                </div>
                <div class="pie-chart">
                </div>
            </div>
        </div>
    </div>
</body>
</html>