<?php

namespace App\Sevices\V1;

use Illuminate\Http\Request;

class CustomerQuery {
    protected $safeParams = [
        'name' => ['eq'],
        'type' => ['eq'],
        'email' => ['eq'],
        'address' => ['eq'],
        'state' => ['eq'],
        // 'postalCode' => ['eq', 'gt', 'lt'],
    ];

    // protected $columnMap = [
    //     'postalCode' => 'postal_code'
    // ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'gt' => '>',
        'gte' => '>=',
    ];
}