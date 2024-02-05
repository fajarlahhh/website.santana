<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Login extends Component
{
    public $uid, $password, $remember = false;
    public function submit()
    {
        $this->validate([
            'uid' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['uid' => $this->uid, 'password' => $this->password], $this->remember)) {
            Auth::logoutOtherDevices($this->password, 'password');
            redirect()->intended('admin');
        } else {
            session()->flash('danger', 'Invalid credential');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
