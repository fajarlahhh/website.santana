<?php

namespace App\Livewire\Admin\Service;

use App\Models\Page;
use App\Models\Service;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    public $cari, $key, $file, $description;

    public function setKey($key = null)
    {
        $this->key = $key;
    }

    public function mount()
    {
        $service = Page::where('type', 'service')->first();
        if ($service) {
            $this->description = $service->description;
        }
    }

    public function submit()
    {
        $this->validate([
            'description' => 'required',
            'file' => 'required',
        ]);

        Page::where('type', 'service')->delete();
        $data = new Page();
        if ($this->file) {
            $file = $this->file->storeAs(path: 'public', name: 'service.' . $this->file->getClientOriginalExtension());
            $data->file = $file;
        }

        $data->description = $this->description;
        $data->type = "service";
        $data->save();
    }

    public function delete()
    {
        Service::findOrFail($this->key)->delete();
        $this->key = null;
    }

    public function render()
    {
        return view('livewire.admin.service.index', [
            'data' => Service::when($this->cari, fn ($q) => $q->where('title', 'like', '%' . $this->cari . '%'))->paginate(10),
            'service' => Page::where('type', 'service')->first() ?: null
        ]);
    }
}
