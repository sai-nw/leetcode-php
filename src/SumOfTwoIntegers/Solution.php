<?php
namespace Leetcode\SumOfTwoIntegers;
/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/sum-of-two-integers/
 * Difficulty: Medium
 * Description: Calculate the sum of two integers a and b, but you are not allowed to use the operator + and -.
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 1/9/2020
 * Time: 2:51 PM
 * Class Solution
 */

class Solution {
    /**
     * Faster then getSum2
     *
     * @param Integer $a
     * @param Integer $b
     * @return Integer
     */
    function getSum($a, $b) {
        while($b != 0) {
            $carry = $a & $b;
            $a = $a ^ $b;
            $b = $carry << 1;
        }
        return $a;
    }

    function getSum2($a, $b) {
        if($b == 0) {
            return $a;
        }
        else {
            return $this->getSum2($a ^ $b, ($a & $b) << 1);
        }
    }
}