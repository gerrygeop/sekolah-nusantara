<div>
	<!-- Page Header -->
	<section class="bg-linear-to-br from-primary-600 to-primary-800 text-white py-20">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
			<h1 class="font-heading text-4xl md:text-5xl font-extrabold mb-4">Tentang Sekolah Nusantara</h1>
			<p class="text-primary-100 text-lg max-w-2xl mx-auto">Mengenal lebih dekat perjalanan, visi, dan misi kami
				dalam mendidik generasi penerus bangsa.</p>
		</div>
	</section>

	{{-- <!-- Tabs Navigation --> --}}
	<section class="bg-white border-b sticky top-20 z-40" x-data="{ activeTab: 'sejarah' }">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<nav class="flex gap-8 overflow-x-auto">
				<button @click="activeTab = 'sejarah'"
					:class="activeTab === 'sejarah' ? 'border-primary-600 text-primary-600' :
					    'border-transparent text-gray-500 hover:text-gray-700'"
					class="py-4 px-1 border-b-2 font-medium text-sm whitespace-nowrap transition">
					Sejarah
				</button>
				<button @click="activeTab = 'visi-misi'"
					:class="activeTab === 'visi-misi' ? 'border-primary-600 text-primary-600' :
					    'border-transparent text-gray-500 hover:text-gray-700'"
					class="py-4 px-1 border-b-2 font-medium text-sm whitespace-nowrap transition">
					Visi & Misi
				</button>
				<button @click="activeTab = 'struktur'"
					:class="activeTab === 'struktur' ? 'border-primary-600 text-primary-600' :
					    'border-transparent text-gray-500 hover:text-gray-700'"
					class="py-4 px-1 border-b-2 font-medium text-sm whitespace-nowrap transition">
					Struktur Organisasi
				</button>
			</nav>
		</div>

		{{-- <!-- Tab Content --> --}}
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
			{{-- <!-- Sejarah Tab --> --}}
			<div x-show="activeTab === 'sejarah'" x-transition>
				<div class="grid md:grid-cols-2 gap-12 items-center">
					<div>
						<span class="text-secondary-600 font-semibold tracking-wide uppercase text-sm">Sejarah
							Kami</span>
						<h2 class="font-heading text-3xl font-bold text-gray-900 mt-2 mb-6">Perjalanan Menuju Keunggulan
						</h2>
						<div class="prose prose-lg text-gray-600">
							<p>{{ $history }}</p>
							<p class="mt-4">Sekolah Nusantara didirikan pada tahun 1990 dengan tekad untuk menjadi
								lembaga pendidikan terdepan di Indonesia. Berawal dari sebuah gedung sederhana dengan
								hanya 50 siswa, kini kami telah berkembang menjadi yayasan pendidikan terpadu dengan
								tiga jenjang pendidikan: SD, SMP, dan SMA.</p>
							<p class="mt-4">Selama lebih dari tiga dekade, kami telah meluluskan ribuan alumni yang
								tersebar di berbagai bidang profesi, baik di dalam negeri maupun internasional. Komitmen
								kami pada kualitas pendidikan tidak pernah surut, dan kami terus berinovasi untuk
								memberikan yang terbaik bagi siswa-siswi kami.</p>
						</div>
					</div>
					<div>
						<img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=800&q=80" alt="School History"
							class="rounded-2xl shadow-xl w-full">
					</div>
				</div>
			</div>

			{{-- <!-- Visi Misi Tab --> --}}
			<div x-show="activeTab === 'visi-misi'" x-transition>
				<div class="grid md:grid-cols-2 gap-12">
					<div class="bg-primary-50 rounded-2xl p-8 border border-primary-100">
						<div class="w-16 h-16 bg-primary-600 rounded-full flex items-center justify-center mb-6">
							<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
								</path>
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
								</path>
							</svg>
						</div>
						<h3 class="font-heading text-2xl font-bold text-primary-900 mb-4">Visi</h3>
						<p class="text-gray-700 text-lg leading-relaxed">{{ $vision }}</p>
					</div>
					<div class="bg-secondary-50 rounded-2xl p-8 border border-secondary-100">
						<div class="w-16 h-16 bg-secondary-600 rounded-full flex items-center justify-center mb-6">
							<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
								</path>
							</svg>
						</div>
						<h3 class="font-heading text-2xl font-bold text-secondary-900 mb-4">Misi</h3>
						<div class="text-gray-700 text-lg leading-relaxed">
							<p>{{ $mission }}</p>
							<ul class="mt-4 space-y-3">
								<li class="flex items-start gap-3">
									<span class="text-secondary-600 mt-1">✓</span>
									Menyelenggarakan pendidikan berkualitas berbasis karakter dan keimanan
								</li>
								<li class="flex items-start gap-3">
									<span class="text-secondary-600 mt-1">✓</span>
									Mengembangkan potensi akademik dan non-akademik siswa secara optimal
								</li>
								<li class="flex items-start gap-3">
									<span class="text-secondary-600 mt-1">✓</span>
									Membangun lingkungan belajar yang kondusif dan menyenangkan
								</li>
								<li class="flex items-start gap-3">
									<span class="text-secondary-600 mt-1">✓</span>
									Menjalin kerjasama dengan berbagai pihak untuk kemajuan pendidikan
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			{{-- <!-- Struktur Tab --> --}}
			<div x-show="activeTab === 'struktur'" x-transition>
				<div class="text-center mb-12">
					<span class="text-secondary-600 font-semibold tracking-wide uppercase text-sm">Susunan
						Kepengurusan</span>
					<h2 class="font-heading text-3xl font-bold text-gray-900 mt-2">Struktur Organisasi</h2>
				</div>

				<div class="mb-12">
					<img src="{{ $structureImage }}" alt="Struktur Organisasi"
						class="w-full max-w-4xl mx-auto rounded-2xl shadow-lg border">
				</div>

				@if ($structuralStaff->count() > 0)
					<div class="mt-16">
						<h3 class="font-heading text-2xl font-bold text-gray-900 text-center mb-8">Pimpinan Sekolah</h3>
						<div class="grid md:grid-cols-3 lg:grid-cols-4 gap-6">
							@foreach ($structuralStaff as $staff)
								<div class="bg-white rounded-xl p-6 text-center shadow border border-gray-100 hover:shadow-lg transition">
									<img src="{{ $staff->image_url }}" alt="{{ $staff->name }}"
										class="w-24 h-24 rounded-full mx-auto object-cover mb-4 border-4 border-primary-100">
									<h4 class="font-heading font-bold text-gray-900">{{ $staff->name }}</h4>
									<p class="text-primary-600 text-sm">{{ $staff->position }}</p>
								</div>
							@endforeach
						</div>
					</div>
				@endif
			</div>
		</div>
	</section>
</div>
