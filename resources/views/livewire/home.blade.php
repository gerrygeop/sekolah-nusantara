<div>
	{{-- <!-- Hero Section --> --}}
	<section class="relative bg-linear-to-br from-primary-600 via-primary-700 to-primary-900 text-white overflow-hidden">
		<div class="absolute inset-0 opacity-10">
			<div class="absolute inset-0"
				style="background-image: url('data:image/svg+xml,%3Csvg width=\" 60\"
                height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\"
                fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36
                34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6
                4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
			</div>
		</div>
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32 relative z-10">
			<div class="grid md:grid-cols-2 gap-12 items-center">
				<div>
					<span
						class="inline-block px-4 py-1.5 bg-secondary-500/20 text-secondary-300 rounded-full text-sm font-semibold mb-6 border border-secondary-500/30">
						✨ Pendaftaran PPDB Dibuka!
					</span>
					<h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 leading-tight">
						Membentuk <span class="text-secondary-400">Keunggulan</span> dari Fondasi Menuju Masa Depan
					</h1>
					<p class="text-lg text-primary-100 mb-8 leading-relaxed max-w-lg">
						Sekolah Nusantara menyediakan pendidikan berkualitas tinggi dengan kurikulum terpadu dan
						fasilitas modern untuk generasi penerus bangsa.
					</p>
					<div class="flex flex-col sm:flex-row gap-4">
						<a href="{{ route('registration') }}"
							class="px-8 py-4 rounded-full bg-secondary-500 text-primary-900 font-bold text-lg hover:bg-secondary-400 transition transform hover:-translate-y-1 shadow-xl shadow-secondary-500/30 text-center">
							Daftar Sekarang
						</a>
						<a href="{{ route('about') }}"
							class="px-8 py-4 rounded-full border-2 border-white/30 text-white font-semibold text-lg hover:bg-white/10 transition text-center">
							Pelajari Lebih Lanjut
						</a>
					</div>
				</div>
				<div class="hidden md:block">
					<img
						src="https://images.unsplash.com/photo-1577896851231-70ef18881754?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
						alt="Students" class="rounded-2xl shadow-2xl w-full object-cover max-h-125 border-4 border-white/20">
				</div>
			</div>
		</div>
		<div class="absolute bottom-0 left-0 right-0 h-20 bg-linear-to-t from-gray-50 to-transparent"></div>
	</section>

	{{-- <!-- School Units --> --}}
	<section class="py-20 bg-gray-50">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center mb-16">
				<span class="text-secondary-600 font-semibold tracking-wide uppercase text-sm">Unit Pendidikan</span>
				<h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-900 mt-2">Perjalanan Anak Anda <span
						class="text-primary-600">Dimulai di Sini</span></h2>
				<p class="text-gray-600 mt-4 max-w-2xl mx-auto">Pilih jenjang pendidikan yang sesuai untuk putra-putri
					Anda.</p>
			</div>
			<div class="grid md:grid-cols-3 gap-8">
				@foreach ($schoolUnits as $unit)
					<a href="{{ route('school-unit.detail', $unit->slug) }}"
						class="group bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-xl hover:border-primary-200 transition duration-300 transform hover:-translate-y-2">
						<div class="h-52 overflow-hidden">
							<img src="{{ $unit->image_url }}" alt="{{ $unit->name }}"
								class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
						</div>
						<div class="p-6">
							<h3 class="font-heading text-xl font-bold text-gray-900 group-hover:text-primary-600 transition">
								{{ $unit->name }}</h3>
							<p class="text-gray-600 mt-2 text-sm line-clamp-2">{{ Str::limit($unit->description, 100) }}</p>
							<div class="mt-4 flex items-center text-primary-600 font-semibold text-sm">
								Lihat Detail
								<svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition" fill="none" stroke="currentColor"
									viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
								</svg>
							</div>
						</div>
					</a>
				@endforeach
			</div>
		</div>
	</section>

	{{-- <!-- Stats Section --> --}}
	<section class="py-20 bg-primary-900 text-white">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center mb-12">
				<h2 class="font-heading text-3xl md:text-4xl font-bold">Bakat <span class="text-secondary-400">Siswa
						Global</span>, Berakar Lokal</h2>
			</div>
			<div class="grid grid-cols-2 md:grid-cols-4 gap-8">
				<div class="text-center p-6 rounded-xl bg-white/5 border border-white/10">
					<div class="text-4xl md:text-5xl font-heading font-extrabold text-secondary-400">260+</div>
					<div class="text-primary-200 mt-2 text-sm">Tenaga Pendidik</div>
				</div>
				<div class="text-center p-6 rounded-xl bg-white/5 border border-white/10">
					<div class="text-4xl md:text-5xl font-heading font-extrabold text-secondary-400">45</div>
					<div class="text-primary-200 mt-2 text-sm">Tahun Pengalaman</div>
				</div>
				<div class="text-center p-6 rounded-xl bg-white/5 border border-white/10">
					<div class="text-4xl md:text-5xl font-heading font-extrabold text-secondary-400">98%</div>
					<div class="text-primary-200 mt-2 text-sm">Kelulusan</div>
				</div>
				<div class="text-center p-6 rounded-xl bg-white/5 border border-white/10">
					<div class="text-4xl md:text-5xl font-heading font-extrabold text-secondary-400">15</div>
					<div class="text-primary-200 mt-2 text-sm">Ekstrakurikuler</div>
				</div>
			</div>
		</div>
	</section>

	{{-- <!-- Latest News --> --}}
	<section class="py-20 bg-white">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="flex flex-col md:flex-row md:items-end md:justify-between mb-12">
				<div>
					<span class="text-secondary-600 font-semibold tracking-wide uppercase text-sm">Tetap
						Terhubung</span>
					<h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-900 mt-2">Berita & Informasi <span
							class="text-primary-600">Terbaru</span></h2>
				</div>
				<a href="{{ route('news.index') }}"
					class="mt-4 md:mt-0 text-primary-600 font-semibold hover:underline flex items-center">
					Lihat Semua Berita <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
					</svg>
				</a>
			</div>
			<div class="grid md:grid-cols-3 gap-8">
				@foreach ($latestNews as $news)
					<article class="bg-gray-50 rounded-2xl overflow-hidden group hover:shadow-lg transition border border-gray-100">
						<a href="{{ route('news.show', $news->slug) }}" class="block h-48 overflow-hidden">
							<img src="{{ $news->image_url }}" alt="{{ $news->title }}"
								class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
						</a>
						<div class="p-6">
							<span
								class="text-xs text-secondary-700 font-semibold bg-secondary-100 px-2 py-1 rounded">{{ $news->category }}</span>
							<a href="{{ route('news.show', $news->slug) }}">
								<h3
									class="font-heading text-lg font-bold text-gray-900 mt-3 group-hover:text-primary-600 transition line-clamp-2">
									{{ $news->title }}</h3>
							</a>
							<p class="text-gray-600 text-sm mt-2 line-clamp-2">
								{{ Str::limit(strip_tags($news->content), 100) }}</p>
							<div class="mt-4 text-xs text-gray-500">{{ $news->published_at?->format('d M Y') }}</div>
						</div>
					</article>
				@endforeach
			</div>
		</div>
	</section>

	{{-- <!-- Achievements --> --}}
	<section class="py-20 bg-gray-50">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center mb-12">
				<span class="text-secondary-600 font-semibold tracking-wide uppercase text-sm">Kebanggaan Kami</span>
				<h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-900 mt-2">Prestasi <span
						class="text-primary-600">Membanggakan</span></h2>
			</div>
			<div class="grid md:grid-cols-4 gap-6">
				@foreach ($achievements as $achievement)
					<div class="bg-white rounded-xl p-6 shadow border border-gray-100 hover:shadow-lg transition">
						<div class="w-12 h-12 rounded-full bg-secondary-100 flex items-center justify-center mb-4">
							<svg class="w-6 h-6 text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
							</svg>
						</div>
						<h3 class="font-heading font-bold text-gray-900">{{ $achievement->title }}</h3>
						<p class="text-gray-600 text-sm mt-1">{{ $achievement->date->format('Y') }}</p>
					</div>
				@endforeach
			</div>
			<div class="text-center mt-10">
				<a href="{{ route('achievement.index') }}"
					class="inline-flex items-center px-6 py-3 rounded-full border-2 border-primary-600 text-primary-600 font-semibold hover:bg-primary-600 hover:text-white transition">
					Lihat Semua Prestasi
				</a>
			</div>
		</div>
	</section>

	{{-- <!-- Gallery Preview --> --}}
	<section class="py-20 bg-white">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center mb-12">
				<span class="text-secondary-600 font-semibold tracking-wide uppercase text-sm">Galeri</span>
				<h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-900 mt-2">Suasana <span
						class="text-primary-600">Sekolah Nusantara</span></h2>
			</div>
			<div class="grid grid-cols-2 md:grid-cols-3 gap-4">
				@foreach ($galleryItems as $item)
					<div class="aspect-square rounded-xl overflow-hidden">
						<img src="{{ $item->image_url }}" alt="{{ $item->caption }}"
							class="w-full h-full object-cover hover:scale-110 transition duration-300 cursor-pointer">
					</div>
				@endforeach
			</div>
			<div class="text-center mt-10">
				<a href="{{ route('gallery.index') }}"
					class="inline-flex items-center px-6 py-3 rounded-full bg-primary-600 text-white font-semibold hover:bg-primary-700 transition shadow">
					Lihat Galeri Lengkap
				</a>
			</div>
		</div>
	</section>

	{{-- <!-- CTA Section --> --}}
	<section class="py-20 bg-linear-to-br from-secondary-500 to-secondary-600">
		<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
			<h2 class="font-heading text-3xl md:text-4xl font-bold text-primary-900 mb-6">Siap Bergabung dengan Keluarga
				Besar Nusantara?</h2>
			<p class="text-primary-800 text-lg mb-8 max-w-2xl mx-auto">Daftarkan putra-putri Anda sekarang untuk
				mendapatkan pendidikan terbaik yang akan membentuk masa depan mereka.</p>
			<a href="{{ route('registration') }}"
				class="inline-flex items-center px-10 py-4 rounded-full bg-primary-900 text-white font-bold text-lg hover:bg-primary-800 transition shadow-xl transform hover:-translate-y-1">
				Daftar Sekarang
				<svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
					</path>
				</svg>
			</a>
		</div>
	</section>
</div>
