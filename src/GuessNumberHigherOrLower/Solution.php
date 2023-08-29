<?php

namespace Leetcode\GuessNumberHigherOrLower;

/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/guess-number-higher-or-lower/
 * Difficulty: Easy
 * Description: We are playing the Guess Game. The game is as follows:

I pick a number from 1 to n. You have to guess which number I picked.

Every time you guess wrong, I will tell you whether the number I picked is higher or lower than your guess.

You call a pre-defined API int guess(int num), which returns 3 possible results:

-1: The number I picked is lower than your guess (i.e. pick < num).
1: The number I picked is higher than your guess (i.e. pick > num).
0: The number I picked is equal to your guess (i.e. pick == num).
Return the number that I picked.
 *
 *
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 30/07/2021
 * Time: 6:42 PM
 * Class Solution
 */


class GuessGame {
    public function guess($num) {
        $pick = 98;
        if($pick < $num) {
            return -1;
        }
        elseif($pick > $num) {
            return 1;
        }
        else {
            return 0;
        }
    }
}

/**
 * The API guess is defined in the parent class.
 * @param  num   your guess
 * @return 	     -1 if num is lower than the guess number
 *			      1 if num is higher than the guess number
 *               otherwise return 0
 * public function guess($num){}
 */

class Solution extends GuessGame {


    /**
     * @param  Integer  $n
     * @return Integer
     */
    function guessNumber($n) {

        $rigth_limit = $n;
        $left_limit = 1;
        if($this->guess($left_limit) === 0) {
            return $left_limit;
        }
        while($left_limit < $rigth_limit) {
            $myNumber = ceil(($rigth_limit + $left_limit) / 2);
            if($this->guess($myNumber) == 0) {
                return $myNumber;
            }
            elseif($this->guess($myNumber) === -1) {
                $rigth_limit = $myNumber;
            }
            elseif ($this->guess($myNumber) === 1) {
                $left_limit = $myNumber;
            }
        }
    }
}

