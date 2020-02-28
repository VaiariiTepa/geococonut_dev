<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Infocategorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function nwcategorie(Categorie $categorie)
    {
        //Je déclare une variable $nom
        //Je récupère mon input
        //J'affecte $_POST['nom']
        //Dans ma variable $nom
        $nom=$_POST['nom'];

        //J'affecte ma variable $nom
        //dans $categorie->nom
        $categorie->nom=$nom;

        //J'enregistre dans ma table Categorie
        $categorie->save();

        return back();
    }

    public function nwdelete()
    {

        $info_categorie_id = $_POST['categorie_id'];
        // dump($info_categorie_id);

        $infocategorie = Infocategorie::find($info_categorie_id);

        $infocategorie->delete();
        
        return back();
    }

}

