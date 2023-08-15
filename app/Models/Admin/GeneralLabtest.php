<?php

namespace App\Models\Admin;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GeneralLabtest extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'appointment_id',
        'general_labtest',
        'report',
        'remarks',
        'status'
    ];
}
