<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MyContractController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $contracts = $user->contracts;
        return view('my_contracts', compact('contracts'));
    }
}
