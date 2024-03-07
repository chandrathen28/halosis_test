<?php

namespace App\Livewire\Web\Product;

use App\Models\Category;
use App\Models\Product;
use App\View\Components\Web\Layout;
use Livewire\Component;

class Index extends Component
{
    public $data;

    public function render()
    {
        $this->data['categories'] = Category::query()->get();
        $this->data['products'] = Product::query()->get();

        return view('livewire.web.product.index')
            ->layout(Layout::class);
    }
}
