<?php

namespace Leetcode\RotateArray;
/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/rotate-array/
 * Difficulty: Medium
 * Description: Given an array, rotate the array to the right by k steps, where k is non-negative.
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 1/9/2020
 * Time: 2:51 PM
 * Class Solution
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        $last_element = [];
        for($i = 1; $i <= $k; $i++) {
            $last_element = array_pop($nums);
            array_unshift($nums, $last_element);
        }
    }

    function rotate2(&$nums, $k) {
        $a = [];
        $nums_length = sizeof($nums);
        for ($i = 0; $i < $nums_length; $i++) {
            $a[($i + $k) % $nums_length] = $nums[$i];
        }
        for ($i = 0; $i < $nums_length; $i++) {
            $nums[$i] = $a[$i];
        }
    }
}
