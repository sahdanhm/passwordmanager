<?php

namespace App\Http\Controllers;

use App\Models\Password;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function insert(Request $request){
        $password = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        $password['user_id'] = auth()->id();
        Password::create($password);
        return redirect('/');
    }
}
