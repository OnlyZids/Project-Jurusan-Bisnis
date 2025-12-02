<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurusan Bisnis - Politeknik Negeri Jember</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo_polije.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://rawcdn.githack.com/nextapps-de/spotlight/0.7.8/dist/spotlight.bundle.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- Header NAV CONTAINER -->
<div class="header-nav-container">
    <div class="header">
        
        <div class="header-left">
            <div class="logo-container">
                <img src="{{ asset('images/polije.png') }}" alt="Logo Polije">
            </div>
            <div class="header-title">
                <h1>Jurusan Bisnis</h1>
                <h2>POLITEKNIK NEGERI JEMBER</h2>
            </div>
        </div>

<div class="nav" id="mainNav">
    <a href="{{ route('beranda') }}">PROFIL BISNIS</a>
    <div class="nav-item">
        <div class="nav-link" onclick="toggleDropdown(this)">
            PROGRAM STUDI <span class="dropdown-arrow">▼</span>
        </div>
        <div class="dropdown-menu">
            @foreach ($allProgramStudis as $prodi)
                {{-- PERBAIKAN: Typo <a> menjadi </a> --}}
                <a class="dropdown-item" href="{{ route('prodi.detail', $prodi->slug) }}">
                    {{ $prodi->nama_prodi }} ({{ $prodi->jenjang }})
                </a>
            @endforeach
        </div>
    </div>

    <div class="nav-item">
        <div class="nav-link" onclick="toggleDropdown(this)">
            AKADEMIK <span class="dropdown-arrow">▼</span>
        </div>
        <div class="dropdown-menu">
            @foreach ($kategoriAkademik as $item)
                <a class="dropdown-item" href="{{ route('akademik', ['kategori' => Str::slug($item->kategori)]) }}">
                    {{ $item->kategori }}
                </a>
            @endforeach
        </div>
    </div>

    <div class="nav-item">
        <div class="nav-link" onclick="toggleDropdown(this)">
            FASILITAS <span class="dropdown-arrow">▼</span>
        </div>
        <div class="dropdown-menu">
            @foreach ($kategoriFasilitas as $item)
                <a class="dropdown-item" href="{{ route('fasilitas', ['kategori' => Str::slug($item->kategori)]) }}">
                    {{ $item->kategori }}
                </a>
            @endforeach
            
            <div class="dropdown-divider"></div> 
            
            <a class="dropdown-item" href="{{ route('fasilitas') }}">
                Lihat Semua Fasilitas
            </a>
        </div>
    </div>

    <div class="nav-item">
        <div class="nav-link" onclick="toggleDropdown(this)">
            CIVITAS <span class="dropdown-arrow">▼</span>
        </div>
        <div class="dropdown-menu">
            {{-- PERBAIKAN: Tambahkan class="dropdown-item" agar rapi --}}
            <a class="dropdown-item" href="{{ route('dosen') }}">Dosen</a>
            <a class="dropdown-item" href="{{ route('staf') }}">Staf Teknisi</a>
            <a class="dropdown-item" href="https://www.instagram.com/hmjbisnis?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">HMJ</a>
        </div>
    </div>

    <!-- <div class="nav-item">
        <div class="nav-link" onclick="toggleDropdown(this)">
            INFORMASI <span class="dropdown-arrow">▼</span>
        </div>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('artikel') }}">Artikel & Berita</a>
            <a class="dropdown-item" href="{{ route('prestasi') }}">Prestasi</a>
        </div>
    </div> -->

    <a href="{{ Request::is('/') ? '#kontak' : url('/#kontak') }}">KONTAK</a>
</div>
        <div class="mobile-menu-toggle" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div>
    </div>
 <!-- END HEADER-NAV-CONTAINER -->


    <!-- Hero Section -->
              @yield('content')
    <!-- END HERO SECTION -->
     
    <!-- About Section FOOTER -->
    <div class="about-section">
        <!-- KOLOM KIRI: Tentang Kami -->
        <div class="about-content">
            <h2>Tentang Kami</h2>
            <div class="about-logos">
                <img src="{{ asset('images/polije.png') }}" alt="Logo Polije">
            </div>
            <h3>Jurusan Bisnis</h3>
            <h4>POLITEKNIK NEGERI JEMBER</h4>
            <div class="disclaimer">
                <p>Jika ada pesan, kesan, kritik dan saran atau ada artikel yang kurang layak dipublikasikan. Silahkan hubungi saya melalui kontak form hubungi kami diatas atau email kami.</p>
            </div>
        </div>

        <!-- KOLOM TENGAH: Link Terkait Lainnya -->
        <div class="link-section">
            <h2>Link Terkait Lainnya</h2>
            
            <ul class="link-list">
                <li><a href="https://www.polije.ac.id" target="_blank">Situs Politeknik Negeri Jember</a></li>
                <li><a href="#" target="_blank">PERPUSTAKAAN</a></li>
                
                <li><a href="https://sim.polije.ac.id" target="_blank">SIM-Online Mahasiswa</a></li>
                <li><a href="#" target="_blank">PUBLIKASI</a></li>
                
                <li><a href="#" target="_blank">SI Rencana Anggaran</a></li>
                <li><a href="#" target="_blank">PINTU POLIJE</a></li>
                
                <li><a href="#" target="_blank">SI Akademik</a></li>
                <li><a href="#" target="_blank">PENA POLIJE</a></li>
                
                <li><a href="#" target="_blank">SI Kepegawaian</a></li>
                <li><a href="#" target="_blank">SSO POLIJE</a></li>
                
                <li><a href="#" target="_blank">SI Keuangan</a></li>
                <li><a href="#" target="_blank">E-LEARNING POLIJE</a></li>
            </ul>
        </div>

        <!-- KOLOM KANAN: Partnership -->
        <div class="partnership">
            <h2>Partnership</h2>
            <div class="partner-grid">
                <div class="partner-logo">
                    <img src="{{ asset('images/1.png') }}" alt="OJK - Otoritas Jasa Keuangan">
                </div>
                <div class="partner-logo">
                    <img src="{{ asset('images/2.png') }}" alt="Sembilan Bintang Lestari">
                </div>
                <div class="partner-logo">
                    <img src="{{ asset('images/3.png') }}" alt="Tugu Monument">
                </div>
                <div class="partner-logo">
                    <img src="{{ asset('images/4.png') }}" alt="Kementerian">
                </div>
                <div class="partner-logo">
                    <img src="{{ asset('images/5.png') }}" alt="IAI Wilayah Jawa Timur">
                </div>
            </div>
        </div>
    </div>

<!-- Footer -->
    <div class="footer">
        <p>© Copyright <strong>Jurusan Bisnis Polije.</strong></p>
        <div class="social-links">
            <a href="https://www.youtube.com" target="_blank" aria-label="YouTube">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="https://www.instagram.com/cemmilz.official" target="_blank" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com/people/Cemmilz-Cemmilz/61573141784700" target="_blank" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
        </div>
    </div>
  <!-- INI JAVA SCRIPT UNTUK TOGLE MENU -->
   <script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.querySelector('.mobile-menu-toggle');
        const navMenu = document.querySelector('.nav');
        const navLinks = document.querySelectorAll('.nav-link');

        // 1. Toggle Menu Utama (Hamburger)
        menuToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            navMenu.classList.toggle('active');
            
            // Toggle body scroll
            if (navMenu.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });

        // 2. Toggle Dropdown (Sub-menu) khusus Mobile
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                // Cek apakah sedang di mode mobile (sesuai CSS media query 1200px)
                if (window.innerWidth <= 1200) {
                    const parentItem = this.parentElement;
                    
                    // Cek apakah item ini punya dropdown
                    if (parentItem.querySelector('.dropdown-menu')) {
                        e.preventDefault(); // Cegah link pindah halaman dulu
                        
                        // (Opsional) Tutup dropdown lain jika ingin accordion style
                        // document.querySelectorAll('.nav-item').forEach(item => {
                        //    if (item !== parentItem) item.classList.remove('active');
                        // });

                        parentItem.classList.toggle('active');
                    }
                }
            });
        });

        // 3. Tutup menu saat klik di luar area
        document.addEventListener('click', function(e) {
            if (window.innerWidth <= 1200 && navMenu.classList.contains('active')) {
                if (!navMenu.contains(e.target) && !menuToggle.contains(e.target)) {
                    navMenu.classList.remove('active');
                    menuToggle.classList.remove('active');
                    document.body.style.overflow = '';
                }
            }
        });

        // 4. Reset saat layar dibesarkan (Resize)
        window.addEventListener('resize', function() {
            if (window.innerWidth > 1200) {
                navMenu.classList.remove('active');
                menuToggle.classList.remove('active');
                document.body.style.overflow = '';
                document.querySelectorAll('.nav-item').forEach(item => {
                    item.classList.remove('active');
                });
            }
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- animasi AOS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init({
    duration: 800, /* Kecepatan animasi (800ms = agak lambat & halus) */
    once: true,    /* Animasi cuma sekali pas scroll ke bawah (biar ga pusing) */
    offset: 100,   /* Memicu animasi sedikit sebelum elemen terlihat */ 
    easing: 'ease-in-out', /* Gerakannya luwes */
  });
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">

    </script>
</body>
</html>