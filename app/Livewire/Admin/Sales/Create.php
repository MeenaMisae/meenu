<?php

namespace App\Livewire\Admin\Sales;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.admin.sales.create');
    }
}
