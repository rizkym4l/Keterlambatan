<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rombels extends Model
{
    use HasFactory;
    protected $table = 'rombels';
   public $timestamps = false;

    protected $fillable = ["rombel","id"];


}
