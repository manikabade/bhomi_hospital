<?php

namespace App\Models\Admin;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Patient extends BaseModel
{
    use HasFactory;
    protected $fillable=[
        'patient_name',
        'email',
        'phone_number',
        'gender',
        'date_of_birth',
        'age',
        'security_token',
        'patient_address',
        'blood_group',
        'specialist_id',
        'appointment_date',
        'time_for_appointment',
        'image',
        'status',
    ];
    public function specialist(): BelongsTo
    {
        return $this->belongsTo(Specialist::class, 'specialist_id');
    }
}


