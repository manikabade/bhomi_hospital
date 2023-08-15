<?php

namespace App\Models\Admin;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends BaseModel
{
    use HasFactory;
    protected $fillable=[
        'patient_name',
        'email',
        'phone_number',
        'gender',
        'date_of_birth',
        'age',
        'patient_address',
        'blood_group',
        'specialist_id',
        'appointment_date',
        'schedule_management_id',
        'image',
        'message',
        'status',
    ];
    public function specialist(): BelongsTo
    {
        return $this->belongsTo(Specialist::class, 'specialist_id');
    }
    public function schedulemanagement():BelongsTo
    {
        return $this->belongsTo(ScheduleManagement::class, 'schedule_management_id');
    }
}
