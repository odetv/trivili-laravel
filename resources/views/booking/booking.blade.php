<x-app-layout>
    <div class="py-6 bg-slate-100">
        <div class="max-w-7xl mx-auto hp:px-3 lg:px-8">
            <div class="">
                <div class="">
                    <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="flex items-baseline justify-between border-b border-gray-200 pt-2 pb-6 hp:flex-col">
                            <h1 class="text-4xl font-bold tracking-tight text-gray-900 hp:text-2xl pb-3">Paket Destinasi Trivili</h1>
                            <div class="flex items-center">
                                <div date-rangepicker class="flex justify-center items-center">
                                    <div class="relative">
                                        <div
                                            class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fillrule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" cliprule="evenodd"></path>
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
                                    class="inline-block mx-4 px-6 py-3 border border-slate-300 text-primary font-medium text-xs leading-tight uppercase rounded-md hover:bg-red-400 hover:text-white focus:outline-none focus:ring-0 transition duration 150 ease-in-out">Check</button>
                            </div>
                        </div>
                        <section>
                            <div class="bg-white rounded-lg p-4 shadow-lg md:flex font-sans pt-8 mt-6 mb-6">
                                <div class="md:shrink-0">
                                    <img src="https://telegra.ph/file/a8b62bfde85ccb9ca41ef.jpg" alt=""
                                        class="h-48 w-full md:h-full md:w-56 inset-0 wfull object-cover rounded-lg hover:scale-105 transition duration 150 ease-in-out"
                                        loading="lazy" />
                                </div>
                                <form class="p-6">
                                    <div class="flex flex-wrap">
                                        <h1 class="flex-auto font-medium text-slate-900">
                                            Kecak Fire Gianyar
                                        </h1>
                                        <div class="w-full flex-none mt-2 order-1 text-3xl fontbold text-violet-600">
                                            Rp. 160.000
                                        </div>
                                        <div class="text-sm font-medium text-slate-400">
                                            Tersedia
                                        </div>
                                    </div>
                                    <div class="flex items-baseline mt-4 mb-6 pb-6 border-b borderslate-200">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quam vitae necessitatibus cumque ut voluptates quas. Sint incidunt rerum asperiores, itaque eum voluptatem est sequi libero dignissimos quia a facere? Sunt, expedita!
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
                                            type="button" aria-label="Like">
                                            <svg width="20" height="20" fill="currentColor" ariahidden="true">
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
                                        <h1 class="flex-auto font-medium text-slate-900">
                                            Trance Dance (Pura Dalem Taman Kaja)
                                        </h1>
                                        <div class="w-full flex-none mt-2 order-1 text-3xl fontbold text-violet-600">
                                            Rp. 120.000
                                        </div>
                                        <div class="text-sm font-medium text-slate-400">
                                            Tersedia
                                        </div>
                                    </div>
                                    <div class="flex items-baseline mt-4 mb-6 pb-6 border-b borderslate-200">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore quibusdam dolorum quia expedita maxime soluta quasi.
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
                                            type="button" aria-label="Like">
                                            <svg width="20" height="20" fill="currentColor" ariahidden="true">
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
                        </section>
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
