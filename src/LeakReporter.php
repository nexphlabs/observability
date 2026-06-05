<?php
namespace Nexph\Observability;

use Nexph\Observability\Leak\LeakSnapshot;

class LeakReporter
{
    public static function snapshot(): LeakSnapshot
    {
        return new LeakSnapshot();
    }
}
