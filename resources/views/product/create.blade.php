@extends('dashboard.main')
@section('content')
    <div class="bg-base-100 w-full rounded-lg shadow">
        <h5 class="bg-base-300 rounded-t-lg p-4 text-base text-xl font-bold">Form Add Product</h5>
        <div class="w-full p-4">
            <form action="/product" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="w-full">
                    <h6 class="text-lg font-semibold">Product Details</h6>
                    <hr class="mb-4 mt-2" />
                </div>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label class="label label-text" for="name">Product Name</label>
                        <input id="name" type="text" name="name" placeholder="Input Product Name" class="input"
                            @err />
                        @error('name')
                            <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="label label-text" for="slug">Slug</label>
                        <input id="slug" name="slug" type="text" placeholder="Slug Name" class="input" @err />
                        @error('slug')
                            <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div>
                    <label class="label label-text" for="description">Description</label>
                    <div id="editor" class="h-64"></div>
                    <input type="hidden" name="description" id="description" />
                    @error('description')
                        <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                    <div>
                        <label class="label label-text" for="price">Category:</label>
                        <select class="select max-w-sm appearance-none" aria-label="select" name="category_id">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="label label-text" for="price">Price:</label>
                        <div class="input-group max-w-sm" data-input-number>
                            <input class="input" id="price" name="price" type="text" value="0"
                                data-input-number-input />
                            <span class="input-group-text gap-3">
                                <button type="button" class="btn btn-primary btn-soft size-[22px] rounded min-h-0 p-0"
                                    aria-label="Decrement button" data-input-number-decrement>
                                    <span class="icon-[tabler--minus] size-3.5 flex-shrink-0"></span>
                                </button>
                                <button type="button" class="btn btn-primary btn-soft size-[22px] rounded min-h-0 p-0"
                                    aria-label="Increment button" data-input-number-increment>
                                    <span class="icon-[tabler--plus] size-3.5 flex-shrink-0"></span>
                                </button>
                            </span>
                            @error('price')
                                <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label class="label label-text" for="stock">Stock:</label>
                        <div class="input-group max-w-sm" data-input-number>
                            <input class="input" id="stock" name="stock" type="text" value="0"
                                data-input-number-input />
                            <span class="input-group-text gap-3">
                                <button type="button" class="btn btn-primary btn-soft size-[22px] rounded min-h-0 p-0"
                                    aria-label="Decrement button" data-input-number-decrement>
                                    <span class="icon-[tabler--minus] size-3.5 flex-shrink-0"></span>
                                </button>
                                <button type="button" class="btn btn-primary btn-soft size-[22px] rounded min-h-0 p-0"
                                    aria-label="Increment button" data-input-number-increment>
                                    <span class="icon-[tabler--plus] size-3.5 flex-shrink-0"></span>
                                </button>
                            </span>
                            @error('stock')
                                <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <label class="label label-text" for="image">Image</label>
                    @error('image')
                        <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
                    @enderror
                    <div class="flex flex-col items-center justify-center dark:bg-base-900 p-4">
                        <div class="w-full max-w-md dark:bg-base-900 p-6 rounded-lg shadow-md">
                            <div class="border-2 border-dashed border-gray-400 rounded-lg p-6 text-center">
                                <input type="file" id="file-upload" name="image[]" accept=".jpg,.jpeg,.png"
                                    class="hidden" multiple>
                                <label for="file-upload" class="cursor-pointer">
                                    <p class="text-gray-600">Drop your files here or browse</p>
                                    <p class="text-sm text-gray-500">Pick files up to 2MB each.</p>
                                </label>
                            </div>
                            <div id="file-preview" class="mt-4 space-y-2"></div>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function() {
            const encodedName = encodeURIComponent(name.value);
            fetch('/dashboard/product/checkSlug?name=' + encodedName)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        const quill = new Quill('#editor', {
            theme: 'snow',
            placeholder: 'Write your description here...'
        });

        document.querySelector('form').onsubmit = function() {

            var description = quill.root.innerHTML;

            document.querySelector('#description').value = description;
        };
        document.getElementById('file-upload').addEventListener('change', function(event) {
            const files = event.target.files;
            const previewContainer = document.getElementById('file-preview');

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const fileReader = new FileReader();

                fileReader.onload = function(e) {
                    const previewElement = document.createElement('div');
                    previewElement.className = 'flex items-center justify-between p-2 bg-gray-50 rounded-lg';

                    if (file.type.startsWith('image/')) {
                        previewElement.innerHTML = `
          <div class="flex items-center space-x-2">
            <img src="${e.target.result}" alt="${file.name}" class="w-10 h-10 object-cover rounded">
            <span>${file.name}</span>
          </div>
          <button onclick="removeFile(this)" class="text-red-500 hover:text-red-700">Remove</button>
        `;
                    } else {
                        previewElement.innerHTML = `
          <div class="flex items-center space-x-2">
            <span>${file.name}</span>
          </div>
          <button onclick="removeFile(this)" class="text-red-500 hover:text-red-700">Remove</button>
        `;
                    }

                    previewContainer.appendChild(previewElement);
                };

                fileReader.readAsDataURL(file);
            }
        });

        function removeFile(button) {
            const previewElement = button.closest('div');
            previewElement.remove();
        }
    </script>
@endsection
