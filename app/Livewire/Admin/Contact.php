<?php

namespace App\Livewire\Admin;

use App\Models\Page;
use Livewire\Component;
use Livewire\Attributes\On; 

class Contact extends Component
{
    public $data, $title, $description, $detail;

    public function mount()
    {
        $data = Page::where('type', 'contact')->first();
        if ($data) {
            $this->title = $data->title;
            $this->description = $data->description;
            $this->detail = $data->detail;
        }
    }
    
    #[On('set-deskription')] 
    public function setDescription($description)
    {
        $this->description = $description;
        dd('adsf');
    }

    public function submit()
    {
        Page::where('type', 'contact')->delete();

        $data = new Page();
        $data->title = $this->title;
        $data->description = $this->description;
        $data->detail = $this->detail;
        $data->type = "contact";
        $data->save();
    }
    
    public function render()
    {
        return view('livewire.admin.contact');
    }
}
