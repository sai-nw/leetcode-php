<?php

namespace Leetcode\LongestCommonPrefix;

/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/longest-common-prefix/
 * Difficulty: Easy
 * Description: Write a function to find the longest common prefix string amongst an array of strings.
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 1/8/2020
 * Time: 5:36 PM
 * Class Solution
 */

class Solution {



    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $prefix = '';

        if(sizeof($strs) > 0) {
            if(sizeof($strs) == 1) {
                return $strs[0];
            }
            else {
                //find min word length
                $min_length_word = $strs[0];
                $min_length = strlen($min_length_word);
                foreach ($strs as $key => $word) {
                    $word_length = strlen($word);
                    if($min_length > $word_length) {
                        $min_length = $word_length;
                        $min_length_word = $word;
                    }
                }
            }
            if( strlen($min_length_word) == 0) {
                return $min_length_word;
            }
            for($i = 0; $i < strlen($min_length_word); $i++) {
                foreach($strs as $word) {
                    if(strlen($word[$i]) == 0) {
                        return $prefix;
                    }
                    if(isset($word[$i])) {
                        if($word[$i] != $min_length_word[$i]) {
                            return $prefix;
                        }
                    }
                    else {
                        return $prefix;
                    }
                }

                $prefix .= $word[$i];
            }
            return $prefix;
        }
        else {
            return $prefix;
        }
    }
}
