<?php

namespace Leetcode\CountPrimes;

/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/count-primes/
 * Difficulty: Easy
 * Description: Count the number of prime numbers less than a non-negative number, n.
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 1/8/2020
 * Time: 6:07 PM
 * Class Solution
 */

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function countPrimes($n) {
        $num_primes = 0;
        for($i = 2; $i < $n; $i++) {
            if($this->isPrime($i)) {
                $num_primes++;
            }
        }
        return $num_primes;
    }

    function isPrime($number) {
        if(is_int($number) && $number > 1) {
            for($i = 2; $i * $i <= $number; $i++) {
                if(($number % $i) === 0) {
                    return false;
                }
            }
            return true;
        }
        else {
            return false;
        }
    }
}