<div>
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
        class="flex items-center lg:mb-16 justify-center relative">
        <button class="absolute left-4 text-3xl" @click="prev">&#10094;</button>
        <div class="text-center w-full">
            <img :src="images[current]" alt="Slider" class="w-full lg:h-96 object-cover transition-all duration-500">
        </div>
        <button class="absolute right-4 text-3xl" @click="next">&#10095;</button>
    </div>

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
    <h1 class="text-2xl font-bold text-orange-500 mb-8 lg:mb-12">Productos Destacados</h1>
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
<section class="text-center py-8 mb-16">
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
</div>
