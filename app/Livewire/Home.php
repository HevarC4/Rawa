<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("components.layouts.app")]
class Home extends Component
{
    public function render()
    {
        return view('template.index');
    }
}
