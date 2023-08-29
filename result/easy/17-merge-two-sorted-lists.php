<?php

/**
 * Result: https://leetcode.com/submissions/detail/530298508/
 */

require "../../vendor/autoload.php";

use Leetcode\MergeTwoSortedLists\Solution;
use Leetcode\MergeTwoSortedLists\ListNode;
function fillNode($array)
{
    arsort($array);
    $node = null;
    if (sizeof($array)) {
        foreach ($array as $val) {
            $node = new ListNode($val, $node);
        }
        return $node;
    }
}
$l1 = [-4, 1];
$l2 = [-7,-7,-5,-3,0];

$solution = new Solution();

$node1 = fillNode($l1);
$node2 = fillNode($l2);

$merged_node = $solution->mergeTwoLists($node1, $node2);
var_dump($merged_node);