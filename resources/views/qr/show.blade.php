<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Service Center</title>
    <link href="{{ asset('build/assets/app-CVlZIbOT.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-900 text-white min-h-screen flex flex-col">

    {{-- Header --}}
    <header class="bg-black py-4 px-6 flex items-center justify-between shadow-lg">
        <div class="text-orange-500 text-2xl font-bold">MEP</div>
        <nav class="hidden md:flex space-x-6 text-sm uppercase tracking-wide">
            <a href="#" class="hover:text-orange-400 transition-colors duration-200">Process Kitchen </a>
            <a href="#" class="hover:text-orange-400 transition-colors duration-200">Testimonials</a>
            <a href="#" class="hover:text-orange-400 transition-colors duration-200">Experience</a>
            <a href="#" class="hover:text-orange-400 transition-colors duration-200">Questions</a>
            <a href="#" class="hover:text-orange-400 transition-colors duration-200">Jobs</a>
            <a href="#" class="hover:text-orange-400 transition-colors duration-200">Shop</a>
        </nav>
        <button id="mobile-menu-button" class="md:hidden text-white p-2">
            <i class="fas fa-bars text-xl"></i>
        </button>
    </header>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden bg-black w-full absolute z-10 shadow-lg top-16">
        <nav class="flex flex-col py-4 px-6 space-y-4 text-sm uppercase tracking-wide">
            <a href="#" class="hover:text-orange-400 transition-colors duration-200">Process Kitchen </a>
            <a href="#" class="hover:text-orange-400 transition-colors duration-200">Testimonials</a>
            <a href="#" class="hover:text-orange-400 transition-colors duration-200">Experience</a>
            <a href="#" class="hover:text-orange-400 transition-colors duration-200">Questions</a>
            <a href="#" class="hover:text-orange-400 transition-colors duration-200">Jobs</a>
            <a href="#" class="hover:text-orange-400 transition-colors duration-200">Shop</a>
        </nav>
    </div>

    {{-- Banner --}}
    <div class="w-full relative">
        <img src="https://images.unsplash.com/photo-1551887196-72e32bfc7bf3?q=80&w=3129&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
             alt="Banner"
             class="w-full h-72 object-cover object-[center_65%]">
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-70"></div>
    </div>
    @if($deviceNotFound)
    <div class="flex flex-col items-center justify-center text-center p-6">
        <h1 class="text-2xl font-bold text-orange-600 mb-4">Code not found</h1>
        <p class="text-gray-600">The QR code you scanned doesn't match any registered device.</p>
    </div>
    @else

    {{-- Main Content --}}
    <main class="flex-grow">
        {{-- Device Info Section --}}
        <section class="px-6 py-10 max-w-4xl mx-auto space-y-10">
            {{-- Title --}}
            <div class="text-center mb-8">
                <h1 class="text-3xl md:text-4xl font-bold">Mise en place® – Service Center</h1>
                <div class="w-24 h-1 bg-orange-500 mx-auto mt-4"></div>
            </div>

            {{-- Device Info Card --}}
            <div class="bg-gray-800 rounded-lg shadow-xl p-6 border border-gray-700">
                <h2 class="text-xl font-semibold mb-4 text-orange-400">Device Information</h2>
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between border-b border-gray-700 pb-3">
                        <span class="text-gray-400 font-medium">Device type</span>
                        <span class="text-white font-medium">{{ $device->name }}</span>
                    </div>
                    <div class="flex justify-between border-b border-gray-700 pb-3">
                        <span class="text-gray-400 font-medium">Serial number</span>
                        <span class="text-white font-medium">{{ $device->serial_number }}</span>
                    </div>
                    <div class="flex justify-between border-b border-gray-700 pb-3">
                        <span class="text-gray-400 font-medium">Location</span>
                        <span class="text-white font-medium">{{ $device->address }}</span>
                    </div>
                    <div class="flex justify-between border-b border-gray-700 pb-3">
                        <span class="text-gray-400 font-medium">Warranty until</span>
                        <span class="text-white font-medium">{{ \Carbon\Carbon::parse($device->delivery_date)->format('F d, Y') }}</span>
                    </div>
                </div>
            </div>

            {{-- Report Form --}}
            <div class="bg-gray-800 rounded-lg shadow-xl p-6 border border-gray-700">
                <h2 class="text-xl font-semibold mb-4 text-orange-400">Report a Problem</h2>
                <form class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" placeholder="Your Name"
                               class="w-full p-3 rounded border border-gray-600 bg-gray-800 text-white placeholder-gray-400 focus:border-orange-500 focus:outline-none transition-colors">
                        <input type="email" placeholder="Your Email"
                               class="w-full p-3 rounded border border-gray-600 bg-gray-800 text-white placeholder-gray-400 focus:border-orange-500 focus:outline-none transition-colors">
                    </div>
                    <input type="tel" placeholder="Your Phone"
                           class="w-full p-3 rounded border border-gray-600 bg-gray-800 text-white placeholder-gray-400 focus:border-orange-500 focus:outline-none transition-colors">
                    <textarea placeholder="Describe the issue" rows="4"
                              class="w-full p-3 rounded border border-gray-600 bg-gray-800 text-white placeholder-gray-400 focus:border-orange-500 focus:outline-none transition-colors"></textarea>
                    <button type="submit" disabled
                            class="w-full bg-gray-600 text-white py-3 rounded opacity-60 cursor-not-allowed hover:bg-gray-700 transition-colors">
                        Submit (demo only)
                    </button>
                </form>
            </div>
        </section>
    </main>
    @endif

    {{-- Footer --}}
    <footer class="bg-orange-600 text-white py-10 px-6 mt-auto">
        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h2 class="text-2xl font-bold">MEP</h2>
                <p class="text-sm mt-2 text-orange-100">Mise en Place Gastro Solutions GmbH & Co. KG</p>
            </div>

            <div class="text-sm space-y-2 text-orange-100">
                <p><i class="fas fa-map-marker-alt mr-2"></i> Philosophenweg 21</p>
                <p>47051 Duisburg</p>
                <p><i class="fas fa-phone mr-2"></i> +49 203 2982219</p>
                <p><i class="fas fa-envelope mr-2"></i> info@miseenplace24.com</p>
            </div>

            <div class="flex items-center gap-6 text-white">
                <a href="#" aria-label="Facebook" class="hover:text-orange-200 transition-colors">
                    <i class="fab fa-facebook-f fa-lg"></i>
                </a>
                <a href="#" aria-label="LinkedIn" class="hover:text-orange-200 transition-colors">
                    <i class="fab fa-linkedin-in fa-lg"></i>
                </a>
                <a href="#" aria-label="YouTube" class="hover:text-orange-200 transition-colors">
                    <i class="fab fa-youtube fa-lg"></i>
                </a>
                <a href="#" aria-label="Instagram" class="hover:text-orange-200 transition-colors">
                    <i class="fab fa-instagram fa-lg"></i>
                </a>
                <a href="#" aria-label="Xing" class="hover:text-orange-200 transition-colors">
                    <i class="fab fa-xing fa-lg"></i>
                </a>
            </div>
        </div>
        <div class="max-w-4xl mx-auto mt-8 pt-6 border-t border-orange-500 text-center text-sm text-orange-200">
            <p> {{ date('Y') }} Mise en Place Gastro Solutions. All rights reserved.</p>
        </div>
    </footer>

</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        menuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>
</html>
