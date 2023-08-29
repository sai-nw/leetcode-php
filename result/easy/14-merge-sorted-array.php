<?php
/**
 * Result URL: https://leetcode.com/submissions/detail/293928905/
 */

require "../../vendor/autoload.php";

use Leetcode\MergeSortedArray\Solution;

$solution = new Solution();
$nums1 = [-1,0,3,0,0,0]; $m = 3;
$nums2 = [2,5,6];       $n = 3;
$result = $solution->merge($nums1, $m, $nums2, $n);
print_r($nums1);
