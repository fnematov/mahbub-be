<?php

namespace App\Models;

use App\Enums\OrderStatusEnum;
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

    protected function casts(): array
    {
        return [
            'status' => OrderStatusEnum::class,
        ];
    }

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
