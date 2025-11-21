<?php

namespace App\Models;

use App\Traits\HasLocalization;
use Database\Factories\MediaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @property string $path
 * @property string $name
 */
class Media extends Model
{
    /** @use HasFactory<MediaFactory> */
    use HasFactory, HasLocalization;

    protected $fillable = [
        'model_type',
        'model_id',
        'path_uz',
        'path_ru',
        'path_en',
        'name_uz',
        'name_ru',
        'name_en',
    ];

    protected array $localized = ['name', 'path'];

    protected static function booted(): void
    {
        static::creating(function ($media) {
            if (!$media->path_uz) {
                $media->path_uz = $media->path_ru;
            }

            if (!$media->path_en) {
                $media->path_en = $media->path_ru;
            }
        });
    }

    public function model(): MorphTo
    {
        return $this->morphTo();
    }
}
