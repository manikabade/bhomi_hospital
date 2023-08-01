<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use HasFactory;

    public function scopePaginated($query, $length = 1000)
    {
        return $query->paginate($length);
    }


    public function scopeActive ($query)
    {
        return $query->where('status',1);
    }

}
