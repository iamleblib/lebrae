<?php

namespace App\Http\Controllers;

use App\User;
use App\Users_account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UsersAccountController extends Controller
{
    public function userBitStore(Request $request)  {
        $validateBank = $request->validate([
            'bitcoin' => 'required|string|max:255'
        ]);
        $request['user_id'] = auth()->id();
        Users_account::create($request->all());
        return redirect()->back()->with('success', 'Account Details Updated');
    }
    public function userBitcoinUpdate(Request $request)  {
        $validateBank = $request->validate([
            'bitcoin' => 'required|string|max:255'
        ]);
        $request['user_id'] = auth()->id();
        Users_account::where('user_id', auth()->id())->update(['bitcoin' => $request->bitcoin]);
        return redirect()->back()->with('success', 'Account Details Updated');
    }

    public function userBankUpdate(Request $request)  {
        $validateBank = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|string|max:255',
            'bank' => 'required|string|max:255',
        ]);
        $request['user_id'] = auth()->id();
        Users_account::where('user_id', auth()->id())->update([
            'name' => $request->name,
            'number' => $request->number,
            'bank' => $request->bank
        ]);
        return redirect()->back()->with('success', 'Account Details Updated');
    }

    public function userBankStore(Request $request)  {
        $validateBank = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|string|max:255',
            'bank' => 'required|string|max:255',
        ]);
        $request['user_id'] = auth()->id();
        Users_account::create($request->all());
        return redirect()->back()->with('success', 'Account Details Updated');
    }

    public function uploadId(Request $request) {
        $validateBank = $request->validate([
            'valid_id' => 'required',
            'passport' => 'required',
        ]);

        if ($request->hasFile('passport') && $request->hasFile('valid_id')) {
            Users_account::uploadCredentials($request->valid_id, $request->passport);
        }
        return redirect()->back()->with('success', 'Credentials Upload Successfully');
    }

}
