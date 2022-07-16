<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $checkout = Checkout::with('Camp')->whereUserId(Auth::id())->get();
        return view('users.dashboard', [
            'checkouts' => $checkout
        ]);
    }
}
