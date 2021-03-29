<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    protected $fillable=array(
        'famille_id',
        'order',
        'nom'
    );
    public static $rules=array(
        'famille_id'=>'bigInteger',
        'order'=>'required',
        'nom'=>'required'
    );
    public function famille()
    {
        return $this->belongsTo(Personne::class,'famille_id');
    }
}
