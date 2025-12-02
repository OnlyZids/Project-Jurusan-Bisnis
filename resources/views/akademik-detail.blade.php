@extends('layouts.app')

@section('content')

{{-- HERO SECTION (JUDUL & GAMBAR) --}}
<div class="position-relative" style="height: 600px;">
    {{-- Kalau ada thumbnail pake thumbnail, kalo gak ada pake placeholder --}}
    @if($info->thumbnail)
        <img src="{{ asset('storage/' . $info->thumbnail) }}" alt="{{ $info->judul }}" class="w-100 h-100" style="object-fit: cover;">
    @else
        <div class="w-100 h-100 bg-secondary"></div>
    @endif
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(4, 4, 91, 0.7);"></div>

    @if($info->thumbnail)
        <a href="{{ asset('storage/' . $info->thumbnail) }}" 
           download="{{ Str::slug($info->judul) }}-thumbnail" 
           class="btn btn-light btn-sm position-absolute top-0 end-0 m-4 shadow-sm rounded-circle d-flex align-items-center justify-content-center"
           style="width: 40px; height: 40px; z-index: 10;"
           title="Download Gambar">
            <i class="fas fa-download"></i>
        </a>
    @endif
    
    {{-- Judul di Tengah --}}
    <div class="position-absolute top-50 start-50 translate-middle text-center text-white w-100 px-3">
        <span class="badge bg-warning text-dark mb-3 fs-6">{{ $info->kategori }}</span>
        <h1 class="display-4 fw-bold">{{ $info->judul }}</h1>
        <p class="mt-2"><i class="far fa-calendar-alt me-2"></i> {{ \Carbon\Carbon::parse($info->published_at)->format('d M Y') }}</p>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            
            {{-- Tombol Kembali --}}
            <a href="{{ route('akademik', ['kategori' => Str::slug($info->kategori)]) }}" class="btn btn-outline-secondary mb-4">
                <i class="fas fa-arrow-left"></i> Kembali ke {{ $info->kategori }}
            </a>

            {{-- KONTEN UTAMA --}}
            <div class="card shadow-sm border-0 overflow-hidden">
                
                {{-- Wrapper Gambar dengan Posisi Relative --}}
                <div class="position-relative">
                    <img src="{{ asset('storage/' . $info->thumbnail) }}" 
                         alt="{{ $info->judul }}" 
                         class="w-100" 
                         style="object-fit: cover; max-height: 500px;">

                    {{-- TOMBOL DOWNLOAD (Overlay di atas gambar) --}}
                    <a href="{{ asset('storage/' . $info->thumbnail) }}" 
                       download="{{ Str::slug($info->judul) }}-{{ now()->format('Ymd') }}.jpg" 
                       class="btn btn-light btn-sm position-absolute bottom-0 end-0 m-3 shadow fw-bold"
                       style="z-index: 10;"
                       title="Download Gambar">
                        <i class="fas fa-download me-1 text-primary"></i> Download Gambar
                    </a>
                </div>

                <div class="card-body p-4 p-md-5">
                    {{-- Render HTML dari Rich Editor --}}
                    <div class="article-content">
                        {!! $info->konten !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection