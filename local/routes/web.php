<?php



Route::get('/',"HomeController@index");


//PAGES
Route::get('/Prise-de-rdv',[
    'uses' => 'HomeController@RDV',
    'as' => 'rdv'
]);

Route::get('/Televente-VAD',[
    'uses' => 'HomeController@vente',
    'as' => 'vente'
]);

Route::get('/formation-professionnelle',[
    'uses' => 'HomeController@formation',
    'as' => 'formation'
]);

Route::get('/Web-to-Store',[
    "uses"=>"HomeController@webtostore",
    "as"=> "webstore"
]);


// DEMANDE DEVIS
Route::get("DemandeDevis",[
    "uses"=>"DemandeControler@index" , 
    "as" =>"devis"]
);
Route::post("DemandeDevis", "DemandeControler@store");



//ADMINE Dashboard
Route::group(["prefix" => "Admin" ,"middleware" => "Admine"],function(){

    Route::get('dashboard',"AdminController@index")->name('dashboard');
    Route::get('dashboard/{name}',"AdminController@indexNav")->name('tourdash');
    
    //Api
    Route::get('Formation',"ApiController@index")->name('FormationApi');
    Route::get('Formation/users',"ApiController@ShowFormationUsers")->name('formation_users');
    Route::get('Formation/messages',"ApiController@ShowFormationMessages")->name('formation_messages');
    Route::get("Formation/cours","ApiController@Edit_cours")->name("formation_cours");
    Route::get("Formation/delete_Cours","ApiController@delete_Cours")->name("formation_cours_delete");
    Route::get("Formation/get_Users/{id}","ApiController@getUserInfo")->name("formation_get_users");
     //Get Messages
    Route::get('getDemande',"AdminController@getDemande");
    
    Route::get('getDemande/{id}',"AdminController@getDemande");

    //Get link visite 360
    route::get('getVR',"AdminController@getVR")->name('getVR');
    route::get('getVR/name={name}',"AdminController@shearchVR")->name('shearchVR');

    //Logout
    Route::get("logout",function(){
             Auth::logout();
             return redirect()->route('AdminLogin');
          })->name('AdminLogout');

    //Add Visite Viruelle
    Route::post('addVR',"AdminController@addVR")->name('addVR');
});


//Admin Login

Route::get("Admin",function(){
    return  view("Admin.login");
})->name("AdminLogin");

Route::post("Admin","AdminController@login")->name("AdminLogin");











//CONTACT
Route::get('contact',"contactController@send");





// ENGLISH
Route::group(['prefix' => 'en' , "as" =>"en"], function () {
    Route::get('/',[
        "uses"=> "HomeController@indexEN",
        "as" => "-index"
    ]);
      Route::get('/Appointment-making',[
                'uses' => 'HomeController@RDVEN',
                'as' => '-appmaking'
            ]);

            Route::get('/Telemarketing',[
                'uses' => 'HomeController@venteEN',
                'as' => '-Telemarketing'
            ]);

            Route::get('/Professional-Training',[
                'uses' => 'HomeController@formationEN',
                'as' => '-formation'
            ]);

            Route::get('/Web-to-Store',[
                "uses"=>"HomeController@webtostoreEN",
                "as"=> "-webstore"
            ]);
            Route::get("FreeQuote",[
                "uses"=>"DemandeControler@indexEN" , 
                "as" =>"-devis"]
            );

             Route::post("FreeQuote","DemandeControler@store");
          
            Route::get('contact',"contactController@send");

});




// //TEST


// Route::get("test",function(){
       
       
//       return  env('APP_STORAGE');
// });