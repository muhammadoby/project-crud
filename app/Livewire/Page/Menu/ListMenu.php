<?php

namespace App\Livewire\Page\Menu;

use App\Models\Menu;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;

class ListMenu extends Component
{
    use LivewireAlert;
    public $deleteId, $editId;
    #[On('refreshListMenu')]
    public function render()
    {
        return view('livewire.page.menu.list-menu', [
            'products' => Menu::latest()->get(),
        ]);
    }

    public function clickDelete($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        try {
            $menu = Menu::findOrFail($this->deleteId);
            $menu->delete();
            $this->alert('success', 'Menu deleted successfully');
            $this->reset('deleteId');
            $this->dispatch('refreshListMenu');
        } catch (\Exception $e) {
            $this->alert('error', 'Data tidak tersedia');
        }
    }
}
