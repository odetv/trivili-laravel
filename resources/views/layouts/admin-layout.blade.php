<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="shortcut icon" href="img/favicon-trivili.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="../path/to/flowbite/dist/datepicker.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://api.iksgroup.co.id/apijs/lokasiapi.js"></script>
    <script src="http://api.iksgroup.co.id/apijs/lokasiapi.js"></script>
    <style>
        .bg-sidebar {
            background: #3d68ff;
        }

        .cta-btn {
            color: #3d68ff;
        }

        .upgrade-btn {
            background: #1947ee;
        }

        .upgrade-btn:hover {
            background: #0038fd;
        }

        .active-nav-link {
            background: #1947ee;
        }

        .nav-item:hover {
            background: #1947ee;
        }

        .account-link:hover {
            background: #3d68ff;
        }
    </style>
</head>

<body>
    <main class="bg-gray-100 font-family-karla flex">
        <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
            <div class="p-6">
                <div class="flex flex-row justify-center items-center">
                    <a href="#">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
                    </a>
                    <p class="text-white text-3xl font-bold hover:text-gray300 pl-3">Admin</p>
                </div>

                <a href="{{ route('admin.create') }}">
                    <button
                        class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bllg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                        <i class="fas fa-plus mr-3"></i> New Package
                    </button>
                </a>
            </div>
            <nav class="text-white text-base font-semibold pt-3">
                <a href="{{ route('admin.index') }}"
                    class="flex items-center text-white opacity-75 hover:opacity100 py-4 pl-6 nav-item">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="{{ route('admin.index') }}"
                    class="flex items-center text-white opacity75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                    Home
                </a>
            </nav>
        </aside>
        <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
            <!-- Desktop Header -->
            <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
                <div class="w-1/2"></div>
                <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                    @auth
                        <div class="pr-5 mt-3">{{ Auth::user()->name }}</div>
                    @else
                    @endauth
                    <button @click="isOpen = !isOpen"
                        class="realtive z-10 w-12 h-12 rounded-full overflowhidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outlinenone">
                        <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400" class="rounded-full">
                    </button>
                    <button x-show="isOpen" @click="isOpen = false"
                        class="h-full w-full fixed inset0 cursor-default"></button>
                    <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                        <a href="#" class="block px-4 py-2 account-link hover:text-white"><i class="fas fa-user mr-3"></i>Account</a>
                        <a href="#" class="block px-4 py-2 account-link hover:text-white"><i class="fas fa-sticky-note mr-3"></i>Support</a>
                        <a href="#" class="block px-4 py-2 account-link hover:text-white"><i class="fas fa-sign-out-alt mr-3"></i></i>Sign Out</a>
                    </div>
                </div>
            </header>
            <!-- Mobile Header & Nav -->
            <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
                <div class="flex items-center justify-between">
                    <a href="#" class="text-white text-3xl font-semibold uppercase hover:textgray-300">Admin</a>
                    <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                        <i x-show="!isOpen" class="fas fa-bars"></i>
                        <i x-show="isOpen" class="fas fa-times"></i>
                    </button>
                </div>
                <!-- Dropdown Nav -->
                <nav :class="isOpen ? 'flex' : 'hidden'" class="flex flex-col pt-4">
                    @auth
                        <div class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl4 nav-item"><i class="fas fa-user mr-3"></i>{{ Auth::user()->name }}</div>
                    @else
                    @endauth
                    <a href="#"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl4 nav-item">
                        <i class="fas fa-tachometer-alt mr-3"></i>
                        Dashboard
                    </a>
                    <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl4 nav-item">
                        <i class="fas fa-sign-out-alt mr-3"></i>
                        Sign Out
                    </a>
                </nav>
            </header>
            <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
                <main class="w-full flex-grow p-6">
                    {{ $slot }}
                </main>
                {{-- footer --}}
            </div>
        </div>
    </main>
</body>

</html>
