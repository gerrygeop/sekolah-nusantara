<div>
    <!-- Page Header -->
    <section class="relative bg-gradient-to-br from-primary-600 to-primary-800 text-white py-20 overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <img src="{{ $extracurricular->image_url }}" alt="{{ $extracurricular->name }}"
                class="w-full h-full object-cover">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <a href="{{ route('extracurricular.index') }}"
                class="inline-flex items-center text-primary-200 hover:text-white mb-6 text-sm">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Kembali ke Daftar Ekstrakurikuler
            </a>
            <h1 class="font-heading text-4xl md:text-5xl font-extrabold mb-4">{{ $extracurricular->name }}</h1>
        </div>
    </section>

    <!-- Content -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-2xl overflow-hidden mb-8">
                <img src="{{ $extracurricular->image_url }}" alt="{{ $extracurricular->name }}"
                    class="w-full h-96 object-cover">
            </div>
            <div class="prose prose-lg max-w-none text-gray-600">
                <p>{{ $extracurricular->description }}</p>
                <p class="mt-4">Ekstrakurikuler {{ $extracurricular->name }} merupakan salah satu wadah bagi siswa-siswi
                    Sekolah Nusantara untuk mengembangkan bakat dan minat mereka di luar jam pelajaran reguler.</p>
                <p class="mt-4">Kegiatan ini dibimbing oleh pembina yang kompeten dan berpengalaman di bidangnya,
                    sehingga siswa dapat mengembangkan kemampuan mereka secara optimal.</p>
            </div>

            <div class="mt-12 flex justify-center">
                <a href="{{ route('registration') }}"
                    class="inline-flex items-center px-8 py-4 rounded-full bg-secondary-500 text-primary-900 font-bold hover:bg-secondary-400 transition shadow-lg">
                    Daftar & Bergabung Sekarang
                </a>
            </div>
        </div>
    </section>
</div>