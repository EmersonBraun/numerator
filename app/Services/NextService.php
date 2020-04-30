<?php
namespace App\Services;

class NextService
{
    public function incrementValue($currentValue)
    {
        if (!$currentValue) return 1;
        return $currentValue++;
    }
}
