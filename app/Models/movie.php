<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;
    public function actors(){
        return $this->belongsToMany('App\Models\actor','actors');
    }
}
