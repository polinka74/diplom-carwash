<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Washing_program extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function Stage(){
        
        return $this->belongsTo(Stage::class);
    }
}
