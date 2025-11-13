<?php

namespace App\Models;

use Database\Factories\TourFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    /** @use HasFactory<TourFactory> */
    use HasFactory;

    protected $fillable = [
        'location_id',
        'name_uz',
        'name_ru',
        'name_en',
        'status',
        'price_adult',
        'price_child',
        'days_count',
        'nights_count',
        'info_tour_uz',
        'info_tour_ru',
        'info_tour_en',
    ];

    // Bog‘lanish — har bir tour bitta location’ga tegishli
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
