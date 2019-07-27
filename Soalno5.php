<?php

function swap(&$arr,$p1,$p2)
{
    $temp = $arr[$p2];
    $arr[$p2] = $arr[$p1];
    $arr[$p1] = $temp;
    return $arr;
}

function sort_array($arr) // menggunakan bubble short
{   
    $x=0;
    $y=count($arr);
    do
    {
        $count = count($arr[$x]);
        for ($j = 1; $j < $count; $j++)
        {
            for ($i=1; $i < $count-$j+1; $i++)
            {
                if ($arr[$x][$i-1] > $arr[$x][$i])
                {
                    $arr[$x] = swap($arr[$x], $i-1, $i);
                }
            }
        }   
        $x++;
    }
    while ($x<$y); 
    return $arr;
}

echo "<pre>";

print_r(sort_array([['b','d','a','f','h','c','i','j','e','g'],['e','a','f','b','d','c']]));
?>