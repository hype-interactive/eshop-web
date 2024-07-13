<?php

namespace App\Livewire\FrontEnd;

use Livewire\Component;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;


class Register extends Component
{
    public $full_name;
    public $phone_number;
    public $password;
    public $remember_me = false;

    protected $rules = [
        'full_name' => 'required|string|max:255',
        'phone_number' => 'required|string|max:15|unique:customers,phone_number',
        'password' => 'required|string|min:6',
    ];

    public function register()
    {
        $this->validate();

        Customer::create([
            'full_name' => $this->full_name,
            'phone_number' => $this->phone_number,
            'password' => Hash::make($this->password),
        ]);

        session()->flash('message', 'Account created successfully!');

        return redirect()->route('customer-login');
    }

    public function render()
    {
        return view('livewire.front-end.register');
    }
}
