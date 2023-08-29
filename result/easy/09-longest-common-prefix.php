<?php
/**
 * Result URL: https://leetcode.com/submissions/detail/291757700/
 */

require "../../vendor/autoload.php";

use Leetcode\LongestCommonPrefix\Solution;

$solution = new Solution();
$words_array = ["dog","racecar","car"];
var_dump($solution->longestCommonPrefix($words_array));