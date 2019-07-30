<?php


$numbers = array();


for($i = 0; $i < 100; $i++)
{
    
        array_push($numbers, $i);
    
}

for($k = 0; $k <100; $k++)
{
    if($k%3 == 0)
    {
       $numbers[$k] = $numbers[0];
       
    }
}



$arrlength = count($numbers);


for($j = 0; $j < $arrlength; $j++)
{
    if($j != $numbers[$j])
    {
        echo $j;
        echo " ";
    }
}



?>