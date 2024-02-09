<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Page;
use App\Models\Service;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Home extends Component
{
    public $dataHighlight = [], $about, $service, $contact, $dataService = [], $dataBlog = [];

    public function mount()
    {
        $this->dataHighlight = Blog::where('highlight', 1)->orderBy('id', 'desc')->get()->toArray();
        $this->dataBlog = Blog::take(6)->orderBy('id', 'desc')->get()->toArray();
        $this->dataService = Service::all()->toArray();
        $this->about = Page::where('type', "about")->first();
        $this->service = Page::where('type', "service")->first();
        $this->contact = Page::where('type', "contact")->first();
    }
    
    #[Layout('components.layouts.frontend')] 
    public function render()
    {
        return view('livewire.home');
    }
}
