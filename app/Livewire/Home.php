<?php

namespace App\Livewire;

use App\Models\Achievement;
use App\Models\Agenda;
use App\Models\GalleryItem;
use App\Models\News;
use App\Models\SchoolUnit;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Beranda - Sekolah Nusantara')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'schoolUnits' => SchoolUnit::all(),
            'latestNews' => News::latest('published_at')->take(3)->get(),
            'upcomingAgendas' => Agenda::where('start_date', '>=', now())->orderBy('start_date')->take(3)->get(),
            'achievements' => Achievement::latest('date')->take(4)->get(),
            'galleryItems' => GalleryItem::latest()->take(6)->get(),
        ]);
    }
}
