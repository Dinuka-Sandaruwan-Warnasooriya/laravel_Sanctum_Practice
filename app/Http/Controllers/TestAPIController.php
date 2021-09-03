<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestAPIController extends Controller
{
    public function firstAPI()
    {
       // return "Response From Controller";
        return ["name"=>'dinuka' , "email"=>'dinuka@gmail.com'];
    }
}
