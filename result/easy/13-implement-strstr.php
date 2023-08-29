<?php

/**
 * Result URL: https://leetcode.com/submissions/detail/292976806/
 */

require "../../vendor/autoload.php";

use Leetcode\ImplementStrstr\Solution;

$solution = new Solution();
$haystack = "hello";
$needle = "ll";
$result = $solution->strStr($haystack, $needle);
var_dump($result);