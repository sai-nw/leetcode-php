<?php
/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/valid-parentheses/
 * Difficulty: Easy
 * Description: Given a string containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 1/9/2020
 * Time: 22:07 PM
 * Class Solution
 */

namespace Leetcode\ValidParentheses;


class Solution {

    private $_open_bracket = ['(', '[', '{'];
    private $_close_bracket = [')', ']', '}'];

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack_bracket = [];
        $string_length = strlen($s);
        if($string_length == 0) return true;
        if($string_length < 2 || $string_length % 2 != 0) return false;
        for($i = 0; $i < $string_length; $i++) {
            if(in_array($s[$i], $this->_open_bracket)) {
                array_push($stack_bracket, array_search($s[$i], $this->_open_bracket));
            }
            if(in_array($s[$i], $this->_close_bracket)) {
                $last_open_bracket = array_pop($stack_bracket);
                if($last_open_bracket != array_search($s[$i], $this->_close_bracket)) {
                    return false;
                }
            }
        }
        if(sizeof($stack_bracket) == 0) {
            return true;
        }
        else {
            return false;
        }
    }
}
