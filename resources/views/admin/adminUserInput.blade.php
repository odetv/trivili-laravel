<x-admin-layout>
    
    <h2 class="lg:mx-4 font-semibold text-xl text-gray-800 leading-tight mb-3">
        {{ $title }}
    </h2>
    <div>
        <div class="lg:mx-4 shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1 ">
            <form action="{{(isset($user))?route('admin-user.update', $user->id):route('admin-user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($user))
                    @method('PUT')
                @endif
                <div class="sm:overflow-hidden sm:rounded-md">
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">Nama</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="name" value="{{(isset($user))?$user->name:old('name') }}"
                                        class="@error('name') @enderror block w-full flex-1 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Nama Lengkap">
                                </div>
                                <div class="text-xs text-red-500">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">Email</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="email" value="{{(isset($user))?$user->email:old('email') }}"
                                        class="@error('email') @enderror block w-full flex-1 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Email Aktif">
                                </div>
                                <div class="text-xs text-red-500">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">Role</label>
                                <div class="flex flex-row justify-center items-center">
                                    <select name="is_admin" value="{{(isset($user))?$user->is_admin: old('is_admin') }}"
                                        class="@error('is_admin') @enderror block w-full py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-300 ease-in-out">
                                        <option>Pilih Role</option>
                                            <option>0</option>
                                            <option>1</option>
                                    </select>
                                </div>
                                <p class="mt-1 text-xs font-medium">Keterangan: 0 adalah User Biasa dan 1 adalah Admin</p>
                                <div class="block text-xs text-red-500">
                                    @error('package_name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">Password</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="password" name="password" value="{{(isset($user))?$user->password:old('password') }}"
                                        class="@error('password') @enderror block w-full flex-1 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Password">
                                </div>
                                <div class="text-xs text-red-500">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Photo Profil</label>
                            <div
                                class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                                <div class="space-y-1 text-center">
                                    @if (isset($user) && $user->user_photo!='')
                                    <img src="{{ asset('storage/'.$user->user_photo) }}" width="320" class="mx-auto h-100 w-100 text-gray-400" alt=""/>
                                    @else
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path
                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    @endif
                                    
                                    <div class="flex flex-col text-sm justify-center text-gray-600">
                                        <span name="user_photo" class="mb-3 text-xs text-gray-500">{{(isset($user))?$user->user_photo:old('user_photo') }}</span>
                                        <label for="user_photo"
                                            class="@error('user_photo') border-red-500 @enderror relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                            <p>Upload a file or drag and drop</p>
                                            <input id="user_photo" name="user_photo" type="file" class="sr-only">
                                        </label>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG or JPG up to 10MB</p>
                                    <div class="text-xs text-red-500">
                                        @error('user_photo')
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
</x-admin-layout>
