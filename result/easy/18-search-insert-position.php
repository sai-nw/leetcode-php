<?php

/**
 * Result: https://leetcode.com/problems/search-insert-position/submissions/
 */

require "../../vendor/autoload.php";

use Leetcode\SearchInsertPosition\Solution;

$solution = new Solution();

$nums = [-1];
$target = 0;
print $solution->searchInsert($nums, $target);