<?php

namespace App\Livewire\Web;

use App\View\Components\Web\Layout;
use Livewire\Component;

class Homepage extends Component
{
    public function render()
    {
        return view('livewire.web.homepage')
            ->layout(Layout::class);
    }
}
