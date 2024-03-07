<?php

namespace App\Livewire\Web\Auth;

use App\View\Components\Web\Layout;
use Livewire\Component;

class Login extends Component
{
    public $hidden;

    public function homepage() {
        return redirect()->route('web.homepage');
    }

    public function doHidden(){
        $this->hidden = true;
    }

    public function register() {
        return redirect()->route('web.register');
    }

    public function render()
    {
        return view('livewire.web.auth.login')
            ->layout(Layout::class);
    }
}
