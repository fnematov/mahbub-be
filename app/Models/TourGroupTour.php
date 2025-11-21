<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TourGroupTour extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'tour_group_id',
        'tour_id',
    ];

    public function tourGroup(): BelongsTo
    {
        return $this->belongsTo(TourGroup::class);
    }

    public function tour(): BelongsTo
    {
        return $this->belongsTo(Tour::class);
    }
}
