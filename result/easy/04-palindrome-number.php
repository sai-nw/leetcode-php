<?php
/**
 * Result URL: https://leetcode.com/submissions/detail/290629962/
 */

require "../../vendor/autoload.php";

use Leetcode\PalindromeNumber\Solution;

$solution = new Solution();
var_dump($solution->isPalindrome(121));
var_dump($solution->isPalindrome(-121));
var_dump($solution->isPalindrome(10));