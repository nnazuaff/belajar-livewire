<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Users extends Component
{
    // public $title = 'Users Page';
    public function createUser()
    {
        User::create([
            'name' => 'User Baru',
            'email' => 'email2@email.com',
            'password' => Hash::make('password'),
        ]);
    }

    public function render()
    {
        return view('livewire.users', [
            'title' => 'Users Page',
            'users' => User::all(),
        ]);

    }
}
