@extends('dashboard.main')

@section('content')
    <div id="image" data-carousel='{ "loadingClasses": "opacity-0" }' class="relative w-1/2 mx-auto">
        <div class="carousel">
            <div class="carousel-body h-64 opacity-0">
                <!-- Slide 1 -->
                <div class="carousel-slide">
                    <div class="flex h-full justify-center">
                        <img src="https://cdn.flyonui.com/fy-assets/components/carousel/image-22.png"
                            class="h-full object-cover" alt="game" />
                    </div>
                </div>
            </div>
            <!-- Previous Slide -->
            <button type="button" class="carousel-prev">
                <span class="size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow">
                    <span class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180"></span>
                </span>
                <span class="sr-only">Previous</span>
            </button>
            <!-- Next Slide -->
            <button type="button" class="carousel-next">
                <span class="sr-only">Next</span>
                <span class="size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow">
                    <span class="icon-[tabler--chevron-right] size-5 cursor-pointer rtl:rotate-180"></span>
                </span>
            </button>
        </div>
    @endsection
