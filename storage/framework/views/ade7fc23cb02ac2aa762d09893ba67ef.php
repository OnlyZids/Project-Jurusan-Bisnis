

<?php $__env->startSection('content'); ?>
<div class="container detail-wrapper">
    
    
    <div class="mb-4">
        <a href="<?php echo e(route('dosen')); ?>" class="btn-back">
            <i class="fas fa-arrow-left"></i> Kembali ke Daftar Dosen
        </a>
    </div>

    <div class="row g-4">
        
        
        <div class="col-lg-4">
            <div class="profile-card text-center pb-4">
                
                <div class="profile-header-bg"></div>

                <div class="profile-img-container">
                    <?php if($dosen->foto): ?>
                        <img src="<?php echo e(asset('storage/' . $dosen->foto)); ?>" alt="<?php echo e($dosen->nama_lengkap); ?>" class="profile-img">
                    <?php else: ?>
                        <img src="https://ui-avatars.com/api/?name=<?php echo e(urlencode($dosen->nama_lengkap)); ?>&background=0a1f5c&color=fff&size=200" alt="Placeholder" class="profile-img">
                    <?php endif; ?>
                </div>

                <div class="px-4">
                    <h4 class="fw-bold text-dark mb-1"><?php echo e($dosen->nama_lengkap); ?></h4>
                    <span class="badge bg-warning text-dark rounded-pill px-3 py-2 mb-4">
                        <?php echo e($dosen->jabatan_fungsional ?? 'Dosen'); ?>

                    </span>

                    <div class="mt-4 text-start">
                        <div class="contact-item">
                            <div class="icon-box"><i class="fas fa-envelope"></i></div>
                            <div class="small text-break"><?php echo e($dosen->email); ?></div>
                        </div>
                        
                        
                        <div class="contact-item">
                            <div class="icon-box"><i class="fas fa-id-card"></i></div>
                            <div class="small">
                                <div class="text-muted" style="font-size: 10px;">NIP</div>
                                <?php echo e($dosen->nip ?? '-'); ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        
        <div class="col-lg-8">
            <div class="detail-card">
                
                <h3 class="section-title">Informasi Akademik</h3>

                <div class="info-row">
                    <div class="info-label">NIDN / NUPTK</div>
                    <div class="info-value"><?php echo e($dosen->nidn ?? '-'); ?></div>
                </div>

                <div class="info-row">
                    <div class="info-label">Bidang Keahlian</div>
                    <div class="info-value">
                        <span class="badge bg-success badge-custom">
                            <i class="fas fa-check-circle me-1"></i> 
                            <?php echo e($dosen->bidang_keahlian ?? 'Umum'); ?>

                        </span>
                    </div>
                </div>

                <div class="info-row border-0">
                    <div class="info-label">Mengajar di Prodi</div>
                    <div class="info-value">
                        <div class="d-flex flex-wrap gap-2">
                            <?php $__empty_1 = true; $__currentLoopData = $dosen->programStudis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prodi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <span class="badge bg-primary badge-custom" style="background-color: #0a1f5c !important;">
                                    <?php echo e($prodi->nama_prodi); ?>

                                </span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <span class="text-muted">-</span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                
                <?php if(!empty($dosen->biografi)): ?>
                    <h3 class="section-title mt-5">Biografi Singkat</h3>
                    <div class="text-muted" style="line-height: 1.8;">
                        <?php echo $dosen->biografi; ?>

                    </div>
                <?php endif; ?>

            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\Documents\laragon\www\jurusan_bisnis\resources\views/dosen-detail.blade.php ENDPATH**/ ?>