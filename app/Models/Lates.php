<?php

namespace App\Models;
// 
use App\Models\Students;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lates extends Model
{
    use HasFactory;
    protected $fillable = [
        "id","date_time_late","information","bukti"
       ];
    //    public $timestamps = false;
       protected $table = 'lates';

       /**
        * Get the user that owns the Lates
        *
        * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
        */
   /**
    * Get the user associated with the Lates
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasOne
    */
   public function users(): BelongsTo
   {
       return $this->belongsTo(Students::class, 'id', 'id');
   }
}
