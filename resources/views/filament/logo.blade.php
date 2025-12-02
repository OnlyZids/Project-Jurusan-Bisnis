@if (request()->routeIs('filament.admin.auth.login'))

    {{-- TAMPILAN LOGIN (LOGO BESAR) --}}
    <div style="display: flex; justify-content: center; width: 100%;">
        <img src="{{ asset('images/logo_polije.png') }}" 
             alt="Logo Login" 
             style="height: 70px; object-fit: contain;">
    </div>

@else

    {{-- TAMPILAN DASHBOARD (LOGO KECIL & RAPI) --}}
    <div style="
        display: flex; 
        align-items: center; 
        height: 100%; 
        white-space: nowrap; /* KUNCI: Biar teks gak turun baris */
        overflow: hidden;    /* KUNCI: Biar gak nembus keluar */
    ">
        {{-- Gambar Logo --}}
        <img src="{{ asset('images/logo_bisnis.png') }}" 
             alt="Logo Dashboard" 
             style="height: 150px; width: auto; flex-shrink: 0;">
        
        {{-- Teks Jurusan --}}
        <div style="
            font-weight: 700; 
            color: inherit;
        ">
           JURUSAN BISNIS
        </div>
    </div>

@endif