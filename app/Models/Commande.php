<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable  =[
        'prix_total'
    ];

    public function articles(){
        return $this->belongsToMany(Article::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
