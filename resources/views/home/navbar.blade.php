<header class="bg-white">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="md:flex md:items-center md:gap-12">
                <a class="block text-teal-600 transition hover:text-gray-500/75 font-medium" href="#">
                    Kemed Store
                </a>
            </div>

            <div class="hidden md:block">
                <nav aria-label="Global">
                    <ul class="flex items-center gap-6 text-sm">
                        <li>
                            <a class="text-black-500 transition hover:text-gray-500/75 font-medium" href="#">
                                Product </a>
                        </li>

                        <li>
                            <a class="text-black-500 transition hover:text-gray-500/75 font-medium" href="#">
                                Category </a>
                        </li>
                    </ul>
                </nav>
            </div>
            @auth
                <div class="flex sm:flex sm:gap-4">
                    <a href="#" class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.6 8M17 13l1.6 8M9 21a1 1 0 100-2 1 1 0 000 2zm6 0a1 1 0 100-2 1 1 0 000 2z" />
                        </svg>
                        <span class="absolute top-0 right-0 inline-block w-2 h-2 bg-red-600 rounded-full"></span>
                    </a>
                    <button type="button" class="overflow-hidden rounded-full border border-gray-300 shadow-inner"
                        id="menu-button">
                        <span class="sr-only">Toggle dashboard menu</span>
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="size-10 object-cover" />
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdown-menu"
                        class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg hidden">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
                    </div>
                </div>
            @else
                <div class="flex items-center gap-4">
                    <div class="sm:flex sm:gap-4">
                        <a class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow transition hover:text-black"
                            href="/login">
                            Login
                        </a>
                    </div>
                </div>
            @endauth

            <div class="block md:hidden">
                <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

</header>
