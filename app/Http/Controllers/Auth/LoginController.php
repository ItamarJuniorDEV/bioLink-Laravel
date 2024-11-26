<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }   

    public function login() {

        request()->validate([
            
            'email' => ['required','email'],
            'password' => ['required'],
        
        ]);
        
        
        if($user = User::query()

            ->where('email', '=', request()->email)
            ->first()
    ){

                    
                
                if(Hash::check(request()->password, $user->password)) {
                
                auth()->login($user);

                    return to_route('dashboard');
            }
        }

            return back()->with(['messagem'=>'não deu certo!!!']);

    }
}