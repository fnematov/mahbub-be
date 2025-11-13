<?php

namespace App\Models;

use Database\Factories\MediaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Media extends Model
{
    /** @use HasFactory<MediaFactory> */
    use HasFactory;

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

    public function model(): MorphTo
    {
        return $this->morphTo();
    }
}
