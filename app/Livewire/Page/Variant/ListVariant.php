<?php

namespace App\Livewire\Page\Variant;

use App\Models\Variant;
use Livewire\Component;
use Livewire\Attributes\On;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ListVariant extends Component
{
    use LivewireAlert;
    public $deleteId, $editId;
    #[On('refreshListVariant')]
    public function render()
    {
        return view('livewire.page.variant.list-variant', [
            'variants' => Variant::latest()->get(),
        ]);
    }

    public function clickDelete($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        try {
            $varian = Variant::findOrFail($this->deleteId);
            $varian->delete();
            $this->alert('success', 'Varian berhasil dihapus');
            $this->reset('deleteId');
            $this->dispatch('refreshListVariant');
        } catch (\Exception $e) {
            $this->alert('error', 'Data tidak tersedia');
        }
    }
}
