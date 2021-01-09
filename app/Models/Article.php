<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable  =[
        'titre',
        'description',
        'prix',
        'quantite',
        'image',
        'souscategorie_id'
    ];

    public function commandes(){
        return $this->belongsToMany(Commande::class);
    }

    public function souscategorie(){
        return $this->belongsTo(Souscategorie::class);
    }
   

}
