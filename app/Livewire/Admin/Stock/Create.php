<?php

namespace App\Livewire\Admin\Stock;

use App\Models\Ingredient;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate('required|string|min:2|max:24')]
    public string $name;
    #[Validate('required|numeric|min:0', as: 'quantidade')]
    public string $quantity;
    #[Validate('required|in:g,ml,each,kg,l', as: 'unidade')]
    public string $unit = '';

    public function render(): View
    {
        return view('livewire.admin.stock.create');
    }

    public function save(): void
    {
        $this->validate();
        Ingredient::create([
            'name' => $this->name,
            'quantity_in_stock' => $this->quantity,
            'unit' => $this->unit
        ]);
        $this->js('add_stock_modal.close()');
        $this->dispatch('created')->self();
    }
}
