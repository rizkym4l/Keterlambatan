<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rayons extends Model
{
    use HasFactory;

   protected $fillable = [
    "user_id","rayon"
   ];
   public $timestamps = false;
   protected $table = 'rayons';
}
