<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkateBoard extends Model
{
    use HasFactory;

    protected $table = 'skateboards';

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'sbs_and_colors', 'sb_id');
    }

    public function orders()
    {
        return $this->hasMany(Orders::class,'product_id','id');
    }

}
