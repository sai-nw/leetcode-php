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

        $x = strrev((string)$x);

        if($x > pow(2, 31)) {
            return 0;
        }
        else {
            return intval($x) * $signe;
        }
        
    }
}

$solution = new Solution();

echo $solution->reverse(123) . PHP_EOL; //expect 321
echo $solution->reverse(-123) . PHP_EOL;//-321
echo $solution->reverse(120) . PHP_EOL; //12
echo $solution->reverse(1534236469) . PHP_EOL; // 0 // output error 9646324351

