<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    protected $table = 'reservaciones'; 

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}