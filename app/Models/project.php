<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['title'];
}
