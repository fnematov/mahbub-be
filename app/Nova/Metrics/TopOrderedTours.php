<?php

namespace App\Nova\Metrics;

use App\Models\Tour;
use DB;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\MetricTableRow;
use Laravel\Nova\Metrics\Table;

class TopOrderedTours extends Table
{
    public function calculate(NovaRequest $request): array
    {
        $rows = DB::table('orders')
            ->selectRaw('tour_id, COUNT(*) as total_orders')
            ->groupBy('tour_id')
            ->orderByDesc('total_orders')
            ->limit(5)
            ->get();

        return $rows->map(function ($row) {
            $tour = Tour::find($row->tour_id);

            return MetricTableRow::make()
                ->title($tour?->name_ru ?? 'Удалено')
                ->subtitle('Заказов: ' . $row->total_orders);
        })->all();
    }

    public function name(): string
    {
        return 'Топ 5 туров по заказам';
    }
}
