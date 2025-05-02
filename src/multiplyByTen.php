<?php

declare(strict_types=1);

function multiplyByTen(int|float $number): int|float
{
    return abs($number) * 10;
}
