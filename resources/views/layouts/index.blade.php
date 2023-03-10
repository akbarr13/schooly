<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ empty($title) ? '' : $title }} | Schooly</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('icon.png') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/loader.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loginbutton.css') }}">
</head>

<body>
    <!-- component -->
    <header class="header relative top-0 bg-white shadow-md flex items-center justify-between px-8 py-">
        <!-- logo -->
        <h1 class="w-3/12">
            <a href="/" class="inline space-y-1">
                <img class="inline mt-0 space-y-2 absolute" src="{{ asset('schooly.png') }}" width="30"
                    height="" alt="logo">
            </a>
            <a class="bold text-2xl items-center pt-1 ml-10" href="/"><b>Schooly</b></a>
        </h1>


        <!-- navigation -->
        <nav class="nav font-semibold text-lg">
            <ul class="flex items-center">
                <li
                    class="p-4 border-b-2 border-blue-700 border-opacity-0 hover:border-opacity-100 hover:text-blue-500 duration-200 cursor-pointer active">
                    <a href="/">Home</a>
                </li>
                <li
                    class="p-4 border-b-2 border-blue-700 border-opacity-0 hover:border-opacity-100 hover:text-blue-500 duration-200 cursor-pointer active">
                    <a href="/students">Student List</a>
                </li>
                <li
                    class="p-4 border-b-2 border-blue-700 border-opacity-0 hover:border-opacity-100 hover:text-blue-500 duration-200 cursor-pointer">
                    <a href="/dashboard">Dashboard</a>
                </li>
                </li>
            </ul>
        </nav>

        <!-- buttons --->
        @auth
            <div class="w-3/12 flex justify-end">
                <button type="button"
                    class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-11 h-11 rounded-full"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEvATlUmCiBmQHmNsPNt32mti1qWdAwKPqTvm-1UP9yg&s"
                        alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-sky-300 divide-y divide-black rounded shadow dark:bg-white-700 dark:divide-white-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-black-900 dark:text-gray">{{ auth()->user()->name }}</span>
                        <span
                            class="block text-sm font-medium text-black-500 truncate dark:text-black-400">{{ auth()->user()->email }}</span>
                    </div>
                    <ul class="py-1" aria-labelledby="user-menu-button">
                        <li>
                            <a href="/dashboard"
                                class="block px-4 py-2 text-sm text-black hover:bg-gray-100 dark:hover:bg-emerald-100 dark:text-black dark:hover:text-gray">Dashboard</a>
                        </li>
                        <li>
                            <a href="/settings"
                                class="block px-4 py-2 text-sm text-black hover:bg-gray-100 dark:hover:bg-emerald-100 dark:text-black dark:hover:text-gray">Settings</a>
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <a
                                    class="block px-4 py-2 text-sm text-black hover:bg-gray-100 dark:hover:bg-emerald-100 dark:text-black dark:hover:text-gray"><button
                                        type="submit">
                                        Sign out </button> </a>
                            </form>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        @else
            @if ($title != 'Login' && $title != 'Register')
                <div class="w-1/6 flex justify-end">
                    <div class="buttons">
                        <a href="/login">
                            <button class="blob-btn" width="100px">
                                Login
                                <span class="blob-btn__inner">
                                    <span class="blob-btn__blobs">
                                        <span class="blob-btn__blob"></span>
                                        <span class="blob-btn__blob"></span>
                                        <span class="blob-btn__blob"></span>
                                        <span class="blob-btn__blob"></span>
                                    </span>
                                </span>
                            </button>
                        </a>
                        <br />
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="position: absolute;" class="">
                        <defs>
                            <filter id="goo">
                                <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
                                <feColorMatrix in="blur" mode="matrix"
                                    values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
                                <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                            </filter>
                        </defs>
                    </svg>
                @else
                    <div class="w-3/12 flex justify-end">
                    </div>
            @endif
        @endauth



    </header>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <lottie-player class="loader mx-auto" id="loader" src="{{ asset('json/loader.json') }}" background="transparent" speed="1" style="width: 300px; height: 300px; display: block; margin-top: 15%;"
        loop autoplay></lottie-player>
    <div class="main-content" id="main-content">
        @yield('content')
    </div>
    <script>
        const loader = document.querySelector(".loader");
        const mainContent = document.querySelector(".main-content");

        window.addEventListener("load", function() {
            setTimeout(function() {
                loader.style.display = "none";
                let i = 0;
                if (i <= 100) {
                    setInterval(function() {
                        i += 10;
                        mainContent.style.opacity = `${i}%`;
                    }, 30)
                }

            }, 1000);
        });
    </script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
</body>

</html>
