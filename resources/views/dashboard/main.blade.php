<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.15.10/dist/sweetalert2.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-base-100 dark:bg-base-900">
    <!-- Navbar -->
   @include('dashboard.navbar')

    <!-- Sidebar -->
    @include('dashboard.sidebar')

    <!-- Main Content -->
    <main class="p-4 sm:ml-64 pt-20 bg-base-100 dark:bg-base-900">
       @yield('content')
    </main>

    <!-- Chart.js -->

    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.15.10/dist/sweetalert2.all.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const themeToggle = document.getElementById('theme-toggle');
            const themeIcon = document.getElementById('theme-icon');
            const currentTheme = localStorage.getItem('theme') || 'light';

            function applyTheme(theme) {
                if (theme === 'dark') {
                    document.documentElement.classList.add('dark');
                    themeIcon.classList.replace('icon-[tabler--moon]', 'icon-[tabler--sun]');
                } else {
                    document.documentElement.classList.remove('dark');
                    themeIcon.classList.replace('icon-[tabler--sun]', 'icon-[tabler--moon]');
                }
                localStorage.setItem('theme', theme);
            }

            applyTheme(currentTheme);

            themeToggle.addEventListener('click', function() {
                const newTheme = document.documentElement.classList.contains('dark') ? 'light' : 'dark';
                applyTheme(newTheme);
            });
        });
        const ctx = document.getElementById('chart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Sales',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        function confirmLogout() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, log out!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('logout-form').submit();
                }
            })
        }
    </script>
</body>

</html>
