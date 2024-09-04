<?php

namespace App\Livewire\Page\Additional;

use Livewire\Component;
use App\Models\Additional;
use Livewire\Attributes\Validate;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddAdditional extends Component
{
    use LivewireAlert;
    #[Validate('required|unique:variants,name')]
    public $name;
    #[Validate('required|boolean')]
    public $status;
    #[Validate('required')]
    public $description;
    public function render()
    {
        return view('livewire.page.additional.add-additional');
    }

    public function create()
    {
        $this->validate();
        try {
            Additional::create([
                'name' => $this->name,
                'description' => $this->description,
                'is_active' => $this->status,
            ]);

            $this->reset('name', 'status');
            $this->alert('success', 'Data baru berhasil ditambahkan');
            $this->dispatch('refreshListAdditional');
        } catch (\Exception $e) {
            $this->alert('error', 'Error: ' . $e->getMessage());
        }
    }
}
