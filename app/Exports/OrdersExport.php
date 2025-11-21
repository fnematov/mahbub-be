<?php

namespace App\Exports;

use App\Helpers\Helper;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class OrdersExport implements FromCollection, ShouldAutoSize, WithEvents, WithHeadings, WithMapping
{
    public function __construct(
        protected Collection $models,
    )
    {
    }

    public function collection(): Collection
    {
        return $this->models;
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getStyle('A1:G1')->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'size' => 12,
                    ],
                    'alignment' => [
                        'horizontal' => Alignment::HORIZONTAL_CENTER,
                        'vertical' => Alignment::VERTICAL_CENTER,
                    ],
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => Border::BORDER_THIN,
                            'color' => ['rgb' => 'D3D3D3'],
                        ],
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'startColor' => ['rgb' => 'E9ECEF'],
                    ],
                ]);
            }
        ];
    }

    public function headings(): array
    {
        return [
            [
                '#',
                'Тур',
                'Полное имя',
                'Номер телефона',
                'Месяц отбытия',
                'Количество туристов',
                'Статус',
            ]
        ];
    }

    public function map($row): array
    {
        $text = '';
        if ($row->adult_count > 0) {
            $text .= "$row->adult_count взрослых";
        }
        if ($row->child_count > 0) {
            $text .= "\n$row->child_count детей";
        }
        return [
            $row->id,
            $row->tour->name_ru,
            $row->name,
            $row->phone,
            Helper::getMonthName($row->month),
            $text,
            $row->status->title(),
        ];
    }
}
