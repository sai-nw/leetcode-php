<?php


/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/two-sum/
 * Difficulty: Easy
 * Description: Given an array of integers, return indices of the two numbers such that they add up to a specific target.
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 1/8/2020
 * Time: 5:41 PM
 * Class Solution
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