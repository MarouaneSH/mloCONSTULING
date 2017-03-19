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
        $data =  file_get_contents('http://localhost:90/api/dashboard?key=MarouaneSH-api');
     
        return view('Admin.Formation.utlisateur',[
            "users" => $data,
        ]);
     
    }

}