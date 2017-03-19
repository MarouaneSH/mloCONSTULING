<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demandedevis;
use Mail;
use App\Mail\mailDevis;
use Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class DemandeControler extends Controller
{
    public function index(){
       
        return view('DemandeDevis');
    }

    //ENGLISH
     public function indexEN(){
       
        return view('en.freequote');
    }



    
    public function store(Request $reqeust){
        $validator = Validator::make($reqeust->all() ,[
            'raison'=>'required|max:80',
            'nom'=>'required|max:50',
            'poste'=>'required|max:50',
            'email'=>'required|email|max:80',
            'tel1'=>'required|numeric|min:6',
            'tel2'=>'required|numeric|min:6',
            'select'=>'required|max:80',
            'solution'=>'required|max:80',
            'message'=>'required|max:1000',
            'document'=>'mimes:jpeg,png,jpg,docx,txt,pdf|max:5048',
        ]);
       if($validator->fails())
       {
           return Response::json([
               "success"=> false,
               "errors"=>$validator->errors()->toArray(),
           ]);
       }

      
         $HaveFile = false;
    
         if($reqeust->hasFile('document'))
         {
             
            $file= $reqeust->file('document');
             $path = Storage::disk('document')->putFileAs("files"  , $file , str_random(15)."--".$file->getClientOriginalName());
         
            $HaveFile = true;
	
         }
         else
         {
           
              $path = "No Document";
         }
            
      
        //Initialize Demande Devis
         $demande = new Demandedevis();

         
        $demande->raison = $reqeust->raison;
        $demande->nom =$reqeust->nom;
        $demande->poste =$reqeust->poste;
        $demande->email =$reqeust->email;
        $demande->tel1 = $reqeust->tel1;
        $demande->tel2= $reqeust->tel2;
        $demande->activite = $reqeust->select;
        $demande->solution = $reqeust->solution;
        $demande->message = $reqeust->message;
        $demande->date = Carbon::now();
        $demande->file = $path;
        $demande->save();

        Mail::to("marouanesouah@gmail.com")->send(new mailDevis($demande));

        if($HaveFile == false)
        {
             return Response::json(["sucess" => true]);
        }
        else
        {
            return redirect()->back()->with('demande','true');

        }
         
        
    }




    public function send(){
        // Mail::send('home', ['title' => "dssd", 'content' => "sdds"], function ( $message)
        // {

        //     $message->from('marouanesouah@gmail.com', 'Christian Nwamba');

        //     $message->to('marouanesouah@gmail.com');

        // });
        Mail::to('marouanesouah@gmail.com')->send(new mailDevis);
        dd("sdsdsd");

    }

    public function test()
    {
        
    }
}
