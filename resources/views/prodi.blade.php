@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-5 fw-bold" style="color: #000033;">PROGRAM STUDI KAMI</h1>
    
    <div class="row g-4 justify-content-center">
        @foreach ($allProgramStudis as $prodi)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                {{-- Foto Banner Prodi --}}
                <img src="{{ asset('storage/' . $prodi->foto_banner) }}" class="card-img-top" alt="{{ $prodi->nama_prodi }}" style="height: 200px; object-fit: cover;">
                
                <div class="card-body text-center">
                    <h4 class="card-title fw-bold">{{ $prodi->nama_prodi }}</h4>
                    <span class="badge bg-warning text-dark mb-3">{{ $prodi->jenjang }}</span>
                    <p class="card-text text-muted">
                        {{ Str::limit($prodi->deskripsi_singkat, 100) }}
                    </p>
                    <a href="{{ route('prodi.detail', $prodi->slug) }}" class="btn btn-primary w-100" style="background-color: #000033; border: none;">Lihat Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection