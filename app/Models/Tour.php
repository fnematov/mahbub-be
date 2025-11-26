<?php

namespace App\Models;

use App\Enums\TourStatusEnum;
use App\Traits\HasLocalization;
use Database\Factories\TourFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * @property int $id
 * @property string $name
 * @property string $info_tour
 */
class Tour extends Model
{
    /** @use HasFactory<TourFactory> */
    use HasFactory, HasLocalization;

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
        'event_months',
    ];

    protected array $localized = ['name', 'info_tour'];

    public function scopeActive(Builder $query): void
    {
        $query->whereStatus(TourStatusEnum::ACTIVE);
    }

    public function scopeFilter(Builder $query): void
    {
        $location = request()->get('location');
        $month = request()->get('month');

        $query->when($location, function ($query) use ($location) {
            $location_ids = Location::where('parent_id', $location)->pluck('id');
            return $query->whereIn('location_id', $location_ids);
        });

        $query->when($month, function ($query) use ($month) {
            $query->whereJsonContains('event_months', $month);
        });
    }

    protected function casts(): array
    {
        return [
            'status' => TourStatusEnum::class,
            'event_months' => 'array',
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

    /**
     * @return MorphMany<Media>
     */
    public function media(): MorphMany
    {
        return $this->morphMany(Media::class, 'model');
    }

    public function firstMedia(): MorphOne|Media
    {
        return $this->morphOne(Media::class, 'model')->orderBy('id');
    }

    /**
     * @return HasMany<Review>
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
