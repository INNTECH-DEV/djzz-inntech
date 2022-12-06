<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    // Actualizare profil user
    public function update(Request $request){
    
        // TODO: De verificat fields si de intors mesaj corespunzator

        $user_id = $request->user()->id;

        $user = User::find($user_id);
        
        $user->update($request->all());

        return response()->json("Actualizat cu succes!");
    }
}
