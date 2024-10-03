<?php
function fibonacci($n) {
    // Check if n is between 1 and 20
    if ($n < 1 || $n > 20) {
        return "Please enter a number between 1 and 20.";
    }

    $fib = [0, 1];

    
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2]; 
    }

    
    $output = '';
    for ($i = 0; $i < $n; $i++) {
        $output .= $fib[$i]; 
        if ($i < $n - 1) {
            $output .= ', '; 
        }
    }

    return $output; 
}

$input = 5; // Change number to test
$output = fibonacci($input);


echo "Input: $input, Output: $output"; 

?>