<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\OrdersByStatus;
use App\Nova\Metrics\OrdersCount;
use App\Nova\Metrics\OrdersPerMonth;
use App\Nova\Metrics\TopOrderedTours;
use App\Nova\Metrics\TopReviewedTours;
use App\Nova\Metrics\ToursPerMonth;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    public function cards(): array
    {
        return [
            new OrdersCount,
            new OrdersPerMonth,
            new OrdersByStatus,

            new TopOrderedTours,
            new ToursPerMonth,
            new TopReviewedTours
        ];
    }
}
