<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function changePassword(){
        $layer=Auth::user()->govofficial->employment_layer;
        if($layer=='cdio'){
            return view('cdio.passwords.reset');
        }else{
            return view('auth.passwords.reset');
        }
        
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('changePassword');
    } 
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    { 
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'password' => ['required'],
            'new_confirm_password' => ['same:password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->password)]);
   
        return redirect()->route('userHome');
    }
}
