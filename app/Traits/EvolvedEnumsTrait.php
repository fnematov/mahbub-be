<?php

namespace App\Traits;

use Error;
use BackedEnum;
use ValueError;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;

trait EvolvedEnumsTrait
{
    public static function __callStatic($name, $args)
    {
        $cases = static::cases();

        foreach ($cases as $case) {
            if ($case->name === $name) {
                return $case instanceof BackedEnum ? $case->value : $case->name;
            }
        }

        throw new Error('Undefined constant ' . static::class . '::' . $name);
    }

    public function __invoke()
    {
        return $this instanceof BackedEnum ? $this->value : $this->name;
    }

    public function title(): string
    {
        return Str::of($this->name)
            ->replace('_', ' ')
            ->title()
            ->value();
    }

    public static function names(): array
    {
        return array_column(static::cases(), 'name');
    }

    public static function selectOptions(): array
    {
        return self::collect()->mapWithKeys(function (self $item) {
            return [$item->value => $item->title()];
        })->toArray();
    }

    public static function options(): array
    {
        $cases = static::cases();

        return isset($cases[0]) && $cases[0] instanceof BackedEnum
            ? array_column($cases, 'value', 'name')
            : array_column($cases, 'name');
    }

    public static function reversedOptions(): array
    {
        $cases = static::cases();

        return isset($cases[0]) && $cases[0] instanceof BackedEnum
            ? array_column($cases, 'name', 'value')
            : array_column($cases, 'name');
    }

    public static function values(): array
    {
        $cases = static::cases();

        return isset($cases[0]) && $cases[0] instanceof BackedEnum
            ? array_column($cases, 'value')
            : array_column($cases, 'name');
    }

    public static function fromName(string $case): static
    {
        return static::tryFromName($case) ?? throw new ValueError('"' . $case . '" is not a valid name for enum "' . static::class . '"');
    }

    public static function tryFromName(string $case): ?static
    {
        $cases = array_filter(
            static::cases(),
            fn ($c) => $c->name === $case,
        );

        return array_values($cases)[0] ?? null;
    }

    public static function collect(): Collection
    {
        return collect(self::cases());
    }

    public static function random(): static
    {
        return self::collect()->random();
    }

    public static function randomValue(): int|string
    {
        return self::random()->value;
    }
}
