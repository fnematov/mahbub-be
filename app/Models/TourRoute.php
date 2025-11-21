<?php

namespace App\Models;

use App\Traits\HasLocalization;
use Database\Factories\TourRouteFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Whitecube\NovaFlexibleContent\Concerns\HasFlexible;

/**
 * @property int $id
 * @property string $name
 * @property string $description_tour
 */
class TourRoute extends Model
{
    /** @use HasFactory<TourRouteFactory> */
    use HasFactory, HasFlexible, HasLocalization;

    protected $fillable = [
        'tour_id',
        'name_uz',
        'name_ru',
        'name_en',
        'add_price_adult',
        'add_price_child',
        'description_tour_uz',
        'description_tour_ru',
        'description_tour_en',
    ];

    protected array $localized = ['name', 'description_tour'];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
