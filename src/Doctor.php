<?php
namespace Nexphant\Observability;

use Nexphant\Observability\Doctor\RuntimeDoctor;

class Doctor
{
    public static function run(): array
    {
        $doctor = new RuntimeDoctor();
        return $doctor->diagnose();
    }
}
