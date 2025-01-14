<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\client;

class facture extends Model
{
    /** @use HasFactory<\Database\Factories\FactureFactory> */
    use HasFactory;
    public function client(){
        return $this->belongsTos(client::class);
    }
}
