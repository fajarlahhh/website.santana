<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Password extends Component
{
    public $oldPassword, $newPassword;

    public function submit()
    {
        $this->validate([
            'oldPassword' => 'required',
            'newPassword' => 'required',
        ]);

        $id = Auth::id();
        $user = User::findOrFail($id);
        if (!Hash::check($this->oldPassword, $user->password)) {
            session()->flash('danger', 'Invalid old password');
        } else {
            $user->password = Hash::make($this->newPassword);
            $user->save();

            session()->flash('success', 'Success');
        }
    }

    public function render()
    {
        return view('livewire.admin.password');
    }
}
