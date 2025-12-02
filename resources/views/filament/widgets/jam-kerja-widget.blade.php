<x-filament::widget>
    <x-filament::section class="h-full">
        {{-- Kita pake Alpine.js biar jamnya jalan real-time --}}
        <div 
            x-data="{ 
                time: new Date().toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false }),
                date: new Date().toLocaleDateString('id-ID', { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' })
            }"
            x-init="setInterval(() => {
                let now = new Date();
                time = now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false });
                date = now.toLocaleDateString('id-ID', { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' });
            }, 1000)"
            class="flex items-center justify-between gap-4"
        >
            
            {{-- Bagian Kiri: Ikon & Tanggal --}}
            <div class="flex items-center gap-4">
                <div class="p-3 bg-primary-50 dark:bg-primary-900/10 rounded-full">
                    {{-- Ikon Jam --}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-primary-600 dark:text-primary-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-lg font-bold text-gray-800 dark:text-gray-200">Waktu Sekarang</h2>
                    <p class="text-sm text-gray-500 dark:text-gray-400 font-medium" x-text="date"></p>
                </div>
            </div>

            {{-- Bagian Kanan: Jam Digital Besar --}}
            <div class="text-3xl font-black text-primary-600 dark:text-primary-400 tracking-wider font-mono" x-text="time">
                00:00:00
            </div>

        </div>
    </x-filament::section>
</x-filament::widget>