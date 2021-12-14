<?php
    $newArray = array();
    $array = fillArray($newArray);

    echo $array[2] . "\n";
    
    $splitArray = implode(",", $array);
    $secArray = explode(",", $splitArray);

    unset($splitArray);

	print_r("Array Inicial = ");
	print_r($secArray);

    if(in_array(14, $secArray)) 
    {
        echo "\nExiste o número 14 no array\n";
    } 
    else 
    {
        echo "\nNão existe o número 14 no array\n";
    }

    for($i = 1; $i < count($secArray); $i++)
    {
        if($secArray[$i] < $secArray[$i-1])
        {
          	array_splice($secArray, $i, 1);
        }
    }

    array_pop($secArray);

    count($secArray);

	$reverseArray = array_reverse($secArray);

	print_r("Array Final = ");
	print_r($reverseArray);

    function fillArray($newArray) 
    {
        for($i = 0; $i < 7; $i++) 
        {
            array_push($newArray, rand(1, 50));
        }
        return $newArray;
    }

?>