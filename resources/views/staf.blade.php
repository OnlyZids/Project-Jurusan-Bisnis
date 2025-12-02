@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 160px; margin-bottom: 100px;">
    
    <h1 class="text-center fw-bold text-uppercase mb-5" style="color: #000033;">
        STAF & TEKNISI JURUSAN BISNIS
    </h1>

    <div class="staf-list-wrapper">
        @foreach ($dataProgramStudis as $index => $prodi)
            
            <div class="prodi-item-wrapper">
                
                {{-- TOMBOL HEADER (MANUAL TOGGLE) --}}
                <button class="prodi-header-btn manual-toggle-btn {{ $index == 0 ? 'active' : '' }}" 
                        type="button" 
                        data-target="#stafCollapse{{ $prodi->id }}">
                    
                    <h4 class="m-0 fw-bold text-uppercase d-flex flex-column flex-md-row gap-2">
                        <span>{{ $prodi->nama_prodi }}</span>
                        <span class="badge bg-warning text-dark rounded-pill fs-6" style="width: fit-content;">{{ $prodi->jenjang }}</span>
                    </h4>

                    <span class="toggle-icon">
                        <i class="fas fa-chevron-down"></i>
                    </span>
                </button>

                {{-- KONTEN (MANUAL ID) --}}
                <div id="stafCollapse{{ $prodi->id }}" 
                     class="prodi-content-area {{ $index == 0 ? 'show-content' : '' }}">
                    @if($prodi->stafs->count() > 0)
                        <div class="row g-4">
                            @foreach ($prodi->stafs as $staf)
                                <div class="col-lg-6">
                                    <div class="staf-card-figma">  
                                        {{-- Foto --}}
                                        <div class="staf-foto-wrapper">
                                            @if($staf->foto)
                                                <img src="{{ asset('storage/' . $staf->foto) }}" class="staf-foto" alt="Foto">
                                            @else
                                                <div class="d-flex align-items-center justify-content-center h-100 bg-light text-muted">
                                                    <i class="fas fa-user-cog fa-3x"></i>
                                                </div>
                                            @endif
                                        </div>

                                        {{-- Konten --}}
                                        <div class="staf-content">
                                            <div class="staf-nama">
                                                {{ $staf->nama_lengkap }}
                                            </div>

                                            <div class="info-box">
                                                <div class="data-row">
                                                    <div class="pill-label bg-cyan">NIP</div>
                                                    <div class="pill-value">{{ $staf->nip ? $staf->nip : '-' }}</div>
                                                </div>
                                                <div class="data-row">
                                                    <div class="pill-label bg-red">POSISI</div>
                                                    <div class="pill-value">
                                                        {{ $staf->posisi ? Str::limit($staf->posisi, 45) : '-' }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="alert alert-light text-center text-muted border border-dashed py-5">
                            <i class="fas fa-users-slash fa-3x mb-3 text-secondary" style="opacity: 0.3"></i>
                            <p class="mb-0">Belum ada data staf untuk program studi ini.</p>
                        </div>
                    @endif
                </div>

            </div>

        @endforeach
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

@endsection