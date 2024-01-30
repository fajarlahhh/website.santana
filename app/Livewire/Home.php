<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Page;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Home extends Component
{
    public $dataHighlight = [], $about ;

    public function mount()
    {
        $this->dataHighlight = Blog::where('highlight', 1)->get()->toArray();
        $this->about = Page::where('type', "about")->first();
    }
    
    #[Layout('components.layouts.frontend')] 
    public function render()
    {
        return view('livewire.home');
    }
}
