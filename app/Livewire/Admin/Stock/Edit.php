<?php

namespace App\Livewire\Admin\Stock;

use App\Models\Ingredient;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Edit extends Component
{
    public ?Ingredient $ingredient;
    #[Validate('required|string|min:2|max:24')]
    public string $name;
    #[Validate('required|numeric|min:0', as: 'quantidade')]
    public float $quantity;
    #[Validate('required|in:g,ml,each,kg,l', as: 'unidade')]
    public string $unit;

    #[On('showEditModal')]
    public function showModal(Ingredient $ingredient): void
    {
        $this->js('edit_stock_modal.showModal()');
        $this->ingredient = $ingredient;
        $this->name = $ingredient->name;
        $this->quantity = $ingredient->quantity_in_stock;
        $this->unit = $ingredient->unit;
    }

    public function update(): void
    {
        $this->validate();
        $this->ingredient->name = $this->name;
        $this->ingredient->quantity_in_stock = $this->quantity;
        $this->ingredient->unit = $this->unit;
        $this->ingredient->save();
        $this->dispatch('updated')->self();
        $this->js('edit_stock_modal.close()');
    }

    public function render(): View
    {
        return view('livewire.admin.stock.edit');
    }
}
