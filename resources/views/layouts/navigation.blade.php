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
                    <x-nav-link :href="'/booking'">
                        {{ __('Pesanan') }}
                    </x-nav-link>
                    <x-nav-link :href="'/#about'">
                        {{ __('About') }}
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
                            @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            @else
                                <x-dropdown-link :href="route('login')">
                                {{ __('Login') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('register')">
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
                <x-responsive-nav-link :href="'/'">
                    {{ __('Home') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="'/#pricing'">
                    {{ __('Pricing') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="'/#gallery'">
                    {{ __('Gallery') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="'/#contact'">
                    {{ __('Contact') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="'/booking'">
                    {{ __('Pesanan') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="'/#about'">
                    {{ __('About') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <nav class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    @auth
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    @else
                    @endauth
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    @else
                        <x-responsive-nav-link :href="route('login')">
                        {{ __('Login') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('register')">
                            {{ __('Register') }}
                        </x-responsive-nav-link>
                    @endauth
                </div>
            </nav>
        </div>
    </header>
</div>
