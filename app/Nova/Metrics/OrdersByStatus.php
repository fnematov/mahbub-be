<?php

namespace App\Nova\Metrics;

use App\Enums\OrderStatusEnum;
use App\Models\Order;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Partition;
use Laravel\Nova\Metrics\PartitionResult;

class OrdersByStatus extends Partition
{
    public function calculate(NovaRequest $request): PartitionResult
    {
        return $this->count($request, Order::class, 'status')
            ->label(fn($value) => OrderStatusEnum::labels()[$value]);
    }
}
