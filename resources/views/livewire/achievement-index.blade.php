<div>
    <!-- Page Header -->
    <section class="bg-gradient-to-br from-primary-600 to-primary-800 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="font-heading text-4xl md:text-5xl font-extrabold mb-4">Prestasi</h1>
            <p class="text-primary-100 text-lg max-w-2xl mx-auto">Pencapaian membanggakan dari siswa-siswi Sekolah
                Nusantara.</p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @forelse($achievements as $achievement)
                    <div
                        class="bg-white rounded-2xl overflow-hidden shadow border border-gray-100 hover:shadow-lg transition group">
                        <div class="h-40 overflow-hidden">
                            <img src="{{ $achievement->image_url }}" alt="{{ $achievement->title }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="w-8 h-8 rounded-full bg-secondary-100 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-secondary-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </span>
                                <span class="text-xs text-gray-500">{{ $achievement->date->format('Y') }}</span>
                            </div>
                            <h3 class="font-heading text-base font-bold text-gray-900 line-clamp-2">
                                {{ $achievement->title }}</h3>
                            <p class="text-gray-600 text-sm mt-2 line-clamp-2">
                                {{ Str::limit($achievement->description, 80) }}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-500">Belum ada prestasi yang tersedia.</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-12">
                {{ $achievements->links() }}
            </div>
        </div>
    </section>
</div>