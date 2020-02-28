<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Infocategorie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            //Je déclare une variable $category
            //Je récupère toutes les données dans ma table Categorie
            //J'affecte category::all()
            //Dans ma variable $category 
            $category=Categorie::all();
            $info_categorie=Infocategorie::all();


            // dump($category);
        return view('home',compact('category','info_categorie'));
    }

}
