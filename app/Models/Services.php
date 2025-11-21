<?php

namespace App\Models;

use App\Traits\HasLocalization;
use Database\Factories\ServicesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Services extends Model
{
    /** @use HasFactory<ServicesFactory> */
    use HasFactory, HasLocalization;

    protected $fillable = [
        'title_uz',
        'title_ru',
        'title_en',
        'main_info_uz',
        'main_info_ru',
        'main_info_en',
        'add_info_uz',
        'add_info_ru',
        'add_info_en',
        'url'
    ];

    protected array $localized = ['title', 'main_info', 'add_info'];

    public function media(): MorphOne
    {
        return $this->morphOne(Media::class, 'model');
    }
}
