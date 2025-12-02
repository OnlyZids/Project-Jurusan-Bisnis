

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/style1.css')); ?>">
<style>
    body {
        font-family: "Poppins", sans-serif;
        background-color: #f9f9fb;
        color: #333;
    }

    /* ===== HERO SECTION ===== */
    .hero-section {
        background-image: url('<?php echo e(asset('images/bisnis.jpg')); ?>');
        background-size: cover;
        background-position: center;
        height: 800px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    .hero-content h1 {
        font-size: 48px;
        font-weight: 800;
    }

    .hero-content p {
        font-size: 18px;
        margin-top: 10px;
    }

    /* ===== FOOTER ===== */
    footer {
        text-align: center;
        background: #002c6a;
        color: white;
        padding: 25px 0;
        margin-top: 80px;
    }

    .hover-card {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .hover-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
        }
        .hover-card:hover img {
            transform: scale(1.05);
        }

        /* === STYLE KHUSUS KONTAK === */
        /* === STYLE KONTAK === */
    .contact-section {
        background: linear-gradient(90deg, #020266 0%, #0a1f5c 100%);
        color: white;
        padding: 80px 0;
        position: relative;
        border-bottom: 5px solid #fbbf24; /* Garis Emas Tebal di bawah */
        z-index: 10; /* Biar posisinya di atas footer */
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }

    /* Input Style Modern */
    .form-control-custom {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: white;
        padding: 12px 20px;
        border-radius: 10px;
        transition: all 0.3s;
    }

    .form-control-custom:focus {
        background: rgba(255, 255, 255, 0.2);
        border-color: #fbbf24;
        color: white;
        box-shadow: none;
        outline: none;
    }

    /* Placeholder warna putih transparan */
    .form-control-custom::placeholder {
        color: rgba(255, 255, 255, 0.6);
    }

    .btn-submit {
        background: #fbbf24;
        color: #0a1f5c;
        font-weight: 800;
        padding: 12px 30px;
        border-radius: 50px;
        border: none;
        transition: all 0.3s;
        width: 100%;
    }

    .btn-submit:hover {
        background: white;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    .contact-info-box {
        background: rgba(255, 255, 255, 0.05);
        padding: 30px;
        border-radius: 20px;
        border: 1px solid rgba(255,255,255,0.1);
    }

    .info-item {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        gap: 15px;
    }

    .info-icon {
        width: 40px; height: 40px;
        background: rgba(251, 191, 36, 0.2);
        color: #fbbf24;
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
    }



        .struktur-img-hover:hover {
        transform: scale(1.01); /* Efek zoom in sedikit saat di-hover */
        box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
    }
    .struktur-wrapper {
        transition: all 0.3s ease;
    }
    .struktur-wrapper:hover {
        box-shadow: 0 15px 40px rgba(0,0,0,0.15) !important;
        border-color: #fbbf24 !important; /* Border jadi kuning emas */
    }
</style>


<section class="hero-section" data-aos="fade-up">
    <div class="hero-overlay"></div>
    <div class="hero-content">                   
    
    <?php if(session('success')): ?>

        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
            <i class="fas fa-check-circle me-2"></i> <?php echo e(session('success')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
        <h1 >Selamat Datang di Jurusan Bisnis</h1>
        <p>Politeknik Negeri Jember</p>
    </div>
</section>




<div class="container my-5" id="profil">
    <h2 class="text-center fw-bold mb-5" style="color: #000033; font-size: 2rem;" data-aos="fade-up">
        PROFIL JURUSAN BISNIS
    </h2>
    <div class="row g-5 align-items-center">
        <div class="col-lg-7">
            <p class="lead" style="font-size: 1.1rem; line-height: 1.8; color: #333;">
                Jurusan Bisnis berdiri pada bulan Mei Tahun 2023 berdasarkan Surat Keputusan 
                Direktur Politeknik Negeri Jember Nomor: 6753/PL17/KP/SK/2023. 
                Jurusan ini terdiri dari 3 Program Studi yaitu:
            </p>    

            <ol class="mb-4" style="font-size: 1.1rem; color: #333; padding-left: 20px;">
                <li class="mb-2">D-IV Program Studi Akuntansi Sektor Publik</li>
                <li class="mb-2">D-IV Program Studi Manajemen Pemasaran Internasional</li>
                <li class="mb-2">D-IV Bisnis Digital Kampus 2 Bondowoso</li>
            </ol>

            <h3 class="fw-bold" style="color: #000033;"  data-aos="fade-right">VISI</h3>
            <p style="font-size: 1.1rem; font-style: italic; color: #555;">
                "Menjadi Jurusan Bisnis yang unggul bertaraf Internasional Tahun 2035"
            </p>

            <h3 class="fw-bold mt-4" style="color: #000033;"  data-aos="fade-right">MISI</h3>
            <ol style="font-size: 1rem; line-height: 1.6; color: #333; padding-left: 20px;">
                <li class="mb-2">Meningkatkan Pendidikan Vokasi di bidang Bisnis yang inovatif dan berdaya saing</li>
                <li class="mb-2">Meningkatkan penelitian terapan, pengabdian kepada masyarakat dan kewirausahaan di bidang Bisnis</li>
                <li class="mb-2">Mewujudkan tata kelola yang baik di jurusan bisnis</li>
                <li class="mb-2">Mengembangkan Kerjasama Tingkat Nasional maupun Internasional</li>
            </ol>

        </div>
            <div class="col-lg-5" data-aos="fade-left">
                <img src="<?php echo e(asset('images/j bisnis.jpg')); ?>" 
                    alt="Gedung Jurusan Bisnis" 
                    class="img-fluid rounded-4 shadow-lg w-100"
                    style="height: 450px; object-fit: cover;"> 
            </div>
    </div>
</div>
 


    
<div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold" style="color: #000033; border-left: 5px solid #e02424; padding-left: 15px;">
                BERITA TERBARU
            </h2>
            <a href="<?php echo e(route('artikel')); ?>" class="btn btn-outline-primary btn-sm rounded-pill px-4">
                Lihat Semua <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>

        <div class="row g-4">
            <?php $__currentLoopData = $latestArtikels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="<?php echo e($loop->iteration * 100); ?>">
                <div class="card h-100 shadow-sm border-0 hover-card">
                    
                    <div class="overflow-hidden rounded-top" style="height: 200px;">
                        <img src="<?php echo e(asset('storage/' . $item->thumbnail)); ?>" 
                             class="card-img-top w-100 h-100" 
                             alt="<?php echo e($item->judul); ?>" 
                             style="object-fit: cover; transition: transform 0.3s;">
                    </div>
                    
                    <div class="card-body d-flex flex-column">
                        <small class="text-muted mb-2">
                            <i class="far fa-calendar-alt me-1"></i> <?php echo e($item->tanggal_publish->format('d M Y')); ?>

                        </small>

                        <h5 class="card-title fw-bold mb-3">
                          <h5 class="card-title fw-bold"> <?php echo e(Str::limit($item->judul, 60)); ?></h5>
                        </h5>
                        
                        <p class="card-text text-muted small">
                            <?php echo Str::limit(strip_tags($item->konten), 80); ?>

                        </p>
                        <a href="<?php echo e(route('artikel.detail', $item->slug)); ?>" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    

    
    <div class="py-5" style="background-color: #f8f9fa;"> 
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold" style="color: #000033; border-left: 5px solid #fbbf24; padding-left: 15px;">
                    PRESTASI KAMI
                </h2>
                <a href="<?php echo e(route('prestasi')); ?>" class="btn btn-outline-primary btn-sm rounded-pill px-4">
                    Lihat Semua <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>

            <div class="row g-4">
                <?php $__currentLoopData = $latestPrestasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="<?php echo e($loop->iteration * 100); ?>">
                    <div class="card h-100 shadow border-0">
                        <div class="position-relative" style="height: 220px;">
                            
                            <div class="position-absolute top-0 end-0 m-3 z-1">
                                <span class="badge bg-warning text-dark shadow-sm"><?php echo e($item->tingkat); ?></span>
                            </div>
                            <img src="<?php echo e(asset('storage/' . $item->foto)); ?>" 
                                 class="card-img-top w-100 h-100" 
                                 style="object-fit: cover;" 
                                 alt="<?php echo e($item->judul); ?>">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title fw-bold" style="color: #000033;">
                                <a href="<?php echo e(route('prestasi.detail', $item->slug)); ?>" class="text-decoration-none text-reset stretched-link">
                                    <?php echo e(Str::limit($item->judul, 50)); ?>

                                </a>
                            </h5>
                            <p class="card-text mb-1 text-primary fw-bold">
                                <i class="fas fa-trophy me-2"></i> <?php echo e($item->pemenang); ?>

                            </p>
                            <small class="text-muted">
                                <i class="far fa-calendar-alt me-1"></i> <?php echo e($item->tanggal->format('d F Y')); ?>

                            </small>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    


 
<section id="struktur-organisasi" class="struktur-section py-5" style="background-color: #f8f9fa;">
    <div class="container" data-aos="fade-up">
        
        
        <div class="section-header text-center mb-5">
            <h2 class="fw-bold text-uppercase" style="color: #000033; letter-spacing: 1px;">
                STRUKTUR ORGANISASI
            </h2>
            <div class="divider mx-auto mt-3" style="width: 80px; height: 4px; background: #fbbf24; border-radius: 2px;"></div>
            <p class="text-muted mt-3">
                Struktur kepemimpinan dan tata kelola Jurusan Bisnis Politeknik Negeri Jember.
            </p>
        </div>

        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="struktur-wrapper shadow-sm rounded-4 overflow-hidden bg-white p-3 border">
                    <a class="spotlight" 
                       href="<?php echo e(asset('images/struktur.jpg')); ?>"
                       data-title="Struktur Organisasi Jurusan Bisnis" 
                       data-description="Klik untuk memperbesar dan melihat detail struktur.">
                        
                        <img src="<?php echo e(asset('images/struktur.jpg')); ?>"
                             class="img-fluid w-100 rounded-3 struktur-img-hover" 
                             alt="Bagan Struktur Organisasi Jurusan Bisnis"
                             style="cursor: zoom-in; transition: transform 0.3s ease;">
                    </a>

                    <div class="text-center mt-3 text-muted fst-italic small">
                        <i class="fas fa-search-plus me-1"></i> Klik gambar untuk memperbesar
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>




<section id="kontak" class="contact-section">
    <div class="container">
        
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: #fbbf24;">HUBUNGI KAMI</h2>
            <p style="opacity: 0.8;">Punya pertanyaan? Kirimkan pesan Anda kepada kami.</p>
        </div>

        <div class="row g-5 align-items-center">
            
            
            <div class="col-lg-5">
                <div class="contact-info-box">
                    <h4 class="fw-bold mb-4">Informasi Kontak</h4>
                    
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <strong>Alamat:</strong><br>
                            Jl. Mastrip, Kotak Pos 164, Jember
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-phone-alt"></i></div>
                        <div>
                            <strong>Telepon:</strong><br>
                            (0331) 333532
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <strong>Email:</strong><br>
                            bisnis@polije.ac.id
                        </div>
                    </div>

                    <hr style="border-color: rgba(255,255,255,0.2);">
                </div>
            </div>

            
            <div class="col-lg-7">
                
                <form action="<?php echo e(route('kirim.pesan')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="mb-2 fw-bold small">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control form-control-custom" placeholder="Nama Anda" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="mb-2 fw-bold small">Alamat Email</label>
                            <input type="email" name="email" class="form-control form-control-custom" placeholder="email@contoh.com" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="mb-2 fw-bold small">Subjek / Perihal</label>
                        <input type="text" name="subjek" class="form-control form-control-custom" placeholder="Contoh: Pertanyaan Pendaftaran" required>
                    </div>

                    <div class="mb-4">
                        <label class="mb-2 fw-bold small">Pesan Anda</label>
                        <textarea name="pesan" rows="5" class="form-control form-control-custom" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
                    </div>

                    <button type="submit" class="btn-submit">
                        <i class="fas fa-paper-plane me-2"></i> KIRIM PESAN
                    </button>
                </form>
                

            </div>

        </div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\Documents\laragon\www\jurusan_bisnis\resources\views/beranda.blade.php ENDPATH**/ ?>