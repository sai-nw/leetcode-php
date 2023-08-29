<?php


/**
 * Result URL: https://leetcode.com/submissions/detail/290623120/
 */

 class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $nums_number = sizeof($nums);
        for($key = 0; $key < $nums_number; $key++) {
            $number = array_shift($nums);
            $needle = $target - $number;
            $key2 = array_search($needle, $nums);
            if($key2 !== false) {
                return [$key, $key + 1 + $key2];
            }
        }
        return false;
    }
}

$solution = new Solution();
$nums = [2, 7, 11, 15];
$target = 9;
print_r($solution->twoSum($nums, $target));
