<div>
	{{-- <!-- Page Header --> --}}
	<section class="bg-linear-to-br from-primary-600 to-primary-800 text-white py-16">
		<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
			<h1 class="font-heading text-4xl md:text-5xl font-extrabold mb-4">Pendaftaran Peserta Didik Baru</h1>
			<p class="text-primary-100 text-lg max-w-2xl mx-auto">Bergabunglah dengan keluarga besar Sekolah Nusantara
				dan raih masa depan cemerlang.</p>
		</div>
	</section>

	{{-- <!-- Form --> --}}
	<section class="py-16 bg-gray-50">
		<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
			@if ($submitted)
				{{-- <!-- Success State --> --}}
				<div class="bg-white rounded-2xl shadow-lg p-8 text-center border border-gray-100">
					<div class="w-20 h-20 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-6">
						<svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
						</svg>
					</div>
					<h2 class="font-heading text-2xl font-bold text-gray-900 mb-2">Pendaftaran Berhasil!</h2>
					<p class="text-gray-600 mb-6">Terima kasih telah mendaftar di Sekolah Nusantara.</p>
					<div class="bg-primary-50 rounded-xl p-6 border border-primary-100 mb-6">
						<p class="text-sm text-gray-600 mb-2">Nomor Registrasi Anda:</p>
						<p class="text-2xl font-heading font-bold text-primary-600">{{ $registrationNumber }}</p>
					</div>
					<p class="text-gray-500 text-sm">Simpan nomor registrasi ini untuk keperluan verifikasi. Tim kami akan
						menghubungi Anda dalam waktu 3x24 jam kerja.</p>
					<a href="{{ route('home') }}"
						class="inline-flex items-center mt-8 px-6 py-3 rounded-full bg-primary-600 text-white font-semibold hover:bg-primary-700 transition">
						Kembali ke Beranda
					</a>
				</div>
			@else
				{{-- <!-- Form Card --> --}}
				<div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
					{{-- <!-- Progress Steps --> --}}
					<div class="bg-gray-50 px-6 py-4 border-b">
						<div class="flex items-center justify-between max-w-md mx-auto">
							<div class="flex items-center gap-2 {{ $step >= 1 ? 'text-primary-600' : 'text-gray-400' }}">
								<div
									class="w-8 h-8 rounded-full {{ $step >= 1 ? 'bg-primary-600 text-white' : 'bg-gray-200 text-gray-500' }} flex items-center justify-center text-sm font-bold">
									1</div>
								<span class="hidden sm:inline text-sm font-medium">Data Diri</span>
							</div>
							<div class="flex-1 h-1 mx-2 {{ $step >= 2 ? 'bg-primary-600' : 'bg-gray-200' }} rounded"></div>
							<div class="flex items-center gap-2 {{ $step >= 2 ? 'text-primary-600' : 'text-gray-400' }}">
								<div
									class="w-8 h-8 rounded-full {{ $step >= 2 ? 'bg-primary-600 text-white' : 'bg-gray-200 text-gray-500' }} flex items-center justify-center text-sm font-bold">
									2</div>
								<span class="hidden sm:inline text-sm font-medium">Orang Tua</span>
							</div>
							<div class="flex-1 h-1 mx-2 {{ $step >= 3 ? 'bg-primary-600' : 'bg-gray-200' }} rounded"></div>
							<div class="flex items-center gap-2 {{ $step >= 3 ? 'text-primary-600' : 'text-gray-400' }}">
								<div
									class="w-8 h-8 rounded-full {{ $step >= 3 ? 'bg-primary-600 text-white' : 'bg-gray-200 text-gray-500' }} flex items-center justify-center text-sm font-bold">
									3</div>
								<span class="hidden sm:inline text-sm font-medium">Akademik</span>
							</div>
						</div>
					</div>

					<form wire:submit.prevent="{{ $step === 3 ? 'submit' : 'nextStep' }}" class="p-6 md:p-8">
						{{-- <!-- Step 1: Personal Data --> --}}
						@if ($step === 1)
							<div class="space-y-6">
								<h3 class="font-heading text-xl font-bold text-gray-900 mb-6">Data Diri Calon Siswa</h3>

								<div>
									<label for="full_name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap
										<span class="text-red-500">*</span></label>
									<input type="text" wire:model="full_name" id="full_name"
										class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition"
										placeholder="Masukkan nama lengkap">
									@error('full_name')
										<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
									@enderror
								</div>

								<div class="grid md:grid-cols-2 gap-6">
									<div>
										<label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin <span
												class="text-red-500">*</span></label>
										<div class="flex gap-4">
											<label class="flex items-center gap-2 cursor-pointer">
												<input type="radio" wire:model="gender" value="L"
													class="w-4 h-4 text-primary-600 focus:ring-primary-500">
												<span class="text-gray-700">Laki-laki</span>
											</label>
											<label class="flex items-center gap-2 cursor-pointer">
												<input type="radio" wire:model="gender" value="P"
													class="w-4 h-4 text-primary-600 focus:ring-primary-500">
												<span class="text-gray-700">Perempuan</span>
											</label>
										</div>
										@error('gender')
											<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
										@enderror
									</div>
									<div>
										<label for="date_of_birth" class="block text-sm font-medium text-gray-700 mb-1">Tanggal
											Lahir <span class="text-red-500">*</span></label>
										<input type="date" wire:model="date_of_birth" id="date_of_birth"
											class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition">
										@error('date_of_birth')
											<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
										@enderror
									</div>
								</div>

								<div class="grid md:grid-cols-2 gap-6">
									<div>
										<label for="place_of_birth" class="block text-sm font-medium text-gray-700 mb-1">Tempat
											Lahir <span class="text-red-500">*</span></label>
										<input type="text" wire:model="place_of_birth" id="place_of_birth"
											class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition"
											placeholder="Kota tempat lahir">
										@error('place_of_birth')
											<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
										@enderror
									</div>
									<div>
										<label for="nik" class="block text-sm font-medium text-gray-700 mb-1">NIK
											(Opsional)</label>
										<input type="text" wire:model="nik" id="nik"
											class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition"
											placeholder="16 digit NIK" maxlength="16">
										@error('nik')
											<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
										@enderror
									</div>
								</div>

								<div>
									<label for="address" class="block text-sm font-medium text-gray-700 mb-1">Alamat <span
											class="text-red-500">*</span></label>
									<textarea wire:model="address" id="address" rows="3"
									 class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition"
									 placeholder="Alamat lengkap"></textarea>
									@error('address')
										<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
									@enderror
								</div>

								<div class="grid md:grid-cols-2 gap-6">
									<div>
										<label for="phone" class="block text-sm font-medium text-gray-700 mb-1">No. Telepon
											<span class="text-red-500">*</span></label>
										<input type="tel" wire:model="phone" id="phone"
											class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition"
											placeholder="08xxxxxxxxxx">
										@error('phone')
											<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
										@enderror
									</div>
									<div>
										<label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email <span
												class="text-red-500">*</span></label>
										<input type="email" wire:model="email" id="email"
											class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition"
											placeholder="email@contoh.com">
										@error('email')
											<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
										@enderror
									</div>
								</div>
							</div>
						@endif

						{{-- <!-- Step 2: Parents Data --> --}}
						@if ($step === 2)
							<div class="space-y-6">
								<h3 class="font-heading text-xl font-bold text-gray-900 mb-6">Data Orang Tua / Wali</h3>

								<div class="bg-primary-50 rounded-xl p-6 border border-primary-100">
									<h4 class="font-semibold text-primary-900 mb-4">Data Ayah</h4>
									<div class="grid md:grid-cols-2 gap-4">
										<div>
											<label for="father_name" class="block text-sm font-medium text-gray-700 mb-1">Nama
												Ayah <span class="text-red-500">*</span></label>
											<input type="text" wire:model="father_name" id="father_name"
												class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition"
												placeholder="Nama lengkap ayah">
											@error('father_name')
												<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
											@enderror
										</div>
										<div>
											<label for="father_job" class="block text-sm font-medium text-gray-700 mb-1">Pekerjaan</label>
											<input type="text" wire:model="father_job" id="father_job"
												class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition"
												placeholder="Pekerjaan ayah">
										</div>
									</div>
									<div class="mt-4">
										<label for="father_phone" class="block text-sm font-medium text-gray-700 mb-1">No.
											Telepon Ayah</label>
										<input type="tel" wire:model="father_phone" id="father_phone"
											class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition"
											placeholder="08xxxxxxxxxx">
									</div>
								</div>

								<div class="bg-secondary-50 rounded-xl p-6 border border-secondary-100">
									<h4 class="font-semibold text-secondary-900 mb-4">Data Ibu</h4>
									<div class="grid md:grid-cols-2 gap-4">
										<div>
											<label for="mother_name" class="block text-sm font-medium text-gray-700 mb-1">Nama
												Ibu <span class="text-red-500">*</span></label>
											<input type="text" wire:model="mother_name" id="mother_name"
												class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition"
												placeholder="Nama lengkap ibu">
											@error('mother_name')
												<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
											@enderror
										</div>
										<div>
											<label for="mother_job" class="block text-sm font-medium text-gray-700 mb-1">Pekerjaan</label>
											<input type="text" wire:model="mother_job" id="mother_job"
												class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition"
												placeholder="Pekerjaan ibu">
										</div>
									</div>
									<div class="mt-4">
										<label for="mother_phone" class="block text-sm font-medium text-gray-700 mb-1">No.
											Telepon Ibu</label>
										<input type="tel" wire:model="mother_phone" id="mother_phone"
											class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition"
											placeholder="08xxxxxxxxxx">
									</div>
								</div>
							</div>
						@endif

						{{-- <!-- Step 3: Academic Data --> --}}
						@if ($step === 3)
							<div class="space-y-6">
								<h3 class="font-heading text-xl font-bold text-gray-900 mb-6">Data Akademik</h3>

								<div>
									<label for="school_unit_id" class="block text-sm font-medium text-gray-700 mb-1">Unit
										Sekolah Yang Dituju <span class="text-red-500">*</span></label>
									<select wire:model="school_unit_id" id="school_unit_id"
										class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition">
										<option value="">Pilih Unit Sekolah</option>
										@foreach ($schoolUnits as $unit)
											<option value="{{ $unit->id }}">{{ $unit->name }}</option>
										@endforeach
									</select>
									@error('school_unit_id')
										<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
									@enderror
								</div>

								<div>
									<label for="previous_school" class="block text-sm font-medium text-gray-700 mb-1">Asal
										Sekolah <span class="text-red-500">*</span></label>
									<input type="text" wire:model="previous_school" id="previous_school"
										class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition"
										placeholder="Nama sekolah asal">
									@error('previous_school')
										<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
									@enderror
								</div>

								<div>
									<label for="previous_school_address" class="block text-sm font-medium text-gray-700 mb-1">Alamat Sekolah
										Asal</label>
									<textarea wire:model="previous_school_address" id="previous_school_address" rows="2"
									 class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition"
									 placeholder="Alamat sekolah asal"></textarea>
								</div>

								<div class="grid md:grid-cols-2 gap-6">
									<div>
										<label for="graduation_year" class="block text-sm font-medium text-gray-700 mb-1">Tahun
											Lulus</label>
										<input type="text" wire:model="graduation_year" id="graduation_year"
											class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition"
											placeholder="2026" maxlength="4">
									</div>
									<div>
										<label for="average_grade" class="block text-sm font-medium text-gray-700 mb-1">Rata-rata Nilai
											Rapor</label>
										<input type="number" step="0.01" wire:model="average_grade" id="average_grade"
											class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition"
											placeholder="85.50" min="0" max="100">
									</div>
								</div>
							</div>
						@endif

						{{-- <!-- Actions --> --}}
						<div class="flex justify-between mt-8 pt-6 border-t">
							@if ($step > 1)
								<button type="button" wire:click="prevStep"
									class="px-6 py-3 rounded-lg border border-gray-300 text-gray-700 font-semibold hover:bg-gray-50 transition">
									Kembali
								</button>
							@else
								<div></div>
							@endif

							<button type="submit"
								class="px-8 py-3 rounded-lg bg-primary-600 text-white font-semibold hover:bg-primary-700 transition shadow flex items-center gap-2">
								@if ($step === 3)
									<span wire:loading.remove wire:target="submit">Kirim Pendaftaran</span>
									<span wire:loading wire:target="submit">Mengirim...</span>
								@else
									Lanjutkan
									<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
									</svg>
								@endif
							</button>
						</div>
					</form>
				</div>
			@endif
		</div>
	</section>
</div>
