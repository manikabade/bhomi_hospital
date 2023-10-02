<?php

namespace App\Models\Admin;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Doctor extends BaseModel
{
    use HasFactory;
    protected $fillable=[
        'id',
        'doctor_name',
        'email',
        'phone_number',
        'gender',
        'date_of_birth',
        'hospital_name',
        'hospital_address',
        'specialist_id',
        'day_from',
        'day_to',
        'degree',
        'bio',
        'image',
        'status',
    ];
    public function specialist(): BelongsTo
    {
        return $this->belongsTo(Specialist::class, 'specialist_id');
    }
}
