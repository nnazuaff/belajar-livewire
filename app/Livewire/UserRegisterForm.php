<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserRegisterForm extends Component
{
    use WithFileUploads;

    #[Validate('required|min:3')]
    public $name = '';

    #[Validate('required|email:dns|unique:users')]
    public $email = '';

    #[Validate('required|min:3')]
    public $password = '';

    #[Validate('nullable|image|max:1000')]
    public $avatar = null;

    public function createNewUser()
    {

        $validated = $this->validate();

        if ($this->avatar) {
            $validated['avatar'] = $this->avatar->store('avatar', 'public');
        }

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'avatar' => $validated['avatar'],
        ]);

        $this->reset();

        session()->flash('success', 'User has been successfully created.');
        $this->dispatch('user-created');
    }

    public function render()
    {
        return view('livewire.user-register-form');
    }
}
