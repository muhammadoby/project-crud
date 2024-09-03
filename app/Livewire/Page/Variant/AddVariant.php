<?php

namespace App\Livewire\Page\Variant;

use App\Models\Variant;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AddVariant extends Component
{
    use LivewireAlert;
    #[Validate('required|unique:variants,name')]
    public $name;
    #[Validate('required|boolean')]
    public $status;

    public function render()
    {
        return view('livewire.page.variant.add-variant');
    }

    public function create()
    {
        $this->validate();
        try {
            Variant::create([
                'name' => $this->name,
                'is_active' => $this->status,
            ]);

            $this->reset('name', 'status');
            $this->alert('success', 'Menu created successfully');
            $this->dispatch('refreshListVariant');
        } catch (\Exception $e) {
            $this->alert('error', 'Error: ' . $e->getMessage());
        }
    }
}
