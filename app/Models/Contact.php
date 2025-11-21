<?php

namespace App\Models;

use App\Traits\HasLocalization;
use Database\Factories\ContactFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $position
 */
class Contact extends Model
{
    /** @use HasFactory<ContactFactory> */
    use HasFactory, HasLocalization;

    protected $fillable = [
        'position_uz',
        'position_ru',
        'position_en',
        'manager_name',
        'phone1',
        'phone2',
        'working_days',
        'from',
        'to',
    ];

    protected array $localized = ['position'];

    protected $casts = [
        'working_days' => 'array',
        'from' => 'datetime',
        'to' => 'datetime',
    ];
}
