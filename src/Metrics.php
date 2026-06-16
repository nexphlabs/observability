<?php
namespace nexphant\Observability;

use nexphant\Observability\Metrics\RuntimeMetrics;

class Metrics
{
    public static function counter(string $name): int
    {
        return RuntimeMetrics::instance()->get($name) ?? 0;
    }

    public static function gauge(string $name, ?float $value = null): float
    {
        if ($value !== null) {
            RuntimeMetrics::instance()->gauge($name, $value);
        }
        return RuntimeMetrics::instance()->get($name) ?? 0.0;
    }

    public static function histogram(string $name, float $value): void
    {
        RuntimeMetrics::instance()->histogram($name, $value);
    }

    public static function increment(string $name, int $value = 1): void
    {
        RuntimeMetrics::instance()->increment($name, $value);
    }
}
