<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class Helper
{
    public static function getMonthName(int $month): string
    {
        return Str::title(Carbon::create(null, $month, 1)
            ->locale('ru')
            ->translatedFormat('F'));
    }

    public static function getMonths(): Collection
    {
        return collect(range(1, 12))->map(fn($month) => self::getMonthName($month));
    }

    public static function getWeekDays(): Collection
    {
        return collect(range(1, 7))->map(fn($day) => Str::title(Carbon::create()->setISODate(2023, 1, $day)->locale('ru')->translatedFormat('l')));
    }

    public static function getWorkingDays(array $working_days): string
    {
        if (count($working_days) === 0) {
            return '';
        }

        $begin = $working_days[0];
        $end = $working_days[count($working_days) - 1];

        return Str::title(Carbon::create()->setISODate(2025, 1, $begin)->locale('ru')->translatedFormat('l') . ' - ' . Carbon::create()->setISODate(2025, 1, $end)->locale('ru')->translatedFormat('l'));
    }

    public static function getLocaleFlag(string $locale): string
    {
        return match ($locale) {
            'uz' => '🇺🇿',
            'en' => '🇬🇧',
            default => '🇷🇺'
        };
    }

    public static function getLocaleName(string $locale): string
    {
        return match ($locale) {
            'uz' => 'UZ',
            'en' => 'EN',
            default => 'RU'
        };
    }
}
