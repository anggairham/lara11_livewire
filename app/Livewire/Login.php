<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.login');
    }

    public function loginUser(Request $request)
    {
        $validated = $this->validate([
            'email' => 'required|max:255',
            'password' => 'required',
        ]);
        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            // session()->flash('success', 'User logins berhasil');
            return $this->redirect('/customers', navigate: true);
        }
        $this->addError('email', 'The password provided does not match the email');
    }
}
