@extends('layouts.app')

@section('content')
<div class="container detail-wrapper">
    
    {{-- Tombol Kembali --}}
    <div class="mb-4">
        <a href="{{ route('dosen') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i> Kembali ke Daftar Dosen
        </a>
    </div>

    <div class="row g-4">
        
        {{-- KOLOM KIRI: PROFILE CARD --}}
        <div class="col-lg-4">
            <div class="profile-card text-center pb-4">
                
                <div class="profile-header-bg"></div>

                <div class="profile-img-container">
                    @if($dosen->foto)
                        <img src="{{ asset('storage/' . $dosen->foto) }}" alt="{{ $dosen->nama_lengkap }}" class="profile-img">
                    @else
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($dosen->nama_lengkap) }}&background=0a1f5c&color=fff&size=200" alt="Placeholder" class="profile-img">
                    @endif
                </div>

                <div class="px-4">
                    <h4 class="fw-bold text-dark mb-1">{{ $dosen->nama_lengkap }}</h4>
                    <span class="badge bg-warning text-dark rounded-pill px-3 py-2 mb-4">
                        {{ $dosen->jabatan_fungsional ?? 'Dosen' }}
                    </span>

                    <div class="mt-4 text-start">
                        <div class="contact-item">
                            <div class="icon-box"><i class="fas fa-envelope"></i></div>
                            <div class="small text-break">{{ $dosen->email }}</div>
                        </div>
                        
                        {{-- Contoh jika ada data NIP di area kontak --}}
                        <div class="contact-item">
                            <div class="icon-box"><i class="fas fa-id-card"></i></div>
                            <div class="small">
                                <div class="text-muted" style="font-size: 10px;">NIP</div>
                                {{ $dosen->nip ?? '-' }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- KOLOM KANAN: DETAIL INFORMASI --}}
        <div class="col-lg-8">
            <div class="detail-card">
                
                <h3 class="section-title">Informasi Akademik</h3>

                <div class="info-row">
                    <div class="info-label">NIDN / NUPTK</div>
                    <div class="info-value">{{ $dosen->nidn ?? '-' }}</div>
                </div>

                <div class="info-row">
                    <div class="info-label">Bidang Keahlian</div>
                    <div class="info-value">
                        <span class="badge bg-success badge-custom">
                            <i class="fas fa-check-circle me-1"></i> 
                            {{ $dosen->bidang_keahlian ?? 'Umum' }}
                        </span>
                    </div>
                </div>

                <div class="info-row border-0">
                    <div class="info-label">Mengajar di Prodi</div>
                    <div class="info-value">
                        <div class="d-flex flex-wrap gap-2">
                            @forelse($dosen->programStudis as $prodi)
                                <span class="badge bg-primary badge-custom" style="background-color: #0a1f5c !important;">
                                    {{ $prodi->nama_prodi }}
                                </span>
                            @empty
                                <span class="text-muted">-</span>
                            @endforelse
                        </div>
                    </div>
                </div>

                {{-- BIOGRAFI (Optional, tampil jika ada) --}}
                @if(!empty($dosen->biografi))
                    <h3 class="section-title mt-5">Biografi Singkat</h3>
                    <div class="text-muted" style="line-height: 1.8;">
                        {!! $dosen->biografi !!}
                    </div>
                @endif

            </div>
        </div>

    </div>
</div>

@endsection