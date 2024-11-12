<?php

if (! function_exists('apartament_type')) {
    function apartament_type(int $number): ?string
    {
        $types = [
            1 => 'M1',
            2 => 'M2',
            3 => 'M3',
            4 => 'M4',
            5 => 'M5',
            6 => 'M6'
        ];

        return $types[$number] ?? null;
    }
}