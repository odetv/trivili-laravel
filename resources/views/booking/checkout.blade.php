<x-app-layout>
    <main class="py-6 bg-slate-100">
        <div class="max-w-7xl mx-auto hp:px-3 lg:px-8">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between border-gray-200 pt-2 pb-6 hp:flex-col">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 hp:text-2xl pb-6">Keranjang Pesanan Paket Trivili</h1>
                </div>
                <div class="justify-center items-center" id="paket-wisata">
                    <div class="leading-loose mt-2">
                        <form class="w-full p-14 pb-16 bg-white rounded-lg shadow-xl items-center" method="POST">
                            <p class="text-dark text-xl font-bold mb-2 uppercase">Input Data Pemesanan</p>
                            <div class="">
                                <label class="block text-base text-dark" for="cus_email">Nama</label>
                                <input
                                    class="form-control w-full px-2 py-2 text-gray-500 bg-gray-100 rounded-lg block border border-slate-300 focus:border-indigo-500"
                                    id="nama" placeholder="Nama Lengkap" aria-label="Email" name="nama"
                                    value="">
                            </div>
                            <div class="mt-2">
                                <label class="block text-base text-gray-600" for="cus_email">Email</label>
                                <input class="form-control w-full px-2 py-2 text-gray-500 bg-gray-100 rounded-lg block border border-slate-300 focus:border-indigo-500"
                                    id="email" placeholder="Email" aria-label="Email" name="email">
                            </div>
                            <div class="mt-2">
                                <label class="block text-base text-gray-600" for="cus_email">Alamat</label>
                                <input class="form-control w-full px-2 py-2 text-gray-500 bg-gray-100 rounded-lg block border border-slate-300 focus:border-indigo-500"
                                    id="alamat" placeholder="Alamat Lengkap" aria-label="Email" name="alamat">
                            </div>
                            <div class="mt-2">
                                <label class="hidden text-base text-gray-600" for="cus_email">Provinsi</label>
                                <input class="form-control w-full px-2 py-2 text-gray-500 bg-gray-100 rounded-lg block border border-slate-300 focus:border-indigo-500"
                                    placeholder="Kota Domisili" aria-label="Email" id="provinsi" name="provinsi">
                            </div>
                            <div class="inline-block mt-2 w-1/2 pr-1">
                                <label class="hidden text-base text-gray-600" for="cus_email">Negara</label>
                                <input class="form-control w-full px-2 py-2 text-gray-500 bg-gray-100 rounded-lg block border border-slate-300 focus:border-indigo-500"
                                    id="negara" placeholder="Negara" aria-label="Email" name="negara">
                            </div>
                            <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                                <label class="hidden text-base text-gray-600" for="cus_email">Kode Pos</label>
                                <input class="form-control w-full px-2 py-2 text-gray-500 bg-gray-100 rounded-lg block border border-slate-300 focus:border-indigo-500"
                                    id="pos" placeholder="Kode Pos" aria-label="Email" id="pos">
                            </div>
                            <button
                                class="mt-4 cursor-pointer float-right px-4 py-1 text-base text-white bg-primary rounded-md hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out"
                                type="button" name="submit" id="submit">Kirim
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex flex-col mt-3 bg-white rounded-lg shadow-lg hp:mt-6">
                    <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
                        <div class="flex items-start justify-between">
                            <h2 class="text-dark text-xl font-bold uppercase" id="slide-over-title">
                                Keranjang Pesanan</h2>
                        </div>
                        <div class="mt-8">
                            <div class="flow-root">
                                <ul role="list" class="-my-6 divide-y divide-gray-200">
                                    <li class="flex py-6">
                                        <div class="ml-4 flex flex-1 flex-col">
                                            <div>
                                                <ul class="flex text-base font-medium text-gray-900">
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
                        <button type="button" class="hapus font-medium text-indigo-600 hover:text-indigo-500">Hapus Pesanan</button>
                    </div>
                    <div class="border-t">
                        <div class="w-96 h-13 flex items-center mx-auto lg:mx-6 md:mx-6 pl-3 bg-white border rounded-lg mt-4 mb-2">
                            <input type="coupon" name="code" id="coupon" value="" placeholder="Kode Promo"
                                class="w-full bg-white outline-none appearance-none focus:outline-none active:outline-none" />
                            <button type="submit"
                                class="text-sm flex items-center px-3 py-1 text-white bg-gray-800 rounded-lg outline-none md:px-4 hover:bg-gray-700 focus:outline-none active:outline-none">
                                <svg aria-hidden="true" data-prefix="fas" data-icon="gift" class="w-8"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
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
        </div>
    </main>
</x-app-layout>
