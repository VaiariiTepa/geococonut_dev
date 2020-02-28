<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    public $fillable=['nom','prenom','description','lon','lat'];
}

