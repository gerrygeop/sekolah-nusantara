<?php

namespace App\Livewire;

use App\Models\SchoolUnit;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


class SchoolUnitDetail extends Component
{
    public SchoolUnit $unit;

    public function mount(string $slug)
    {
        $this->unit = SchoolUnit::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.school-unit-detail', [
            'teachers' => $this->unit->teachers()->orderBy('order')->get(),
        ]);
    }
}
