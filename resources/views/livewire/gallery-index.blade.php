<div x-data="{
    showModal: false,
    currentItem: null,
    openModal(item) {
        this.currentItem = item;
        this.showModal = true;
    },
    closeModal() {
        this.showModal = false;
        this.currentItem = null;
    }
}">
	<!-- Page Header -->
	<section class="bg-linear-to-br from-primary-600 to-primary-800 text-white py-20">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
			<h1 class="font-heading text-4xl md:text-5xl font-extrabold mb-4">Galeri</h1>
			<p class="text-primary-100 text-lg max-w-2xl mx-auto">Momen-momen berharga di Sekolah Nusantara.</p>
		</div>
	</section>

	<!-- Content -->
	<section class="py-16 bg-gray-50">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
				@forelse($items as $item)
					<div class="aspect-square rounded-xl overflow-hidden cursor-pointer group relative"
						@click="openModal({ url: '{{ $item->image_url }}', caption: '{{ $item->caption }}', type: '{{ $item->type }}' })">
						<img src="{{ $item->image_url }}" alt="{{ $item->caption }}"
							class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
						<div class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition flex items-center justify-center">
							<div class="opacity-0 group-hover:opacity-100 transition">
								<div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center">
									<svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7">
										</path>
									</svg>
								</div>
							</div>
						</div>
					</div>
				@empty
					<div class="col-span-full text-center py-12">
						<p class="text-gray-500">Belum ada galeri yang tersedia.</p>
					</div>
				@endforelse
			</div>

			<div class="mt-12">
				{{ $items->links() }}
			</div>
		</div>
	</section>

	<!-- Modal -->
	<div x-show="showModal" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
		x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
		x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
		class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/80" @click.self="closeModal()"
		@keydown.escape.window="closeModal()" style="display: none;">
		<button @click="closeModal()"
			class="absolute top-4 right-4 w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition">
			<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
			</svg>
		</button>

		<div x-show="showModal" x-transition:enter="transition ease-out duration-300"
			x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
			x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100"
			x-transition:leave-end="opacity-0 scale-95" class="max-w-5xl w-full">
			<template x-if="currentItem">
				<div class="text-center">
					<template x-if="currentItem.type === 'image'">
						<img :src="currentItem.url" :alt="currentItem.caption" class="max-h-[80vh] w-auto mx-auto rounded-lg shadow-2xl">
					</template>
					<template x-if="currentItem.type === 'video'">
						<video :src="currentItem.url" controls class="max-h-[80vh] w-auto mx-auto rounded-lg shadow-2xl"></video>
					</template>
					<p x-text="currentItem.caption" class="text-white mt-4 text-lg"></p>
				</div>
			</template>
		</div>
	</div>
</div>
