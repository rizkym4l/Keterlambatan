<?php

namespace App\Http\Controllers;

use session;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function login(){
        return view('users.login');
    }
    public function auth(Request $request){
        $request->validate([
            'email'=>'required',
            'password' => 'required'
        ]);
        //ambil value dari input dan simpan di sebuah variabel
        $user = $request->only(['name','password']);
        //auth::attempt -> memasukan data user yg diinput ke fitur auth yang ada di laravel (konfirmasi proses authefication)
        if(Auth::attempt($user)){
            return redirect('/dashboard');
        }else{
            return redirect()->back()->with('failed','Email atau Password tidak sesuai ,Silahkan coba lagi');
        }
    }
}
