

<?php $__env->startSection('content'); ?>
<div class="container detail-wrapper">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            
            <a href="<?php echo e(route('artikel')); ?>" class="btn-back">
                <i class="fas fa-arrow-left"></i> Kembali ke Daftar Berita
            </a>

            <div class="article-card">
                
                
                <div class="article-header">
                    <h1 class="article-title"><?php echo e($artikel->judul); ?></h1>
                    
                    <div class="article-meta">
                        <div class="meta-item">
                            <i class="far fa-calendar-alt text-warning"></i> 
                            <?php echo e($artikel->tanggal_publish->format('d F Y')); ?>

                        </div>
                        <div class="meta-item">
                            
                            <i class="far fa-user text-warning"></i>
                            <?php echo e($artikel->penulis); ?>

                        </div>
                    </div>
                </div>

                
                <div class="article-body">
                    
                    
                    <?php if($artikel->thumbnail): ?>
                        <img src="<?php echo e(asset('storage/' . $artikel->thumbnail)); ?>" 
                             class="img-fluid rounded w-100 mb-5 shadow-sm" 
                             style="max-height: 500px; object-fit: cover;"
                             alt="<?php echo e($artikel->judul); ?>">
                    <?php endif; ?>

                    
                    <div class="article-content">
                        <?php echo $artikel->konten; ?>

                    </div>


                    
                        <div class="mt-5 pt-4 border-top">
                            <p class="text-muted small mb-0">
                                Bagikan artikel ini:
                            </p>
                            
                            
                            <?php
                                $shareUrl = url()->current(); // Ambil URL halaman saat ini
                                $shareTitle = $artikel->judul; // Ambil judul artikel
                            ?>

                            <div class="mt-2 d-flex gap-2">
                                
                                
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(urlencode($shareUrl)); ?>" 
                                   target="_blank" 
                                   class="btn btn-sm btn-outline-primary rounded-circle d-flex align-items-center justify-content-center" 
                                   style="width: 35px; height: 35px;"
                                   title="Share ke Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>

                                
                                <a href="https://twitter.com/intent/tweet?url=<?php echo e(urlencode($shareUrl)); ?>&text=<?php echo e(urlencode($shareTitle)); ?>" 
                                   target="_blank" 
                                   class="btn btn-sm btn-outline-info rounded-circle d-flex align-items-center justify-content-center" 
                                   style="width: 35px; height: 35px;"
                                   title="Share ke Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>

                                
                                <a href="https://api.whatsapp.com/send?text=<?php echo e(urlencode($shareTitle . ' ' . $shareUrl)); ?>" 
                                   target="_blank" 
                                   class="btn btn-sm btn-outline-success rounded-circle d-flex align-items-center justify-content-center" 
                                   style="width: 35px; height: 35px;"
                                   title="Share ke WhatsApp">
                                    <i class="fab fa-whatsapp"></i>
                                </a>

                                
                                <a href="https://www.instagram.com/sharing/share-offsite/?url=<?php echo e(urlencode($shareUrl)); ?>" 
                                   target="_blank" 
                                   class="btn btn-sm btn-outline-primary rounded-circle d-flex align-items-center justify-content-center" 
                                   style="width: 35px; height: 35px;"
                                   title="Share ke LinkedIn">
                                    <i class="fab fa-instagram"></i>
                                </a>

                            </div>
                        </div>

                </div>
            </div>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\Documents\laragon\www\jurusan_bisnis\resources\views/artikel-detail.blade.php ENDPATH**/ ?>