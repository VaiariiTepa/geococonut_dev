<?php

namespace App\Http\Controllers;

use App\Infocategorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfocategorieController extends Controller
{

    public function get_infocategorie(){
        
        $infocategorie_id = $_GET['infocategorie_id'];

        $result_get_infocategorie = DB::table('infocategories')
        
            ->join('infos', 'infocategories.info_id', '=', 'infos.id')
        
            ->join('categories', 'infocategories.categorie_id', '=', 'categories.id')
        
            ->select('infos.*','infocategories.id')

            ->where('infocategories.id','=', $infocategorie_id)
        
        ->get();


        return json_encode($result_get_infocategorie);

    }
 
}
