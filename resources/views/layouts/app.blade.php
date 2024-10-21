<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <!-- Navigation -->
        <nav class="bg-white dark:bg-gray-800 shadow-md">
            <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
                <div class="flex items-center space-x-6">
                    @if (Auth::check())
                        <a href="{{ route('dashboard') }}" class="text-white bg-blue-500 hover:bg-blue-600 rounded-md px-4 py-2 transition duration-300">Dashboard</a>
                    @endif
                    <a href="{{ route('students.index') }}" class="text-white bg-blue-500 hover:bg-blue-600 rounded-md px-4 py-2 transition duration-300">Students</a>
                </div>
                <div class="flex items-center space-x-4">
                    @if (Auth::check())
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="text-white bg-red-500 hover:bg-red-600 rounded-md px-4 py-2 transition duration-300">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-white bg-blue-500 hover:bg-blue-600 rounded-md px-4 py-2 transition duration-300">Login</a>
                        <a href="{{ route('register') }}" class="text-white bg-blue-500 hover:bg-blue-600 rounded-md px-4 py-2 transition duration-300">Register</a>
                    @endif
                </div>
            </div>
        </nav>

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            @yield('content') <!-- This line allows child views to insert their content here -->
        </main>
    </div>

    <!-- Include DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.table').DataTable();
        });
    </script>
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>
</html>
