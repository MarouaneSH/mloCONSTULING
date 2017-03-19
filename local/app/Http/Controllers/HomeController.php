<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

  

    public function RDV()
    {
        return view('pages.RDV');
    }
    
     public function vente()
    {
        return view('pages.vente');
    }

    public function formation()
    {
        return view('pages.formation');
    }

    public function webtostore()
    {
        return view('pages.webtostore');
    }



    //ENGLISH

       public function indexEN()
    {
        return view('en.home');
    }

    public function RDVEN()
    {
        return view('en/pages.RDV');
    }
    
     public function venteEN()
    {
        return view('en/pages.vente');
    }

    public function formationEN()
    {
        return view('en/pages.formation');
    }

    public function webtostoreEN()
    {
        return view('en/pages.webtostore');
    }
}
