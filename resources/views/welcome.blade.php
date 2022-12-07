{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Trivili | Trip in Bali</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="img/favicon-trivili.png">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @auth
            @include('layouts.navigation')
        @else
            <div class="absolute w-full flex items-center pt-3 pl-3">
                <div class="flex items-center justify-between relative">
                    <div class="px-4 flex items-center cursor-pointer">
                    <x-application-logo/>
                </div>
            </div>
            @if (Route::has('login'))
            <div class="absolute right-0 pr-6">
                @auth
                <a href="{{ url('/dashboard') }}" class="text-base text-primary py-2 hover:text-secondary transition duration-300 ease-in-out">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="text-base text-primary py-2 mx-2 hover:text-secondary transition duration-300 ease-in-out">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-base text-primary py-2 mx-2 hover:text-secondary transition duration-300 ease-in-out">Register</a>
                @endif
                @endauth
            </div>
            @endif
        @endauth
        </div>
            <!-- Home Section Start -->
            <section id="home" class="pt-32 pb-32 bg-slate-100">
                <div class="container">
                    <div class="flex flex-wrap hp:flex-wrap-reverse">
                        <div class="w-full self-center px-4 lg:w-1/2">
                            <h1 class="block font-bold text-dark text-3xl mb-7 hp:mt-7 lg:text-4xl hp:text-2xl">Lets get started. Trip in Bali!</h1>
                            <h2 class="font-bold text-dark text-base">Wonderfull Indonesia in Bali</h2>
                            <p class=" text-dark mb-8 leading-loose">Bali merupakan pulau yang mempunyai daya tarik yang sangat
                                luar biasa
                                bagi wisatawan domestik maupun wisatawan mancanegara yang ingin menghilangkan kepenatan selama
                                melakukan aktivitas kesehariannya. Mulai perjalanan anda bersama kami!</p>
                                @auth
                                <a href="/dashboard" class="text-base font-medium text-white bg-primary py-3 px-8 rounded-md hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">Dashboard</a>
                                @else
                                <a href="/dashboard" class="text-base font-medium text-white bg-primary py-3 px-8 rounded-md hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">Get Started</a>
                                @endauth
                            </div>
                        <div class="w-full self-end px-4 lg:w-1/2">
                            <div class="relative mt-10 lg:mt-9 lg:right-0">
                                <img src="https://source.unsplash.com/720x400?travel+bali+landscape" alt="Bali"
                                    class="w-100 rounded-tl-full rounded-tr-full shadow-lg w-full mx-auto hover:scale-105 transition duration-300 ease-in-out">
                                <span class="absolute buttom-0 -z-10>
                                    <svg width=" 1000" height="1000" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#1e3a8a"
                                        d="M16.1,-24.4C20.7,-25.1,24.2,-20.6,33.2,-15.6C42.2,-10.7,56.5,-5.3,58.6,1.2C60.7,7.7,50.4,15.5,38.9,16C27.4,16.6,14.7,10,8,7.6C1.3,5.3,0.7,7.2,-3.2,12.7C-7.1,18.3,-14.1,27.5,-19.4,29C-24.7,30.6,-28.3,24.5,-28.3,18.4C-28.4,12.2,-24.9,6.1,-26.9,-1.1C-28.8,-8.4,-36.2,-16.8,-35.2,-21.2C-34.2,-25.7,-24.9,-26.3,-17.6,-24C-10.3,-21.8,-5.2,-16.6,0.3,-17.1C5.7,-17.6,11.4,-23.6,16.1,-24.4Z"
                                        transform="translate(100 100)" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Home Section End -->
        
            <!-- Footer Section Start -->
            <footer class="bg-dark pt-24 pb-12">
                <div class="container">
                    <div class="flex flex-wrap">
                        <div class="w-full px-4 mb-12 text-white font-thin text-sm md:w-1/3">
                            <img src="img/favicon-trivili.png" width="120px" class="mb-5">
                            <!-- <h2 class="font-bold text-4xl mb-5 sm:text-2xl">Trivili</h2> -->
                            <h3 class="font-semibold text-2xl mb-2 sm:text-lg">Kontak kami</h3>
                            <p
                                class="text-base transition duration-300 ease-in-out text-slate-300 hover:text-secondary hover:cursor-pointer mb-2 sm:text-sm">
                                trivili@gmail.com</p>
                            <p
                                class="text-base transition duration-300 ease-in-out text-slate-300 hover:text-secondary hover:cursor-pointer mb-2 sm:text-sm">
                                Buleleng, Bali</p>
                            <p
                                class="text-base transition duration-300 ease-in-out text-slate-300 hover:text-secondary hover:cursor-pointer mb-2 sm:text-sm">
                                Indonesia</p>
                        </div>
                        <div class="w-full px-4 text-white font-thin text-sm mb-12 md:w-1/3">
                            <h3 class="font-semibold text-2xl mb-2 sm:text-lg">Jasa</h3>
                            <ul>
                                <li>
                                    <a href="#"
                                        class="inline-block text-base transition duration-300 ease-in-out text-slate-300 hover:text-secondary mb-2 sm:text-sm">Travel
                                        Wisata</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="inline-block text-base transition duration-300 ease-in-out text-slate-300 hover:text-secondary mb-2 sm:text-sm">Agent
                                        Travel Bali</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="inline-block text-base transition duration-300 ease-in-out text-slate-300 hover:text-secondary mb-2 sm:text-sm">Wonderfull
                                        Bali Indonesia</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full px-4 text-white font-thin text-sm mb-12 md:w-1/3">
                            <h3 class="font-semibold text-2xl mb-2 sm:text-lg">Halaman</h3>
                            <ul>
                                <li>
                                    <a href="#home"
                                        class="inline-block text-base transition duration-300 ease-in-out text-slate-300 hover:text-secondary mb-2 sm:text-sm">Home</a>
                                </li>
                                <li>
                                    <a href="#pricing"
                                        class="inline-block text-base transition duration-300 ease-in-out text-slate-300 hover:text-secondary mb-2 sm:text-sm">Pricing</a>
                                </li>
                                <li>
                                    <a href="#gallery"
                                        class="inline-block text-base transition duration-300 ease-in-out text-slate-300 hover:text-secondary mb-2 sm:text-sm">Gallery</a>
                                </li>
                                <li>
                                    <a href="#contact"
                                        class="inline-block text-base transition duration-300 ease-in-out text-slate-300 hover:text-secondary mb-2 sm:text-sm">Contact</a>
                                </li>
                                <li>
                                    <a href="/booking"
                                        class="inline-block text-base transition duration-300 ease-in-out text-slate-300 hover:text-secondary mb-2 sm:text-sm">Pesanan</a>
                                </li>
                                <li>
                                    <a href="#about"
                                        class="inline-block text-base transition duration-300 ease-in-out text-slate-300 hover:text-secondary mb-2 sm:text-sm">About</a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="w-full pt-10 border-t border-slate-500">
                        <div class="flex items-center justify-center mb-5">
                            <!-- GitHub -->
                            <a href="https://github.com/odetv/trivili-laravel" target="_blank"
                                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-white text-white transition duration-300 ease-in-out hover:bg-primary hover:text-white">
                                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                            </a>
                        </div>
                        <p class="text-[0.65rem] text-slate-300 text-center">Copyright ©2022 Trivili | All Rights Reserved.</p>
                        <p class="text-[0.65rem] text-slate-500 text-center">Develop by 🤎odetv</p>
                    </div>
                </div>
            </footer>
            <!-- Footer Section End -->
        
            <!-- Toggle Return Home Start -->
            <a href="/home" class="fixed hidden justify-center items-center z-[9999] bottom-3 right-3 p-3 h-12 w-12 transition duration-300 ease-in-out bg-primary rounded-full text-white text-center hover:animate-pulse" id="btn-return">
                <span class="block h-3 w-3 rotate-45 border-t-2 border-l-2 mt-2"></span>
            </a>
            <!-- Toggle Return Home End -->
        
    </body>
</html> --}}