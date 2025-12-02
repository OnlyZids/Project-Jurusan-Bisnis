<?php if(request()->routeIs('filament.admin.auth.login')): ?>

    
    <div style="display: flex; justify-content: center; width: 100%;">
        <img src="<?php echo e(asset('images/logo_polije.png')); ?>" 
             alt="Logo Login" 
             style="height: 70px; object-fit: contain;">
    </div>

<?php else: ?>

    
    <div style="
        display: flex; 
        align-items: center; 
        height: 100%; 
        white-space: nowrap; /* KUNCI: Biar teks gak turun baris */
        overflow: hidden;    /* KUNCI: Biar gak nembus keluar */
    ">
        
        <img src="<?php echo e(asset('images/logo_bisnis.png')); ?>" 
             alt="Logo Dashboard" 
             style="height: 150px; width: auto; flex-shrink: 0;">
        
        
        <div style="
            font-weight: 700; 
            color: inherit;
        ">
           JURUSAN BISNIS
        </div>
    </div>

<?php endif; ?><?php /**PATH C:\Users\USER\Documents\laragon\www\jurusan_bisnis\resources\views/filament/logo.blade.php ENDPATH**/ ?>