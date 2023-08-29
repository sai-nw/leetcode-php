<?php

namespace Leetcode\ValidPalindrome;

/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/valid-palindrome/
 * Difficulty: Easy
 * Description: Given a string, determine if it is a palindrome, considering only alphanumeric characters and ignoring cases.
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 1/8/2020
 * Time: 5:42 PM
 * Class Solution
 */

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        if($s == '') {
            return true;
        }
        $s = preg_replace("/[^a-zA-Z0-9]+/", "", $s);
        $s = strtolower($s);
        $reverse_s = strrev($s);
        if($s == $reverse_s) {
            return true;
        }
        else {
            return false;
        }

    }
}