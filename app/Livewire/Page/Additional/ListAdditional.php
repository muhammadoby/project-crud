<?php

namespace App\Livewire\Page\Additional;

use App\Models\Additional;
use App\Models\Variant;
use Livewire\Component;
use Livewire\Attributes\On;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ListAdditional extends Component
{
    use LivewireAlert;
    public $deleteId, $editId;

    #[On('refreshListAdditional')]

    public function render()
    {
        return view('livewire.page.additional.list-additional', [
            'additionals' => Additional::latest()->get(),
        ]);
    }

    public function clickDelete($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        try {
            $additional = Additional::findOrFail($this->deleteId);
            $additional->delete();
            $this->alert('success', 'Data berhasil dihapus');
            $this->reset('deleteId');
            $this->dispatch('refreshListAdditional');
        } catch (\Exception $e) {
            $this->alert('error', 'Data tidak tersedia');
        }
    }
}
