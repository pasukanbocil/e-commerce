<aside id="default-sidebar"
    class="overlay sm:shadow-none overlay-open:translate-x-0 drawer drawer-start hidden max-w-64 sm:absolute sm:z-0 sm:flex sm:translate-x-0 pt-16 bg-base-100 dark:bg-base-900"
    role="dialog" tabindex="-1">
    <div class="drawer-body px-2 pt-4">
        <ul class="menu p-0">
            <li>
                <a href="#">
                    <span class="icon-[tabler--home] size-5"></span>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon-[tabler--user] size-5"></span>
                    Users
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon-[tabler--settings] size-5"></span>
                    Settings
                </a>
            </li>
            <li>
                <a class="collapse-toggle collapse-open:bg-base-content/10" id="menu-app"
                    data-collapse="#menu-app-collapse">
                    <span class="icon-[tabler--apps] size-5"></span>
                    Management Products
                    <span
                        class="icon-[tabler--chevron-down] collapse-open:rotate-180 size-4 transition-all duration-300"></span>
                </a>
                <ul id="menu-app-collapse"
                    class="collapse hidden w-auto overflow-hidden transition-[height] duration-300"
                    aria-labelledby="menu-app">
                    <li>
                        <a href="/dashboard/product">
                            <span class="icon-[tabler--brand-shopee] size-5"></span>
                            Product
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon-[tabler--category] size-5"></span>
                            Category
                        </a>
                    </li>
                </ul>
            <li>
                <a href="#">
                    <span class="icon-[tabler--chart-bar] size-5"></span>
                    Reports
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon-[tabler--logout] size-5"></span>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</aside>
