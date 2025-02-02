@extends('dashboard.main')
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <h2 class="card-title">Product</h2>
        <a href="/dashboard/product/create" class="btn btn-primary">
            <span class="icon-[tabler--plus] size-5"></span> Add Product
        </a>
    </div>
    <div class="bg-base-100 flex flex-col rounded-md shadow"
        data-datatable='{
"pageLength": 5,
"pagingOptions": {
  "pageBtnClasses": "btn btn-text btn-circle btn-sm"
},
"selecting": true,
"rowSelectingOptions": {
  "selectAllSelector": "#table-search-all"
},
"language": {
    "zeroRecords": "<div class=\"py-10 px-5 flex flex-col justify-center items-center text-center\"><span class=\"icon-[tabler--search] shrink-0 size-6 text-base-content\"></span><div class=\"max-w-sm mx-auto\"><p class=\"mt-2 text-sm text-base-content/80\">No search results</p></div></div>"
  }
}'>
        <div class="py-3 ps-5 border-b border-base-content/25">
            <div class="input-group max-w-[15rem]">
                <span class="input-group-text">
                    <span class="icon-[tabler--search] shrink-0 size-4 text-base-content"></span>
                </span>
                <label class="sr-only" for="table-input-search"></label>
                <input type="search" class="input input-sm grow" id="table-input-search" placeholder="Search for items"
                    data-datatable-search="" />
            </div>
        </div>
        <div class="horizontal-scrollbar overflow-x-auto">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden">
                    <table class="table min-w-full" id="#table-product">
                        <thead>
                            <tr>
                                <th scope="col" class="--exclude-from-ordering w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-all" type="checkbox" class="checkbox checkbox-sm" />
                                        <label for="table-search-all" class="sr-only">Checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="group w-fit">
                                    <div class="flex items-center justify-between">
                                        Product Name
                                        <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                        <span
                                            class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                    </div>
                                </th>
                                <th scope="col" class="group w-fit">
                                    <div class="flex items-center justify-between">
                                        Price
                                        <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                        <span
                                            class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                    </div>
                                </th>
                                <th scope="col" class="group w-fit">
                                    <div class="flex items-center justify-between">
                                        Availability
                                        <span class="icon-[tabler--chevron-up] datatable-ordering-asc:block hidden"></span>
                                        <span
                                            class="icon-[tabler--chevron-down] datatable-ordering-desc:block hidden"></span>
                                    </div>
                                </th>
                                <th scope="col" class="--exclude-from-ordering">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-1" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-1" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">Apple iPhone 15</td>
                                <td>$999</td>
                                <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-2" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-2" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">Samsung Galaxy S23</td>
                                <td>$899</td>
                                <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-3" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-3" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">Sony WH-1000XM5</td>
                                <td>$399</td>
                                <td><span class="badge badge-soft badge-error badge-sm">Out of Stock</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-4" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-4" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">Dell XPS 15</td>
                                <td>$1,299</td>
                                <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-5" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-5" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">Logitech MX Master 3</td>
                                <td>$99</td>
                                <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-6" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-6" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">Microsoft Surface Laptop 5</td>
                                <td>$1,499</td>
                                <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-7" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-7" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">HP Spectre x360</td>
                                <td>$1,199</td>
                                <td><span class="badge badge-soft badge-error badge-sm">Out of Stock</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-8" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-8" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">Apple Watch Series 9</td>
                                <td>$499</td>
                                <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-9" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-9" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">Google Pixel 7</td>
                                <td>$599</td>
                                <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-10" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-10" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">Bose QuietComfort Earbuds II</td>
                                <td>$279</td>
                                <td><span class="badge badge-soft badge-error badge-sm">Out of Stock</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-11" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-11" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">Asus ROG Zephyrus G14</td>
                                <td>$1,899</td>
                                <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-12" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-12" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">Sony PlayStation 5</td>
                                <td>$499</td>
                                <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-13" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-13" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">Amazon Echo Dot (5th Gen)</td>
                                <td>$49</td>
                                <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-14" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-14" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">NVIDIA GeForce RTX 4090</td>
                                <td>$1,599</td>
                                <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-15" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-15" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">Lenovo ThinkPad X1 Carbon</td>
                                <td>$1,799</td>
                                <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-16" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-16" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">Google Nest Hub (2nd Gen)</td>
                                <td>$99</td>
                                <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-17" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-17" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">Fitbit Charge 6</td>
                                <td>$149</td>
                                <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-18" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-18" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">Razer Blade 16</td>
                                <td>$2,499</td>
                                <td><span class="badge badge-soft badge-error badge-sm">Out of Stock</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-19" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-19" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">Oculus Quest 3</td>
                                <td>$499</td>
                                <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-20" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-20" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">Canon EOS R8</td>
                                <td>$1,699</td>
                                <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-21" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-21" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">DJI Mavic 3 Pro</td>
                                <td>$2,199</td>
                                <td><span class="badge badge-soft badge-success badge-sm">In Stock</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-22" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-22" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">Alienware Aurora R15</td>
                                <td>$2,899</td>
                                <td><span class="badge badge-soft badge-error badge-sm">Out of Stock</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-3.5 pe-0">
                                    <div class="flex h-5 items-center">
                                        <input id="table-search-23" type="checkbox" class="checkbox checkbox-sm"
                                            data-datatable-row-selecting-individual="" />
                                        <label for="table-search-23" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td class="text-nowrap">SteelSeries Arctis Nova Pro</td>
                                <td>$349</td>
                                <td><span class="badge badge-soft badge-warning badge-sm">Limited</span></td>
                                <td>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                    <button class="btn btn-circle btn-text btn-sm" aria-label="Action button">
                                        <span class="icon-[tabler--dots-vertical] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div
            class="border-base-content/25 flex items-center justify-between gap-3 border-t p-3 max-md:flex-wrap max-md:justify-center">
            <div class="text-base-content/80 text-sm" data-datatable-info="">
                Showing
                <span data-datatable-info-from="1"></span>
                to
                <span data-datatable-info-to="30"></span>
                of
                <span data-datatable-info-length="50"></span>
                products
            </div>
            <div class="flex hidden items-center space-x-1" data-datatable-paging="">
                <button type="button" class="btn btn-text btn-circle btn-sm" data-datatable-paging-prev="">
                    <span aria-hidden="true">«</span>
                    <span class="sr-only">Previous</span>
                </button>
                <div class="[&>.active]:text-bg-soft-primary flex items-center space-x-1" data-datatable-paging-pages="">
                </div>
                <button type="button" class="btn btn-text btn-circle btn-sm" data-datatable-paging-next="">
                    <span class="sr-only">Next</span>
                    <span aria-hidden="true">»</span>
                </button>
            </div>
        </div>
    </div>
@endsection
