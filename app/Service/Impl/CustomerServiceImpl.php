<?php

namespace App\Service\Impl;

use App\Models\Customer;
use App\Service\CustomerService;
use Illuminate\Http\Request;
use RuntimeException;

class CustomerServiceImpl implements CustomerService
{
    function save(Request $request): Customer
    {
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->address = $request->input('address');
        $customer->contact = $request->input('contact');
        $customer->email = $request->input('email');
        $customer->save();
        return $customer;
    }


    function findAll(): object
    {
        return Customer::all();
    }


    function findById(int $id)
    {
       $customer = Customer::find($id);
       if (!$customer) throw new RuntimeException('Customer not found');
       return $customer;

    }
}
