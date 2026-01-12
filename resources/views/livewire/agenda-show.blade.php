<div>
    <!-- Page Header -->
    <section class="bg-gradient-to-br from-primary-600 to-primary-800 text-white py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('agenda.index') }}"
                class="inline-flex items-center text-primary-200 hover:text-white mb-6 text-sm">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Kembali ke Daftar Agenda
            </a>
            <h1 class="font-heading text-3xl md:text-4xl font-extrabold leading-tight">{{ $agenda->title }}</h1>
        </div>
    </section>

    <!-- Content -->
    <section class="py-12 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-primary-50 rounded-2xl p-6 border border-primary-100 mb-8">
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-primary-600 text-white flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Tanggal</p>
                            <p class="font-bold text-gray-900">{{ $agenda->start_date->format('d M Y') }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-primary-600 text-white flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Waktu</p>
                            <p class="font-bold text-gray-900">{{ $agenda->start_date->format('H:i') }} -
                                {{ $agenda->end_date?->format('H:i') ?? 'Selesai' }} WIB</p>
                        </div>
                    </div>
                    @if($agenda->location)
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-primary-600 text-white flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Lokasi</p>
                                <p class="font-bold text-gray-900">{{ $agenda->location }}</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            @if($agenda->image_url)
                <div class="rounded-2xl overflow-hidden mb-8 shadow-lg">
                    <img src="{{ $agenda->image_url }}" alt="{{ $agenda->title }}" class="w-full h-80 object-cover">
                </div>
            @endif

            <article class="prose prose-lg max-w-none text-gray-700">
                {!! nl2br(e($agenda->description)) !!}
            </article>
        </div>
    </section>
</div>