<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyVideos extends Model
{
    use HasFactory;

    protected $table = 'property_videos';

    protected $fillable = [
        'property_id',
        'video'
    ];

    public function property(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Property::class);
    }
}
