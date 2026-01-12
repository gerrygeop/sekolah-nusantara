<?php

namespace App\Livewire;

use App\Models\GalleryItem;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;


#[Title('Galeri - Sekolah Nusantara')]
class GalleryIndex extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.gallery-index', [
            'items' => GalleryItem::with('gallery')->latest()->paginate(12),
        ]);
    }
}
