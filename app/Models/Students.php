<?php

namespace App\Models;

use App\Models\Rayons;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Students extends Model
{
    use HasFactory;
    protected $fillable = [
        "id","nis","name","rombel_id","rayon_id"
       ];
       public $timestamps = true;

       
       public function Rayon(): BelongsTo
       {
           return $this->belongsTo(Rayons::class, 'rayon_id', 'id');
       }
       public function Rombel(): BelongsTo
       {
           return $this->belongsTo(Rombels::class, 'rombel_id', 'id');
       }
       
     
}
