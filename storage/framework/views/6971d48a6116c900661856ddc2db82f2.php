

<?php $__env->startSection('content'); ?>


<div class="position-relative" style="height: 600px;">
    
    <?php if($info->thumbnail): ?>
        <img src="<?php echo e(asset('storage/' . $info->thumbnail)); ?>" alt="<?php echo e($info->judul); ?>" class="w-100 h-100" style="object-fit: cover;">
    <?php else: ?>
        <div class="w-100 h-100 bg-secondary"></div>
    <?php endif; ?>
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(4, 4, 91, 0.7);"></div>

    <?php if($info->thumbnail): ?>
        <a href="<?php echo e(asset('storage/' . $info->thumbnail)); ?>" 
           download="<?php echo e(Str::slug($info->judul)); ?>-thumbnail" 
           class="btn btn-light btn-sm position-absolute top-0 end-0 m-4 shadow-sm rounded-circle d-flex align-items-center justify-content-center"
           style="width: 40px; height: 40px; z-index: 10;"
           title="Download Gambar">
            <i class="fas fa-download"></i>
        </a>
    <?php endif; ?>
    
    
    <div class="position-absolute top-50 start-50 translate-middle text-center text-white w-100 px-3">
        <span class="badge bg-warning text-dark mb-3 fs-6"><?php echo e($info->kategori); ?></span>
        <h1 class="display-4 fw-bold"><?php echo e($info->judul); ?></h1>
        <p class="mt-2"><i class="far fa-calendar-alt me-2"></i> <?php echo e(\Carbon\Carbon::parse($info->published_at)->format('d M Y')); ?></p>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            
            
            <a href="<?php echo e(route('akademik', ['kategori' => Str::slug($info->kategori)])); ?>" class="btn btn-outline-secondary mb-4">
                <i class="fas fa-arrow-left"></i> Kembali ke <?php echo e($info->kategori); ?>

            </a>

            
            <div class="card shadow-sm border-0 overflow-hidden">
                
                
                <div class="position-relative">
                    <img src="<?php echo e(asset('storage/' . $info->thumbnail)); ?>" 
                         alt="<?php echo e($info->judul); ?>" 
                         class="w-100" 
                         style="object-fit: cover; max-height: 500px;">

                    
                    <a href="<?php echo e(asset('storage/' . $info->thumbnail)); ?>" 
                       download="<?php echo e(Str::slug($info->judul)); ?>-<?php echo e(now()->format('Ymd')); ?>.jpg" 
                       class="btn btn-light btn-sm position-absolute bottom-0 end-0 m-3 shadow fw-bold"
                       style="z-index: 10;"
                       title="Download Gambar">
                        <i class="fas fa-download me-1 text-primary"></i> Download Gambar
                    </a>
                </div>

                <div class="card-body p-4 p-md-5">
                    
                    <div class="article-content">
                        <?php echo $info->konten; ?>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\Documents\laragon\www\jurusan_bisnis\resources\views/akademik-detail.blade.php ENDPATH**/ ?>