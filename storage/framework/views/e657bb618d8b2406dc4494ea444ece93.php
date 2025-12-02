

<?php $__env->startSection('content'); ?>



<div class="container news-wrapper">
    
    <h1 class="text-center fw-bold mb-5" style="color: #000033;">
        ARTIKEL & BERITA TERKINI
        <div style="width: 60px; height: 4px; background: #fbbf24; margin: 15px auto 0; border-radius: 2px;"></div>
    </h1>

    <div class="row g-4">
        <?php $__currentLoopData = $artikels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
            <div class="news-card">
                
                
                <div class="news-img-wrapper">
                    
                    <div class="date-badge">
                        <?php echo e($item->tanggal_publish->format('d M Y')); ?>

                    </div>

                    <?php if($item->thumbnail): ?>
                        <img src="<?php echo e(asset('storage/' . $item->thumbnail)); ?>" class="news-img" alt="<?php echo e($item->judul); ?>">
                    <?php else: ?>
                        <div class="d-flex align-items-center justify-content-center h-100 bg-light text-muted">
                            <i class="fas fa-image fa-3x"></i>
                        </div>
                    <?php endif; ?>
                </div>
                
                <div class="card-body d-flex flex-column p-4">
                    
                    
                    <div class="news-meta">
                        <span><i class="far fa-user me-1"></i> <?php echo e($item->penulis); ?></span>
                    </div>

                    
                    <a href="<?php echo e(route('artikel.detail', $item->slug)); ?>" class="text-decoration-none">
                        <h5 class="news-title">
                            <?php echo e(Str::limit($item->judul, 60)); ?>

                        </h5>
                    </a>

                    
                    <p class="card-text text-muted small flex-grow-1" style="line-height: 1.6;">
                        <?php echo Str::limit(strip_tags($item->konten), 100); ?>

                    </p>
                    
                    
                    <div class="mt-3 pt-3 border-top">
                        <a href="<?php echo e(route('artikel.detail', $item->slug)); ?>" class="btn-read">
                            Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <?php if($artikels->isEmpty()): ?>
        <div class="text-center py-5 text-muted">
            <i class="far fa-newspaper fa-3x mb-3"></i>
            <p>Belum ada artikel berita yang diterbitkan.</p>
        </div>
    <?php endif; ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\Documents\laragon\www\jurusan_bisnis\resources\views/artikel.blade.php ENDPATH**/ ?>