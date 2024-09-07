<?php

namespace App\Livewire\Admin\Customers;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.admin.customers.index');
    }
}
