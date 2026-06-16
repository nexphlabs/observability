<?php
namespace nexphant\Observability;

use nexphant\Observability\Leak\LeakSnapshot;

class LeakReporter
{
    public static function snapshot(): LeakSnapshot
    {
        return new LeakSnapshot();
    }
}
