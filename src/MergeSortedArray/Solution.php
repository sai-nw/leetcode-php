<?php

namespace Leetcode\MergeSortedArray;

/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/merge-sorted-array/
 * Difficulty: Easy
 * Description: Given two sorted integer arrays nums1 and nums2, merge nums2 into nums1 as one sorted array.
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 1/13/2020
 * Time: 4:36 PM
 * Class Solution
 */

class Solution {
    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        if($m > 0 && $n == 0) {
            return true;
        }
        if($n > 0 && $m == 0) {
            $nums1 = $nums2;
            return true;
        }
        $nums3 = array();
        $index1 = 0;
        $index2 = 0;
        for($i = 0; $i < $n + $m; $i++) {
            if(isset($nums1[$index1]) && isset($nums2[$index2])) {
                if($index1 < $m && $nums1[$index1] <= $nums2[$index2]) {
                    $nums3[$i] = $nums1[$index1];
                    $index1++;
                }
                else {
                    $nums3[$i] = $nums2[$index2];
                    $index2++;
                }
            }
            elseif (!isset($nums2[$index2])) {
                $nums3[$i] = $nums1[$index1];
                $index1++;
            }
        }
        $nums1 = $nums3;
        return true;
    }
}