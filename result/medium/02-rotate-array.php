<?php

/**
 * Result URL: https://leetcode.com/submissions/detail/291701349/
 */

require "../../vendor/autoload.php";

use Leetcode\RotateArray\Solution;

$solution = new Solution();
$nums = [-1,-100,3,99];
$solution->rotate2($nums, 2);
print_r($nums);