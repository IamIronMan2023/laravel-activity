<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $mockdata = array(
            "id" => $id,
            "name" => "Juan Dela Cruz",
            "email" => "jdelacruz@email.com"
        );

        //Add code here to call the view

    }
}
