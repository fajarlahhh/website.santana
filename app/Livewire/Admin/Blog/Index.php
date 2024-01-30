<?php

namespace App\Livewire\Admin\Blog;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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
        $data = Blog::findOrFail($this->key);
        if (Storage::delete($data->file)) {
            $data->delete();
        }
        $this->key = null;
    }

    public function render()
    {
        return view('livewire.admin.blog.index', [
            'data' => Blog::when($this->cari, fn ($q) => $q->where('title', 'like', '%' . $this->cari . '%'))->paginate(10)
        ]);
    }
}
