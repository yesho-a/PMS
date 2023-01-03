<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    public $table = 'colors';
   

    public function project()
        {
            return $this->hasOne('App\Models\Project');
        }

}
