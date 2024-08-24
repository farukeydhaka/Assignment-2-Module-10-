<?php
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count vowels in a string
function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;
    
    // Loop through each character in the string
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}

// Loop through each string in the array
foreach ($strings as $string) {
    $reversedString = strrev($string);
    $vowelCount = countVowels($string);
    
    echo "Original: $string, Reversed: $reversedString, Vowels: $vowelCount\n";
}
?>