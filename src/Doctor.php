<?php
namespace nexphant\Observability;

use nexphant\Observability\Doctor\RuntimeDoctor;

class Doctor
{
    public static function run(): array
    {
        $doctor = new RuntimeDoctor();
        return $doctor->diagnose();
    }
}
