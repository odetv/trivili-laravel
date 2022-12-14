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
                <form action="/search">
                    <div class="max-w-screen-lg mx-auto flex flex-row justify-end pt-2 text-gray-600">
                        <input required autofocus class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                            type="text" name="query" placeholder="Search">
                        <button type="submit" class="ml-3">
                            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px"
                                y="0px" viewBox="0 0 56.966 56.966"
                                style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px"
                                height="512px">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </div>
                </form>
                <div class="max-w-screen-lg mx-auto flex flex-row justify-start pt-2 text-gray-600">
                    <h1 class="text-xl font-semibold tracking-tight text-gray-900 hp:text-lg pt-6">Hasil Pencarian :
                    </h1>
                </div>
                <!-- List Package -->
                <div class="lg:flex justify-center max-w-screen-lg mx-auto">
                    <section class="">
                        @foreach ($packages as $key => $item)
                                <div class="bg-white rounded-lg p-4 shadow-lg md:flex font-sans pt-8 mt-6 mb-6">
                                    <div class="md:shrink-0">
                                        <img src="{{ asset('storage/' . $item['feature_img']) }}" alt=""
                                            class="h-48 w-full md:h-full md:w-56 inset-0 wfull object-cover rounded-lg hover:scale-105 transition duration 150 ease-in-out"
                                            loading="lazy" />
                                    </div>
                                    <form class="p-6 w-full">
                                        <div class="flex flex-wrap">
                                            <h1 class="item1 flex-auto font-medium text-slate-900">
                                                {{ $item['package_name'] }}
                                            </h1>
                                            <div
                                                class="price1 w-full flex-none mt-2 order-1 text-3xl fontbold text-violet-600">
                                                Rp. {{ $item['package_price'] }}
                                            </div>
                                            <div class="text-sm font-medium text-slate-400">
                                                Tersedia
                                            </div>
                                        </div>
                                        <div class="flex items-baseline mt-4 mb-6 pb-6 border-b border-slate-200">
                                            {{ $item['package_desc'] }}
                                        </div>
                                        <div class="flex flex-col lg:flex-row md:flex-row mb-5 text-sm font-medium">
                                            <div class="flex-auto flex space-x-2 mr-4">
                                                {{-- <button id="open{{ $item->package_id }}"
                                                    onclick="toggleModal('modal-id')"
                                                    class="h-10 px-4 lg:px-6 md:px-6 font-semibold rounded-lg bg-violet-600 text-white hover:bg-primary hover:text-white focus:outline-none focus:ring-0 transition duration 150 ease-in-out"
                                                    type="button">Detail
                                                </button> --}}
                                                <a href="detail/{{ $item['package_id'] }}">
                                                    <div
                                                        class="flex items-center justify-center h-10 px-4 lg:px-6 md:px-6 font-semibold rounded-lg bg-violet-600 text-white hover:bg-primary hover:text-white focus:outline-none focus:ring-0 transition duration 150 ease-in-out">
                                                        Detail
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
                                                <a href="{{ route('add_to_cart', $item['package_id']) }}">
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
                                            Location : {{ $item['location_name'] }}
                                        </p>
                                        <p class="text-sm text-slate-500">
                                            Comunity : {{ $item->comunity['comunity_name'] }}
                                        </p>
                                    </form>
                                </div>
                        @endforeach
                    </section>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
