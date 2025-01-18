@extends('dashboard.main')
@section('content')
    <!-- Validation inputs -->
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Form Edit Data Category
    </h4>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <form action="/category/{{ $category->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                    Category Name
                </span>
                <input
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                    type="text" name="category_name" placeholder="Input Category Name"
                    value="{{ old('category_name', $category->category_name) }}" />
                @error('category_name')
                    <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                    </span>
                @enderror
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                    Image
                </span>
                <input
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                    type="file" name="image" placeholder="Input Image" onchange="previewImage()"
                    value="{{ $category->image }}" />
                @error('image')
                    <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                    </span>
                @enderror
            </label>
            <img id="image-preview" class="mt-4 w-32 h-32 object-cover"
                src="{{ $category->image ? asset('storage/' . $category->image) : '' }}">
            <div class="mt-6 flex gap-6">
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-teal-600 rounded-lg shadow hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 focus:ring-offset-teal-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Save
                </button>

                <a href="/dashboard/category"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-blue-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12H3m12 0l-4-4m4 4l-4 4"></path>
                    </svg>
                    Back
                </a>
            </div>

        </form>
    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('input[name="image"]').files[0];
            const preview = document.getElementById('image-preview');
            const reader = new FileReader();

            reader.onloadend = () => {
                preview.src = reader.result;
            };

            if (image) {
                reader.readAsDataURL(image);
            } else {
                preview.src = "";
            }
        }
    </script>
@endsection
