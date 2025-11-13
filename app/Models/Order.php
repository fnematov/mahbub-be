<?php

namespace App\Models;

use Database\Factories\OrderFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /** @use HasFactory<OrderFactory> */
    use HasFactory;

    protected $fillable = [
        'tour_id',
        'name',
        'phone',
        'month',
        'adult_count',
        'child_count',
        'status',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
