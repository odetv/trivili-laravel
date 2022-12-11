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
    <main>
        <section class="bg-gray-100 flex">
            <aside class="relative bg-primary h-screen w-64 hidden sm:block shadow-xl">
                <div class="p-4">
                    <div class="flex flex-row justify-center items-center">
                        <p class="text-white text-2xl font-bold">Admin Panel</p>
                    </div>
    
                    <a href="{{ route('admin.create') }}">
                        <button
                            class="w-full text-primary bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bllg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center transition duration-300 ease-in-out">
                            <i class="fas fa-plus mr-3 text-primary"></i><p class="text-primary">New Package</p>
                        </button>
                    </a>
                </div>
                <nav class="text-white text-base font-semibold pt-3">
                    <a href="{{ route('admin.index') }}"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item transition duration-300 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-dashboard" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="13" r="2"></circle>
                            <line x1="13.45" y1="11.55" x2="15.5" y2="9.5"></line>
                            <path d="M6.4 20a9 9 0 1 1 11.2 0z"></path>
                         </svg></i>
                        Dashboard
                    </a>
                    <a href="/package"
                        class="flex items-center text-white opacity75 hover:opacity-100 py-4 pl-6 nav-item transition duration-300 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                         </svg></i>
                        Client Side
                    </a>
                </nav>
            </aside>
            <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
                @include('layouts.admin-navigation')
                <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
                    <main class="w-full flex-grow p-6">
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
