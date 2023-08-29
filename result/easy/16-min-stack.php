<?php
/**
 * Result URL: https://leetcode.com/submissions/detail/294759177/
 */

require "../../vendor/autoload.php";

use Leetcode\MinStack\Solution;

$solution = new Solution();

$callMethod = ["push","push","push","top","pop","getMin","pop","getMin","pop","push","top","getMin","push","top","getMin","pop","getMin"];
$callParam = [2147483646,2147483646,2147483647,'','','','','','',2147483647,'','',-2147483648,'','','',''];
$expected = [null,null,null,2147483647,null,2147483646,null,2147483646,null,null,2147483647,2147483647,null,-2147483648,-2147483648,null,2147483647];
foreach($callMethod as $key => $method) {
    if($callParam[$key] != '') {
        $result[] = $solution->$method($callParam[$key]);
    }
    else {
        $result[] = $solution->$method();
    }
}
var_dump($result);
var_dump($expected);

