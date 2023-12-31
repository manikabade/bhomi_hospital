<?php

namespace App\Models\Admin;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends BaseModel
{
    use HasFactory;
    protected $fillable=[
         'title',
         'author',
         'designation_id',
         'date',
         'image',
         'excerpt',
         'status',
    ];
    public function designation(): BelongsTo
    {
        return $this->belongsTo(Designation::class, 'designation_id');
    }
}
