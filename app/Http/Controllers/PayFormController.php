<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayFormController extends Controller
{
    public function create()
    {
        return view('livewire.payment-form');
    }

    public function store()
    {
        $validatedData = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'website' => 'required',
            'visitors' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
        ]);

        dd($validatedData);
    }


    public $showBillingOptions = false;
    public $showPersonal = true;
    public $showBusiness = false;

    public function togglePersonalDetails()
    {
        $this->showPersonal = !$this->showPersonal;
        $this->showBusiness = !$this->showBusiness;
    }


}
