<?php
/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/remove-duplicates-from-sorted-array/
 * Difficulty: Easy
 * Description: Given a sorted array nums, remove the duplicates in-place such that each element appear only once and return the new length.
 * Do not allocate extra space for another array, you must do this by modifying the input array in-place with O(1) extra memory.
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 1/15/2020
 * Time: 11:30 PM
 * Class Solution
 */

namespace Leetcode\RemoveDuplicatesFromSortedArray;


class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $nums_size = sizeof($nums);
        $prev_element = null;
        if($nums_size > 0) {
            foreach($nums as $key => $val) {
                if($prev_element === $val) {
                    unset($nums[$key]);
                }
                $prev_element = $val;
            }
        }
        return sizeof($nums);
    }
}