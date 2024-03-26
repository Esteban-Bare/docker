<?php
// Using case-insensitive constants
define("MY_CONSTANT", 1, true); // defining constant with case-insensitive flag
echo MY_CONSTANT; // Output: 1
echo my_constant; // Output: 1 in PHP 7.3, but undefined constant error in PHP 8.0

