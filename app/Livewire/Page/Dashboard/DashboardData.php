<?php

namespace App\Livewire\Page\Dashboard;

use App\Models\Additional;
use App\Models\Menu;
use App\Models\User;
use App\Models\Variant;
use Livewire\Component;

class DashboardData extends Component
{
    public function render()
    {
        return view('livewire.page.dashboard.dashboard-data', [
            'users' => User::get(),
            'products' => Menu::get(),
            'variants' => Variant::get(),
            'additionals' => Additional::get(),
        ]);
    }
}
