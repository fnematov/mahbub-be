<?php

namespace App\Nova\Metrics;

use App\Models\Tour;
use Illuminate\Support\Facades\DB;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\MetricTableRow;
use Laravel\Nova\Metrics\Table;

class TopReviewedTours extends Table
{
    public function calculate(NovaRequest $request): array
    {
        $rows = DB::table('reviews')
            ->selectRaw('tour_id, COUNT(*) as total_reviews')
            ->groupBy('tour_id')
            ->orderByDesc('total_reviews')
            ->limit(5)
            ->get();

        return $rows->map(function ($row) {
            $tour = Tour::find($row->tour_id);

            return MetricTableRow::make()
                ->title($tour?->name_ru ?? 'Удалено')
                ->subtitle('Отзывы: ' . $row->total_reviews);
        })->all();
    }

    public function name(): ?string
    {
        return 'Топ 5 туров по отзывам';
    }
}
