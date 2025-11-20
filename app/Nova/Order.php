<?php

namespace App\Nova;

use App\Enums\OrderStatusEnum;
use App\Nova\Actions\UpdateOrderStatus;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Badge;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Order extends Resource
{
    public static string $model = \App\Models\Order::class;

    public static $title = 'id';

    public static $search = [
        'id',
        'name',
        'phone',
    ];

    public static function label(): string
    {
        return 'Бронирование';
    }

    public static function authorizedToCreate(Request $request): false
    {
        return false;
    }

    public function authorizedToUpdate(Request $request): false
    {
        return false;
    }

    public function authorizedToDelete(Request $request): false
    {
        return false;
    }

    public function authorizedToReplicate(Request $request): false
    {
        return false;
    }

    public function authorizedToRestore(Request $request): false
    {
        return false;
    }

    public function fields(NovaRequest $request): array
    {
        return [

            ID::make("#", "id")->sortable(),

            BelongsTo::make('Tour', 'tour')->readonly(),

            Text::make('Полное имя', 'name')->readonly(),

            Text::make('Номер телефона', 'phone')->readonly(),

            Text::make('Месяц отбытия', 'month')
                ->sortable()
                ->readonly(),

            Text::make('Количество туристов', fn() => "$this->adult_count взрослых<br>$this->child_count детей")
                ->asHtml(),

            Badge::make('Статус', 'status')
                ->map(OrderStatusEnum::iconMap())
                ->label(fn() => $this->status->title())
                ->withIcons(),
        ];
    }

    public function actions(NovaRequest $request): array
    {
        return [
            (new UpdateOrderStatus())
                ->showInline()
                ->confirmButtonText('Обновить статус')
                ->cancelButtonText('Отмена')
                ->confirmText('Вы уверены, что хотите обновить статус этого заказа?')
        ];
    }
}
