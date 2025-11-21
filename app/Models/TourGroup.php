<?php

namespace App\Models;

use App\Traits\HasLocalization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 */
class TourGroup extends Model
{
    use HasFactory, HasLocalization;

    protected $fillable = [
        'name_uz',
        'name_ru',
        'name_en',
        'description_uz',
        'description_ru',
        'description_en',
        'order'
    ];

    protected array $localized = ['name', 'description'];

    /**
     * @return BelongsToMany<Tour>
     */
    public function tours(): BelongsToMany
    {
        return $this->belongsToMany(Tour::class, 'tour_group_tours', 'tour_group_id', 'tour_id');
    }
}
