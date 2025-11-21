<?php

namespace App\Nova;

use App\Enums\OrderStatusEnum;
use App\Helpers\Helper;
use App\Nova\Actions\ExportOrderToExcelAction;
use App\Nova\Actions\UpdateOrderStatus;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Badge;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
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

    public function fields(NovaRequest $request): array
    {
        return [

            ID::make("#", "id")->sortable()->onlyOnDetail(),

            BelongsTo::make('Tour', 'tour')
                ->filterable()
                ->readonly(),

            Text::make('Полное имя', 'name')
                ->filterable()
                ->sortable(),

            Text::make('Номер телефона', 'phone')
                ->sortable(),

            Text::make('Месяц отбытия', 'month')
                ->displayUsing(fn($value) => Helper::getMonthName($value))
                ->sortable(),

            Select::make('Месяц отбытия', 'month')
                ->options(Helper::getMonths())
                ->onlyOnForms()
                ->filterable(),

            Text::make('Количество туристов', function () {
                $text = '';
                if ($this->adult_count > 0) {
                    $text .= "$this->adult_count взрослых";
                }
                if ($this->child_count > 0) {
                    $text .= "<br>$this->child_count детей";
                }
                return $text;
            })->asHtml(),

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
                ->confirmText('Вы уверены, что хотите обновить статус этого заказа?'),
            (new ExportOrderToExcelAction())
                ->filename('Mahbub_Tour_Reports' . now()->format('Y-m-d') . '.xlsx')
                ->standalone(),
        ];
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
}
