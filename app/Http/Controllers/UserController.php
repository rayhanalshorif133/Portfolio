<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminUserIndex()
    {
        $user = auth()->user();
        return view('admin.user.index', compact('user'));
    }

    public function adminUserUpdate(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'nullable|min:8|confirmed',
        ]);

        $user = User::find(auth()->user()->id);
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        if ($validated['password']) {
            $user->password = Hash::make($validated['password']);
        }
        $user->save();

        return redirect()->back()->with('success', 'User has been successfully updated.');
    }
}
