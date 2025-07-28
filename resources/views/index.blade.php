<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Cukilan</title>
    @vite('resources/css/app.css')
    
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
</head>

<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-recycle text-3xl text-green-600"></i>
                    <h1 class="text-2xl font-bold text-gray-800">Desa Cukilan</h1>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="#beranda" class="text-gray-700 hover:text-green-600 transition duration-300">Beranda</a>
                    <a href="#tentang" class="text-gray-700 hover:text-green-600 transition duration-300">Tentang</a>
                    <a href="#program" class="text-gray-700 hover:text-green-600 transition duration-300">Program</a>
                    <a href="#layanan" class="text-gray-700 hover:text-green-600 transition duration-300">Layanan</a>
                    <a href="#kontak" class="text-gray-700 hover:text-green-600 transition duration-300">Kontak</a>
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-700 hover:text-green-600">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-4 py-2 space-y-2">
                <a href="#beranda" class="block py-2 text-gray-700 hover:text-green-600">Beranda</a>
                <a href="#tentang" class="block py-2 text-gray-700 hover:text-green-600">Tentang</a>
                <a href="#program" class="block py-2 text-gray-700 hover:text-green-600">Program</a>
                <a href="#layanan" class="block py-2 text-gray-700 hover:text-green-600">Layanan</a>
                <a href="#kontak" class="block py-2 text-gray-700 hover:text-green-600">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="beranda" class="hero-bg text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-5xl font-bold mb-6 animate-bounce-slow">Selamat Datang di Desa Cukilan</h2>
                <p class="text-xl mb-8 opacity-90">Bersama membangun lingkungan yang bersih dan berkelanjutan melalui
                    pengelolaan sampah yang inovatif</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#program"
                        class="bg-white text-green-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition duration-300">
                        Lihat Program Kami
                    </a>
                    <a href="#kontak"
                        class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-green-600 transition duration-300">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="tentang" class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold gradient-text mb-4">Tentang Bank Sampah Desa Cukilan</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">Program KKNT yang bertujuan untuk meningkatkan
                    kesadaran masyarakat dalam pengelolaan sampah dan menciptakan lingkungan yang bersih dan sehat</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Visi & Misi Kami</h3>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="bg-green-100 p-3 rounded-full">
                                <i class="fas fa-eye text-green-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2">Visi</h4>
                                <p class="text-gray-600">Menjadikan Desa Cukilan sebagai desa yang bersih, sehat, dan
                                    berkelanjutan melalui pengelolaan sampah yang efektif</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-green-100 p-3 rounded-full">
                                <i class="fas fa-bullseye text-green-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-2">Misi</h4>
                                <p class="text-gray-600">Meningkatkan kesadaran masyarakat, mengelola sampah secara
                                    berkelanjutan, dan menciptakan nilai ekonomi dari sampah</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Statistik Bank Sampah</h3>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-600 mb-2">10+</div>
                            <div class="text-gray-600">Dusun Terlibat</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-600 mb-2">500+</div>
                            <div class="text-gray-600">Anggota Aktif</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-600 mb-2">1000</div>
                            <div class="text-gray-600">Kg Sampah/Bulan</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-600 mb-2">100%</div>
                            <div class="text-gray-600">Komitmen Bersih</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Section -->
    <section id="program" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold gradient-text mb-4">Program KKNT Desa Cukilan</h2>
                <p class="text-gray-600 text-lg">Empat program utama untuk menciptakan desa yang bersih dan
                    berkelanjutan</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Program 1 -->
                <div class="bg-white p-6 rounded-2xl shadow-lg card-hover">
                    <div class="bg-green-100 p-4 rounded-full w-16 h-16 flex items-center justify-center mb-4">
                        <i class="fas fa-chalkboard-teacher text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Sosialisasi & Pelatihan</h3>
                    <p class="text-gray-600 mb-4">Pelatihan pengelolaan sampah organik (kompos, maggot, losida) dan
                        anorganik (bank sampah)</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• Kerjasama dengan PKK</li>
                        <li>• Kerjasama dengan Karangtaruna</li>
                        <li>• Kerjasama dengan DLH Kab. Semarang</li>
                    </ul>
                </div>

                <!-- Program 2 -->
                <div class="bg-white p-6 rounded-2xl shadow-lg card-hover">
                    <div class="bg-blue-100 p-4 rounded-full w-16 h-16 flex items-center justify-center mb-4">
                        <i class="fas fa-university text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Bank Sampah Desa</h3>
                    <p class="text-gray-600 mb-4">Pembentukan sistem pengumpulan sampah anorganik dan bank sampah unit
                        desa</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• Struktur organisasi</li>
                        <li>• SK Kepala Desa</li>
                        <li>• Administrasi lengkap</li>
                        <li>• SOP pelayanan</li>
                    </ul>
                </div>

                <!-- Program 3 -->
                <div class="bg-white p-6 rounded-2xl shadow-lg card-hover">
                    <div class="bg-purple-100 p-4 rounded-full w-16 h-16 flex items-center justify-center mb-4">
                        <i class="fas fa-gavel text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Perdes Pengelolaan Sampah</h3>
                    <p class="text-gray-600 mb-4">Pembuatan peraturan desa untuk pengelolaan sampah yang berkelanjutan
                    </p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• FGD dengan perangkat desa</li>
                        <li>• Melibatkan tokoh masyarakat</li>
                        <li>• Penyusunan draft perdes</li>
                    </ul>
                </div>

                <!-- Program 4 -->
                <div class="bg-white p-6 rounded-2xl shadow-lg card-hover">
                    <div class="bg-orange-100 p-4 rounded-full w-16 h-16 flex items-center justify-center mb-4">
                        <i class="fas fa-building text-orange-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Pengajuan TPS3R</h3>
                    <p class="text-gray-600 mb-4">Pengajuan Tempat Pengolahan Sampah Reduce, Reuse, Recycle ke DLH
                        Kabupaten Semarang</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• Persiapan lahan (min 300m²)</li>
                        <li>• Pembentukan KSM</li>
                        <li>• Pembuatan proposal</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="layanan" class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold gradient-text mb-4">Layanan Bank Sampah</h2>
                <p class="text-gray-600 text-lg">Berbagai layanan untuk mendukung pengelolaan sampah yang efektif</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-lg text-center card-hover">
                    <i class="fas fa-recycle text-4xl text-green-600 mb-4"></i>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Pengumpulan Sampah</h3>
                    <p class="text-gray-600">Sistem pengumpulan sampah anorganik dari setiap dusun dengan jadwal
                        teratur</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg text-center card-hover">
                    <i class="fas fa-coins text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Tabungan Sampah</h3>
                    <p class="text-gray-600">Sistem tabungan dengan nilai tukar sampah yang menguntungkan untuk
                        masyarakat</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg text-center card-hover">
                    <i class="fas fa-graduation-cap text-4xl text-purple-600 mb-4"></i>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Edukasi Lingkungan</h3>
                    <p class="text-gray-600">Program edukasi dan pelatihan untuk meningkatkan kesadaran lingkungan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="kontak" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold gradient-text mb-4">Hubungi Kami</h2>
                <p class="text-gray-600 text-lg">Bergabunglah dengan gerakan lingkungan bersih di Desa Cukilan</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Informasi Kontak</h3>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-map-marker-alt text-green-600 text-xl"></i>
                            <div>
                                <p class="font-semibold text-gray-800">Alamat</p>
                                <p class="text-gray-600">Desa Cukilan, Kecamatan Suruh, Kabupaten Semarang, Jawa Tengah
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-phone text-green-600 text-xl"></i>
                            <div>
                                <p class="font-semibold text-gray-800">Telepon</p>
                                <p class="text-gray-600">+62 xxx-xxxx-xxxx</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-envelope text-green-600 text-xl"></i>
                            <div>
                                <p class="font-semibold text-gray-800">Email</p>
                                <p class="text-gray-600">banksampah.cukilan@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-clock text-green-600 text-xl"></i>
                            <div>
                                <p class="font-semibold text-gray-800">Jam Operasional</p>
                                <p class="text-gray-600">Senin - Jumat: 08.00 - 16.00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Kirim Pesan</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap</label>
                            <input type="text"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500"
                                placeholder="Masukkan nama lengkap">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                            <input type="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500"
                                placeholder="Masukkan email">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2">Pesan</label>
                            <textarea rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500"
                                placeholder="Tulis pesan Anda"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition duration-300">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <i class="fas fa-recycle text-2xl text-green-400"></i>
                        <h3 class="text-xl font-bold">Bank Sampah Desa Cukilan</h3>
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
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Bank Sampah Desa Cukilan. Semua hak dilindungi. | Program KKNT Universitas</p>
            </div>
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
