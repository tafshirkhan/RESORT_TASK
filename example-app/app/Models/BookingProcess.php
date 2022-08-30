<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingProcess extends Model
{
    use HasFactory;

    protected $guarded = [];

     public function resort(){
        return $this->belongsTo(ResortModel::class,'resort_id','id');
    }
}
