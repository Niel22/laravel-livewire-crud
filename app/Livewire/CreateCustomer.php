<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class CreateCustomer extends Component
{
    public $name = "";
    public $email = "";
    public $phone = "";

    public $pageTitle = "Create Customers";

    public function render()
    {
        return view('livewire.create-customer');
    }

    public function store(){

        $data = $this->validate([
            'name' => ['required', 'string', 'min:5'],
            'email' => ['required', 'email', 'unique:customers'],
            'phone' => ['required', 'min:11', 'max:13', 'unique:customers']
        ]);

        Customer::create($data);

        session()->flash('success', 'Customer Created successfully');

        return $this->redirect('/customers', navigate:true);

    }
}
