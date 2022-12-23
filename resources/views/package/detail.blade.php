<x-app-layout>
    <section class="text-gray-700 body-font overflow-hidden bg-slate-100">
        <div class="max-w-7xl justify-center container px-5 py-24 mx-auto">
            <div class="max-w-7xl justify-center lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/3 w-full object-cover object-center rounded-lg border border-gray-200"
                    src="{{ asset('storage/' . $package['feature_img']) }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h1 class="text-gray-900 text-3xl title-font font-bold mb-1">{{ $package['package_name'] }}</h1>
                    <div class="text-sm font-medium text-slate-400">Tersedia</div>
                    <h2 class="text-sm text-slate-400">Comunity : {{ $package->comunity['comunity_name'] }}</h2>
                    <h2 class="text-sm text-slate-400">Location : {{ $package['location_name'] }}</h2>
                    <div class="flex mb-4">
                        <span class="flex items-center">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <span class="text-gray-600 ml-3">4 Reviews</span>
                        </span>
                        <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
                            <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                    </path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                    </path>
                                </svg>
                            </a>
                        </span>
                    </div>
                    <p class="leading-relaxed">{!! $package['package_desc'] !!}</p>
                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                        {{-- <div class="flex">
                            <span class="mr-3">Color</span>
                            <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>
                            <button
                                class="border-2 border-gray-300 ml-1 bg-gray-700 rounded-full w-6 h-6 focus:outline-none"></button>
                            <button
                                class="border-2 border-gray-300 ml-1 bg-red-500 rounded-full w-6 h-6 focus:outline-none"></button>
                        </div> --}}
                        <div class="flex items-center">
                            <span class="mr-3">Kategori</span>
                            <div class="relative">
                                <select
                                    class="rounded-lg border appearance-none border-slate-300 py-2 focus:outline-none focus:border-primary text-base pl-3 pr-10">
                                    <option>Pilih</option>
                                    <option>Adult</option>
                                    <option>Child</option>
                                </select>
                                <span
                                    class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <span class="title-font font-medium text-2xl text-gray-900">{{ $package->formatRupiah('package_price') }}</span>
                    </div>
                    <div class="flex mt-5 text-sm font-medium">
                        <div class="flex-auto flex space-x-2 mr-4">
                            <a href="/package">
                                <div
                                    class="flex items-center h-10 px-4 lg:px-6 md:px-6 font-semibold rounded-lg border border-slate-300 text-slate-900 hover:bg-red-500 hover:text-white focus:outline-none focus:ring-0 transition duration 150 ease-in-out">
                                    Kembali
                                </div>
                            </a>
                            <a href="{{ route('add_to_cart', $package['package_id']) }}">
                                <button
                                    class="h-10 px-4 lg:px-6 md:px-6 font-semibold rounded-lg bg-primary text-white hover:bg-primary hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out"
                                    type="submit">Add to cart</a>
                            </button>
                            </a>
                            <button
                                class="flex items-center justify-center w-9 h-9 bg-slate-200 rounded-full text-primary hover:bg-white hover:text-red-700 hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out"
                                type="button" aria-label="Like">
                                <svg width="20" height="20" fill="currentColor" ariahidden="true">
                                    <path fill-rule="evenodd" cliprule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <main class="py-6 bg-slate-100">
        <div class="max-w-7xl mx-auto hp:px-3 lg:px-8">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between border-gray-200 pt-2 pb-6 hp:flex-col">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 hp:text-2xl pb-6">
                        Detail Paket {{ $package['package_name'] }}
                    </h1>
                </div>
                <!-- List Details Package -->
                <div class="lg:flex justify-center max-w-screen-lg mx-auto">
                    <div class="bg-white rounded-lg p-4 shadow-lg md:flex font-sans pt-8 mt-6 mb-6">
                        <div class="md:shrink-0">
                            <img src="{{ asset('storage/' . $package['feature_img']) }}" alt=""
                                class="h-48 w-full md:h-full md:w-56 inset-0 wfull object-cover rounded-lg hover:scale-105 transition duration 150 ease-in-out"
                                loading="lazy" />
                        </div>
                        <form class="p-6 w-full">
                            <div class="flex flex-wrap">
                                <h1 class="item1 flex-auto font-medium text-slate-900">
                                    {{ $package['package_name'] }}
                                </h1>
                                <div class="price1 w-full flex-none mt-2 order-1 text-3xl fontbold text-violet-600">
                                    Rp. {{ $package['package_price'] }}
                                </div>
                                <div class="text-sm font-medium text-slate-400">
                                    Tersedia
                                </div>
                            </div>
                            <div class="flex items-baseline mt-4 mb-6 pb-6 border-b border-slate-200">
                                {{ $package['package_desc'] }}
                            </div>
                            <div class="flex flex-col lg:flex-row md:flex-row mb-5 text-sm font-medium">
                                <div class="flex-auto flex space-x-2 mr-4">
                                    <a href="/package">
                                        <div
                                            class="flex items-center justify-center h-10 px-4 lg:px-6 md:px-6 font-semibold rounded-lg bg-violet-600 text-white hover:bg-primary hover:text-white focus:outline-none focus:ring-0 transition duration 150 ease-in-out">
                                            Kembali
                                        </div>
                                    </a>
                                    <button
                                        class="h-10 px-4 lg:px-6 md:px-6 font-semibold rounded-lg border border-slate-200 text-slate-900 hover:bg-green-500 hover:text-white focus:outline-none focus:ring-0 transition duration 150 ease-in-out"
                                        type="submit"><a href="#">Booking</a>
                                    </button>
                                    <button data-bs-toggle="modal" data-bstarget="#exampleModalLg"
                                        class="h-10 px-4 lg:px-6 md:px-6 font-semibold rounded-lg border border-slate-200 text-slate-900 hover:bg-red-400 hover:text-white focus:outline-none focus:ring-0 transition duration 150 ease-in-out"
                                        type="button"><a href="#">Cek Tiket</a>
                                    </button>
                                </div>
                                <div class="flex flex-row space-x-4 mt-4 lg:mt-0 md:mt-0">
                                    <a href="{{ route('add_to_cart', $package['package_id']) }}">
                                        <button
                                            class="flex-none flex items-center justify-center w-9 h-9 rounded-full text-violet-600 bg-violet-50 hover:text-red-500 transition duration 150 ease-in-out"
                                            type="button" aria-label="Cart" id="checkout">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                            </svg>
                                        </button>
                                    </a>
                                    <button
                                        class="flex-none flex items-center justify-center w-9 h-9 rounded-full text-violet-600 bg-violet-50 hover:text-red-500 transition duration 150 ease-in-out"
                                        type="button" aria-label="Like">
                                        <svg width="20" height="20" fill="currentColor" ariahidden="true">
                                            <path fill-rule="evenodd" cliprule="evenodd"
                                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <p class="text-sm text-slate-500">
                                Location : {{ $package['location_name'] }}
                            </p>
                            <p class="text-sm text-slate-500">
                                Comunity : {{ $package->comunity['comunity_name'] }}
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main> --}}
</x-app-layout>
