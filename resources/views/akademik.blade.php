@extends('layouts.app')

@section('content')
<div class="akademik-wrapper">
    <div class="akademik-container"> 
        <h1 class="akademik-title">{{ $judul }}</h1>
        {{-- MODE 1: SEMUA (GROUPING BY KATEGORI) --}}
        
        @if($mode == 'all')
            @foreach ($itemsGrouped as $kategori => $items)
                
                <div class="kategori-section">
                    
                    <h2 class="kategori-heading">
                        {{ $kategori }}
                    </h2>

                    <div class="cards-grid">
                        @foreach ($items as $item)
                            <div class="akademik-card">
                                
                                @if($item->thumbnail)
                                    <img src="{{ asset('storage/' . $item->thumbnail) }}" 
                                         class="akademik-card-image" 
                                         alt="{{ $item->judul }}">
                                @else
                                    <div class="akademik-card-placeholder">
                                        <i class="fas fa-image fa-3x text-muted"></i>
                                    </div>
                                @endif
                                
                                <div class="akademik-card-body">
                                    <h5 class="akademik-card-title">{{ $item->judul }}</h5>
                                    
                                    <div class="akademik-card-text">
                                        {!! Str::limit(strip_tags($item->konten), 100, '...') !!}
                                    </div>
                                    
                                    <div class="akademik-card-footer">
                                        @if($item->published_at)
                                            <span class="akademik-card-date">
                                                <i class="far fa-calendar-alt"></i>
                                                {{ \Carbon\Carbon::parse($item->published_at)->format('d M Y') }}
                                            </span>
                                        @else
                                            <span></span>
                                        @endif

                                        <a href="{{ route('akademik.detail', $item->slug) }}" 
                                           class="btn-akademik">
                                            Baca →
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                </div>
                @endforeach

        {{-- MODE 2: SINGLE KATEGORI --}}
        @else
            <div class="cards-grid">
                @forelse ($items as $item)
                    <div class="akademik-card">
                        
                        @if($item->thumbnail)
                            <img src="{{ asset('storage/' . $item->thumbnail) }}" 
                                 class="akademik-card-image" 
                                 alt="{{ $item->judul }}">
                        @else
                            <div class="akademik-card-placeholder">
                                <i class="fas fa-image fa-3x text-muted"></i>
                            </div>
                        @endif
                        
                        <div class="akademik-card-body">
                            <h5 class="akademik-card-title">{{ $item->judul }}</h5>
                            
                            <div class="akademik-card-text">
                                {!! Str::limit(strip_tags($item->konten), 100, '...') !!}
                            </div>
                            
                            <div class="akademik-card-footer">
                                @if($item->published_at)
                                    <span class="akademik-card-date">
                                        <i class="far fa-calendar-alt"></i>
                                        {{ \Carbon\Carbon::parse($item->published_at)->format('d M Y') }}
                                    </span>
                                @else
                                    <span></span>
                                @endif

                                <a href="{{ route('akademik.detail', $item->slug) }}" 
                                   class="btn-akademik">
                                    Baca →
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="empty-state">
                        <i class="far fa-folder-open fa-3x text-muted mb-3"></i>
                        <h4>Belum Ada Informasi</h4>
                        <p class="text-muted">Informasi untuk kategori ini akan segera ditambahkan.</p>
                    </div>
                @endforelse
            </div>
        @endif

    </div>
</div>

@endsection