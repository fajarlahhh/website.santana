<?php

namespace App\Livewire\Admin\Blog;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

    public $data, $key, $title, $description, $highlight = false, $file;

    public function mount()
    {
        if ($this->key) {
            $this->data = Blog::findOrFail($this->key);
            $this->title = $this->data->title;
            $this->description = $this->data->description;
            $this->highlight = $this->data->highlight == 1 ? true : false;
        } else {
            $this->data = new Blog();
        }
    }

    public function submit()
    {
        if ($this->key) {
            $this->validate([
                'title' => 'required',
                'description' => 'required',
            ]);
        } else {
            $this->validate([
                'title' => 'required',
                'description' => 'required',
                'file' => 'required',
            ]);
        }

        if (Blog::where('title', $this->title)->count() == 0) {
            if ($this->file) {
                $file = $this->file->storeAs(path: 'public/blogs', name: $this->title);
                $this->data->file = $file;
            }

            $this->data->title = $this->title;
            $this->data->description = $this->description;
            $this->data->highlight = $this->highlight ? 1 : 0;
            $this->data->save();
        }

        return redirect('admin/blog');
    }

    public function render()
    {
        return view('livewire.admin.blog.form');
    }
}
