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
    <section class="bg-gray-50">
        <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
            <div class="mx-auto max-w-xl text-center">
                <h1 class="text-3xl font-extrabold sm:text-5xl">
                    Selamat Datang di Kemed Store
                </h1>

                <p class="mt-4 sm:text-xl/relaxed">
                    Kemed Store adalah toko online yang menyediakan berbagai macam produk dan bisa topup apapun dengan
                    harga terjangkau.
                </p>
                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <form class="flex w-full sm:w-auto" action="#" method="GET">
                        <input type="text" name="search"
                            class="block w-full rounded-l px-4 py-3 text-sm font-medium text-gray-700 shadow focus:outline-none focus:ring"
                            placeholder="Search Product...">
                        <button type="submit"
                            class="block rounded-r bg-red-600 px-4 py-3 text-sm font-medium text-white shadow hover:bg-red-700 focus:outline-none focus:ring active:bg-red-500">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="container mx-auto grid grid-cols-2 gap-4 max-w-xl py-8">
        @yield('content')
    </div>
    <footer class="bg-gray-50">
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <div class="flex justify-center text-teal-600 sm:justify-start">
                    <a href="#" class="font-medium">
                        Kemed Store
                    </a>
                </div>

                <p class="mt-4 text-center text-sm text-gray-500 lg:mt-0 lg:text-right">
                    Copyright &copy; 2024. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

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
