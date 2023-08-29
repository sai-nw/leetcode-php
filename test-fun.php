<?php
class test {

    private $str = NULL;

    public function newTest(){

        return 'function "newTest" called, ';
    }
    public function bigTest(){

        return $this->str . ' function "bigTest" called,';
    }
   
}

$test = new test;

echo $test->newTest();

?>