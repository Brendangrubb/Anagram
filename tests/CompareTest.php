<?php
    require_once 'src/Compare.php';

    class CompareTest extends PHPUnit_Framework_TestCase
    {
        function test_anagramCompare_oneToOne()
        {
            //arrange
            $comparison = new Compare;
            $first_word = "mars";
            $word_list = array("arms");

            //act
            $result = $comparison->anagramCompare($first_word, $word_list);

            //assert
            $this->assertEquals(array("arms"), $result);
        }
    }
?>
