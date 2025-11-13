<?php

namespace App\Models;

use Database\Factories\AddressFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /** @use HasFactory<AddressFactory> */
    use HasFactory;

    protected $fillable = [
        'address_uz',
        'address_ru',
        'address_en',
        'location',
    ];

    protected function casts(): array
    {
        return [
            'location' => 'array',
        ];
    }
}
