
## Preg Match All

### Function Usage

    filter('Start', 'End', 'Data');

We get 3 parameters with our function (Start, End, Data).

Function:

    @preg_match_all('/' . preg_quote($start, '/') .'(.*?)'. preg_quote($end, '/').'/i', $data, $m);// Filter data as start & end.
    return @$m[1];// Return result

Example:

    $myData = "I am -Example- -String- Data.";
    filter('-', '-', $myData);// Returns Array 

Example Usage:

    $result = filter('-', '-', $myData);//

    print_r($result);// Returns - Array ( [0] => Example [1] => String )

    echo $result[0];// Returns - Example