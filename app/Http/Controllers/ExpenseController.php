<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = auth()->id();
        Expense::create($data);
        return redirect()->route('dashboard');
    }
}
