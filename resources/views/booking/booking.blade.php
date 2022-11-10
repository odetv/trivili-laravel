<x-app-layout>
    <div class="py-6 bg-slate-100">
        <div class="max-w-7xl mx-auto hp:px-3 lg:px-8">
            <div class="">
                <div class="">
                    <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="flex items-baseline justify-between border-b border-gray-200 pt-2 pb-6 hp:flex-col">
                            <h1 class="text-4xl font-bold tracking-tight text-gray-900 hp:text-2xl pb-3">Paket Destinasi
                                Trivili</h1>
                            <div class="flex items-center">
                                <div date-rangepicker class="flex justify-center items-center">
                                    <div class="relative">
                                        <div
                                            class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fillrule="evenodd"
                                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                    cliprule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input name="start" type="text"
                                            class="px-6 py-2.5 bg-gray-50 border border-slate-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2 hp:text-sm transition duration 150 ease-in-out"
                                            placeholder="Select date start">
                                    </div>
                                    <span class="mx-4 text-gray-500">to</span>
                                    <div class="relative">
                                        <div
                                            class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fillrule="evenodd"
                                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                    cliprule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input name="end" type="text"
                                            class="px-6 py-2.5 bg-gray-50 border border-slate-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2 hp:text-sm transition duration 150 ease-in-out"
                                            placeholder="Select date end">
                                    </div>
                                </div>
                                <button type="button"
                                    class="inline-block mx-4 px-6 py-3 border border-slate-300 text-primary font-medium text-xs leading-tight uppercase rounded-md hover:bg-red-400 hover:text-white focus:outline-none focus:ring-0 transition duration 150 ease-in-out">Check
                                </button>
                                <button type="button"
                                    class="inline-block px-6 py-3 border border-slate-300 text-primary font-medium text-xs leading-tight uppercase rounded-md hover:bg-red-400 hover:text-white focus:outline-none focus:ring-0 transition duration 150 ease-in-out">Keranjang
                                </button>

                            </div>
                        </div>
                        <div class="flex">
                            <section class="">
                                <div class="bg-white rounded-lg p-4 shadow-lg md:flex font-sans pt-8 mt-6 mb-6">
                                    <div class="md:shrink-0">
                                        <img src="https://telegra.ph/file/a8b62bfde85ccb9ca41ef.jpg" alt=""
                                            class="h-48 w-full md:h-full md:w-56 inset-0 wfull object-cover rounded-lg hover:scale-105 transition duration 150 ease-in-out"
                                            loading="lazy" />
                                    </div>
                                    <form class="p-6">
                                        <div class="flex flex-wrap">
                                            <h1 class="item1 flex-auto font-medium text-slate-900">
                                                Kecak Fire Gianyar
                                            </h1>
                                            <div
                                                class="price1 w-full flex-none mt-2 order-1 text-3xl fontbold text-violet-600">
                                                160000
                                            </div>
                                            <div class="text-sm font-medium text-slate-400">
                                                Tersedia
                                            </div>
                                        </div>
                                        <div class="flex items-baseline mt-4 mb-6 pb-6 border-b borderslate-200">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quam vitae
                                            necessitatibus cumque ut voluptates quas. Sint incidunt rerum asperiores,
                                            itaque eum voluptatem est sequi libero dignissimos quia a facere? Sunt,
                                            expedita!
                                        </div>
                                        <div class="flex space-x-4 mb-5 text-sm font-medium">
                                            <div class="flex-auto flex space-x-4">
                                                <button
                                                    class="h-10 px-6 font-semibold rounded-full bg-violet-600 text-white hover:bg-primary hover:text-white focus:outline-none focus:ring-0 transition duration 150 ease-in-out"
                                                    type="submit">
                                                    Booking
                                                </button>
                                                <button data-bs-toggle="modal" data-bstarget="#exampleModalLg"
                                                    class="h-10 px-6 font-semibold rounded-full border border-slate200 text-slate-900 hover:bg-red-400 hover:text-white focus:outline-none focus:ring-0 transition duration 150 ease-in-out"
                                                    type="button">
                                                    Cek Tiket
                                                </button>
                                            </div>
                                            <button
                                                class="flex-none flex items-center justify-center w-9 h9 rounded-full text-violet-600 bg-violet-50 hover:text-red-500"
                                                type="button" aria-label="Cart" id="cart">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                </svg>
                                            </button>
                                            <button
                                                class="flex-none flex items-center justify-center w-9 h9 rounded-full text-violet-600 bg-violet-50 hover:text-red-500"
                                                type="button" aria-label="Like">
                                                <svg width="20" height="20" fill="currentColor"
                                                    ariahidden="true">
                                                    <path fill-rule="evenodd" cliprule="evenodd"
                                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <p class="text-sm text-slate-500">
                                            Gratis makanan ringan dan masker.
                                        </p>
                                    </form>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-lg md:flex font-sans pt-8">
                                    <div class="md:shrink-0">
                                        <img src="https://telegra.ph/file/aab713b6674ba3885fe94.jpg" alt=""
                                            class="h-48 w-full md:h-full md:w-56 inset-0 wfull object-cover rounded-lg hover:scale-105 transition duration 150 ease-in-out"
                                            loading="lazy" />
                                    </div>
                                    <form class="p-6">
                                        <div class="flex flex-wrap">
                                            <h1 class="item2 flex-auto font-medium text-slate-900">
                                                Trance Dance (Pura Dalem Taman Kaja)
                                            </h1>
                                            <div
                                                class="w-full flex-none mt-2 order-1 text-3xl fontbold text-violet-600">
                                                120000
                                            </div>
                                            <div class="text-sm font-medium text-slate-400">
                                                Tersedia
                                            </div>
                                        </div>
                                        <div class="flex items-baseline mt-4 mb-6 pb-6 border-b borderslate-200">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore
                                            quibusdam dolorum quia expedita maxime soluta quasi.
                                        </div>
                                        <div class="flex space-x-4 mb-5 text-sm font-medium">
                                            <div class="flex-auto flex space-x-4">
                                                <button
                                                    class="h-10 px-6 font-semibold rounded-full bg-violet-600 text-white hover:bg-primary hover:text-white focus:outline-none focus:ring-0 transition duration 150 ease-in-out"
                                                    type="submit">
                                                    Booking
                                                </button>
                                                <button data-bs-toggle="modal" data-bstarget="#exampleModalLg"
                                                    class="h-10 px-6 font-semibold rounded-full border border-slate200 text-slate-900 hover:bg-red-400 hover:text-white focus:outline-none focus:ring-0 transition duration 150 ease-in-out"
                                                    type="button">
                                                    Cek Tiket
                                                </button>
                                            </div>
                                            <button
                                                class="flex-none flex items-center justify-center w-9 h9 rounded-full text-violet-600 bg-violet-50 hover:text-red-500"
                                                type="button" aria-label="Cart" id="cart">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                </svg>
                                            </button>
                                            <button
                                                class="flex-none flex items-center justify-center w-9 h9 rounded-full text-violet-600 bg-violet-50 hover:text-red-500"
                                                type="button" aria-label="Like">
                                                <svg width="20" height="20" fill="currentColor"
                                                    ariahidden="true">
                                                    <path fill-rule="evenodd" cliprule="evenodd"
                                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <p class="text-sm text-slate-500">
                                            Gratis masker.
                                        </p>
                                    </form>
                                </div>
                            </section>
                            <section class="flex flex-row w-1/2 justify-content-center mt-6">
                                <div class="pointer-events-auto w-screen max-w-md">
                                    <div class="flex h-full flex-col ml-6 bg-white rounded-lg shadow-lg">
                                        <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
                                            <div class="flex items-start justify-between">
                                                <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">
                                                    Keranjang Pesanan</h2>
                                            </div>

                                            <div class="mt-8">
                                                <div class="flow-root">
                                                    <ul role="list" class="-my-6 divide-y divide-gray-200">
                                                        <li class="flex py-6">
                                                            {{-- <div
                                                                class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                                <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                                                                    alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                                                                    class="h-full w-full object-cover object-center">
                                                            </div> --}}

                                                            <div class="ml-4 flex flex-1 flex-col">
                                                                <div>
                                                                    <ul
                                                                        class="flex text-base font-medium text-gray-900">
                                                                        <li id="addList" class="pr-6">
                                                                            <a href="#"></a>
                                                                        </li>
                                                                        <li class="price1"></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <!-- More products... -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-6 text-right">
                                            <button type="button"
                                                class="hapus font-medium text-indigo-600 hover:text-indigo-500">Hapus Pesanan</button>
                                        </div>
                                        <div class="border-t">
                                            <div
                                                class="w-96 h-13 flex items-center justify-center pl-3 bg-white border rounded-lg mt-4 mb-2 mx-auto">
                                                <input type="coupon" name="code" id="coupon"
                                                    placeholder="Kode Promo"
                                                    class="w-full bg-white outline-none appearance-none focus:outline-none active:outline-none" />
                                                <button type="submit"
                                                    class="text-sm flex items-center px-3 py-1 text-white bg-gray-800 rounded-lg outline-none md:px-4 hover:bg-gray-700 focus:outline-none active:outline-none">
                                                    <svg aria-hidden="true" data-prefix="fas" data-icon="gift"
                                                        class="w-8" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="currentColor"
                                                            d="M32 448c0 17.7 14.3 32 32 32h160V320H32v128zm256 32h160c17.7 0 32-14.3 32-32V320H288v160zm192-320h-42.1c6.2-12.1 10.1-25.5 10.1-40 0-48.5-39.5-88-88-88-41.6 0-68.5 21.3-103 68.3-34.5-47-61.4-68.3-103-68.3-48.5 0-88 39.5-88 88 0 14.5 3.8 27.9 10.1 40H32c-17.7 0-32 14.3-32 32v80c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16v-80c0-17.7-14.3-32-32-32zm-326.1 0c-22.1 0-40-17.9-40-40s17.9-40 40-40c19.9 0 34.6 3.3 86.1 80h-86.1zm206.1 0h-86.1c51.4-76.5 65.7-80 86.1-80 22.1 0 40 17.9 40 40s-17.9 40-40 40z" />
                                                    </svg>
                                                    <span class="font-medium">Gunakan Promo</span>
                                                </button>
                                            </div>
                                        </div>


                                        <div class="border-gray-200 py-6 px-4 sm:px-6">
                                            <div class="flex justify-between text-base font-medium text-gray-900">
                                                <p>TOTAL (Rp.)</p>
                                                <p class="total">0</p>
                                            </div>
                                            <p class="mt-0.5 text-sm text-gray-500">Harga sudah termasuk PPN.</p>
                                            <div class="mt-6">
                                                <a href="#"
                                                    class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">CHECKOUT</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class=" font-sans pt-8 text-center">
                            <a href="/dashboard"
                                class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-700 hover:text-white">
                                Kembali
                            </a>
                            <!-- Next Button -->
                            <a href="#"
                                class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-700 hover:text-white">
                                Selanjutnya
                            </a>
                        </div>
                    </main>
                </div>
            </div>
        </div>
        {{-- modal form untuk cek availibility --}}
        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-xhidden overflow-y-auto"
            id="exampleModalLg" tabindex="-1" arialabelledby="exampleModalLgLabel" aria-modal="true"
            role="dialog">
            <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
                <div
                    class="modal-content border-none shadow-lg relative flex flex-col wfull pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    @include('booking.calendar')
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
