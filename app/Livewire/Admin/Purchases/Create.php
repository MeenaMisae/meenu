<?php

namespace App\Livewire\Admin\Purchases;

use App\Models\Ingredient;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Create extends Component
{
    public string $quantity;
    public string $unit;
    public bool $boughtToday = true;
    public string $price;

    public function render(): View
    {
        return view('livewire.admin.purchases.create', [
            'items' => Ingredient::all()
        ]);
    }

    public function loadUnit(Ingredient $item): void
    {
        $this->unit = $item->unit;
    }
}
