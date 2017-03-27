<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Mail\mailContact;
use Illuminate\Support\Facades\Validator;
use Mail;
use Storage;
use ZipArchive;

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

    public function Edit_cours()
    {
        //Here i get Data From the Api
        $data = file_get_contents('http://localhost:8000/api/getAllCours?key=MarouaneSH-api');

        return view('Admin.Formation.editCours',["cours" => $data]);


    }

    public function delete_Cours(Request $request)
    {

        //Here i get Data From the Api
        $data = file_get_contents('http://localhost:8000/api/RemoveCours?key=MarouaneSH-api&id='.$request->id);

        return $data;
    }

    public function getUserInfo($id)
    {
           $data = file_get_contents('http://localhost:8000/api/getSpecifiUsers?key=MarouaneSH-api&id='.$id);
           return Response::json([
               "user" =>json_decode($data)
           ]);;
    }

    public function Addmessage(){
        return view('Admin.formation.addMessage');
    }

    public function getPeimentCode(){
         $data = file_get_contents('http://localhost:8000/api/paiementCode?key=MarouaneSH-api');
        return view('Admin.formation.paiementcode',[
            "codes"=>$data
        ]);
    }

    public function getDemandeVerification()
    {
        $data = file_get_contents('http://localhost:8000/api/demandeVerification?key=MarouaneSH-api');
        return view('Admin.formation.paiementcode',[
            "demande"=>$data
        ]);
    }
    public function addPaeiment()
    {
                        $curl = curl_init();
                        $code_genereate = str_random(12);
                        curl_setopt_array($curl, array(
                        CURLOPT_PORT => "8000",
                        CURLOPT_URL => "http://localhost:8000/api/genereteCode?key=MarouaneSH-api&code=".$code_genereate,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => "",
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 30,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => "GET",
                        CURLOPT_POSTFIELDS => "X-CSRF-TOKEN%20=xI8iiBIo8qPyELfokBe3iukG6xl4yUwS3wTnY3Hi",
                        CURLOPT_HTTPHEADER => array(
                            "authorization: Basic dGVzdEBnbWFpbC5jb206MTIzMzIx",
                            "cache-control: no-cache",
                            "content-type: application/x-www-form-urlencoded",
                            "postman-token: 287584f5-3ded-af99-2161-7891106bee0f"
                        ),
                        ));

                        $response = curl_exec($curl);
                        $err = curl_error($curl);

                        curl_close($curl);

                        if ($err) {
                        echo "cURL Error #:" . $err;
                        } else {
                            return Response::json([
                                "code"=>$code_genereate
                            ]);
                        }
    }
    public function Add_cours(Request $request)
    {
        
           $file = $request->file;
           $url = Storage::disk('COURS')->putFileAs("cours_zip"  , $file , str_random(15)."--".$file->getClientOriginalName());
         
           //Muste Change this URL AFTER UPLOUAD TO FTP
           $path = "http://localhost/mloCONSTULING/local/public/". $url;
        
          /* Unzip File */
     
            $path_to_unzip = public_path() .'\\'.str_replace('/','\\',$url);
            $random_folder =str_random(30);
            $path_to_store_cours = public_path() .'\\'.'cours\\'.$random_folder;
            
            //Muste Change this URL AFTER UPLOUAD TO FTP
         

            $zip = new ZipArchive;
            if ($zip->open($path_to_unzip) === TRUE) {
                $zip->extractTo($path_to_store_cours);
                $zip->close();
            } 
            else {
                return Response::json([
                    "success"=> false,
                    "error"=> "Unzip de fichier a été echoué",
                ]);
            }
          /*END UNZIP FILE*/
          
          $link ="http://localhost/mloCONSTULING/local/public/cours/".$random_folder.'/story_html5.html';
     

          $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_PORT => "8000",
            CURLOPT_URL => "http://localhost:8000/api/AddBooks?key=MarouaneSH-api&name=".$request->name."&instructor=".$request->instructor."&subscribed=".$request->subscribed."&link=".$link,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "X-CSRF-TOKEN%20=xI8iiBIo8qPyELfokBe3iukG6xl4yUwS3wTnY3Hi",
            CURLOPT_HTTPHEADER => array(
                "authorization: Basic dGVzdEBnbWFpbC5jb206MTIzMzIx",
                "cache-control: no-cache",
                "content-type: application/x-www-form-urlencoded",
                "postman-token: 3a7053da-d80a-371c-2b12-f5faacbb541d"
            ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
            echo "cURL Error #:" . $err;
            } else {
            echo $response;
            }
       
    }
}