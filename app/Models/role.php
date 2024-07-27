<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    public $table = 'role';
    protected $fillable =[
      'ruolo'
    ];

    public function utenti(){
        return $this->hasMany(utenti::class);
    }
}
