<x-admin-layout>
    
    <h2 class="lg:mx-4 font-semibold text-xl text-gray-800 leading-tight mb-3">
        {{ $title }}
    </h2>
    <div>
        <div class="lg:mx-4 shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1 ">
            <form action="{{(isset($comunity))?route('admin-comunity.update', $comunity->comunity_id):route('admin-comunity.store') }}" method="POST" enctype="multipart/form-data">
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
                                    <input type="text" name="comunity_name" value="{{(isset($comunity))?$comunity->comunity_name:old('comunity_name') }}"
                                        class="@error('comunity_name') @enderror block w-full flex-1 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Nama Komunitas Paket Wisata">
                                </div>
                                <div class="text-xs text-red-500">
                                    @error('comunity_name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">Lokasi Komunitas</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="comunity_location" value="{{(isset($comunity))?$comunity->comunity_location:old('comunity_location') }}"
                                        class="@error('comunity_location') @enderror block w-full flex-1 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Lokasi Komunitas Paket Wisata">
                                </div>
                                <div class="text-xs text-red-500">
                                    @error('comunity_location')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">Kontak</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="contact" value="{{(isset($comunity))?$comunity->contact:old('contact') }}"
                                        class="@error('contact') @enderror block w-full flex-1 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Nomor Kontak Komunitas">
                                </div>
                                <div class="text-xs text-red-500">
                                    @error('contact')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="about" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                            <div class="mt-1">
                                <textarea name="comunity_desc" rows="3"
                                    class="@error('comunity_desc') @enderror mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="Deskripsi Paket">{{(isset($comunity))?$comunity->comunity_desc:old('comunity_desc') }}</textarea>
                            </div>
                            <div class="text-xs text-red-500">
                                @error('comunity_desc')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Logo Komunitas</label>
                            <div
                                class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                                <div class="space-y-1 text-center">
                                    @if (isset($comunity) && $comunity->comunity_logo!='')
                                    <img src="{{ asset('storage/'.$comunity->comunity_logo) }}" width="320" class="mx-auto h-100 w-100 text-gray-400" alt=""/>
                                    @else
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path
                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    @endif
                                    
                                    <div class="flex flex-col text-sm justify-center text-gray-600">
                                        <span name="comunity_logo" class="mb-3 text-xs text-gray-500">{{(isset($comunity))?$comunity->comunity_logo:old('comunity_logo') }}</span>
                                        <label for="comunity_logo"
                                            class="@error('comunity_logo') border-red-500 @enderror relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                            <p>Upload a file or drag and drop</p>
                                            <input id="comunity_logo" name="comunity_logo" type="file" class="sr-only">
                                        </label>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG or JPG up to 10MB</p>
                                    <div class="text-xs text-red-500">
                                        @error('comunity_logo')
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
        CKEDITOR.replace('comunity_desc');
    </script>
</x-admin-layout>
