<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Checkout extends Component
{
    public $name;
    public $lname;
    public $username;
    public $email;
    public $address;
    public $country;
    public $city;
    public $postal;
    public $card_name;
    public $card_no;
    public $expire_date;
    public $cvv;
    public $success;



    protected $rules = ['name'=>'min:3',
                        'email'=>'email'
        ];



    public function mount(){
        $this->user = auth()->user();


    }
    public function render()
    {
        return view('livewire.checkout');
    }

    public function updateProfile(){
        $this->validate();
        auth()->user()->update([
            'name'=>$this->name,
            'email'=>$this->email
        ]);
        $this->success = true;
    }
}
