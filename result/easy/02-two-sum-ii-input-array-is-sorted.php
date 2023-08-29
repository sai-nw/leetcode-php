<?php
/**
 * Result URL: https://leetcode.com/submissions/detail/290620893/
 */

require "../../vendor/autoload.php";

use Leetcode\TwoSumIIInputArrayIsSorted\Solution;

$solution = new Solution();
$numbers = [2,7,11,15];
$target = 9;
$result = $solution->twoSum($numbers, $target);
print_r($result);