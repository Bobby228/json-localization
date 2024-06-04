<?php

namespace App\Http\Controllers\Api\v1;

use App\Facades\Account;
use App\Http\Controllers\Controller;
use App\Http\Requests\Account\CreateAccountRequest;

class AccountController extends Controller
{
    public function create(CreateAccountRequest $request)
    {
        $request->createAccount();
        return responseOk();
    }
}
