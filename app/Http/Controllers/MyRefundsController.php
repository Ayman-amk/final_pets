<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MyRefundsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $refunds = Refund::whereIn('contract_id', $user->contracts->pluck('id'))->get();
        return view('my_refunds', compact('refunds'));
    }
}
