<?php

namespace App\Service;

use App\Models\Customer;
use Illuminate\Http\Request;

interface CustomerService
{
    function save(Request $request):Customer;

    function findAll():object;

    function findById(int $id);

}
