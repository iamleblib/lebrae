<?php

namespace App\Http\Controllers;

use App\DepositRequest;
use Illuminate\Http\Request;
use App\User;
class DepositRequestController extends Controller
{
    public function depositRequest(Request $request)   {;
        $request['email'] = auth()->user()->email;
        $request['user_id'] = auth()->id();
        switch ($request->plan) {
            case "Starter":
                $request['payout'] = (($request->amount/100)*2.5);
                break;
            case "Advance":
                $request['payout'] = (($request->amount/100)*10);
                break;
            case "Ultimate":
                $request['payout'] = (($request->amount/100)*60);
                break;
        }
        DepositRequest::create($request->all());
        return redirect()->route('makeDepositMessage')->with('success', 'Your investment request has been sent for review!');
    }


    public function payDeposit($id)   {
        return view('auth.user_dashboard.pay');
    }

}
