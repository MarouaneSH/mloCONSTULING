<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Mail\mailContact;
use Illuminate\Support\Facades\Validator;
use Mail;


class contactController extends Controller
{
    //
    public function send(Request $reqeust)
    {
            $validator = Validator::make($reqeust->all(),[
                "social" => "required|max:80",
                "nom" => "required|max:80",
                "message" => "required|max:250",
                "email" => "required|max:80",

            ]);

            if($validator->fails())
            {
                return Response::json([
                    "success"=>false,
                    "errors"=>$validator->errors()->toArray()
                ]);
            }

            $raison = $reqeust->social;
            $nom = $reqeust->nom;
            $email = $reqeust->email;
            $messageContact = $reqeust->message;
            Mail::to("marouanesouah@gmail.com")->send(new mailContact($raison ,$nom ,$email ,$messageContact));
            Mail::to("suubppl@gmail.com")->send(new mailContact($raison ,$nom ,$email ,$messageContact));
            
             return Response::json([
                    "success"=>true
                
                ]);
        
       
    }
}
