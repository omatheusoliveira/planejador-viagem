<?php

namespace App\Services;

use App\Models\Expense;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

use Exception;

class ExpenseService
{

    public function createExpense(Request $request)
    {
        try {
            $expense = new Expense();

            $expense->name = $request->name;

            $expense->save();

            return response()->json($expense, Response::HTTP_OK);
        } catch (Exception $ex) {
            return response()->json($ex, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

}