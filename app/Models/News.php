<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    //we have a News  post and it belongs to a user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
