<?php

$celsius= 30;

function celsiusToFahrenheit($celsius) {
    $fahrenheit = ($celsius * 1.8) + 32;
    return $fahrenheit;
}

// Example usage:

$fahrenheit = celsiusToFahrenheit($celsius);
printf("The temperature is %.2f degrees Fahrenheit.", $fahrenheit);

?>
