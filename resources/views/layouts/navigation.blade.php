<div x-data="{ open: false }" class="bg-slate-100 border-gray-100">
    <!-- Primary Navigation Menu -->
    <header class="w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="/">
                    <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                </a>
            </div>
            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-8 mr-3 sm:-my-px sm:ml-10 sm:flex">
                    {{-- :active="request()->routeIs('dashboard')" Untuk Actice bar--}}
                    <x-nav-link :href="'/'">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="'/#pricing'">
                        {{ __('Pricing') }}
                    </x-nav-link>
                    <x-nav-link :href="'/#gallery'">
                        {{ __('Gallery') }}
                    </x-nav-link>
                    <x-nav-link :href="'/#contact'">
                        {{ __('Contact') }}
                    </x-nav-link>
                    <x-nav-link :href="'/#about'">
                        {{ __('About') }}
                    </x-nav-link>
                    <x-nav-link :href="'/package'">
                        {{ __('Package') }}
                    </x-nav-link>
                    <x-nav-link :href="'/checkout'">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="6" cy="19" r="2"></circle>
                            <circle cx="17" cy="19" r="2"></circle>
                            <path d="M17 17h-11v-14h-2"></path>
                            <path d="M6 5l14 1l-1 7h-13"></path>
                         </svg>
                            <span class="text-xs p-0.5 mb-4">({{ count((array) session('checkout')) }})</span>
                    </x-nav-link>
                </div>
                <!-- Settings Dropdown -->
                <div class="hidden bg-primary rounded-lg m-3 p-3 sm:flex sm:items-center sm:ml-6 hover:bg-opacity-50 transition duration-300 ease-in-out">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="flex items-center text-sm font-medium text-white hover:text-white hover:border-gray-300 focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                @auth
                                    <div>{{ Auth::user()->name }}</div>
                                @else
                                    {{ __('Daftar') }}
                                @endauth

                                <div class="">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Authentication -->
                            <x-dropdown-link :href="'admin'" class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-brand-tabler" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M8 9l3 3l-3 3"></path>
                                    <line x1="13" y1="15" x2="16" y2="15"></line>
                                    <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                                 </svg>
                                {{ __('Admin Panel') }}
                            </x-dropdown-link>
                            @auth
                                <x-dropdown-link :href="route('profile.edit')" class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-user-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="9"></circle>
                                        <circle cx="12" cy="10" r="3"></circle>
                                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                                     </svg>
                                    {{ __('Profile') }}
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" class="flex"
                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-logout" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                            <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
                                         </svg>  
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            @else
                                <x-dropdown-link :href="route('login')" class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-login" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                        <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                                     </svg>
                                    {{ __('Login') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('register')" class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-user-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                        <path d="M16 11h6m-3 -3v6"></path>
                                     </svg>
                                    {{ __('Register') }}
                                </x-dropdown-link>
                            @endauth
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <x-nav-link :href="'/checkout'" class="mr-3 mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="6" cy="19" r="2"></circle>
                        <circle cx="17" cy="19" r="2"></circle>
                        <path d="M17 17h-11v-14h-2"></path>
                        <path d="M6 5l14 1l-1 7h-13"></path>
                     </svg>
                        <span class="text-xs p-0.5 mb-4">{{ count((array) session('checkout')) }}</span>
                </x-nav-link>
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">                    
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">   
                <nav class="border-b border-gray-200">
                    <div class="px-4">
                        @auth
                            <div class="flex flex-row items-center pt-4 pb-4">
                                <div>
                                    <img src="/img/adminPhoto.jpg" class="rounded-full w-10">
                                </div>
                                <div class="ml-3">
                                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                                </div>
                            </div>
                        @else
                        @endauth
                    </div>
                </nav>           
                <x-responsive-nav-link :href="'/'" class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-home-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                        <rect x="10" y="12" width="4" height="4"></rect>
                     </svg>
                    {{ __('Home') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="'/#pricing'" class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-businessplan" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <ellipse cx="16" cy="6" rx="5" ry="3"></ellipse>
                        <path d="M11 6v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
                        <path d="M11 10v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
                        <path d="M11 14v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
                        <path d="M7 9h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path>
                        <path d="M5 15v1m0 -8v1"></path>
                     </svg>
                    {{ __('Pricing') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="'/#gallery'" class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-brand-appgallery" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                        <path d="M9 8a3 3 0 0 0 6 0"></path>
                     </svg>
                    {{ __('Gallery') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="'/#contact'" class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-address-book" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2z"></path>
                        <path d="M10 16h6"></path>
                        <circle cx="13" cy="11" r="2"></circle>
                        <path d="M4 8h3"></path>
                        <path d="M4 12h3"></path>
                        <path d="M4 16h3"></path>
                     </svg>
                    {{ __('Contact') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="'/#about'" class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-info-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="9"></circle>
                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                        <polyline points="11 12 12 12 12 16 13 16"></polyline>
                    </svg>
                    {{ __('About') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="'/package'" class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-package" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"></polyline>
                        <line x1="12" y1="12" x2="20" y2="7.5"></line>
                        <line x1="12" y1="12" x2="12" y2="21"></line>
                        <line x1="12" y1="12" x2="4" y2="7.5"></line>
                        <line x1="16" y1="5.25" x2="8" y2="9.75"></line>
                     </svg>
                    {{ __('Package') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="'/checkout'" class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-shopping-cart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="6" cy="19" r="2"></circle>
                        <circle cx="17" cy="19" r="2"></circle>
                        <path d="M17 17h-11v-14h-2"></path>
                        <path d="M6 5l14 1l-1 7h-13"></path>
                     </svg>
                     {{ __('Keranjang Pesanan') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <nav class="pt-1 pb-1 border-t border-gray-200">
                <div class="mt-1 space-y-1">
                    <!-- Authentication -->
                    <x-responsive-nav-link :href="'admin'" class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-brand-tabler" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M8 9l3 3l-3 3"></path>
                            <line x1="13" y1="15" x2="16" y2="15"></line>
                            <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                         </svg>
                        {{ __('Admin Panel') }}
                    </x-responsive-nav-link>
                    @auth
                        <x-responsive-nav-link :href="route('profile.edit')" class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-user-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="9"></circle>
                                <circle cx="12" cy="10" r="3"></circle>
                                <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                             </svg>
                            {{ __('Profile') }}
                        </x-responsive-nav-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-responsive-nav-link :href="route('logout')" class="flex"
                                onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-logout" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                    <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
                                 </svg>                    
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    @else
                        <x-responsive-nav-link :href="route('login')" class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-login" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                             </svg>
                        {{ __('Login') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('register')" class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-user-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                <path d="M16 11h6m-3 -3v6"></path>
                             </svg>
                            {{ __('Register') }}
                        </x-responsive-nav-link>
                    @endauth
                </div>
            </nav>
        </div>
    </header>
</div>
