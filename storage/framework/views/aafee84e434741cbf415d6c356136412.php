

<?php $__env->startSection('content'); ?>
<div class="container prestasi-wrapper">
    
    
    <div class="text-center mb-5">
        <h1 class="fw-bold text-uppercase" style="color: #000033;">PRESTASI MAHASISWA & DOSEN</h1>
        <div style="width: 80px; height: 4px; background: #fbbf24; margin: 15px auto 0; border-radius: 2px;"></div>
    </div>

    <div class="row g-4">
        <?php $__empty_1 = true; $__currentLoopData = $prestasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-md-4">
            <div class="prestasi-card">
                
                
                <div class="img-wrapper">
                    
                    <span class="badge-tingkat">
                        <i class="fas fa-trophy text-warning me-1"></i> <?php echo e($item->tingkat); ?>

                    </span>

                    <img src="<?php echo e(asset('storage/' . $item->foto)); ?>" class="prestasi-img" alt="<?php echo e($item->judul); ?>">
                    
                    
                    <a href="<?php echo e(route('prestasi.detail', $item->slug)); ?>" class="stretched-link"></a>
                </div>
                
                <div class="card-body p-4">
                    
                    <h5 class="prestasi-title">
                        <?php echo e(Str::limit($item->judul, 60)); ?>

                    </h5>

                    <hr style="opacity: 0.1; margin: 15px 0;">

                    
                    <div class="meta-info">
                        <div class="meta-icon"><i class="fas fa-user-graduate"></i></div>
                        <div><?php echo e($item->pemenang); ?></div>
                    </div>

                    
                    <div class="meta-info">
                        <div class="meta-icon"><i class="far fa-calendar-alt"></i></div>
                        <div><?php echo e($item->tanggal->format('d M Y')); ?></div>
                    </div>
                </div>

            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            
            <div class="col-12 text-center py-5">
                <div class="text-muted">
                    <i class="fas fa-trophy fa-4x mb-3 text-secondary" style="opacity: 0.3;"></i>
                    <h4>Belum Ada Data Prestasi</h4>
                    <p>Data prestasi mahasiswa dan dosen akan segera ditambahkan.</p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\Documents\laragon\www\jurusan_bisnis\resources\views/prestasi.blade.php ENDPATH**/ ?>