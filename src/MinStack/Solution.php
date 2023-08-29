<?php
/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/min-stack/
 * Difficulty: Easy
 * Description: Design a stack that supports push, pop, top, and retrieving the minimum element in constant time.
 * push(x) -- Push element x onto stack.
 * pop() -- Removes the element on top of the stack.
 * top() -- Get the top element.
 * getMin() -- Retrieve the minimum element in the stack.
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 16.01.20
 * Time: 03:14 PM
 * Class Solution
 * @package Leetcode\MinStack
 */
namespace Leetcode\MinStack;


class Solution {
    private $_stack = array();
    private $_size = 0;
    private $_last_key = -1;
    /**
     * initialize your data structure here.
     */
    function __construct() {

    }

    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        if(!isset($x)) $x = null;
        $this->_last_key++;
        $this->_stack[$this->_last_key] = $x;

        $this->_size = sizeof($this->_stack);
        return null;
    }

    /**
     * @return NULL
     */
    function pop() {
        if($this->_size == 0) {
            return false;
        }
        $this->_size--;
        $pop = $this->_stack[$this->_last_key];
        unset($this->_stack[$this->_last_key]);
        if($this->_last_key >= 0) {
            $this->_last_key--;
        }
        return null;

    }

    /**
     * @return Integer
     */
    function top() {
        print_r($this->_stack);
        print_r($this->_last_key);
        if($this->_size == 0) {
            return false;
        }
        return $this->_stack[$this->_last_key];

    }

    /**
     * @return Integer
     */
    function getMin() {
        return min($this->_stack);
    }

    function get_stack() {
        return $this->_stack;
    }
}

/**
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($x);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->getMin();
 */