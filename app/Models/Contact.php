<?php

namespace App\Models;

use Database\Factories\ContactFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /** @use HasFactory<ContactFactory> */
    use HasFactory;

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

    protected $casts = [
        'phone1' => 'array',
        'phone2' => 'array',
        'working_days' => 'array',
    ];
}
