

<?php $__env->startSection('content'); ?>
<div class="container detail-wrapper">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            
            <a href="<?php echo e(route('prestasi')); ?>" class="btn-back">
                <i class="fas fa-arrow-left"></i> Kembali ke Daftar Prestasi
            </a>

            <div class="prestasi-card-detail">
                
                
                <div class="detail-header">
                    
                    <span class="badge-level">
                        <i class="fas fa-medal me-2"></i> Tingkat <?php echo e($prestasi->tingkat); ?>

                    </span>

                    
                    <h1 class="detail-title"><?php echo e($prestasi->judul); ?></h1>

                    
                    <div class="detail-meta">
                        <span><i class="far fa-calendar-alt me-2"></i> <?php echo e($prestasi->tanggal->format('d F Y')); ?></span>
                    </div>
                </div>

                
                <div class="p-4 p-md-5">
                    
                    
                    <div class="text-center mb-5">
                        <img src="<?php echo e(asset('storage/' . $prestasi->foto)); ?>" 
                             class="img-fluid rounded shadow" 
                             style="max-height: 500px; width: 100%; object-fit: cover;"
                             alt="<?php echo e($prestasi->judul); ?>">
                    </div>

                    
                    <div class="winner-box">
                        <div class="trophy-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="winner-info">
                            <h6>Pemenang / Tim</h6>
                            <h4><?php echo e($prestasi->pemenang); ?></h4>
                        </div>
                    </div>

                    
                    <div class="content-text">
                        <h4 class="fw-bold mb-3" style="color: #000033;">Deskripsi Kegiatan</h4>
                        <p><?php echo nl2br(e($prestasi->deskripsi)); ?></p>
                    </div>

                        
                        <div class="mt-5 pt-4 border-top">
                            <p class="text-muted small mb-0">
                                Bagikan Prestasi ini:
                            </p>
                            
                            
                            <?php
                                $shareUrl = url()->current(); // Ambil URL halaman saat ini
                                $shareTitle = $prestasi->judul; // Ambil judul artikel
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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\Documents\laragon\www\jurusan_bisnis\resources\views/prestasi-detail.blade.php ENDPATH**/ ?>