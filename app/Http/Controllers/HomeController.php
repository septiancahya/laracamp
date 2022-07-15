<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        $checkout = Checkout::with('Camp')->whereUserId(Auth::id())->get();
        return view('users.dashboard', [
            'checkouts' => $checkout
        ]);
    }
}
