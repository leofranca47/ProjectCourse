<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function getCreatedAtAttribute($date){
        return date('d/m/Y H:i', strtotime($date) );
    }
}
