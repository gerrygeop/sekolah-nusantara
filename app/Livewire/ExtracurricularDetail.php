<?php

namespace App\Livewire;

use App\Models\Extracurricular;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


class ExtracurricularDetail extends Component
{
    public Extracurricular $extracurricular;

    public function mount(string $slug)
    {
        $this->extracurricular = Extracurricular::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.extracurricular-detail');
    }
}
