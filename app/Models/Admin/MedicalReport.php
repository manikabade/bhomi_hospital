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
        'patient_id',
        'general_labtest_id',
        'precaution',
        'status'
    ];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
    public function generallabtest():BelongsTo
    {
        return $this->belongsTo(GeneralLabtest::class, 'general_labtest_id');
    }
}
