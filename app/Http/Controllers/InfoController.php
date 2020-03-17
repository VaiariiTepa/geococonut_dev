<?php

namespace App\Http\Controllers;

use App\Info;
use App\Infocategorie;
use Illuminate\Http\Request;

class InfoController extends Controller
{
   public function nwinfo(Info $info, Infocategorie $infocategorie)
   {
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $description=$_POST['description'];
        $lon=$_POST['lon'];
        $lat=$_POST['lat'];
        // $categorie_id=$_POST['categorie_id'];

        //J'alimente ma table info
        $info->nom=$nom;
        $info->prenom=$prenom;
        $info->description=$description;
        $info->lon=$lon;
        $info->lat=$lat;

        //j'enregistre
        $info->save();

        //je récupère le id de "info"
        // $id=$info->id;

        // //j'enregistre les "id" dans "infocategorie"
        // $infocategorie->categorie_id = $categorie_id;
        // $infocategorie->info_id = $id;
        // $infocategorie->save();

        return back();

   }

   public function nwupdate()
   {

      $categorie_id=$_POST['categorie_id'];
      $info_id=$_POST['info_id'];

      $infocategorie_id=$_POST['infocategorie_id'];

      $infocategorie = Infocategorie::find($infocategorie_id);

      $infocategorie->categorie_id = $categorie_id;
      $infocategorie->info_id = $info_id;


      $infocategorie->save();

      return back();


   }
}


