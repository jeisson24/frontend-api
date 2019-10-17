<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UpdateUserPassword;
use App\User;
use Auth;
class UserController extends Controller
{
    public function listarapi($id){
        //$document= Document::find($id);
        $user=User::find($id);
        return $user;
     }

     public function crearapi($name, $lastName , $email, $state, $pass){
        $user = new User();
        $user->name     = $name;
        $user->lastName = $lastName;
        $user->email    = $email;
        $user->state    = $state;
        $user->password = Hash::make($pass);
        $user->save();
        return "save";
    }

    public function destroyapi($id){
        //:: llamar metodo estatico de89 los modelos
        $user= User::find($id);
        //-> llamar al metodo del ORM
        $user->delete();
        return 'borrado';
     }

     public function updateapi($id, $name, $lastName , $email, $state, $pass){

        $user = User::find($id);
        $user->id       = $id;
        $user->name     = $name;
        $user->lastName = $lastName;
        $user->email    = $email;
        $user->state    = $state;
        $user->password = Hash::make($pass);
        $user->update();
        return "Actualizado";
    }
}


