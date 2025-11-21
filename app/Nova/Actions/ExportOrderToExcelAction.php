<?php

namespace App\Nova\Actions;

use App\Exports\LeadFullReportExport;
use App\Exports\OrdersExport;
use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\URL;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Actions\ActionResponse;
use Laravel\Nova\Fields\ActionFields;
use Lednerb\ActionButtonSelector\ShowAsButton;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExportOrderToExcelAction extends Action
{
    use InteractsWithQueue, Queueable;
    use ShowAsButton;

    public $name = 'Экспорт';

    public $withoutConfirmation = true;

    private string $filename = 'orders.xlsx';

    public function handle(ActionFields $fields, Collection $models): ActionResponse|Action
    {
        if ($models->isEmpty()) {
            $models = Order::get();
        }
        $response = Excel::download(new OrdersExport($models), 'orders.xlsx');

        if (!$response instanceof BinaryFileResponse || $response->isInvalid()) {
            return Action::danger(__('Resource could not be exported.'));
        }

        return ActionResponse::download(
            $this->getFilename(),
            $this->getDownloadUrl($response->getFile()->getPathname()),
        );
    }

    protected function getFilename(): string
    {
        return $this->filename;
    }

    protected function getDownloadUrl(string $filePath): string
    {
        return URL::temporarySignedRoute('laravel-nova-excel.download', now()->addMinutes(1), [
            'path' => encrypt($filePath),
            'filename' => $this->getFilename(),
        ]);
    }

    public function filename(string $filename): static
    {
        $this->filename = $filename;

        return $this;
    }
}
