

<?php $__env->startSection('content'); ?>
<div class="container" style="margin-top: 160px; margin-bottom: 100px;">
    
    <h1 class="text-center fw-bold text-uppercase mb-5" style="color: #000033;">
        STAF & TEKNISI JURUSAN BISNIS
    </h1>

    <div class="staf-list-wrapper">
        <?php $__currentLoopData = $dataProgramStudis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $prodi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <div class="prodi-item-wrapper">
                
                
                <button class="prodi-header-btn manual-toggle-btn <?php echo e($index == 0 ? 'active' : ''); ?>" 
                        type="button" 
                        data-target="#stafCollapse<?php echo e($prodi->id); ?>">
                    
                    <h4 class="m-0 fw-bold text-uppercase d-flex flex-column flex-md-row gap-2">
                        <span><?php echo e($prodi->nama_prodi); ?></span>
                        <span class="badge bg-warning text-dark rounded-pill fs-6" style="width: fit-content;"><?php echo e($prodi->jenjang); ?></span>
                    </h4>

                    <span class="toggle-icon">
                        <i class="fas fa-chevron-down"></i>
                    </span>
                </button>

                
                <div id="stafCollapse<?php echo e($prodi->id); ?>" 
                     class="prodi-content-area <?php echo e($index == 0 ? 'show-content' : ''); ?>">
                    <?php if($prodi->stafs->count() > 0): ?>
                        <div class="row g-4">
                            <?php $__currentLoopData = $prodi->stafs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-6">
                                    <div class="staf-card-figma">  
                                        
                                        <div class="staf-foto-wrapper">
                                            <?php if($staf->foto): ?>
                                                <img src="<?php echo e(asset('storage/' . $staf->foto)); ?>" class="staf-foto" alt="Foto">
                                            <?php else: ?>
                                                <div class="d-flex align-items-center justify-content-center h-100 bg-light text-muted">
                                                    <i class="fas fa-user-cog fa-3x"></i>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        
                                        <div class="staf-content">
                                            <div class="staf-nama">
                                                <?php echo e($staf->nama_lengkap); ?>

                                            </div>

                                            <div class="info-box">
                                                <div class="data-row">
                                                    <div class="pill-label bg-cyan">NIP</div>
                                                    <div class="pill-value"><?php echo e($staf->nip ? $staf->nip : '-'); ?></div>
                                                </div>
                                                <div class="data-row">
                                                    <div class="pill-label bg-red">POSISI</div>
                                                    <div class="pill-value">
                                                        <?php echo e($staf->posisi ? Str::limit($staf->posisi, 45) : '-'); ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php else: ?>
                        <div class="alert alert-light text-center text-muted border border-dashed py-5">
                            <i class="fas fa-users-slash fa-3x mb-3 text-secondary" style="opacity: 0.3"></i>
                            <p class="mb-0">Belum ada data staf untuk program studi ini.</p>
                        </div>
                    <?php endif; ?>
                </div>

            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>

<!-- ini animasi accordion -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const buttons = document.querySelectorAll('.manual-toggle-btn');

        buttons.forEach(btn => {
            btn.addEventListener('click', function() {
                // 1. Ambil target ID
                const targetId = this.getAttribute('data-target');
                const content = document.querySelector(targetId);

                // 2. Toggle class 'show-content' di div konten
                if (content) {
                    if (content.style.display === "block") {
                        content.style.display = "none";
                        this.classList.remove('active'); // Putar balik panah
                    } else {
                        content.style.display = "block";
                        this.classList.add('active'); // Putar panah
                    }
                }
            });
        });
        
        // Init: Pastikan yg ada class 'show-content' tampil
        document.querySelectorAll('.prodi-content-area.show-content').forEach(el => {
            el.style.display = 'block';
        });
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\Documents\laragon\www\jurusan_bisnis\resources\views/staf.blade.php ENDPATH**/ ?>