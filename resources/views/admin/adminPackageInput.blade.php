<x-admin-layout>
    
    <h2 class="lg:mx-4 font-semibold text-xl text-gray-800 leading-tight mb-3">
        {{ $title }}
    </h2>
    <div>
        <div class="lg:mx-4 shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1 ">
            <form action="{{(isset($package))?route('admin-package.update', $package->package_id):route('admin-package.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($package))
                    @method('PUT')
                @endif
                <div class="sm:overflow-hidden sm:rounded-md">
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">Kode Paket</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="package_code" value="{{(isset($package))?$package->package_code:old('package_code') }}"
                                        class="@error('package_code') @enderror block w-full flex-1 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Kode Paket Wisata">
                                </div>
                                <div class="text-xs text-red-500">
                                    @error('package_code')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">Nama Paket</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="package_name" value="{{(isset($package))?$package->package_name:old('package_name') }}"
                                        class="@error('package_name') @enderror block w-full flex-1 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Nama Paket Wisata">
                                </div>
                                <div class="text-xs text-red-500">
                                    @error('package_name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">Harga Paket</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="package_price" value="{{(isset($package))?$package->package_price:old('package_price') }}"
                                        class="@error('package_price') @enderror block w-full flex-1 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Harga Paket">
                                </div>
                                <div class="text-xs text-red-500">
                                    @error('package_price')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">Komunitas</label>
                                <div class="flex flex-row justify-center items-center">
                                    <select name="comunity_id" value="{{(isset($package))?$package->comunity_name: old('comunity_name') }}"
                                        class="@error('package_name') @enderror block w-full py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-300 ease-in-out">
                                        <option value="">Pilih Komunitas</option>
                                        @foreach ($comunities as $key => $item)
                                            <option value="{{ $item->comunity_id }}"
                                            {{ ((isset($package)&&$package->comunity_id==$item->community_id) || old('comunity_id')==$item->comunity_id) ? 'selected' : '' }}
                                            id="namaKomunitas" >{{ $item->comunity_name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="ml-2">
                                        <a href="{{ route('admin-comunity.create') }}"
                                            class="text-center inline-flex justify-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                            Tambah
                                        </a>
                                    </div>
                                </div>
                                <div class="block text-xs text-red-500">
                                    @error('package_name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">Lokasi Wisata</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="location_name" value="{{(isset($package))?$package->location_name:old('location_name') }}"
                                        class="@error('location_name') @enderror block w-full flex-1 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Tempat Lokasi Wisata">
                                </div>
                                <div class="text-xs text-red-500">
                                    @error('location_name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="about" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                            <div class="mt-1">
                                <textarea name="package_desc" rows="3"
                                    class="@error('package_desc') @enderror mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="Deskripsi Paket">{{(isset($package))?$package->package_desc:old('package_desc') }}</textarea>
                            </div>
                            <div class="text-xs text-red-500">
                                @error('package_desc')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Photo</label>
                            <div
                                class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                                <div class="space-y-1 text-center">
                                    @if (isset($package) && $package->feature_img!='')
                                    <img src="{{ asset('storage/'.$package->feature_img) }}" width="320" class="mx-auto h-100 w-100 text-gray-400" alt=""/>
                                    @else
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path
                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    @endif
                                    
                                    <div class="flex flex-col text-sm justify-center text-gray-600">
                                        <span name="feature_img" class="mb-3 text-xs text-gray-500">{{(isset($package))?$package->feature_img:old('feature_img') }}</span>
                                        <label for="feature_img"
                                            class="@error('feature_img') border-red-500 @enderror relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                            <p>Upload a file or drag and drop</p>
                                            <input id="feature_img" name="feature_img" type="file" class="sr-only">
                                        </label>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG or JPG up to 10MB</p>
                                    <div class="text-xs text-red-500">
                                        @error('feature_img')
                                            {{ $message }}
                                        @enderror
                                    </div>
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
    
    <script>
        CKEDITOR.replace('package_desc');
    </script>
</x-admin-layout>
