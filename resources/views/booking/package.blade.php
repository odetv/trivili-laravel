<x-app-layout>
    <main class="py-6 bg-slate-100">
        <div class="max-w-7xl mx-auto hp:px-3 lg:px-8">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <!-- Komponen Checker -->
                <div class="flex items-center justify-between border-gray-200 pt-2 pb-6 hp:flex-col">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 hp:text-2xl pb-6">Paket Destinasi Trivili
                    </h1>
                    <div class="flex flex-col justify-center items-center">
                        <div date-rangepicker class="lg:flex flex flex-row justify-center items-center">
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fillrule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            cliprule="evenodd"></path>
                                    </svg>
                                </div>
                                <input name="start" type="text"
                                    class="px-6 py-2.5 bg-gray-50 border border-slate-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2 hp:text-sm transition duration 150 ease-in-out"
                                    placeholder="Check-in">
                            </div>
                            <span class="mx-4 text-gray-500">-</span>
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fillrule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            cliprule="evenodd"></path>
                                    </svg>
                                </div>
                                <input name="end" type="text"
                                    class="px-6 py-2.5 bg-gray-50 border border-slate-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2 hp:text-sm transition duration 150 ease-in-out"
                                    placeholder="Check-out">
                            </div>
                            <button type="button"
                                class="ml-3 px-6 py-1 lg:py-3 md:py-3 border border-slate-300 text-primary font-medium text-xs leading-tight uppercase rounded-md hover:bg-red-400 hover:text-white focus:outline-none focus:ring-0 transition duration 150 ease-in-out">
                                <a href="#paket-wisata">Cek Tiket</a>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- List Package -->
                <div class="lg:flex justify-center max-w-screen-lg mx-auto">
                    <section class="">
                        @foreach ($packages as $key => $item)
                            @if (empty($item->package_id))
                                {{ 'Paket sedang kosong' }}
                            @else
                                <div class="bg-white rounded-lg p-4 shadow-lg md:flex font-sans pt-8 mt-6 mb-6">
                                    <div class="md:shrink-0">
                                        <img src="{{ asset('storage/' . $item->feature_img) }}" alt=""
                                            class="h-48 w-full md:h-full md:w-56 inset-0 wfull object-cover rounded-lg hover:scale-105 transition duration 150 ease-in-out"
                                            loading="lazy" />
                                    </div>
                                    <form class="p-6 w-full">
                                        <div class="flex flex-wrap">
                                            <h1 class="item1 flex-auto font-medium text-slate-900">
                                                {{ $item->package_name }}
                                            </h1>
                                            <div
                                                class="price1 w-full flex-none mt-2 order-1 text-3xl fontbold text-violet-600">
                                                Rp.{{ $item->package_price }}
                                            </div>
                                            <div class="text-sm font-medium text-slate-400">
                                                Tersedia
                                            </div>
                                        </div>
                                        <div class="flex items-baseline mt-4 mb-6 pb-6 border-b border-slate-200">
                                            {{ $item->package_desc }}
                                        </div>
                                        <div class="flex flex-col lg:flex-row md:flex-row mb-5 text-sm font-medium">
                                            <div class="flex-auto flex space-x-2 mr-4">
                                                <button id="open{{ $item->package_id }}"
                                                    onclick="toggleModal('modal-id')"
                                                    class="h-10 px-4 lg:px-6 md:px-6 font-semibold rounded-lg bg-violet-600 text-white hover:bg-primary hover:text-white focus:outline-none focus:ring-0 transition duration 150 ease-in-out"
                                                    type="button">Detail
                                                </button>
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
                                                <a href="{{ route('add_to_cart', $item->package_id) }}">
                                                    <button
                                                        class="flex-none flex items-center justify-center w-9 h-9 rounded-full text-violet-600 bg-violet-50 hover:text-red-500 transition duration 150 ease-in-out"
                                                        type="button" aria-label="Cart" id="checkout">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" fill="currentColor" class="bi bi-cart3"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                        </svg>
                                                    </button>
                                                </a>
                                                <button
                                                    class="flex-none flex items-center justify-center w-9 h-9 rounded-full text-violet-600 bg-violet-50 hover:text-red-500 transition duration 150 ease-in-out"
                                                    type="button" aria-label="Like">
                                                    <svg width="20" height="20" fill="currentColor"
                                                        ariahidden="true">
                                                        <path fill-rule="evenodd" cliprule="evenodd"
                                                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <p class="text-sm text-slate-500">
                                            Location : {{ $item->location_name }}
                                        </p>
                                        <p class="text-sm text-slate-500">
                                            Comunity : {{ $item->comunity->comunity_name }}
                                        </p>
                                    </form>
                                </div>
                                {{-- Modal Detail Package --}}
                                <div>
                                    <!-- Overlay element -->
                                    <div id="overlay"
                                        class="fixed hidden z-9999 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60">
                                    </div>
                                    <!-- The dialog -->
                                    <div id="dialog{{ $item->package_id }}"
                                        class="hidden fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 bg-white rounded-md px-8 py-6 space-y-5 drop-shadow-lg">
                                        <h1 class="text-2xl font-semibold">Detail Produk</h1>
                                        <div class="py-5 border-t border-b border-gray-300">
                                            <p>{{ $item->package_desc }}</p>
                                        </div>
                                        <div class="flex flex-wrap">
                                            <h1 class="item1 flex-auto font-medium text-slate-900">
                                                {{ $item->package_name }}
                                            </h1>
                                            <div
                                                class="price1 w-full flex-none mt-2 order-1 text-3xl fontbold text-violet-600">
                                                Rp.{{ $item->package_price }}
                                            </div>
                                            <div class="text-sm font-medium text-slate-400">
                                                Tersedia
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <!-- This button is used to close the dialog -->
                                            <button id="close{{ $item->package_id }}"
                                                class="px-5 py-2 bg-indigo-500 hover:bg-indigo-700 text-white cursor-pointer rounded-md">
                                                Close</button>
                                        </div>
                                    </div>
                                    <!-- Javascript code -->
                                    <script>
                                        var openButton = document.getElementById('open' + {{ $item->package_id }});
                                        var dialog = document.getElementById('dialog' + {{ $item->package_id }});
                                        var closeButton = document.getElementById('close' + {{ $item->package_id }});
                                        var overlay = document.getElementById('overlay');

                                        // show the overlay and the dialog
                                        openButton.addEventListener('click', function() {
                                            dialog.classList.remove('hidden');
                                            overlay.classList.remove('hidden');
                                        });

                                        // hide the overlay and the dialog
                                        closeButton.addEventListener('click', function() {
                                            dialog.classList.add('hidden');
                                            overlay.classList.add('hidden');
                                        });
                                    </script>
                                </div>
                            @endif
                        @endforeach
                    </section>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
