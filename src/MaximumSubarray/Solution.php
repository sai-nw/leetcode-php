<?php

namespace Leetcode\MaximumSubarray;

/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/maximum-subarray/
 * Difficulty: Easy
 * Description: Given an integer array nums, find the contiguous subarray (containing at least one number) which has the largest sum and return its sum.
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 8/2/2021
 * Time: 4:36 PM
 * Class Solution
 */
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums)
    {
        $max_sum = 0;
        if(sizeof($nums)) {
            $max_sum = $array_sum = array_shift($nums);
            foreach ($nums as $num) {
                if($array_sum < 0) {
                    $array_sum = 0;
                }
                $array_sum += $num;
                if($array_sum > $max_sum) {
                    $max_sum = $array_sum;
                }
            }
        }
        return $max_sum;
    }
}
