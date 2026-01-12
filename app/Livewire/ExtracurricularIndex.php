<?php

namespace App\Livewire;

use App\Models\Extracurricular;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Ekstrakurikuler - Sekolah Nusantara')]
class ExtracurricularIndex extends Component
{
    public function render()
    {
        return view('livewire.extracurricular-index', [
            'extracurriculars' => Extracurricular::all(),
        ]);
    }
}
