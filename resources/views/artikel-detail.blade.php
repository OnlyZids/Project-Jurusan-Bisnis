@extends('layouts.app')

@section('content')
<div class="container detail-wrapper">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            {{-- Tombol Kembali --}}
            <a href="{{ route('artikel') }}" class="btn-back">
                <i class="fas fa-arrow-left"></i> Kembali ke Daftar Berita
            </a>

            <div class="article-card">
                
                {{-- 1. HEADER BIRU --}}
                <div class="article-header">
                    <h1 class="article-title">{{ $artikel->judul }}</h1>
                    
                    <div class="article-meta">
                        <div class="meta-item">
                            <i class="far fa-calendar-alt text-warning"></i> 
                            {{ $artikel->tanggal_publish->format('d F Y') }}
                        </div>
                        <div class="meta-item">
                            
                            <i class="far fa-user text-warning"></i>
                            {{ $artikel->penulis }}
                        </div>
                    </div>
                </div>

                {{-- 2. BODY PUTIH --}}
                <div class="article-body">
                    
                    {{-- Gambar Utama --}}
                    @if($artikel->thumbnail)
                        <img src="{{ asset('storage/' . $artikel->thumbnail) }}" 
                             class="img-fluid rounded w-100 mb-5 shadow-sm" 
                             style="max-height: 500px; object-fit: cover;"
                             alt="{{ $artikel->judul }}">
                    @endif

                    {{-- Isi Artikel --}}
                    <div class="article-content">
                        {!! $artikel->konten !!}
                    </div>


                    {{-- Share / Footer Artikel --}}
                        <div class="mt-5 pt-4 border-top">
                            <p class="text-muted small mb-0">
                                Bagikan artikel ini:
                            </p>
                            
                            {{-- Siapin Variabel URL dan Judul --}}
                            @php
                                $shareUrl = url()->current(); // Ambil URL halaman saat ini
                                $shareTitle = $artikel->judul; // Ambil judul artikel
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