@extends('layouts.app')

@section('content')
<div class="container prestasi-wrapper">
    
    {{-- JUDUL HALAMAN --}}
    <div class="text-center mb-5">
        <h1 class="fw-bold text-uppercase" style="color: #000033;">PRESTASI MAHASISWA & DOSEN</h1>
        <div style="width: 80px; height: 4px; background: #fbbf24; margin: 15px auto 0; border-radius: 2px;"></div>
    </div>

    <div class="row g-4">
        @forelse ($prestasis as $item)
        <div class="col-md-4">
            <div class="prestasi-card">
                
                {{-- Wrapper Gambar --}}
                <div class="img-wrapper">
                    {{-- Badge Tingkat (Pojok Kanan Atas) --}}
                    <span class="badge-tingkat">
                        <i class="fas fa-trophy text-warning me-1"></i> {{ $item->tingkat }}
                    </span>

                    <img src="{{ asset('storage/' . $item->foto) }}" class="prestasi-img" alt="{{ $item->judul }}">
                    
                    {{-- Link Seluruh Card (Stretched Link) --}}
                    <a href="{{ route('prestasi.detail', $item->slug) }}" class="stretched-link"></a>
                </div>
                
                <div class="card-body p-4">
                    {{-- Judul --}}
                    <h5 class="prestasi-title">
                        {{ Str::limit($item->judul, 60) }}
                    </h5>

                    <hr style="opacity: 0.1; margin: 15px 0;">

                    {{-- Info Pemenang --}}
                    <div class="meta-info">
                        <div class="meta-icon"><i class="fas fa-user-graduate"></i></div>
                        <div>{{ $item->pemenang }}</div>
                    </div>

                    {{-- Info Tanggal --}}
                    <div class="meta-info">
                        <div class="meta-icon"><i class="far fa-calendar-alt"></i></div>
                        <div>{{ $item->tanggal->format('d M Y') }}</div>
                    </div>
                </div>

            </div>
        </div>
        @empty
            {{-- TAMPILAN JIKA DATA KOSONG --}}
            <div class="col-12 text-center py-5">
                <div class="text-muted">
                    <i class="fas fa-trophy fa-4x mb-3 text-secondary" style="opacity: 0.3;"></i>
                    <h4>Belum Ada Data Prestasi</h4>
                    <p>Data prestasi mahasiswa dan dosen akan segera ditambahkan.</p>
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection