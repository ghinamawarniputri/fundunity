<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard - CMS Donasi')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
            margin: 0; /* Reset default body margin */
            padding: 0; /* Reset default body padding */
            display: flex; /* Enable flexbox for layout */
            min-height: 100vh; /* Ensure full viewport height */
        }

        .sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 220px;
            background-color: rgb(60, 153, 245);
            color: #fff;
            padding: 20px 15px;
            overflow-y: auto; /* Enable scrolling for long menus */
        }

        .sidebar .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #fff;
            text-align: center;
            margin-bottom: 2rem;
        }

        .sidebar a {
            display: block;
            color: rgb(0, 0, 0);
            padding: 10px 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            text-decoration: none;
        }

        .sidebar a.active,
        .sidebar a:hover {
            background-color: rgb(0, 67, 133);
            color: #fff;
        }

        .main-content {
            flex-grow: 1; /* Allow main content to take remaining width */
            margin-left: 220px; /* Match sidebar width */
            padding: 30px;
        }

        .card-summary {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .summary-icon {
            font-size: 2rem;
            opacity: 0.3;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .sidebar {
                position: static; /* Flow with the content */
                width: 100%;
                height: auto;
                margin-bottom: 20px;
                display: flex;
                overflow-x: auto; /* Enable horizontal scrolling for small screens */
            }

            .sidebar .logo {
                margin-right: 20px;
            }

            .sidebar a {
                margin-right: 10px;
                margin-bottom: 0;
                flex-shrink: 0; /* Prevent items from shrinking */
            }

            .main-content {
                margin-left: 0;
                padding: 15px;
            }
        }
    </style>
    @yield('head')
</head>

<body>

    <div class="sidebar">
        <div class="logo">
            <img src="{{ asset('img/LOGOcms.jpg') }}" alt="FundUnity Logo" style="max-width: 100%; height: auto;">
        </div>
        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">🏠 Dashboard</a>
        <a href="{{ route('admin.aboutus') }}" class="{{ request()->routeIs('admin.aboutus') ? 'active' : '' }}">👤 About Us</a>
        <a href="{{ route('admin.transaksi') }}" class="{{ request()->routeIs('admin.transaksi') ? 'active' : '' }}">💳 Donasi</a>
        {{-- <a href="{{ route('') }}" class="{{ request()->routeIs('') ? 'active' : '' }}">👥 Volunteer</a> --}}
        {{-- <a href="{{ route('admin.pengaturan.index') }}" class="{{ request()->routeIs('admin.pengaturan.*') ? 'active' : '' }}">⚙️ Pengaturan</a> --}}
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">🚪 Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>

    <div class="main-content">
        @yield('content')
    </div>

    @yield('scripts')

</body>

</html>