<?php
/**
 * Result URL: https://leetcode.com/submissions/detail/290620893/
 */

 class Solution {

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target) {
        $number_numbers = sizeof($numbers);
        for($key = 0; $key < $number_numbers; $key++) {
            $number = array_shift($numbers);
            $search_val = $target - $number;
            $key2 = array_search($search_val, $numbers);
            if($key2 !== false) {
                return [$key + 1, $key + 1 + $key2 + 1];
            }
        }

    }
}

$solution = new Solution();
$numbers = [2,7,11,15];
$target = 9;
$result = $solution->twoSum($numbers, $target);
print_r($result);