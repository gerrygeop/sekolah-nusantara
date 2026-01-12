<div>
	{{-- <!-- Page Header --> --}}
	<section class="relative bg-linear-to-br from-primary-600 to-primary-800 text-white py-20 overflow-hidden">
		<div class="absolute inset-0 opacity-20">
			<img src="{{ $unit->image_url }}" alt="{{ $unit->name }}" class="w-full h-full object-cover">
		</div>
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
			<span
				class="inline-block px-4 py-1.5 bg-secondary-500/20 text-secondary-300 rounded-full text-sm font-semibold mb-4 border border-secondary-500/30">Unit
				Pendidikan</span>
			<h1 class="font-heading text-4xl md:text-5xl font-extrabold mb-4">{{ $unit->name }}</h1>
			<p class="text-primary-100 text-lg max-w-2xl mx-auto">{{ Str::limit($unit->description, 150) }}</p>
		</div>
	</section>

	{{-- <!-- Content --> --}}
	<section class="py-16 bg-white">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="grid lg:grid-cols-3 gap-12">
				{{-- <!-- Main Content --> --}}
				<div class="lg:col-span-2">
					<div class="prose prose-lg max-w-none">
						<h2 class="font-heading text-2xl font-bold text-gray-900">Tentang {{ $unit->name }}</h2>
						<p class="text-gray-600 leading-relaxed">{{ $unit->description }}</p>

						<p class="text-gray-600 leading-relaxed mt-4">
							{{ $unit->name }} berkomitmen untuk memberikan pendidikan berkualitas tinggi dengan
							pendekatan yang holistik. Kami percaya bahwa setiap anak memiliki potensi unik yang perlu
							dikembangkan secara optimal.
						</p>

						<h3 class="font-heading text-xl font-bold text-gray-900 mt-8 mb-4">Keunggulan Kami</h3>
						<ul class="space-y-3 text-gray-600">
							<li class="flex items-start gap-3">
								<span
									class="w-6 h-6 rounded-full bg-secondary-100 text-secondary-600 flex items-center justify-center shrink-0 mt-0.5">✓</span>
								<span>Kurikulum terpadu yang mengombinasikan kurikulum nasional dengan pengayaan
									materi</span>
							</li>
							<li class="flex items-start gap-3">
								<span
									class="w-6 h-6 rounded-full bg-secondary-100 text-secondary-600 flex items-center justify-center shrink-0 mt-0.5">✓</span>
								<span>Tenaga pengajar profesional dan berpengalaman</span>
							</li>
							<li class="flex items-start gap-3">
								<span
									class="w-6 h-6 rounded-full bg-secondary-100 text-secondary-600 flex items-center justify-center shrink-0 mt-0.5">✓</span>
								<span>Fasilitas modern dan lingkungan belajar yang kondusif</span>
							</li>
							<li class="flex items-start gap-3">
								<span
									class="w-6 h-6 rounded-full bg-secondary-100 text-secondary-600 flex items-center justify-center shrink-0 mt-0.5">✓</span>
								<span>Program ekstrakurikuler yang beragam</span>
							</li>
						</ul>
					</div>
				</div>

				<!-- Sidebar -->
				<div class="lg:col-span-1">
					<div class="bg-primary-50 rounded-2xl p-6 border border-primary-100 sticky top-24">
						<h3 class="font-heading text-lg font-bold text-primary-900 mb-4">Kepala Sekolah</h3>
						@php
							$headmaster = $teachers->where('position', 'Kepala Sekolah')->first();
						@endphp
						@if ($headmaster)
							<div class="flex items-center gap-4 mb-6">
								<img src="{{ $headmaster->image_url }}" alt="{{ $headmaster->name }}"
									class="w-16 h-16 rounded-full object-cover border-2 border-primary-200">
								<div>
									<h4 class="font-bold text-gray-900">{{ $headmaster->name }}</h4>
									<p class="text-primary-600 text-sm">{{ $headmaster->position }}</p>
								</div>
							</div>
						@endif

						<a href="{{ route('registration') }}"
							class="block w-full text-center py-3 px-6 bg-secondary-500 text-primary-900 rounded-lg font-bold hover:bg-secondary-400 transition">
							Daftar Sekarang
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	{{-- <!-- Teachers --> --}}
	<section class="py-16 bg-gray-50">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center mb-12">
				<span class="text-secondary-600 font-semibold tracking-wide uppercase text-sm">Tim Pengajar</span>
				<h2 class="font-heading text-3xl font-bold text-gray-900 mt-2">Guru & Staff {{ $unit->name }}</h2>
			</div>
			<div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
				@foreach ($teachers as $teacher)
					<div class="bg-white rounded-xl p-6 text-center shadow border border-gray-100 hover:shadow-lg transition group">
						<img src="{{ $teacher->image_url }}" alt="{{ $teacher->name }}"
							class="w-20 h-20 rounded-full mx-auto object-cover mb-4 border-4 border-gray-100 group-hover:border-primary-200 transition">
						<h4 class="font-heading font-bold text-gray-900">{{ $teacher->name }}</h4>
						<p class="text-primary-600 text-sm">{{ $teacher->position }}</p>
					</div>
				@endforeach
			</div>
		</div>
	</section>
</div>
