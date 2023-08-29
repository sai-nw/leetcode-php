<?php
namespace Leetcode\PalindromeNumber;

/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/palindrome-number/
 * Difficulty: Easy
 * Description: Determine whether an integer is a palindrome. An integer is a palindrome when it reads the same backward as forward.
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 1/8/2020
 * Time: 5:39 PM
 * Class Solution
 */

class Solution
{
    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $x1 = strval($x);
        $x2 = strrev($x);
        if($x1 === $x2) {
            return true;
        }
        else {
            return false;
        }

    }
}