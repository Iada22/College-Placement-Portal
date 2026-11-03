<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterPage extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';

    protected function rules()
    {
        return [
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ];
    }


public function register()
{
    $this->validate();

    User::create([
        'name' => $this->name,
        'email' => $this->email,
        'password' => Hash::make($this->password),
        'role' => 'student',
    ]);

    session()->flash(
        'success',
        'Registration successful! You can now log in.'
    );

    return redirect()->route('login.livewire');
}

}
