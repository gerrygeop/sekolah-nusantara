<?php

namespace App\Livewire;

use App\Models\Setting;
use App\Models\Teacher;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Tentang Sekolah - Sekolah Nusantara')]
class About extends Component
{
    public function render()
    {
        return view('livewire.about', [
            'history' => Setting::find('history')?->value ?? 'Sejarah sekolah akan ditampilkan di sini.',
            'vision' => Setting::find('vision')?->value ?? 'Visi sekolah.',
            'mission' => Setting::find('mission')?->value ?? 'Misi sekolah.',
            'structureImage' => Setting::find('structure_image_url')?->value ?? 'https://placehold.co/1200x800?text=Struktur+Organisasi',
            'structuralStaff' => Teacher::where('is_structural', true)->orderBy('order')->get(),
        ]);
    }
}
