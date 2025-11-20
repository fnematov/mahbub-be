<?php


namespace App\Nova\Actions;

use App\Enums\OrderStatusEnum;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Http\Requests\NovaRequest;

class UpdateOrderStatus extends Action
{
    public function name()
    {
        return 'Обновить статус';
    }

    public function handle(ActionFields $fields, Collection $models)
    {
        foreach ($models as $order) {
            $order->status = $fields->status;
            $order->save();
        }
    }

    public function fields(NovaRequest $request): array
    {
        return [
            Select::make('Status')
                ->options(OrderStatusEnum::selectOptions())
                ->rules('required'),
        ];
    }
}
