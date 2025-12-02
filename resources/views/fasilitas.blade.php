@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 120px; margin-bottom: 50px;">   
    <h1 class="text-center fw-bold text-uppercase" style="color: #000033;">
        {{ $judul }}
    </h1>
    {{-- MODE 1: TAMPILKAN SEMUA (GROUPING) --}}
    @if($mode == 'all')
        
        @foreach ($fasilitasGrouped as $kategori => $items)
            {{-- Judul Kategori --}}
            <h2 id="{{ Str::slug($kategori) }}" class="mt-5" style="border-bottom: 2px solid #000033; padding-bottom: 10px; color: #000033; scroll-margin-top: 120px;">
                {{ $kategori }}
            </h2>

            <div class="row g-4">
                @foreach ($items as $item)
                    
                    {{-- KARTU FASILITAS --}}
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="{{ asset('storage/' . $item->foto) }}" 
                                 class="card-img-top" 
                                 alt="{{ $item->nama }}" 
                                 style="height: 220px; object-fit: cover;">
                            
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title fw-bold">{{ $item->nama }}</h5>
                                @if($item->deskripsi) 
                                    <p class="card-text text-muted small">
                                        {{ Str::limit($item->deskripsi, 100) }}
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{-- AKHIR KARTU --}}

                @endforeach
            </div>
        @endforeach

        @if($fasilitasGrouped->isEmpty())
            <p class="text-center text-muted my-5">Belum ada data fasilitas.</p>
        @endif

    {{-- MODE 2: TAMPILKAN SATU KATEGORI SAJA --}}
    @else
        
        <div class="row g-4 mt-4">
            @forelse ($fasilitas as $item)
                
                {{-- KARTU FASILITAS --}}
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="{{ asset('storage/' . $item->foto) }}" 
                             class="card-img-top" 
                             alt="{{ $item->nama }}" 
                             style="height: 220px; object-fit: cover;">
                        
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">{{ $item->nama }}</h5>
                            @if($item->deskripsi) 
                                <p class="card-text text-muted small">
                                    {{ Str::limit($item->deskripsi, 100) }}
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                {{-- AKHIR KARTU --}}

            @empty
                <div class="col-12">
                    <div class="text-center py-5">
                        <p class="text-muted mb-3">Belum ada data untuk kategori ini.</p>
                        <a href="{{ route('fasilitas') }}" class="btn btn-primary px-4 py-2" style="background-color: #000033; border:none;">
                            <i class="fas fa-arrow-left me-2"></i> Lihat Semua Fasilitas
                        </a>
                    </div>
                </div>
            @endforelse
        </div>

    @endif

</div>

@endsection