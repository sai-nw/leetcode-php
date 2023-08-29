<?php

/**
 * Result URL: https://leetcode.com/submissions/detail/291485249/
 */

require "../../vendor/autoload.php";

use Leetcode\ValidPalindrome\Solution;

$solution = new Solution();
$result = $solution->isPalindrome("A man, a plan, a canal: Panama");
var_dump($result);