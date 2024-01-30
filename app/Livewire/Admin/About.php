<?php

namespace App\Livewire\Admin;

use App\Models\Page;
use Livewire\Component;

class About extends Component
{
    public $data, $title, $description;

    public function mount()
    {
        $data = Page::where('type', 'about')->first();
        if ($data) {
            $this->title = $data->title;
            $this->description = $data->description;
        }
    }

    public function submit()
    {
        Page::where('type', 'about')->delete();

        $data = new Page();
        $data->title = $this->title;
        $data->description = $this->description;
        $data->type = "about";
        $data->save();
    }

    public function render()
    {
        return view('livewire.admin.about');
    }
}
