<?php

namespace Leetcode\FirstBadVersion;

/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/first-bad-version/
 * Difficulty: Easy
 * Description: You are a product manager and currently leading a team to develop a new product. Unfortunately, the latest version of your product fails the quality check. Since each version is developed based on the previous version, all the versions after a bad version are also bad.
 * Suppose you have n versions [1, 2, ..., n] and you want to find out the first bad one, which causes all the following ones to be bad.
 * You are given an API bool isBadVersion(version) which returns whether version is bad. Implement a function to find the first bad version. You should minimize the number of calls to the API.
 *
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 1/8/2020
 * Time: 6:07 PM
 * Class Solution




/* The isBadVersion API is defined in the parent class VersionControl.
      public function isBadVersion($version){} */

class VersionControl {
    private $_bad_version = 2;
    public function isBadVersion($version): bool
    {
        //print $version . " is " . intval($this->_bad_version <= $version) . PHP_EOL;
        return ($this->_bad_version <= $version);
    }
}

class Solution extends VersionControl {
    /**
     * @param Integer $n
     * @return Integer
     */
    private $_right = 0;

    public function firstBadVersion($n): int {
        $start = 1;
        if($n <= 1) {
            return $n;
        }
        $end = $n;
        while($start < $end) {
            $position2check = intdiv(($start + $end), 2 );
            if($this->isBadVersion($position2check)) {
                if($position2check == 1) return 1;
                if($end - $start == 1) return $end;
                $end = $position2check;
            }
            else {
                if($start == $position2check) {
                    $start = $end;
                }
                else {
                    $start = $position2check;
                }
            }
        }
        return $end;
    }

    public function firstBadVersionWithRecurtion($n): int
    {
        if($this->_right == 0) {
            $this->_right = $n;
        }
        if($n <= 0) {
            return $n;
        }
        if($this->isBadVersion($n)) {
            if(!$this->isBadVersion($n - 1)) {
                return $n;
            }
            else {
                $position2check = ceil($n / 2);
                $this->_right = $n;
                //print __LINE__ . ': ' . $position2check . PHP_EOL;
                return $this->firstBadVersion($position2check);
            }
        }
        else {
            if($this->isBadVersion($n + 1)) {
                return $n + 1;
            }
            $position2check = ceil(($n + $this->_right) / 2);
            //print __LINE__ . ': ' . $position2check . PHP_EOL;
            return $this->firstBadVersion($position2check);
        }
    }
}