<?php

namespace App\Services\Account;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class AccountService
{
    public function create(array $data)
    {
        return User::query()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'account_type' => $data['accountType'],
            'company_name' => $data['companyName'],
            'password' => Hash::make(
                Arr::get($data, 'password.value')
            ),
        ]);
    }
}
