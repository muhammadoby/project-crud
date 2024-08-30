<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class LoginMethod extends Component
{
    use LivewireAlert;
    public $email, $password, $remember;
    public function render()
    {
        return view('livewire.auth.login-method');
    }

    public function submit()
    {
        $this->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            Alert::success('Success', 'Anda berhasil login');
            return redirect()->intended(route('dashboard'));
        }else{
            $this->alert('error', 'Invalid email or password');
        }
    }
}
