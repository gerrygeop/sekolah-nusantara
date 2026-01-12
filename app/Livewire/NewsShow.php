<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


class NewsShow extends Component
{
    public News $news;

    public function mount(string $slug)
    {
        $this->news = News::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.news-show', [
            'relatedNews' => News::where('id', '!=', $this->news->id)
                ->where('category', $this->news->category)
                ->latest('published_at')
                ->take(3)
                ->get(),
        ]);
    }
}
