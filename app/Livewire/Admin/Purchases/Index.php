<?php

namespace App\Livewire\Admin\Purchases;

use App\Models\Purchase;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.admin.purchases.index', [
            'purchases' => Purchase::get()->unique('ingredient_id')
        ]);
    }
}
