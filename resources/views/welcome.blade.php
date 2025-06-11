<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrajería del Automotor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans">
    <header x-data="{ open: false }">
        <!-- Navbar -->
        <nav class="flex justify-between items-center px-4 max-w-7xl mx-auto">
            <img src="/img/logo.png" alt="Logo" class="h-16 lg:h-24">
            <div class="hidden lg:block lg:space-x-6 lg:text-lg">
                <a href="#" class="text-orange-500 font-semibold">Nosotros</a>
                <a href="#" class="text-orange-500 font-semibold">Productos</a>
                <a href="#" class="text-orange-500 font-semibold">Contactos</a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
            </div>
            <button
                class="lg:hidden text-orange-500 hover:text-orange-100 hover:bg-orange-500 rounded p-1 focus:ring-2 focus:ring-slate-200"
                @click="open= !open">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </nav>
        <!-- manu mobil-->
        <div x-show="open" class="space-y-1 border-t pb-3 pt-2 lg:hidden">
            <a href="#" class="block px-3 py-2 bg-orange-500 text-white rounded-md">
                Home
            </a>
            <a href="#"
                class="block px-3 py-2 text-slate-700 hover:bg-orange-500 hover:text-white rounded-md transition-colors">
                Nosotros
            </a>
            <a href="#"
                class="block px-3 py-2 text-slate-700 hover:bg-orange-500 hover:text-white rounded-md transition-colors">
                Productos
            </a>
            <a href="#"
                class="block px-3 py-2 text-slate-700 hover:bg-orange-500 hover:text-white rounded-md transition-colors">
                Contacto
            </a>
        </div>
        <!-- fin menu mobil -->
    </header>

    <!-- Carrusel -->
    <div x-data="{
        images: [
            '{{ asset('img/slider/slider-1.jpg') }}',
            '{{ asset('img/slider/slider-2.jpg') }}',
            '{{ asset('img/slider/slider-3.jpg') }}'
        ],
        current: 0,
        interval: null,
        next() { this.current = (this.current + 1) % this.images.length },
        prev() { this.current = (this.current - 1 + this.images.length) % this.images.length },
        start() {
            this.interval = setInterval(() => { this.next() }, 3000);
        },
        stop() {
            clearInterval(this.interval);
        }
    }" x-init="start()" @mouseenter="stop()" @mouseleave="start()"
        class="bg-yellow-50 flex items-center justify-center relative">
        <button class="absolute left-4 text-3xl" @click="prev">&#10094;</button>
        <div class="text-center w-full">
            <img :src="images[current]" alt="Slider" class="w-full lg:h-96 object-cover transition-all duration-500">
        </div>
        <button class="absolute right-4 text-3xl" @click="next">&#10095;</button>
    </div>

    <main>
        <!-- Nuestros Servicios -->
        <section class="text-center mb-14 py-8 max-w-7xl mx-auto">
            <h1 class="text-2xl font-bold text-orange-500 mb-8 lg:mb-12">Nuestros Servicios</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-y-6 gap-x-4 px-8 lg:px-4">
                <div class="shadow-lg rounded-xl overflow-hidden">
                    <img src="{{ asset('img/servicios/service-1.jpg') }}" alt="" class="object-cover">
                </div>
                <div class="shadow-lg rounded-xl overflow-hidden">
                    <img src="{{ asset('img/servicios/service-2.jpg') }}" alt="" class="object-cover">
                </div>
                <div class="shadow-lg rounded-xl overflow-hidden">
                    <img src="{{ asset('img/servicios/service-3.jpg') }}" alt="" class="object-cover">
                </div>
            </div>
        </section>

        <!-- Productos Destacados -->
        <section class="text-center mb-14 py-16 bg-yellow-50">
            <h1 class="text-2xl font-bold text-yellow-600 mb-8 lg:mb-12">Productos Destacados</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-y-6 gap-x-4 px-8 lg:px-4 max-w-7xl mx-auto">
                <div class="shadow-lg rounded-xl overflow-hidden bg-white">
                    <img src="{{ asset('img/productos/prod-1.jpeg') }}" alt="">
                    <div class="p-3">
                        <h3 class="font-semibold text-gray-700">Juego Cilindro Puerta</h3>
                        <p class="text-gray-500"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea,
                            perferendis
                            libero rerum ratione, voluptatem quia dicta ...
                        </p>
                    </div>

                </div>
                <div class="shadow-lg rounded-xl overflow-hidden bg-white">
                    <img src="{{ asset('img/productos/prod-2.jpeg') }}" alt="">
                    <div class="p-3">
                        <h3 class="font-semibold text-gray-700">Juego Cilindro Puerta</h3>
                        <p class="text-gray-500"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea,
                            perferendis
                            libero rerum ratione, voluptatem quia dicta ...
                        </p>
                    </div>
                </div>
                <div class="shadow-lg rounded-xl overflow-hidden bg-white">
                    <img src="{{ asset('img/productos/prod-3.jpeg') }}" alt="">
                    <div class="p-3">
                        <h3 class="font-semibold text-gray-700">Juego Cilindro Puerta</h3>
                        <p class="text-gray-500"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea,
                            perferendis
                            libero rerum ratione, voluptatem quia dicta ...
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Catálogos de Proveedores -->
        <section class="text-center py-8">
            <h1 class="text-2xl font-bold text-orange-500 mb-8 lg:mb-12">Catálogos de Proveedores</h1>
            <div class="flex flex-col lg:flex-row justify-center space-y-4 lg:space-y-0 lg:space-x-4 px-4">
                <div class="w-full lg:w-96 h-44 border flex items-center justify-between shadow-lg rounded-lg">
                    <img src="{{ asset('img/dogsa.png') }}" alt="" class="w-full object-cover">
                </div>
                <div class="w-full lg:w-96 h-44 border flex items-center justify-between shadow-lg rounded-lg">
                    <img src="{{ asset('img/dogsa.png') }}" alt="" class="w-full object-cover">
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-200">
        <div class="flex flex-col md:flex-row justify-between items-center p-4 mt-8  max-w-7xl mx-auto">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-24 mb-4 md:mb-0">
            <div class="text-sm text-gray-700">
                <p>Teléfonos: 3624-444455</p>
                <p>Email: cerrajeríadelautomotore@hotmail.com</p>
            </div>
        </div>


    </footer>
    <script src="//unpkg.com/alpinejs" defer></script>
</body>

</html>
