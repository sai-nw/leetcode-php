<?php


namespace Leetcode\MergeTwoSortedLists;
/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/merge-two-sorted-lists/
 * Difficulty: Easy
 * Description: Merge two sorted linked lists and return it as a new list. The new list should be made by splicing together the nodes of the first two lists.
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 29.07.21
 * Time: 01:14
 * Class Solution
 * @package Leetcode\MergeTwoSortedLists
 */

class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2) {

        if(is_null($l1)) {
            return $l2;
        }
        if(is_null($l2)) {
            return $l1;
        }
        if($l1->val < $l2->val) {
            $l1->next = $this->mergeTwoLists($l1->next, $l2);
            return $l1;
        }
        else {
            $l2->next = $this->mergeTwoLists($l2->next, $l1);
            return $l2;
        }
    }
}