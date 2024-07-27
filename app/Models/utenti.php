<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utenti extends Model
{
    use HasFactory;
    public $table = 'utenti';
    protected $fillable= [
           'email', 'password', 'role_id'
    ];

    public function role(){
         return $this->belongsTo(role::class);
    }
}
