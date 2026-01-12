<div>
	{{-- <!-- Page Header --> --}}
	<section class="bg-linear-to-br from-primary-600 to-primary-800 text-white py-16">
		<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
			<a href="{{ route('news.index') }}" class="inline-flex items-center text-primary-200 hover:text-white mb-6 text-sm">
				<svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
				</svg>
				Kembali ke Daftar Berita
			</a>
			<div class="flex items-center gap-4 mb-4">
				<span
					class="text-xs text-secondary-300 font-semibold bg-secondary-500/20 px-3 py-1 rounded-full border border-secondary-500/30">{{ $news->category }}</span>
				<span class="text-primary-200 text-sm">{{ $news->published_at?->format('d M Y') }}</span>
			</div>
			<h1 class="font-heading text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight">{{ $news->title }}
			</h1>
			@if ($news->user)
				<p class="text-primary-200 mt-4 text-sm">Oleh: {{ $news->user->name }}</p>
			@endif
		</div>
	</section>

	{{-- <!-- Content --> --}}
	<section class="py-12 bg-white">
		<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="rounded-2xl overflow-hidden mb-8 shadow-lg">
				<img src="{{ $news->image_url }}" alt="{{ $news->title }}" class="w-full h-96 object-cover">
			</div>
			<article class="prose prose-lg max-w-none text-gray-700">
				{!! nl2br(e($news->content)) !!}
			</article>
		</div>
	</section>

	{{-- <!-- Related News --> --}}
	@if ($relatedNews->count() > 0)
		<section class="py-16 bg-gray-50">
			<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
				<h2 class="font-heading text-2xl font-bold text-gray-900 mb-8">Berita Terkait</h2>
				<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
					@foreach ($relatedNews as $related)
						<article
							class="bg-white rounded-2xl overflow-hidden shadow border border-gray-100 hover:shadow-lg transition group">
							<a href="{{ route('news.show', $related->slug) }}" class="block h-40 overflow-hidden">
								<img src="{{ $related->image_url }}" alt="{{ $related->title }}"
									class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
							</a>
							<div class="p-5">
								<a href="{{ route('news.show', $related->slug) }}">
									<h3
										class="font-heading text-base font-bold text-gray-900 group-hover:text-primary-600 transition line-clamp-2">
										{{ $related->title }}</h3>
								</a>
								<p class="text-gray-500 text-xs mt-2">{{ $related->published_at?->format('d M Y') }}</p>
							</div>
						</article>
					@endforeach
				</div>
			</div>
		</section>
	@endif
</div>
