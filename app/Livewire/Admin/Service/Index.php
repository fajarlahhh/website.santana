<?php

namespace App\Livewire\Admin\Service;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $cari, $key;

    public function setKey($key = null)
    {
        $this->key = $key;
    }

    public function delete()
    {
        Service::findOrFail($this->key)->delete();
        $this->key = null;
    }

    public function render()
    {
        return view('livewire.admin.service.index', [
            'data' => Service::when($this->cari, fn ($q) => $q->where('title', 'like', '%' . $this->cari . '%'))->paginate(10)
        ]);
    }
}
