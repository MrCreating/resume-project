<?php

namespace App\Models;

class Time extends Model
{
    public function parseYears (int $years): string
    {
        // получаем последнюю цифру числа
        $dec = abs($years % 10);

        $result = 'лет';

        if ($dec === 1)
            $result = 'год';
        if ($dec >= 2 && $dec <= 4)
            $result = 'года';

        // для остальных - корректно "лет" (19 лет)
        return $years . ' ' . $result;
    }
}
