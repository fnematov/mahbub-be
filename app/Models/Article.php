<?php

namespace App\Models;

use App\Enums\BaseStatusEnum;
use App\Traits\HasLocalization;
use Database\Factories\ArticleFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $content
 */
class Article extends Model
{
    /** @use HasFactory<ArticleFactory> */
    use HasFactory, HasLocalization;

    protected $fillable = [
        'title_uz',
        'title_ru',
        'title_en',
        'description_uz',
        'description_ru',
        'description_en',
        'content_uz',
        'content_ru',
        'content_en',
        'status',
    ];

    protected array $localized = ['title', 'description', 'content'];

    protected function casts(): array
    {
        return [
            'status' => BaseStatusEnum::class
        ];
    }

    public function scopeActive(Builder $query): void
    {
        $query->whereStatus(BaseStatusEnum::ACTIVE);
    }

    public function media(): MorphOne|Media
    {
        return $this->morphOne(Media::class, 'model');
    }
}
