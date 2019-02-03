<?php

function myMoney(int $need):void
{
    $grivna = [ 1, 2, 5, 10, 20, 50, 100, 200, 500, ];
    foreach ($grivna as $nominal)
    {
        if ($need >= $nominal)
        {
            $howMuch = (int)($need / $nominal);
            if ($howMuch > 0)
            {
                $need %= $nominal;
                echo "$nominal: $howMuch\n";
            }
        }
    }
}
