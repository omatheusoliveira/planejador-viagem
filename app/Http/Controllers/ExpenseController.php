<?php

namespace App\Http\Controllers;

use App\Services\ExpenseService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    private $service;

    public function __construct(ExpenseService $expenseService)
    {
        $this->service = $expenseService;
    }

    public function create(Request $request)
    {
        return $this->service->createExpense($request);
    }
}