# age Calculator
This function takes an optional second argument $unit, which defaults to 'years'. If you pass 'seconds', it will calculate the age in seconds by adding up the seconds, minutes, hours, and days in the $diff object. If you pass 'days', it will return the number of days between the date of birth and the current date. Otherwise, it will return the age in years as before.
# Example :
$dateOfBirth = '1990-01-01';

$ageInSeconds = calculateAge($dateOfBirth, 'seconds');
echo "You are $ageInSeconds seconds old.\n";

OUTPUT: 
You are 1037318400 seconds old.
