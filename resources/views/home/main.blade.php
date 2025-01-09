<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Kemed Store</title>
</head>

<body>
    @include('home.navbar')
    @yield('hero-section')
    <div class="container mx-auto grid grid-cols-2 gap-4 max-w-xl py-8">
        @yield('content')
    </div>
   @include('home.footer')
    <script>
        document.getElementById('menu-button').addEventListener('click', function() {
            document.getElementById('dropdown-menu').classList.toggle('hidden');
        });

        document.addEventListener('click', function(event) {
            var isClickInside = document.getElementById('menu-button').contains(event.target) || document
                .getElementById('dropdown-menu').contains(event.target);

            if (!isClickInside) {
                document.getElementById('dropdown-menu').classList.add('hidden');
            }
        });
    </script>
</body>

</html>
