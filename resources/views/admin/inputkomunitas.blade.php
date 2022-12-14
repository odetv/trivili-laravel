<x-admin-layout>
    <h2 class="lg:mx-4 font-semibold text-xl text-gray-800 leading-tight mb-3">
        <!-- menampilkan variabel title yang dikirim dari controller-->
        {{ $title }}
    </h2>
    <div>
        <div class="lg:mx-4 shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1 ">
            <form action="{{(isset($comunity))?route('admin.update', $comunity->comunity_id):route('admin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($comunity))
                    @method('PUT')
                @endif
                <div class="sm:overflow-hidden sm:rounded-md">
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">Nama Komunitas</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="comunity_name" value="{{(isset($package))?$package->comunity_name:old('comunity_name') }}"
                                        class="@error('comunity_name') @enderror block w-full flex-1 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Nama Komunitas Wisata">
                                </div>
                                <div class="text-xs text-red-500">
                                    @error('comunity_name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</x-admin-layout>
