<?php

namespace App\Models;

use App\Enums\TourStatusEnum;
use Database\Factories\TourFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tour extends Model
{
    /** @use HasFactory<TourFactory> */
    use HasFactory;

    public int $country;

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

    protected function casts(): array
    {
        return [
            'status' => TourStatusEnum::class,
        ];
    }

    public function country(): Attribute
    {
        return Attribute::make(fn() => $this->location?->parent_id);
    }

    public function location(): BelongsTo|Location
    {
        return $this->belongsTo(Location::class);
    }

    /**
     * @return HasMany<TourRoute>
     */
    public function routes(): HasMany
    {
        return $this->hasMany(TourRoute::class, 'tour_id');
    }
}
