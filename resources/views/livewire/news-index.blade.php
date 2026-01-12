<div>
	{{-- <!-- Page Header --> --}}
	<section class="bg-linear-to-br from-primary-600 to-primary-800 text-white py-20">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
			<h1 class="font-heading text-4xl md:text-5xl font-extrabold mb-4">Berita</h1>
			<p class="text-primary-100 text-lg max-w-2xl mx-auto">Informasi terbaru seputar kegiatan dan perkembangan
				Sekolah Nusantara.</p>
		</div>
	</section>

	{{-- <!-- Filter --> --}}
	<section class="bg-white border-b sticky top-20 z-40">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
			<div class="flex items-center gap-4 overflow-x-auto">
				<span class="text-sm text-gray-500 font-medium">Kategori:</span>
				<button wire:click="$set('category', '')"
					class="{{ $category === '' ? 'bg-primary-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }} px-4 py-2 rounded-full text-sm font-medium transition">
					Semua
				</button>
				@foreach ($categories as $cat)
					<button wire:click="$set('category', '{{ $cat }}')"
						class="{{ $category === $cat ? 'bg-primary-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }} px-4 py-2 rounded-full text-sm font-medium transition whitespace-nowrap">
						{{ $cat }}
					</button>
				@endforeach
			</div>
		</div>
	</section>

	{{-- <!-- Content --> --}}
	<section class="py-16 bg-gray-50">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
				@forelse($newsList as $news)
					<article
						class="bg-white rounded-2xl overflow-hidden shadow border border-gray-100 hover:shadow-xl transition group">
						<a href="{{ route('news.show', $news->slug) }}" class="block h-48 overflow-hidden">
							<img src="{{ $news->image_url }}" alt="{{ $news->title }}"
								class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
						</a>
						<div class="p-6">
							<div class="flex items-center gap-2 mb-3">
								<span
									class="text-xs text-secondary-700 font-semibold bg-secondary-100 px-2 py-1 rounded">{{ $news->category }}</span>
								<span class="text-xs text-gray-500">{{ $news->published_at?->format('d M Y') }}</span>
							</div>
							<a href="{{ route('news.show', $news->slug) }}">
								<h3 class="font-heading text-lg font-bold text-gray-900 group-hover:text-primary-600 transition line-clamp-2">
									{{ $news->title }}</h3>
							</a>
							<p class="text-gray-600 text-sm mt-2 line-clamp-2">
								{{ Str::limit(strip_tags($news->content), 100) }}</p>
							<a href="{{ route('news.show', $news->slug) }}"
								class="inline-flex items-center mt-4 text-primary-600 font-semibold text-sm hover:underline">
								Baca Selengkapnya
								<svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
								</svg>
							</a>
						</div>
					</article>
				@empty
					<div class="col-span-full text-center py-12">
						<p class="text-gray-500">Belum ada berita yang tersedia.</p>
					</div>
				@endforelse
			</div>

			<div class="mt-12">
				{{ $newsList->links() }}
			</div>
		</div>
	</section>
</div>
