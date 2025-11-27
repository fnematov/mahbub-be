<?php

namespace App\Models;

use App\Traits\HasLocalization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Settings extends Model
{
    use HasFactory, HasLocalization;

    protected $table = 'settings';

    protected $fillable = [
        'banner_title_uz',
        'banner_title_ru',
        'banner_title_en',
        'banner_description_uz',
        'banner_description_ru',
        'banner_description_en',
        'contact_phone',
        'contact_email',
        'website_title',
        'google_map_api_key',
    ];

    protected array $localized = ['banner_title', 'banner_description'];

    public function media(): MorphOne|Media
    {
        return $this->morphOne(Media::class, 'model');
    }
}
