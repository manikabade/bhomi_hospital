<?php

namespace App\Models\Admin;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ScheduleManagement extends BaseModel
{
    use HasFactory;
    protected $fillable=[
        'specialist_id',
        'time_for_appointment',
        'status',
    ];
    public function specialist(): BelongsTo
    {
        return $this->belongsTo(Specialist::class, 'specialist_id');
    }

}
