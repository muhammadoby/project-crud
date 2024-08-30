<?php

namespace App\Livewire\Layout;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.layout.navbar');
    }

    public function logout()
    {
        Auth::logout();
        Alert::success('Success', 'Anda berhasil logout');
        return redirect()->route('login');
    }
}
