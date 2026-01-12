<div>
    <!-- Page Header -->
    <section class="bg-gradient-to-br from-primary-600 to-primary-800 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="font-heading text-4xl md:text-5xl font-extrabold mb-4">Agenda</h1>
            <p class="text-primary-100 text-lg max-w-2xl mx-auto">Jadwal kegiatan dan acara penting di Sekolah
                Nusantara.</p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-6">
                @forelse($agendas as $agenda)
                    <a href="{{ route('agenda.show', $agenda->slug) }}"
                        class="block bg-white rounded-2xl shadow border border-gray-100 hover:shadow-lg transition overflow-hidden group">
                        <div class="flex flex-col md:flex-row">
                            <div
                                class="md:w-48 h-48 md:h-auto bg-primary-600 text-white flex flex-col items-center justify-center p-6 text-center">
                                <span
                                    class="text-4xl font-heading font-extrabold">{{ $agenda->start_date->format('d') }}</span>
                                <span class="text-lg font-medium">{{ $agenda->start_date->format('M Y') }}</span>
                                <span class="text-sm text-primary-200 mt-1">{{ $agenda->start_date->format('H:i') }}
                                    WIB</span>
                            </div>
                            <div class="flex-1 p-6">
                                <h3
                                    class="font-heading text-xl font-bold text-gray-900 group-hover:text-primary-600 transition">
                                    {{ $agenda->title }}</h3>
                                <p class="text-gray-600 mt-2 line-clamp-2">{{ Str::limit($agenda->description, 150) }}</p>
                                @if($agenda->location)
                                    <div class="flex items-center gap-2 mt-4 text-gray-500 text-sm">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        {{ $agenda->location }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="text-center py-12">
                        <p class="text-gray-500">Belum ada agenda yang tersedia.</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-12">
                {{ $agendas->links() }}
            </div>
        </div>
    </section>
</div>