<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestPrincipale;
use Illuminate\Http\Request;
use App\Models\utenti;
use Brick\Math\Exception\MathException;
use Nette\Utils\Random;

class ControllerPrincipale extends Controller
{
 

    public function home(){
        return view('home');
    }

    public function form(){
        return view('form');
    }

    public function lista(utenti $utenti){

        $utenti = utenti::all();

        return view('lista', compact('utenti'));
    }

/*     CRUD----- */


public function store(RequestPrincipale $request){
   
    $role = rand(1,3);

    $utenti= utenti::create([
        'role_id'=> $role,
        'email'=>$request->email,
        'password'=>$request->password,
    ]);

    return redirect()->route('lista')->with('messages', 'Buon Fine');
   
}


}
