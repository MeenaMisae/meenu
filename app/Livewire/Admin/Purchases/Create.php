<?php

namespace App\Livewire\Admin\Purchases;

use App\Models\Ingredient;
use App\Models\Purchase;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Create extends Component
{
    public string $quantity;
    public string $unit;
    public bool $boughtToday = true;
    public string $price;
    public string $purchaseDate;
    public int $ingredientId = 0;
    public Ingredient $ingredient;

    public function render(): View
    {
        return view('livewire.admin.purchases.create', [
            'items' => Ingredient::all()
        ]);
    }

    public function loadUnit(Ingredient $item): void
    {
        $this->ingredient = $item;
        $this->unit = $this->ingredient->unit;
    }

    public function save(): void
    {
        $purchase = Purchase::create([
            'ingredient_id' => $this->ingredientId,
            'quantity_purchased' => $this->quantity,
            'price' => (float) $this->price,
            'price_per_unit' => (float) $this->price / (float) $this->quantity,
            'purchase_date' => $this->boughtToday ? now()->format('Y-m-d') : $this->purchaseDate
        ]);
        $this->ingredient->quantity_in_stock = $this->ingredient->quantity_in_stock + $this->quantity;
        $this->ingredient->save();
        $this->js('add_purchase_modal.close()');
        $this->dispatch('created');
    }
}
