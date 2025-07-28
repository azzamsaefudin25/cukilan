<div>
    <!-- Navbar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-leaf text-3xl text-green-600"></i>
                    <h1 class="text-2xl font-bold text-gray-800">Dusun Krajan 2</h1>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="#beranda" class="text-gray-700 hover:text-green-600 transition duration-300">Beranda</a>
                    <a href="#tentang" class="text-gray-700 hover:text-green-600 transition duration-300">Tentang
                        Dusun</a>
                    <a href="#program" class="text-gray-700 hover:text-green-600 transition duration-300">Produk
                        Besek</a>
                </div>
                <div class="md:hidden">
                    <button wire:click="toggleMenu" class="text-gray-700 hover:text-green-600 focus:outline-none">
                        @if ($menuTerbuka)
                            <i class="fas fa-times text-xl"></i>
                        @else
                            <i class="fas fa-bars text-xl"></i>
                        @endif
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Overlay -->
    @if ($menuTerbuka)
        <div wire:click="toggleMenu" class="fixed inset-0 bg-black bg-opacity-50 z-40 transition-opacity duration-300"
            style="overflow: hidden;">
        </div>
    @endif

    <!-- Mobile Menu -->
    @if ($menuTerbuka)
        <div
            class="fixed top-0 right-0 h-full w-80 max-w-[85vw] bg-white shadow-2xl z-50 transform transition-transform duration-300 md:hidden">
            <!-- Mobile Menu Header -->
            <div class="flex justify-between items-center p-4 border-b border-gray-200">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-recycle text-2xl text-green-600"></i>
                    <h2 class="text-lg font-bold text-gray-800">Menu</h2>
                </div>
                <button wire:click="toggleMenu" class="text-gray-700 hover:text-green-600">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <!-- Mobile Menu Content -->
            <div class="p-4">
                <div class="space-y-4">
                    <a href="#beranda" wire:click="toggleMenu"
                        class="flex items-center space-x-3 py-3 px-4 text-gray-700 hover:text-green-600 hover:bg-green-50 rounded-lg transition duration-300">
                        <i class="fas fa-home w-5"></i>
                        <span>Beranda</span>
                    </a>

                    <a href="#tentang" wire:click="toggleMenu"
                        class="flex items-center space-x-3 py-3 px-4 text-gray-700 hover:text-green-600 hover:bg-green-50 rounded-lg transition duration-300">
                        <i class="fas fa-info-circle w-5"></i>
                        <span>Tentang Dusun</span>
                    </a>

                    <a href="#program" wire:click="toggleMenu"
                        class="flex items-center space-x-3 py-3 px-4 text-gray-700 hover:text-green-600 hover:bg-green-50 rounded-lg transition duration-300">
                        <i class="fas fa-shopping-basket w-5"></i>
                        <span>Produk Besek</span>
                    </a>
                </div>
            </div>
        </div>
    @endif

    <!-- Script untuk scroll lock -->
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('menuToggled', (menuTerbuka) => {
                if (menuTerbuka) {
                    document.body.style.overflow = 'hidden';
                } else {
                    document.body.style.overflow = '';
                }
            });
        });
    </script>
</div>
