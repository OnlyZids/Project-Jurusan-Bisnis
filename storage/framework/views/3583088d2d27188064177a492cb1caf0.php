

<?php $__env->startSection('content'); ?>

<div class="container" style="margin-top: 120px; margin-bottom: 50px;">   
    <h1 class="text-center fw-bold text-uppercase" style="color: #000033;">
        <?php echo e($judul); ?>

    </h1>
    
    <?php if($mode == 'all'): ?>
        
        <?php $__currentLoopData = $fasilitasGrouped; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori => $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <h2 id="<?php echo e(Str::slug($kategori)); ?>" class="mt-5" style="border-bottom: 2px solid #000033; padding-bottom: 10px; color: #000033; scroll-margin-top: 120px;">
                <?php echo e($kategori); ?>

            </h2>

            <div class="row g-4">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="<?php echo e(asset('storage/' . $item->foto)); ?>" 
                                 class="card-img-top" 
                                 alt="<?php echo e($item->nama); ?>" 
                                 style="height: 220px; object-fit: cover;">
                            
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title fw-bold"><?php echo e($item->nama); ?></h5>
                                <?php if($item->deskripsi): ?> 
                                    <p class="card-text text-muted small">
                                        <?php echo e(Str::limit($item->deskripsi, 100)); ?>

                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if($fasilitasGrouped->isEmpty()): ?>
            <p class="text-center text-muted my-5">Belum ada data fasilitas.</p>
        <?php endif; ?>

    
    <?php else: ?>
        
        <div class="row g-4 mt-4">
            <?php $__empty_1 = true; $__currentLoopData = $fasilitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                
                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="<?php echo e(asset('storage/' . $item->foto)); ?>" 
                             class="card-img-top" 
                             alt="<?php echo e($item->nama); ?>" 
                             style="height: 220px; object-fit: cover;">
                        
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold"><?php echo e($item->nama); ?></h5>
                            <?php if($item->deskripsi): ?> 
                                <p class="card-text text-muted small">
                                    <?php echo e(Str::limit($item->deskripsi, 100)); ?>

                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-12">
                    <div class="text-center py-5">
                        <p class="text-muted mb-3">Belum ada data untuk kategori ini.</p>
                        <a href="<?php echo e(route('fasilitas')); ?>" class="btn btn-primary px-4 py-2" style="background-color: #000033; border:none;">
                            <i class="fas fa-arrow-left me-2"></i> Lihat Semua Fasilitas
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>

    <?php endif; ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\Documents\laragon\www\jurusan_bisnis\resources\views/fasilitas.blade.php ENDPATH**/ ?>