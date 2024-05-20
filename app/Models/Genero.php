<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;
    protected $fillable = ['genero'];
    public $timestamps = false;

    public function juegos(){
        return $this->belongsToMany(Juego::class);
    }
}
