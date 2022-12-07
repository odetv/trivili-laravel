<x-admin-layout>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-3">
        <!-- menampilkan variabel title yang dikirim dari controller-->
        {{ $title }}
    </h2>
    <div>
        <div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1 ">
            <div class="grid grid-cols-12">
                <div class="col-span-6 p-4">
                    <!-- menampilkan url untuk menampilkan halaman input admin -->
                    <a href="{{ route('admin.create') }}">
                        <button
                            class="px-4 py-1 text-sm rounded text-purple-600 font-semibold border border-purple200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outlinenone">Tambah</button>
                    </a>
                    <button
                        class="px-4 py-1 text-sm rounded text-green-600 font-semibold border border-green200 hover:text-white hover:bg-green-500 hover:border-transparent focus:outlinenone">Publish</button>
                    <button
                        class="px-4 py-1 text-sm rounded text-red-600 font-semibold border border-red200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outlinenone">Delete</button>
                </div>
                <div class="col-span-6 p-4 flex justify-end">
                    <input type="text"
                        class="px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 roundednone rounded-l-md sm:text-sm border-gray-300">
                    <button
                        class="rounded-r-md border border-l-0 px-4 py-1 border-gray-300 bg-gray-50 text-gray500 text-blue-600 hover:text-white hover:bg-blue-600">
                        Cari</button>
                </div>
            </div>
            <div class="py-2 align-middle inline-block min-w-full sm:px-4 lg:px-4">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray500 uppercase tracking-wider">
                                    Nama Paket
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray500 uppercase tracking-wider">
                                    Harga
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray500 uppercase tracking-wider">
                                    Komunitas
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray500 uppercase tracking-wider">
                                    Deskripsi
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-right text-xs font-medium text-gray500 uppercase tracking-wider">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <!-- menggunakan foreach untuk menampilkan list array ataupun collection-->
                            @foreach ($package as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center"><input type="checkbox" name=""
                                                id="">
                                            <div class="flex-shrink-0 h-10 w-10 ml-5">
                                                <img class="h-10 w-10 rounded-full" src="{{ asset('storage/'.$item->feature_img) }}"
                                                    alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    <!-- Menampilkan elemen nama dari object item -->
                                                    {{ $item->package_name }}
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    Lokasi : {{ $item->location_name }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Rp. {{ $item->package_price }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $item->comunity_name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $item->package_desc }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <form action="{{ route('admin.destroy',$item->package_id) }}" method="POST">
                                            <!-- Form lengkap dengan token csrf untuk method(DELETE)-->
                                            @csrf
                                            @method('DELETE')
                                            <!-- link untuk edit-->
                                            <a href="{{ route('admin.edit',$item->package_id) }}"
                                                class="text-indigo600 hover:text-indigo-900">Edit</a>
                                            <!-- button action untuk delete-->
                                            <button class="text-red-600 hover:text-red-900"
                                                onclick="return confirm('Anda Yakin ?')" type="submit">Del</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</x-admin-layout>
