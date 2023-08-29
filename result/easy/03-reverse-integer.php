<?php
/**
 * Result URL: https://leetcode.com/submissions/detail/290628567/
 */
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {

        $signe = 1;

        if($x < 0) {
            $signe = -1;
        }
        return strrev((string)$x) * $signe;
    }
}

$solution = new Solution();

echo $solution->reverse(123) . PHP_EOL;
echo $solution->reverse(-123) . PHP_EOL;
echo $solution->reverse(120) . PHP_EOL;
echo $solution->reverse(1534236469) . PHP_EOL;
