<?php

namespace App\Livewire\Admin\Stock;

use Livewire\Component;

class Create extends Component
{
    public bool $boughtToday = true;
    public function render()
    {
        return view('livewire.admin.stock.create');
    }
}
