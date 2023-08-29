<?php

namespace Leetcode\TwoSumIIInputArrayIsSorted;

/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/two-sum-ii-input-array-is-sorted/
 * Difficulty: Easy
 * Description: Given an array of integers that is already sorted in ascending order, find two numbers such that they add up to a specific target number.
 * The function twoSum should return indices of the two numbers such that they add up to the target, where index1 must be less than index2.
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 1/8/2020
 * Time: 5:42 PM
 * Class Solution
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