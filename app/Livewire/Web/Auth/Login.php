<?php

namespace App\Livewire\Web\Auth;

use App\Models\User;
use App\View\Components\Web\Layout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $remember_token = false;

    protected array $rules = [
        'email' => 'required|email',
        'password' => 'required',
        'remember_token' => 'nullable'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit() {
        $validated = $this->validate();

        $user = User::where([
            ['email', $validated['email']],
        ])->first();

        if($user) {
            if(Hash::check($validated['password'], $user->password)) {

                if(Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']], $validated['remember_token']))
                {
                    $token = auth()->user()->createToken('Test')->accessToken;

                    return redirect()
                        ->route('web.products')
                        ->header('Bearer ', $token);
                } else {
//   wrong credentials return error
                }

            }
            else {

                return redirect()->route('web.login');
            }
        }
        else {
            return redirect()->route('web.login');
        }
    }

    public function render()
    {
        return view('livewire.web.auth.login')
            ->layout(Layout::class);
    }
}
