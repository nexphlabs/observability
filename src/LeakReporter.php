<?php
namespace Nexphant\Observability;

use Nexphant\Observability\Leak\LeakSnapshot;

class LeakReporter
{
    public static function snapshot(): LeakSnapshot
    {
        return new LeakSnapshot();
    }
}
