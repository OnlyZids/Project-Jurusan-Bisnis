@extends('layouts.app')

@section('content')
<div class="container detail-wrapper">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            {{-- Tombol Kembali --}}
            <a href="{{ route('prestasi') }}" class="btn-back">
                <i class="fas fa-arrow-left"></i> Kembali ke Daftar Prestasi
            </a>

            <div class="prestasi-card-detail">
                
                {{-- 1. HEADER BIRU --}}
                <div class="detail-header">
                    {{-- Badge Tingkat --}}
                    <span class="badge-level">
                        <i class="fas fa-medal me-2"></i> Tingkat {{ $prestasi->tingkat }}
                    </span>

                    {{-- Judul --}}
                    <h1 class="detail-title">{{ $prestasi->judul }}</h1>

                    {{-- Tanggal --}}
                    <div class="detail-meta">
                        <span><i class="far fa-calendar-alt me-2"></i> {{ $prestasi->tanggal->format('d F Y') }}</span>
                    </div>
                </div>

                {{-- 2. BODY PUTIH --}}
                <div class="p-4 p-md-5">
                    
                    {{-- Gambar Utama --}}
                    <div class="text-center mb-5">
                        <img src="{{ asset('storage/' . $prestasi->foto) }}" 
                             class="img-fluid rounded shadow" 
                             style="max-height: 500px; width: 100%; object-fit: cover;"
                             alt="{{ $prestasi->judul }}">
                    </div>

                    {{-- Box Pemenang --}}
                    <div class="winner-box">
                        <div class="trophy-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="winner-info">
                            <h6>Pemenang / Tim</h6>
                            <h4>{{ $prestasi->pemenang }}</h4>
                        </div>
                    </div>

                    {{-- Deskripsi --}}
                    <div class="content-text">
                        <h4 class="fw-bold mb-3" style="color: #000033;">Deskripsi Kegiatan</h4>
                        <p>{!! nl2br(e($prestasi->deskripsi)) !!}</p>
                    </div>

                        {{-- Share / Footer Artikel --}}
                        <div class="mt-5 pt-4 border-top">
                            <p class="text-muted small mb-0">
                                Bagikan Prestasi ini:
                            </p>
                            
                            {{-- Siapin Variabel URL dan Judul --}}
                            @php
                                $shareUrl = url()->current(); // Ambil URL halaman saat ini
                                $shareTitle = $prestasi->judul; // Ambil judul artikel
                            @endphp

                            <div class="mt-2 d-flex gap-2">
                                
                                {{-- 1. FACEBOOK --}}
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($shareUrl) }}" 
                                   target="_blank" 
                                   class="btn btn-sm btn-outline-primary rounded-circle d-flex align-items-center justify-content-center" 
                                   style="width: 35px; height: 35px;"
                                   title="Share ke Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>

                                {{-- 2. TWITTER / X --}}
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode($shareUrl) }}&text={{ urlencode($shareTitle) }}" 
                                   target="_blank" 
                                   class="btn btn-sm btn-outline-info rounded-circle d-flex align-items-center justify-content-center" 
                                   style="width: 35px; height: 35px;"
                                   title="Share ke Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>

                                {{-- 3. WHATSAPP --}}
                                <a href="https://api.whatsapp.com/send?text={{ urlencode($shareTitle . ' ' . $shareUrl) }}" 
                                   target="_blank" 
                                   class="btn btn-sm btn-outline-success rounded-circle d-flex align-items-center justify-content-center" 
                                   style="width: 35px; height: 35px;"
                                   title="Share ke WhatsApp">
                                    <i class="fab fa-whatsapp"></i>
                                </a>

                                {{-- (Opsional) LINKEDIN --}}
                                <a href="https://www.instagram.com/sharing/share-offsite/?url={{ urlencode($shareUrl) }}" 
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

@endsection