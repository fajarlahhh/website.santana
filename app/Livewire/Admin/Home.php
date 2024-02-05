<?php

namespace App\Livewire\Admin;

use App\Models\Blog;
use App\Models\Service;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.admin.home', [
            'blogs' => Blog::all()->count(),
            'services' => Service::all()->count(),
            'highlights' => Blog::where('highlight', 1)->count()
        ]);
    }
}
