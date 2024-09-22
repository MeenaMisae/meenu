<?php

namespace App\Livewire\Admin\Stock;

use App\Models\Ingredient;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.app')]
    public function render(): View
    {
        return view('livewire.admin.stock.index', [
            'ingredients' => Ingredient::all()
        ]);
    }

    public function showEditModal(Ingredient $ingredient): void
    {
        $this->dispatch('showEditModal', ingredient: $ingredient)->to(Edit::class);
    }
}
