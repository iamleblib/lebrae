<?php

namespace App\Http\Controllers;

use App\User;
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
            return view('auth.user_dashboard.index')->with('user', $user);
        }

    }

    public function profile() {
        $user = auth()->user();
        return view('auth.user_dashboard.profile')->with('user', $user);
    }
}
