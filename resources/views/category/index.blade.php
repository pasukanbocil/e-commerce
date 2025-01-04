@extends('dashboard.main')
@section('content')
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
                <h2 class="text-2xl leading-tight">
                    Categories
                </h2>
                <div class="text-end">
                    <form class="flex w-full max-w-sm space-x-3">
                        <div class="relative">
                            <input type="text" id="form-subscribe-Filter"
                                class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                placeholder="name" />
                        </div>
                        <button
                            class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200"
                            type="submit">
                            Filter
                        </button>
                    </form>
                </div>
            </div>
            <div class="py-8">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 bg-white text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="whitespace-nowrap px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name</th>
                                <th
                                    class="whitespace-nowrap px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Description</th>
                                <th
                                    class="whitespace-nowrap px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">

                        </tbody>
                    </table>
                    <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                        <span class="text-xs xs:text-sm text-gray-900">
                            Showing 1 to  Entries
                        </span>
                        <div class="inline-flex mt-2 xs:mt-0">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
