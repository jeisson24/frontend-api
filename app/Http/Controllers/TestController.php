<?php
use app\User;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function listarapi(){
        $user= User::select('*')->where('id','=',$id)->get();
        return $user;
     }
}
