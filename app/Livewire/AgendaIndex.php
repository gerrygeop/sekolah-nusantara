<?php

namespace App\Livewire;

use App\Models\Agenda;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;


#[Title('Agenda - Sekolah Nusantara')]
class AgendaIndex extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.agenda-index', [
            'agendas' => Agenda::orderBy('start_date', 'desc')->paginate(9),
        ]);
    }
}
