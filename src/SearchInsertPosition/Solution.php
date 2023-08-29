<?php

/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/search-insert-position/
 * Difficulty: Easy
 * Description: Given a sorted array of distinct integers and a target value, return the index if the target is found. If not, return the index where it would be if it were inserted in order.
 * You must write an algorithm with O(log n) runtime complexity.
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 30.07.21
 * Time: 11:14
 * Class Solution
 * @package Leetcode\MergeTwoSortedLists
 */


namespace Leetcode\SearchInsertPosition;

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        if(sizeof($nums)) {
            foreach ($nums as $key => $current) {
                if($current >= $target) {
                    return $key;
                }
            }
            return ++$key;
        }
        else {
            return 0;
        }
    }
}