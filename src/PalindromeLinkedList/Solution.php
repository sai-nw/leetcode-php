<?php

namespace Leetcode\PalindromeLinkedList;

/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/palindrome-linked-list/
 * Difficulty: Easy
 * Description: Given a singly linked list, determine if it is a palindrome.
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 1/8/2020
 * Time: 5:36 PM
 * Class Solution
 */

/**
 *
 * https://www.geeksforgeeks.org/function-to-check-if-a-singly-linked-list-is-palindrome/
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */


class Solution {

    /**
     * @param ListNode $head
     * @return Boolean
     */
    function isPalindrome($head) {
        $orig_head = $head;
        $stack = [];

        while(!is_null($head)) {
            array_push($stack, $head->val);
            $head = $head->next;
        }
        $reverse_stack = array_reverse($stack);
        while(!is_null($orig_head)) {
            if(array_shift($reverse_stack) != $orig_head->val) {
                return false;
            }
            $orig_head = $orig_head->next;
        }
        return true;
    }
}