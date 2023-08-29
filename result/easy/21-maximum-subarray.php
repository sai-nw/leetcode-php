<?php

/**
 * Result URL: https://leetcode.com/submissions/detail/532580071/
 */

require "../../vendor/autoload.php";

use Leetcode\MaximumSubarray\Solution;

print "--- result 1 ---" . PHP_EOL;
$solution = new Solution();
$nums = [1];
print $solution->maxSubArray($nums) . PHP_EOL;
print "--- result 2 ---" . PHP_EOL;
$nums = [5, 4, -1, 7, 8];
print $solution->maxSubArray($nums);

