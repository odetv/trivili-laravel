<x-app-layout>
    <main class="py-6 bg-slate-100">
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
    </main>
</x-app-layout>
