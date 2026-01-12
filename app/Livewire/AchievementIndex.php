<?php

namespace App\Livewire;

use App\Models\Achievement;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;


#[Title('Prestasi - Sekolah Nusantara')]
class AchievementIndex extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.achievement-index', [
            'achievements' => Achievement::latest('date')->paginate(12),
        ]);
    }
}
