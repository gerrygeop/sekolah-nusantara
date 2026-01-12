<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;


#[Title('Berita - Sekolah Nusantara')]
class NewsIndex extends Component
{
    use WithPagination;

    public string $category = '';

    public function updatingCategory()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = News::latest('published_at');

        if ($this->category) {
            $query->where('category', $this->category);
        }

        return view('livewire.news-index', [
            'newsList' => $query->paginate(9),
            'categories' => News::distinct()->pluck('category'),
        ]);
    }
}
