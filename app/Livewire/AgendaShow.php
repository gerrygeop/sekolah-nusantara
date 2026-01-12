<?php

namespace App\Livewire;

use App\Models\Agenda;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


class AgendaShow extends Component
{
    public Agenda $agenda;

    public function mount(string $slug)
    {
        $this->agenda = Agenda::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.agenda-show');
    }
}
