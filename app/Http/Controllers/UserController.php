<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users =[
            "nomes" => [
             "José Lira",
             "Jão Lira"
            ]
        ];
        dd[$user];
    }


    public function show($id)
    {
        $idUser = $id;

        dd("Id do usuário é ".$id);
    }
}
