<?php

namespace App\Models;

use Database\Factories\ServicesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    /** @use HasFactory<ServicesFactory> */
    use HasFactory;

    protected $fillable = [
        'main_info_uz',
        'main_info_ru',
        'main_info_en',
        'add_info_uz',
        'add_info_ru',
        'add_info_en',
    ];
}
