<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class EditCustomer extends Component
{

    public $customer;

    public $name = "";

    public $email = "";

    public $phone = "";

    public $pageTitle = "Edit Customers";

    public function mount(Customer $customer){
        $this->customer = $customer;
        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->phone = $customer->phone;
    }

    public function render()
    {

        return view('livewire.edit-customer');
    }

    public function update(){

        $data = $this->validate([
            'name' => ['required', 'string', 'min:5'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'min:11', 'max:13']
        ]);

        $this->customer->update($data);

        session()->flash('success', 'Customer updated successfully');

        return $this->redirect('/customers', navigate:true);


    }
}
