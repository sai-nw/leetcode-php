<?php
/**
 * Result URL: https://leetcode.com/submissions/detail/294529778/
 */

require "../../vendor/autoload.php";

use Leetcode\RemoveDuplicatesFromSortedArray\Solution;

$solution = new Solution();
$nums = [1,1,2];
print $solution->removeDuplicates($nums) . PHP_EOL;