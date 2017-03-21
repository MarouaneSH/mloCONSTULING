<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Mail\mailContact;
use Illuminate\Support\Facades\Validator;
use Mail;


class ApiController extends Controller
{
    public function index()
    {
        return view('Admin.formation.index');
    }


    public function ShowFormationUsers()
    {
        $data =  file_get_contents('http://localhost:8000/api/getUsers?key=MarouaneSH-api');
     
        return view('Admin.Formation.utlisateur',[
            "users" => $data,
        ]);
        

    }
    public function ShowFormationMessages()
    {
        //Here i get Data From the Api
        $data = file_get_contents('http://localhost:8000/api/getMessages?key=MarouaneSH-api');
      
        return view('Admin.Formation.Messages',[
             "messages" => $data,
        ]);
    }
}