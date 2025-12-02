@extends('layouts.app')

@section('content')
<div class="container news-wrapper">
    
    <h1 class="text-center fw-bold mb-5" style="color: #000033;">
        ARTIKEL & BERITA TERKINI
        <div style="width: 60px; height: 4px; background: #fbbf24; margin: 15px auto 0; border-radius: 2px;"></div>
    </h1>

    <div class="row g-4">
        @foreach ($artikels as $item)
        <div class="col-md-4">
            <div class="news-card">
                
                {{-- Gambar dengan Wrapper untuk efek zoom --}}
                <div class="news-img-wrapper">
                    {{-- Tanggal Badge Pojok Kanan Atas --}}
                    <div class="date-badge">
                        {{ $item->tanggal_publish->format('d M Y') }}
                    </div>

                    @if($item->thumbnail)
                        <img src="{{ asset('storage/' . $item->thumbnail) }}" class="news-img" alt="{{ $item->judul }}">
                    @else
                        <div class="d-flex align-items-center justify-content-center h-100 bg-light text-muted">
                            <i class="fas fa-image fa-3x"></i>
                        </div>
                    @endif
                </div>
                
                <div class="card-body d-flex flex-column p-4">
                    
                    {{-- Meta Info (Penulis) --}}
                    <div class="news-meta">
                        <span><i class="far fa-user me-1"></i> {{ $item->penulis }}</span>
                    </div>

                    {{-- Judul (Saya hapus H5 dobel yang error tadi) --}}
                    <a href="{{ route('artikel.detail', $item->slug) }}" class="text-decoration-none">
                        <h5 class="news-title">
                            {{ Str::limit($item->judul, 60) }}
                        </h5>
                    </a>

                    {{-- Snippet Konten --}}
                    <p class="card-text text-muted small flex-grow-1" style="line-height: 1.6;">
                        {!! Str::limit(strip_tags($item->konten), 100) !!}
                    </p>
                    
                    {{-- Tombol Baca Selengkapnya Modern --}}
                    <div class="mt-3 pt-3 border-top">
                        <a href="{{ route('artikel.detail', $item->slug) }}" class="btn-read">
                            Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @if($artikels->isEmpty())
        <div class="text-center py-5 text-muted">
            <i class="far fa-newspaper fa-3x mb-3"></i>
            <p>Belum ada artikel berita yang diterbitkan.</p>
        </div>
    @endif

</div>
@endsection