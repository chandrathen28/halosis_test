<?php

namespace App\Livewire\Web\Product;

use App\Models\Product;
use App\View\Components\Web\Layout;
use Livewire\Component;

class Detail extends Component
{
    public $product;

    public function mount($id): void
    {
        $this->product = Product::find($id);
    }

    public function render()
    {
        return view('livewire.web.product.detail')
            ->layout(Layout::class);
    }
}
