<?php

namespace App\Models;

use App\Traits\HasLocalization;
use Database\Factories\AboutUsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * @property string $main_info
 * @property string $add_info
 */
class AboutUs extends Model
{
    /** @use HasFactory<AboutUsFactory> */
    use HasFactory, HasLocalization;

    protected $table = 'about_us';

    protected $fillable = [
        'main_info_uz',
        'main_info_ru',
        'main_info_en',
        'add_info_uz',
        'add_info_ru',
        'add_info_en',
    ];

    protected array $localized = ['main_info', 'add_info'];

    public function media(): MorphMany
    {
        return $this->morphMany(Media::class, 'model');
    }
}
