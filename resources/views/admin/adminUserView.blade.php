<x-admin-layout>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <h2 class="lg:mx-4 font-semibold text-xl text-gray-800 leading-tight mb-3">
        <!-- menampilkan variabel title yang dikirim dari controller-->
        {{ $title }}
    </h2>
    {{-- <h2 class="lg:mx-4 font-semibold text-base text-gray-800 leading-tight mb-3 mt-3">Total Data : <span id="total_records"></span></h2> --}}
    <div>
        <div class="lg:mx-4 shadow px-2 py-2 bg-white rounded sm:px-1 sm:py-1">
            <div class="lg:grid lg:grid-cols-12 flex flex-col-reverse justify-center items-center">
                <div class="lg:mx-3 lg:col-span-6 p-2 lg:block flex flex-row items-center">
                    <!-- menampilkan url untuk menampilkan halaman input admin -->
                    <a href="{{ route('admin-user.create') }}">
                        <button
                            class="px-4 py-1 text-sm rounded text-purple-600 font-semibold border border-purple200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outlinenone transition duration-300 ease-in-out">Tambah User</button>
                    </a>
                    {{-- <button
                        class="ml-1 mr-1 px-4 py-1 text-sm rounded text-green-600 font-semibold border border-green200 hover:text-white hover:bg-green-500 hover:border-transparent focus:outlinenone transition duration-300 ease-in-out">Publish</button>
                    <button
                        class="px-5 py-1 text-sm rounded text-red-600 font-semibold border border-red200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outlinenone transition duration-300 ease-in-out">Delete</button> --}}
                </div>
                <div class="col-span-6 p-2 lg:p-4 flex justify-end">
                    <form id="search" action="{{ route('admin-user.index') }}" method="GET">
                        <div class="flex flex-row items-center">
                            <div>
                                <!-- memberikan filter berupa kelompok tani-->
                                <select id="role" name="id"
                                    class="block w-full py-2 border border-gray-300 bg-white rounded-l-2xl shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-300 ease-in-out">
                                    <option value="">Pilih Role</option>
                                    @foreach ($users as $item)
                                        <option value="{{ $item->id }}"
                                            {{ (isset($_GET['id']) && $_GET['id'] == $item->id) ? 'selected' : '' }}>
                                            {{ $item->is_admin }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex items-center">
                                {{-- <input type="text" name="s" id="search" --}}
                                <input type="text" name="s" value="{{ (isset($_GET['s'])) ? $_GET['s'] : '' }}"
                                    class="rounded-r-2xl px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 transition duration-300 ease-in-out">
                                <button type="submit" class="ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="text-primary hover:text-secondary icon icon-tabler icon-tabler-search transition duration-300 ease-in-out"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="10" cy="10" r="7"></circle>
                                        <line x1="21" y1="21" x2="15" y2="15"></line>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="py-2 align-middle sm:px-4 lg:px-4">
        <div class="overflow-scroll shadow border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nama
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Role
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody id="result" class="bg-white divide-y divide-gray-200">
                    <!-- menggunakan foreach untuk menampilkan list array ataupun collection-->
                    @foreach ($users as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center"><input type="checkbox" name="" id="">
                                    <div class="flex-shrink-0 h-10 w-10 ml-5">
                                        <img class="h-10 w-10 rounded-full object-cover"
                                            src="{{ asset('storage/' . $item->user_photo) }}" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $item->name }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                                {{ $item->email }}
                            </td>
                            <td
                                class="px-6 py-4 lg:whitespace-normal md:whitespace-normal tablet:whitespace-normal whitespace-nowrap text-center text-sm text-gray-500">
                                {{ $item->is_admin }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <form action="{{ route('admin-user.destroy', $item->id) }}" method="POST">
                                    <!-- Form lengkap dengan token csrf untuk method(DELETE)-->
                                    @csrf
                                    @method('DELETE')
                                    <!-- link untuk edit-->
                                    <a href="{{ route('admin-user.edit', $item->id) }}"
                                        class="text-primary hover:text-secondary transition duration-300 ease-in-out">Edit</a>
                                    <!-- button action untuk delete-->
                                    <button class="text-red-600 hover:text-red-900 transition duration-300 ease-in-out"
                                        onclick="return confirm('Anda Yakin ?')" type="submit">Del</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- PAGINATION -->
        <div class="m-4 mr-20 ml-20 lg:ml-0 lg:mr-0 md:ml-0 md:mr-0">
            {{-- {{ $comunities->links() }} --}}
            {{$users->appends(request()->query())->links()}}
        </div>
        <!-- END PAGINATION -->
    </div>
</x-admin-layout>
