<?php
namespace Nexph\Observability;

use Nexph\Observability\Doctor\RuntimeDoctor;

class Doctor
{
    public static function run(): array
    {
        $doctor = new RuntimeDoctor();
        return $doctor->diagnose();
    }
}
