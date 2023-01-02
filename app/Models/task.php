<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'Y-m-d';
    protected $fillable = [
        'title','description','completed','due_date' 
    ];


    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
