<?php
namespace Leetcode\ValidPalindromeII;

/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/valid-palindrome-ii/
 * Difficulty: Easy
 * Description: Given a non-empty string s, you may delete at most one character. Judge whether you can make it a palindrome.
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 1/8/2020
 * Time: 5:43 PM
 * Class Solution
 */

class Solution {
    function isPalindrome($s) {
        $reverse_s = strrev($s);
        if($s === $reverse_s) {
            return true;
        }
        else {
            return false;
        }

    }

    /**
     * @param String $s
     * @return Boolean
     */
    function validPalindrome($s) {
        $j = strlen($s);
        if ($this->isPalindrome($s)) {
            return true;
        }
        else {
            $array_s = str_split($s);
            for($i = 1; $i < $j; $i++) {
                if($array_s[$i-1] !== $array_s[$j-1]) {
                    $array_s2 = $array_s;
                    unset($array_s[$i-1]);
                    $s = implode("", $array_s);
                    if($this->isPalindrome($s)) {
                        return true;
                    }

                    unset($array_s2[$j-1]);
                    $s = implode("", $array_s2);
                    if($this->isPalindrome($s)) {
                        return true;
                    }
                    return false;
                }
                $j--;
            }
        }
    }
}