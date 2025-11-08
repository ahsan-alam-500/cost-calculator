<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = auth()->id();
        Deposit::create($data);
        return redirect()->route('dashboard');
    }

}
