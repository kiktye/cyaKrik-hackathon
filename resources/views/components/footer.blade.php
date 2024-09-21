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

    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <footer class="bg-black text-white p-10 rounded-t-lg absolute bottom-0 w-100">
    <div class="container mx-auto my-5 ">
        <!-- Top Section for Newsletter -->
        <div class="flex justify-between items-center border-b-2 border-gray pb-5 mb-6">
            <!-- Newsletter Title -->
            <h1 class="font-bold text-5xl mb-8 basis-1/4">Monthly Newsletter</h1>
            <!-- Newsletter Text -->
            <div class="text-white text-opacity-80 text-sm mb-2 basis-1/4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas ipsa non ex dignissimos sequi numquam itaque fuga asperiores similique labore?</div>
            <!-- Newsletter Form -->
            <div class="flex flex-col">
                <input type="email" placeholder="Your Email" class="bg-transparent border border-white py-2 px-6 basis-2/3 rounded-full">
                <button class="bg-orange-500 py-2 px-6 rounded-r-lg  font-bold">Sign Up</button>
            </div>
        </div>

        <!-- Bottom Section for Additional Links and Contacts -->
        <div class="grid grid-cols-3 gap-4 pt-5">
            <!-- Contact Us -->
            <div>
                <h2 class="text-xl font-bold mb-2">Contact Us</h2>
                <input type="text" placeholder="Your Name" class="bg-transparent border border-white p-2 mb-2 w-full rounded-full">
                <input type="email" placeholder="Your Email" class="bg-transparent border border-white p-2 mb-2 w-full rounded-full">
                <button class="bg-orange-500 py-2 px-6 w-full text-black font-bold">CTA</button>
            </div>

            <!-- Join Us -->
            <div>
                <h2 class="text-xl font-bold mb-2">Join Us</h2>
                <p class="text-sm mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris. <a href="#" class="text-orange-500">[Link]</a></p>
            </div>

            <!-- About Us -->
            <div>
                <h2 class="text-xl font-bold mb-2">About Krik</h2>
                <p class="text-sm mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in volutpat erat.</p>
                <!-- Social Icons -->
                <div class="flex space-x-4">
                    <a href="#" class="text-white"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" class="text-white"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="text-white"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="text-white"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

