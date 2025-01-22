@extends('home.main')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <div class="flex flex-col items-center">
                <img id="mainImage" src="{{ asset('storage/' . json_decode($product->image)[0]) }}" alt="Produk"
                    class="w-72 h-72 object-cover rounded-lg shadow-lg">
                <div class="flex mt-4 space-x-2">
                    <img src="{{ asset('storage/' . json_decode($product->image)[1]) }}" alt="Varian"
                        class="thumbnail w-14 h-14 object-cover rounded-lg shadow-md cursor-pointer">
                    <img src="{{ asset('storage/' . json_decode($product->image)[2]) }}"alt="Varian"
                        class="thumbnail w-14 h-14 object-cover rounded-lg shadow-md cursor-pointer">
                    <img src="{{ asset('storage/' . json_decode($product->image)[3]) }}"alt="Varian"
                        class="thumbnail w-14 h-14 object-cover rounded-lg shadow-md cursor-pointer">
                </div>
            </div>


            <div>
                <h1 class="text-2xl font-bold text-gray-800">{{ $product->name }}</h1>
                <div class="mt-2">
                    <span class="text-xl text-red-500 font-bold">Rp.
                        {{ number_format($product->price, 0, ',', '.') }}</span>
                    <span class="text-gray-500 line-through ml-2">Rp.
                        {{ number_format(rand($product->price + 10000, $product->price + 100000), 0, ',', '.') }}</span>
                </div>
                <div class="mt-4">
                    <p class="text-sm text-gray-600">Terjual 4 rb+ • ⭐ 4.5 (1.827 rating)</p>
                </div>
                <div class="mt-6">
                    <h2 class="font-bold text-gray-700">Pilih warna:</h2>
                    <div class="flex mt-2 space-x-2">
                        <button class="px-4 py-2 text-sm font-semibold text-white bg-black rounded-full">Hitam</button>
                        <button class="px-4 py-2 text-sm font-semibold text-white bg-blue-500 rounded-full">Biru</button>
                        <button class="px-4 py-2 text-sm font-semibold text-white bg-gray-500 rounded-full">Putih</button>
                        <button class="px-4 py-2 text-sm font-semibold text-white bg-red-500 rounded-full">Merah</button>
                    </div>
                </div>
                <div class="mt-6">
                    <h2 class="font-bold text-gray-700">Detail:</h2>


                    <p class="text-m text-gray-600 mt-2 leading-relaxed" id="description">
                        {{ $product->excerpt }}
                    </p>
                    <p class="text-m text-gray-600 mt-2 leading-relaxed hidden" id="full-description">
                        {{ strip_tags($product->description) }}
                    </p>
                    <a href="javascript:void(0)" id="toggle-description" class="text-blue-500 text-sm mt-2">Lihat
                        Selengkapnya</a>
                </div>
                <div class="mt-6 flex space-x-4">
                    @auth
                        <form action="#" method="POST">
                            @csrf
                            <button type="submit"
                                class="px-6 py-3 bg-yellow-500 text-white font-bold rounded-lg hover:bg-yellow-600 transition">
                                Add to Cart
                            </button>
                        </form>
                        <form action="#" method="POST">
                            @csrf
                            <button type="submit"
                                class="px-6 py-3 bg-green-500 text-white font-bold rounded-lg hover:bg-green-600 transition">
                                Beli
                            </button>
                        </form>
                    @else
                        <a href="/login" onclick="return confirmAddToCart(event)"
                            class="px-6 py-3 bg-yellow-500 text-white font-bold rounded-lg hover:bg-yellow-600 transition">
                            Add to Cart
                        </a>
                        <a href="/login" onclick="return confirmBeli(event)"
                            class="px-6 py-3 bg-green-500 text-white font-bold rounded-lg hover:bg-green-600 transition">
                            Beli
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <script>
        const mainImage = document.getElementById('mainImage');


        const thumbnails = document.querySelectorAll('.thumbnail');


        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', () => {

                mainImage.src = thumbnail.src;
            });
        });

        function confirmAddToCart(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Anda belum login',
                text: 'Silahkan login terlebih dahulu untuk menambahkan produk ke keranjang',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Login',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/login';
                }
            })
        }

        function confirmBeli(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Anda belum login',
                text: 'Silahkan login terlebih dahulu untuk menambahkan produk ke keranjang',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Login',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/login';
                }
            })
        }

        const description = document.getElementById('description');
        const fullDescription = document.getElementById('full-description');
        const toggleDescription = document.getElementById('toggle-description');

        toggleDescription.addEventListener('click', () => {
            if (fullDescription.classList.contains('hidden')) {
                fullDescription.classList.remove('hidden');
                description.classList.add('hidden');
                toggleDescription.textContent = 'Lihat Lebih Sedikit';
            } else {
                fullDescription.classList.add('hidden');
                description.classList.remove('hidden');
                toggleDescription.textContent = 'Lihat Selengkapnya';
            }
        });
    </script>
@endsection
