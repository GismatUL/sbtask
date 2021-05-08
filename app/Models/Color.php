<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $table = 'colors';

    public function skateboards()
    {
        return $this->belongsToMany(SkateBoard::class, 'sbs_and_colors', 'color_id');
    }
}
