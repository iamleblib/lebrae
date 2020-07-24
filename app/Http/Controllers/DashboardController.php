<?php

namespace App\Http\Controllers;

use App\DepositRequest;
use App\User;
use App\Users_account;
use Illuminate\Http\Request;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application user_dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (User::isAdmin()) {
            return view('auth.admin_dashboard.index');
        } else {
            $user = auth()->user();
            $depositRequests = DepositRequest::where('user_id', $user->id)->get();
            $userAccount = Users_account::where('user_id', $user->id)->first();
            return view('auth.user_dashboard.index')->with([
                'user' => $user,
                'userAccount' => $userAccount,
                'depositRequests' =>  $depositRequests,
            ]);
        }
    }

    public function profile()
    {
        if (User::isAdmin()) {
            return view('auth.admin_dashboard.profile');
        } else {
            $userAccount = Users_account::where('user_id', auth()->id())->first();
            return view('auth.user_dashboard.profile')->with('userAccount', $userAccount);

        }
    }

    public function updateProfile(Request $request) {
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'next_of_kin' => ['nullable', 'string', 'max:255'],
        ]);

        auth()->user()->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'gender' => $request->gender,
            'country' => $request->country,
            'next_of_kin' => $request->next_of_kin,
        ]);

        return redirect()->route('profile')->with('success', 'Your Profile Has Been Updated Successfully');

    }

    public function makeDeposit()
    {
        return view('auth.user_dashboard.deposit');
    }

}
