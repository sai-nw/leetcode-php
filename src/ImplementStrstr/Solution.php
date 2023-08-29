<?php
namespace Leetcode\ImplementStrstr;

/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/implement-strstr/
 * Difficulty: Easy
 * Description: Return the index of the first occurrence of needle in haystack, or -1 if needle is not part of haystack.
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 1/10/2020
 * Time: 11:42 AM
 * Class Solution
 */

class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */


    function strStr($haystack, $needle) {
        $haystack_length = strlen($haystack);
        $needle_length = strlen($needle);
        if($haystack_length < $needle_length) return -1;
        if($needle_length == 0) return 0;
        for($i = 0; $i <= $haystack_length - $needle_length; $i++) {
            print $i . "," . ($needle_length) . PHP_EOL;
            //print $i . PHP_EOL;
            $sub_haystack = substr($haystack, $i, $needle_length);
            print $sub_haystack . PHP_EOL;
            if($sub_haystack === $needle) {
                return $i;
            }
        }
        return -1;
    }


    /**
     * Shutdown with Time Limit Exceeded
     */

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */

    function strStr2($haystack, $needle) {
        $haystack_length = strlen($haystack);
        $needle_length = strlen($needle);
        if($haystack_length < $needle_length) return -1;
        if($needle_length == 0) return 0;
        for($i = 0; $i < $haystack_length; $i++) {
            $j = 0;
            $first_coincidence = false;
            while($j < $needle_length) {
                if(isset($haystack[$i + $j]) && $needle[$j] == $haystack[$i + $j]) {

                    if($first_coincidence === false) {
                        $first_coincidence = $i + $j;
                    }
                    $j++;
                }
                else {
                    $j = 0;
                    break;
                }
            }
            if($j > 0) {
                return $first_coincidence;
            }
        }
        return -1;
    }
}