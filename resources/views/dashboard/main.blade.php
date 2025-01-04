<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{ $title }}</title>
</head>

<body class="flex h-screen bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        @include('dashboard.sidebar')

        <!-- Main Content -->
        <main class="flex-1 p-6 bg-gray-100">
            <!-- Your main content goes here -->
            <h1 class="text-2xl font-bold">Dashboard</h1>
            <p class="mt-4">Welcome to your dashboard!</p>
            @yield('content')
        </main>
    </div>

</body>

</html>
