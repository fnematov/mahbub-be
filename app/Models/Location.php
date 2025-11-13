<?php

namespace App\Models;

use App\Enums\BaseStatusEnum;
use Database\Factories\LocationFactory;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    /** @use HasFactory<LocationFactory> */
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'name_uz',
        'name_ru',
        'name_en',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'status' => BaseStatusEnum::class,
        ];
    }


    public function parent(): BelongsTo|Location
    {
        return $this->belongsTo(Location::class, 'parent_id');
    }

    /**
     * @return HasMany<Location>
     */
    public function children(): HasMany
    {
        return $this->hasMany(Location::class, 'parent_id');
    }

    #[Scope]
    public function active($query)
    {
        return $query->where('status', BaseStatusEnum::ACTIVE);
    }
}
