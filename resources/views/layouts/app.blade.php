<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>{{ $title ?? 'Sekolah Nusantara' }}</title>

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap"
		rel="stylesheet">

	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-gray-800 bg-gray-50 flex flex-col min-h-screen">

	<!-- Header / Navbar -->
	<header class="bg-white sticky top-0 z-50 shadow-sm border-b border-gray-100" x-data="{ open: false }">
		<nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="flex justify-between h-20">
				<div class="flex">
					<div class="shrink-0 flex items-center">
						<a href="{{ route('home') }}" class="flex items-center gap-3">
							<div
								class="w-10 h-10 rounded-full bg-primary-600 flex items-center justify-center text-white font-bold font-heading text-xl">
								SN
							</div>
							<div class="flex flex-col">
								<span class="font-heading font-bold text-xl text-primary-900 leading-none">Sekolah
									Nusantara</span>
								<span class="text-xs text-primary-600 font-medium tracking-wide">Membentuk Generasi
									Unggul</span>
							</div>
						</a>
					</div>
				</div>

				<!-- Desktop Menu -->
				<div class="hidden md:flex md:items-center md:gap-8">
					<a href="{{ route('home') }}"
						class="text-sm font-medium text-gray-700 hover:text-primary-600 transition">Beranda</a>
					<a href="{{ route('about') }}" class="text-sm font-medium text-gray-700 hover:text-primary-600 transition">Tentang
						Sekolah</a>

					<div class="relative group" x-data="{ unitOpen: false }" @mouseenter="unitOpen = true" @mouseleave="unitOpen = false">
						<button class="text-sm font-medium text-gray-700 hover:text-primary-600 transition flex items-center gap-1">
							Unit Sekolah
							<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
							</svg>
						</button>
						<div x-show="unitOpen" x-transition.opacity
							class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 border border-gray-100">

							<a href="{{ route('school-unit.detail', 'sd-nusantara') }}"
								class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600">SD
								Nusantara</a>
							<a href="{{ route('school-unit.detail', 'smp-nusantara') }}"
								class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600">SMP
								Nusantara</a>
							<a href="{{ route('school-unit.detail', 'sma-nusantara') }}"
								class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600">SMA
								Nusantara</a>
						</div>
					</div>

					<a href="{{ route('extracurricular.index') }}"
						class="text-sm font-medium text-gray-700 hover:text-primary-600 transition">Ekstrakurikuler</a>

					<div class="relative group" x-data="{ newsOpen: false }" @mouseenter="newsOpen = true" @mouseleave="newsOpen = false">
						<button class="text-sm font-medium text-gray-700 hover:text-primary-600 transition flex items-center gap-1">
							Informasi
							<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
							</svg>
						</button>
						<div x-show="newsOpen" x-transition.opacity
							class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 border border-gray-100">
							<a href="{{ route('news.index') }}"
								class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600">Berita</a>
							<a href="{{ route('agenda.index') }}"
								class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600">Agenda</a>
							<a href="{{ route('achievement.index') }}"
								class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600">Prestasi</a>
						</div>
					</div>

					<a href="{{ route('gallery.index') }}"
						class="text-sm font-medium text-gray-700 hover:text-primary-600 transition">Galeri</a>

					<a href="{{ route('registration') }}"
						class="px-5 py-2.5 rounded-full bg-secondary-600 text-white text-sm font-semibold hover:bg-secondary-700 transition shadow-lg shadow-secondary-600/20 transform hover:-translate-y-0.5">
						Daftar PPDB
					</a>
				</div>

				<!-- Mobile Menu Button -->
				<div class="-mr-2 flex items-center md:hidden">
					<button @click="open = !open"
						class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
						<svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
							<path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
								stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
							<path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
								stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</button>
				</div>
			</div>
		</nav>

		<!-- Mobile Menu -->
		<div :class="{ 'block': open, 'hidden': !open }" class="hidden md:hidden bg-white border-t border-gray-100">
			<div class="pt-2 pb-3 space-y-1 px-4">
				<a href="{{ route('home') }}"
					class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Beranda</a>
				<a href="{{ route('about') }}"
					class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Tentang
					Sekolah</a>
				<div class="px-3 py-2 text-xs font-semibold text-gray-400 uppercase tracking-wider">Unit Sekolah</div>
				<a href="{{ route('school-unit.detail', 'sd-nusantara') }}"
					class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 pl-6">SD
					Nusantara</a>
				<a href="{{ route('school-unit.detail', 'smp-nusantara') }}"
					class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 pl-6">SMP
					Nusantara</a>
				<a href="{{ route('school-unit.detail', 'sma-nusantara') }}"
					class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 pl-6">SMA
					Nusantara</a>
				<a href="{{ route('extracurricular.index') }}"
					class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Ekstrakurikuler</a>
				<a href="{{ route('news.index') }}"
					class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Berita</a>
				<a href="{{ route('agenda.index') }}"
					class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Agenda</a>
				<a href="{{ route('gallery.index') }}"
					class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Galeri</a>
				<a href="{{ route('registration') }}"
					class="block mt-4 w-full text-center px-4 py-3 rounded-lg bg-secondary-600 text-white font-bold hover:bg-secondary-700">Daftar
					Sekarang</a>
			</div>
		</div>
	</header>

	<!-- Page Content -->
	<main class="grow">
		{{ $slot }}
	</main>

	<!-- Footer -->
	<footer class="bg-primary-950 text-white pt-16 pb-8 border-t border-primary-900">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
				<div class="col-span-1 md:col-span-1">
					<div class="flex items-center gap-3 mb-6">
						<div
							class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white font-bold font-heading text-xl">
							SN</div>
						<span class="font-heading font-bold text-xl leading-none">Sekolah<br>Nusantara</span>
					</div>
					<p class="text-primary-200 text-sm leading-relaxed mb-6">
						Mewujudkan generasi berprestasi, berkarakter, dan berwawasan global dengan landasan iman dan
						takwa.
					</p>
					<div class="flex space-x-4">
						<!-- Socials -->
						<a href="#" class="text-primary-300 hover:text-white transition"><span
								class="sr-only">Facebook</span>FB</a>
						<a href="#" class="text-primary-300 hover:text-white transition"><span
								class="sr-only">Instagram</span>IG</a>
						<a href="#" class="text-primary-300 hover:text-white transition"><span
								class="sr-only">Youtube</span>YT</a>
					</div>
				</div>

				<div>
					<h3 class="font-heading font-bold text-lg mb-6 text-white">Tautan Cepat</h3>
					<ul class="space-y-3">
						<li><a href="{{ route('home') }}"
								class="text-primary-200 hover:text-secondary-400 text-sm transition">Beranda</a></li>
						<li><a href="{{ route('about') }}" class="text-primary-200 hover:text-secondary-400 text-sm transition">Tentang
								Kami</a>
						</li>
						<li><a href="{{ route('registration') }}"
								class="text-primary-200 hover:text-secondary-400 text-sm transition">Pendaftaran</a>
						</li>
						<li><a href="{{ route('news.index') }}"
								class="text-primary-200 hover:text-secondary-400 text-sm transition">Berita Terbaru</a>
						</li>
					</ul>
				</div>

				<div>
					<h3 class="font-heading font-bold text-lg mb-6 text-white">Unit Pendidikan</h3>
					<ul class="space-y-3">
						<li><a href="{{ route('school-unit.detail', 'sd-nusantara') }}"
								class="text-primary-200 hover:text-secondary-400 text-sm transition">SD Nusantara</a>
						</li>
						<li><a href="{{ route('school-unit.detail', 'smp-nusantara') }}"
								class="text-primary-200 hover:text-secondary-400 text-sm transition">SMP Nusantara</a>
						</li>
						<li><a href="{{ route('school-unit.detail', 'sma-nusantara') }}"
								class="text-primary-200 hover:text-secondary-400 text-sm transition">SMA Nusantara</a>
						</li>
					</ul>
				</div>

				<div>
					<h3 class="font-heading font-bold text-lg mb-6 text-white">Hubungi Kami</h3>
					<ul class="space-y-4">
						<li class="flex items-start gap-3">
							<svg class="w-5 h-5 text-secondary-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
								</path>
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z">
								</path>
							</svg>
							<span class="text-primary-200 text-sm">Jl. Pendidikan No. 123, Jakarta Selatan,
								Indonesia</span>
						</li>
						<li class="flex items-start gap-3">
							<svg class="w-5 h-5 text-secondary-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
								</path>
							</svg>
							<span class="text-primary-200 text-sm">info@sekolahnusantara.sch.id</span>
						</li>
						<li class="flex items-start gap-3">
							<svg class="w-5 h-5 text-secondary-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
								</path>
							</svg>
							<span class="text-primary-200 text-sm">(021) 1234-5678</span>
						</li>
					</ul>
				</div>
			</div>

			<div
				class="border-t border-primary-900 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-primary-400">
				<p>&copy; 2026 Yayasan Sekolah Nusantara. All rights reserved.</p>
				<div class="flex gap-6 mt-4 md:mt-0">
					<a href="#" class="hover:text-white transition">Privacy Policy</a>
					<a href="#" class="hover:text-white transition">Terms of Service</a>
				</div>
			</div>
		</div>
	</footer>
</body>

</html>
