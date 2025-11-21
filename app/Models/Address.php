<?php

namespace App\Models;

use App\Traits\HasLocalization;
use Database\Factories\AddressFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $address
 */
class Address extends Model
{
    /** @use HasFactory<AddressFactory> */
    use HasFactory, HasLocalization;

    protected $fillable = [
        'address_uz',
        'address_ru',
        'address_en',
        'location',
    ];

    protected array $localized = ['address'];

    protected function casts(): array
    {
        return [
            'location' => 'array',
        ];
    }
}
