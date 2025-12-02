

<?php $__env->startSection('content'); ?>
<div class="akademik-wrapper">
    <div class="akademik-container"> 
        <h1 class="akademik-title"><?php echo e($judul); ?></h1>
        
        
        <?php if($mode == 'all'): ?>
            <?php $__currentLoopData = $itemsGrouped; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori => $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <div class="kategori-section">
                    
                    <h2 class="kategori-heading">
                        <?php echo e($kategori); ?>

                    </h2>

                    <div class="cards-grid">
                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="akademik-card">
                                
                                <?php if($item->thumbnail): ?>
                                    <img src="<?php echo e(asset('storage/' . $item->thumbnail)); ?>" 
                                         class="akademik-card-image" 
                                         alt="<?php echo e($item->judul); ?>">
                                <?php else: ?>
                                    <div class="akademik-card-placeholder">
                                        <i class="fas fa-image fa-3x text-muted"></i>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="akademik-card-body">
                                    <h5 class="akademik-card-title"><?php echo e($item->judul); ?></h5>
                                    
                                    <div class="akademik-card-text">
                                        <?php echo Str::limit(strip_tags($item->konten), 100, '...'); ?>

                                    </div>
                                    
                                    <div class="akademik-card-footer">
                                        <?php if($item->published_at): ?>
                                            <span class="akademik-card-date">
                                                <i class="far fa-calendar-alt"></i>
                                                <?php echo e(\Carbon\Carbon::parse($item->published_at)->format('d M Y')); ?>

                                            </span>
                                        <?php else: ?>
                                            <span></span>
                                        <?php endif; ?>

                                        <a href="<?php echo e(route('akademik.detail', $item->slug)); ?>" 
                                           class="btn-akademik">
                                            Baca →
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php else: ?>
            <div class="cards-grid">
                <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="akademik-card">
                        
                        <?php if($item->thumbnail): ?>
                            <img src="<?php echo e(asset('storage/' . $item->thumbnail)); ?>" 
                                 class="akademik-card-image" 
                                 alt="<?php echo e($item->judul); ?>">
                        <?php else: ?>
                            <div class="akademik-card-placeholder">
                                <i class="fas fa-image fa-3x text-muted"></i>
                            </div>
                        <?php endif; ?>
                        
                        <div class="akademik-card-body">
                            <h5 class="akademik-card-title"><?php echo e($item->judul); ?></h5>
                            
                            <div class="akademik-card-text">
                                <?php echo Str::limit(strip_tags($item->konten), 100, '...'); ?>

                            </div>
                            
                            <div class="akademik-card-footer">
                                <?php if($item->published_at): ?>
                                    <span class="akademik-card-date">
                                        <i class="far fa-calendar-alt"></i>
                                        <?php echo e(\Carbon\Carbon::parse($item->published_at)->format('d M Y')); ?>

                                    </span>
                                <?php else: ?>
                                    <span></span>
                                <?php endif; ?>

                                <a href="<?php echo e(route('akademik.detail', $item->slug)); ?>" 
                                   class="btn-akademik">
                                    Baca →
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="empty-state">
                        <i class="far fa-folder-open fa-3x text-muted mb-3"></i>
                        <h4>Belum Ada Informasi</h4>
                        <p class="text-muted">Informasi untuk kategori ini akan segera ditambahkan.</p>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\Documents\laragon\www\jurusan_bisnis\resources\views/akademik.blade.php ENDPATH**/ ?>