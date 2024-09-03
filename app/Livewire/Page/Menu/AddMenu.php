<?php

namespace App\Livewire\Page\Menu;

use App\Models\Menu;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AddMenu extends Component
{
    use LivewireAlert;
    #[Validate('required|unique:menus,name')]
    public $name;

    #[Validate('required|numeric|min:0')]
    public $price;

    #[Validate('required|boolean')]
    public $status;

    public function render()
    {
        return view('livewire.page.menu.add-menu');
    }

    public function create()
    {
        $this->validate();
        try {
            Menu::create([
                'name' => $this->name,
                'price' => $this->price,
                'is_active' => $this->status,
            ]);

            $this->reset('name', 'price', 'status');
            $this->alert('success', 'Menu created successfully');
            $this->dispatch('refreshListMenu');
        } catch (\Exception $e) {
            $this->alert('error', 'Error: ' . $e->getMessage());
        }
    }
}
