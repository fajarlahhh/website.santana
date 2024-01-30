<?php

namespace App\Livewire\Admin\Service;

use App\Models\Service;
use Livewire\Component;

class Form extends Component
{
    public $data, $key, $title, $icon;

    public function mount()
    {
        if ($this->key) {
            $this->data = Service::findOrFail($this->key);
            $this->title = $this->data->title;
            $this->icon = $this->data->icon;
        } else {
            $this->data = new Service();
        }
    }

    public function submit()
    {
        $this->validate([
            'title' => 'required',
            'icon' => 'required',
        ]);

        if (Service::where('title', $this->title)->count() == 0) {
            $this->data->title = $this->title;
            $this->data->icon = $this->icon;
            $this->data->save();
        }

        return redirect('admin/service');
    }

    public function render()
    {
        return view('livewire.admin.service.form');
    }
}
