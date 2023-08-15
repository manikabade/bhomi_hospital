<?php

namespace App\Models\Admin;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MedicalReport extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'appointment_id',
        'general_labtest_id',
        'precaution',
        'status'
    ];

    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }
    public function generallabtest():BelongsTo
    {
        return $this->belongsTo(GeneralLabtest::class,'general_labtest_id');
    }
}
