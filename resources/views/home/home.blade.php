@extends('home.main')
@section('hero-section')
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
@endsection
@section('content')
    <a href="#" class="group relative block overflow-hidden">
        <button
            class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
            <span class="sr-only">Cart</span>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.6 8M17 13l1.6 8M9 21a1 1 0 100-2 1 1 0 000 2zm6 0a1 1 0 100-2 1 1 0 000 2z" />
            </svg>
        </button>

        <img src="https://images.unsplash.com/photo-1599481238640-4c1288750d7a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2664&q=80"
            alt="" class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72" />

        <div class="relative border border-gray-100 bg-white p-6">
            <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium"> New </span>

            <h3 class="mt-4 text-lg font-medium text-gray-900">Robot Toy</h3>

            <p class="mt-1.5 text-sm text-gray-700">$14.99</p>

            <form class="mt-4">
                <button class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105">
                    Beli
                </button>
            </form>
        </div>
    </a>
    <a href="#" class="group relative block overflow-hidden">
        <button
            class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
            <span class="sr-only">Cart</span>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.6 8M17 13l1.6 8M9 21a1 1 0 100-2 1 1 0 000 2zm6 0a1 1 0 100-2 1 1 0 000 2z" />
            </svg>
        </button>

        <img src="https://images.unsplash.com/photo-1599481238640-4c1288750d7a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2664&q=80"
            alt="" class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72" />

        <div class="relative border border-gray-100 bg-white p-6">
            <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium"> New </span>

            <h3 class="mt-4 text-lg font-medium text-gray-900">Robot Toy</h3>

            <p class="mt-1.5 text-sm text-gray-700">$14.99</p>

            <form class="mt-4">
                <button class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105">
                    Add to Cart
                </button>
            </form>
        </div>
    </a>
    <a href="#" class="group relative block overflow-hidden">
        <button
            class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
            <span class="sr-only">Cart</span>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.6 8M17 13l1.6 8M9 21a1 1 0 100-2 1 1 0 000 2zm6 0a1 1 0 100-2 1 1 0 000 2z" />
            </svg>
        </button>

        <img src="https://images.unsplash.com/photo-1599481238640-4c1288750d7a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2664&q=80"
            alt="" class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72" />

        <div class="relative border border-gray-100 bg-white p-6">
            <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium"> New </span>

            <h3 class="mt-4 text-lg font-medium text-gray-900">Robot Toy</h3>

            <p class="mt-1.5 text-sm text-gray-700">$14.99</p>

            <form class="mt-4">
                <button class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105">
                    Add to Cart
                </button>
            </form>
        </div>
    </a>
    <a href="#" class="group relative block overflow-hidden">
        <button
            class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
            <span class="sr-only">Cart</span>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.6 8M17 13l1.6 8M9 21a1 1 0 100-2 1 1 0 000 2zm6 0a1 1 0 100-2 1 1 0 000 2z" />
            </svg>
        </button>

        <img src="https://images.unsplash.com/photo-1599481238640-4c1288750d7a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2664&q=80"
            alt="" class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72" />

        <div class="relative border border-gray-100 bg-white p-6">
            <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium"> New </span>

            <h3 class="mt-4 text-lg font-medium text-gray-900">Robot Toy</h3>

            <p class="mt-1.5 text-sm text-gray-700">$14.99</p>

            <form class="mt-4">
                <button class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105">
                    Add to Cart
                </button>
            </form>
        </div>
    </a>
    <a href="#" class="group relative block overflow-hidden">
        <button
            class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
            <span class="sr-only">Cart</span>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.6 8M17 13l1.6 8M9 21a1 1 0 100-2 1 1 0 000 2zm6 0a1 1 0 100-2 1 1 0 000 2z" />
            </svg>
        </button>

        <img src="https://images.unsplash.com/photo-1599481238640-4c1288750d7a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2664&q=80"
            alt="" class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72" />

        <div class="relative border border-gray-100 bg-white p-6">
            <span class="whitespace-nowrap bg-yellow-400 px-3 py-1.5 text-xs font-medium"> New </span>

            <h3 class="mt-4 text-lg font-medium text-gray-900">Robot Toy</h3>

            <p class="mt-1.5 text-sm text-gray-700">$14.99</p>

            <form class="mt-4">
                <button class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105">
                    Add to Cart
                </button>
            </form>
        </div>
    </a>
@endsection
