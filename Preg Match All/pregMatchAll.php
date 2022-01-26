<?php

$myData = "I am -Example- -String- Data.";

function filter($start, $end, $data)// We get 3 parameters with our function (Start, End, Data).
{
    @preg_match_all('/' . preg_quote($start, '/') .'(.*?)'. preg_quote($end, '/').'/i', $data, $m);// Filter data as start & end.
    return @$m[1];// Return result
}

// Example Function Usage
filter('-', '-', $myData);// Returns Array 

// Example Usage
$result = filter('-', '-', $myData);//

print_r($result);// Returns - Array ( [0] => Example [1] => String )

echo $result[0];// Returns - Example

?>