<div>
	{{-- <!-- Page Header --> --}}
	<section class="bg-linear-to-br from-primary-600 to-primary-800 text-white py-20">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
			<h1 class="font-heading text-4xl md:text-5xl font-extrabold mb-4">Ekstrakurikuler</h1>
			<p class="text-primary-100 text-lg max-w-2xl mx-auto">Kembangkan bakat dan minat melalui berbagai kegiatan
				ekstrakurikuler yang kami sediakan.</p>
		</div>
	</section>

	{{-- <!-- Content --> --}}
	<section class="py-16 bg-gray-50">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">
				@foreach ($extracurriculars as $item)
					<a href="{{ route('extracurricular.detail', $item->slug) }}"
						class="bg-white rounded-2xl overflow-hidden shadow border border-gray-100 hover:shadow-xl transition group transform hover:-translate-y-1">
						<div class="h-48 overflow-hidden">
							<img src="{{ $item->image_url }}" alt="{{ $item->name }}"
								class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
						</div>
						<div class="p-6">
							<h3 class="font-heading text-xl font-bold text-gray-900 group-hover:text-primary-600 transition">
								{{ $item->name }}</h3>
							<p class="text-gray-600 mt-2 text-sm line-clamp-2">{{ Str::limit($item->description, 100) }}</p>
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
</div>
