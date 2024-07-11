<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

use Livewire\WithPagination;

class Customers extends Component
{
    use WithPagination;


    public $search = '';

    public $none = '';

    protected $paginationTheme = 'bootstrap';

    public $pageTitle = "Customers";

    // public function mount()
    // {

    //     $this->customers = Customer::all();
    // }

    public function delete(Customer $customer)
    {
        $customer->delete();

        session()->flash('success', 'Customer Deleted successfully');

        return $this->redirect('/customers', navigate: true);
    }

    public function render()
    {
        if(! $this->search){
            $customers = Customer::paginate(5);

            $this->none = "No customers added yet";
        }else{
            $customers = Customer::where('name', 'like', '%'.$this->search.'%')->paginate(5);
            $this->none = "No customers with this name found";
        }
        return view('livewire.customers', compact('customers'));
    }
}
