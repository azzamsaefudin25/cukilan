<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css', 'resources/js/app.js')
    <title>Dusun Krajan 2</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-bg {
            background: linear-gradient(rgba(34, 197, 94, 0.8), rgba(16, 185, 129, 0.8)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800"><rect fill="%23059669" width="1200" height="800"/><circle fill="%23065f46" cx="200" cy="200" r="100"/><circle fill="%23047857" cx="800" cy="300" r="80"/><circle fill="%23064e3b" cx="1000" cy="600" r="120"/></svg>');
            background-size: cover;
            background-position: center;
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .gradient-text {
            background: linear-gradient(135deg, #059669, #16a085);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .animate-bounce-slow {
            animation: bounce 2s infinite;
        }
    </style>
    @livewireStyles
</head>

<body class="bg-gray-50">
    @livewire('partials.header')
    {{ $slot }}

    <!-- Footer -->
    <footer class="bg-gray-800">
        {{-- <div class="container mx-auto px-4"> --}}
        {{-- <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <i class="fas fa-recycle text-2xl text-green-400"></i>
                        <h3 class="text-xl font-bold">Dusun Krajan 2</h3>
                    </div>
                    <p class="text-gray-400">Bersama membangun lingkungan yang bersih dan berkelanjutan untuk generasi
                        mendatang.</p>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Program</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition duration-300">Sosialisasi &
                                Pelatihan</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Bank Sampah Desa</a>
                        </li>
                        <li><a href="#" class="hover:text-white transition duration-300">Perdes Sampah</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Pengajuan TPS3R</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Layanan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition duration-300">Pengumpulan Sampah</a>
                        </li>
                        <li><a href="#" class="hover:text-white transition duration-300">Tabungan Sampah</a>
                        </li>
                        <li><a href="#" class="hover:text-white transition duration-300">Edukasi Lingkungan</a>
                        </li>
                        <li><a href="#" class="hover:text-white transition duration-300">Konsultasi</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Ikuti Kami</h4>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="bg-gray-700 p-2 rounded-full hover:bg-green-600 transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="bg-gray-700 p-2 rounded-full hover:bg-green-600 transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#"
                            class="bg-gray-700 p-2 rounded-full hover:bg-green-600 transition duration-300">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#"
                            class="bg-gray-700 p-2 rounded-full hover:bg-green-600 transition duration-300">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div> --}}
        {{-- </div> --}}

        <div class="border-t border-gray-700 mt-8 pt-8 pb-8 text-center text-gray-400">
            <p>&copy; 2025 Dusun Krajan 2, Desa Cukilan. Program KKNT Universitas Diponegoro</p>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#beranda"
        class="fixed bottom-4 right-4 bg-green-600 text-white p-3 rounded-full shadow-lg hover:bg-green-700 transition duration-300">
        <i class="fas fa-arrow-up"></i>
    </a>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu if open
                    mobileMenu.classList.add('hidden');
                }
            });
        });

        // Form submission handler
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Terima kasih! Pesan Anda telah dikirim. Kami akan segera menghubungi Anda.');
            this.reset();
        });
    </script>
</body>

</html>
