

<?php $__env->startSection('content'); ?>
<div class="prodi-banner">
    <img src="<?php echo e(asset('storage/' . $prodi->foto_banner)); ?>" alt="<?php echo e($prodi->nama_prodi); ?>">
    <div class="prodi-banner-overlay"></div>
    <div class="prodi-banner-content">
        <span class="badge"><?php echo e($prodi->jenjang); ?></span>
        <h1><?php echo e($prodi->nama_prodi); ?></h1>
    </div>
</div>

<div class="container my-5">
    <div class="row g-4">
        <div class="col-lg-8">
            
            <div id="tab-force-wrapper">
                <div class="bg-tabs-container">
                    <ul class="nav nav-pills" id="prodiTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tujuan-tab" data-bs-toggle="tab" data-bs-target="#tujuan-content" type="button" role="tab">Tujuan Utama</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profil-tab" data-bs-toggle="tab" data-bs-target="#profil-content" type="button" role="tab">Profil Lulusan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="matkul-tab" data-bs-toggle="tab" data-bs-target="#matkul-content" type="button" role="tab">Mata Kuliah</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="akreditasi-tab" data-bs-toggle="tab" data-bs-target="#akreditasi-content" type="button" role="tab">Akreditasi</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-content content-box" id="prodiTabContent">
                <div class="tab-pane fade show active" id="tujuan-content" role="tabpanel">
                    <h3>Visi & Misi</h3>
                    <div><?php echo $prodi->visi_misi; ?></div>
                    <h3>Tujuan</h3>
                    <div><?php echo $prodi->tujuan; ?></div>
                </div>
                <div class="tab-pane fade" id="profil-content" role="tabpanel">
                    <h3>Profil Lulusan</h3>
                    <div><?php echo $prodi->profil_lulusan; ?></div>
                </div>
                <div class="tab-pane fade" id="matkul-content" role="tabpanel">
                    <h3>Struktur Mata Kuliah</h3>
                    <?php if($prodi->gambar_mata_kuliah): ?>
                        <img src="<?php echo e(asset('storage/' . $prodi->gambar_mata_kuliah)); ?>" class="img-fluid" alt="Struktur Mata Kuliah">
                    <?php endif; ?>
                    <p class="mt-3"><?php echo e($prodi->keterangan_mata_kuliah); ?></p>
                </div>
                <div class="tab-pane fade" id="akreditasi-content" role="tabpanel">
                    <h3>Akreditasi</h3>
                    <?php if($prodi->gambar_akreditasi): ?>
                        <img src="<?php echo e(asset('storage/' . $prodi->gambar_akreditasi)); ?>" class="img-fluid" alt="Sertifikat Akreditasi">
                    <?php endif; ?>
                    <p class="mt-3"><?php echo e($prodi->keterangan_akreditasi); ?></p>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="sidebar-card">
                <h4>Informasi Program Studi</h4>
                <div class="info-row">
                    <span class="lbl">Jenjang</span>
                    <span class="info-value"><?php echo e($prodi->jenjang); ?></span>
                </div>
                <div class="info-row">
                    <span class="lbl">Akreditasi</span>
                    <span class="info-value">Terakreditasi</span>
                </div>
                <div class="info-row">
                    <span class="lbl">Gelar Lulusan</span>
                    <span class="info-value">
                        <?php if($prodi->jenjang == 'D3'): ?> A.Md. (Ahli Madya)
                        <?php elseif($prodi->jenjang == 'D4'): ?> S.Tr. (Sarjana Terapan)
                        <?php else: ?> S.T. (Sarjana) <?php endif; ?>
                    </span>
                </div>
                <div class="info-row">
                    <span class="lbl">Lama Studi</span>
                    <span class="info-value">
                        <?php if($prodi->jenjang == 'D3'): ?> 3 Tahun (6 Semester)
                        <?php else: ?> 4 Tahun (8 Semester) <?php endif; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\Documents\laragon\www\jurusan_bisnis\resources\views/prodi-detail.blade.php ENDPATH**/ ?>