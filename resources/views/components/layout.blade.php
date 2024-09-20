<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> CYA | KRIK </title>

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/f5fd16f46e.js" crossorigin="anonymous"></script>

    {{-- Google Font -> Mulish --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    {{-- Google Font -> Montserrat --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    {{-- Bootstrap 5.3.3 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="font-montserrat bg-dark-kirk text-shadowed py-2.5 md:py-1.5 shadow-hover">
        <div class=" hidden md:flex w-[80%] mx-auto justify-between items-center">

            <div class="flex space-x-[60px] items-center">
                <div class="uppercase font-medium text-2xl">newsletter</div>
                <div class="border border-2 py-1 pl-3 pr-[100px] uppercase text-sm rounded-2xl">search</div>
            </div>

            <div class="flex space-x-8">
                <div>en/mkd</div>
                <div>E-Shop</div>
            </div>
        </div>
    </div>

    <nav class="bg-orange py-2 relative z-20">
        <div class="w-[80%] mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="w-[3.5rem] h-[3.5rem] md:w-[4.2rem] md:h-[4.2rem]">
                <a href="/" draggable="false">
                    <img draggable="false" src="{{ Vite::asset('resources/CyaKrik-Resources/krik-logo.png') }}"
                        alt="Logo">
                </a>
            </div>

            {{-- Hamburger Lines --}}
            <div class="md:hidden z-30">
                <button id="hamburger" class="relative w-6 h-5 flex flex-col justify-between items-center"
                    aria-label="Toggle menu">
                    <span
                        class="block w-full h-1 bg-dark-kirk rounded-xl transition-all duration-300 ease-in-out"></span>
                    <span
                        class="block w-full h-1 bg-dark-kirk rounded-xl transition-all duration-300 ease-in-out"></span>
                    <span
                        class="block w-full h-1 bg-dark-kirk rounded-xl transition-all duration-300 ease-in-out"></span>
                </button>
            </div>

            <!-- Nav Links-->
            <div id="nav-links" class="hidden md:flex space-x-3 items-center">
                <x-nav-link href="/">За нас</x-nav-link>
                <x-nav-link href="#">Услуги</x-nav-link>
                <x-nav-link href="#">Проекти</x-nav-link>
                <x-nav-link href="#">Контакт</x-nav-link>
                <a href="#"
                    class="text-font bg-dark-kirk hover:bg-purple py-2 text-[16px] font-normal rounded-2xl border-2 border-orange px-3">Донирај</a>
            </div>
        </div>

        <!-- Nav Links / Hamburger Menu Display -->
        <div id="mobile-menu"
            class="fixed top-[90px] right-0 w-[75%] h-screen bg-orange transform translate-x-full transition-transform duration-500 ease-in-out md:hidden z-10">
            <div class="flex flex-col items-start p-5 space-y-4">
                <x-nav-link href="/">За нас</x-nav-link>
                <x-nav-link href="#">Услуги</x-nav-link>
                <x-nav-link href="#">Проекти</x-nav-link>
                <x-nav-link href="#">Контакт</x-nav-link>
                <a href="#"
                    class="text-font bg-dark-kirk hover:bg-purple py-2 text-[16px] font-normal rounded-2xl border-2 border-orange px-3">Донирај</a>
            </div>
        </div>
    </nav>


    <main>
        {{ $slot }}
    </main>
</body>

</html>
