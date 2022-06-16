<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function Washing_program()
    {
        return $this->hasOne(Washing_program::class, 'stage_id');
        
    }
}
