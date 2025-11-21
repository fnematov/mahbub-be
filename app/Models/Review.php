<?php

namespace App\Models;

use App\Traits\HasLocalization;
use Database\Factories\ReviewFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $comment
 */
class Review extends Model
{
    /** @use HasFactory<ReviewFactory> */
    use HasFactory, HasLocalization;

    protected $fillable = [
        'full_name',
        'phone',
        'rating',
        'tour_id',
        'moderator_rate',
        'comment_uz',
        'comment_ru',
        'comment_en',
    ];

    protected array $localized = ['comment'];

    public function tour(): BelongsTo|Tour
    {
        return $this->belongsTo(Tour::class, 'tour_id');
    }
}
