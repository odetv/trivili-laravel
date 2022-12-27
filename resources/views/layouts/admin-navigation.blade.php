<div x-data="{ open: false }" class="bg-slate-100 border-gray-100">
    <!-- Primary Navigation Menu -->
    <header class="w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="/admin">
                    <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                </a>
            </div>
            <div class="flex flex-row items-center">
                <!-- Settings Dropdown -->
                <div class="hidden rounded-lg sm:flex sm:items-center sm:ml-6 hover:bg-opacity-50 transition duration-300 ease-in-out">                   
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <div class="flex flex-row">
                                <button
                                    class="mr-3 flex items-center text-sm font-medium text-primary">
                                    @auth
                                        <div>{{ Auth::user()->name }}</div>
                                    @else
                                        {{ __('Daftar') }}
                                    @endauth
                                </button>
                                <button
                                    class="relative z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:outlinenone transition duration-300 ease-in-out">
                                    <img src="{{ asset('storage/' . Auth::user()->user_photo) }}" class="object-cover w-12 h-12">
                                </button>
                            </div>
                        </x-slot>
                        <x-slot name="content">
                            <!-- Authentication -->
                            <x-dropdown-link :href="'/package'" class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-brand-tabler" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M8 9l3 3l-3 3"></path>
                                    <line x1="13" y1="15" x2="16" y2="15"></line>
                                    <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                                 </svg>
                                {{ __('Client Side') }}
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
                <nav class="pt-4 pb-4 border-gray-200">
                    <div class="px-4">
                        @auth
                            <div class="flex flex-row items-center">
                                <div>
                                    <img src="{{ asset('storage/' . Auth::user()->user_photo) }}" class="rounded-full object-cover w-10 h-10">
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
            </div>

            <!-- Responsive Settings Options -->
            <nav class="pt-1 pb-1 border-t border-gray-200">
                <div class="mt-1 space-y-1">
                    <!-- Authentication -->
                    <x-responsive-nav-link :href="'/admin'" class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-dashboard" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="13" r="2"></circle>
                            <line x1="13.45" y1="11.55" x2="15.5" y2="9.5"></line>
                            <path d="M6.4 20a9 9 0 1 1 11.2 0z"></path>
                         </svg>
                        {{ __('Dashboard') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="'/package'" class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                         </svg>
                        {{ __('Client Side') }}
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
