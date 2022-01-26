
## Get Days Between Two Dates Using PHP

### Function Usage

    getDaysBetweenTwoDates('param1', 'param2');

We get 2 parameters with our function (First Date and Second Date).

Function:

    $origin = new DateTime($firstdate);// We convert the date parameter to DateTime.
    $target = new DateTime($seconddate);// We convert the date parameter to DateTime.
    $interval = $origin->diff($target);// We get the difference in days between two dates with the diff method.
    return $interval->format('%R%a');// We convert the data we receive with diff to day format.
    // If you want to return data with a format other than day, you can visit the link and edit the diff parameters.
    // https://www.php.net/manual/en/dateinterval.format.php

Example:

    getDaysBetweenTwoDates("25.01.2022", "04.02.2022"); // Returns +{10} 

This is function returns the result as +{day}. You can use a filter to get it just as {day}. to delete + we can use substr function:
ex:

    $pureDay = substr($days , +1);// Returns only {days}