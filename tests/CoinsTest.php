<?php
    require_once __DIR__ . '/../src/Coins.php';

    class CoinsTest extends PHPUnit_Framework_TestCase
    {
        function test_Coins_returnQuarters()
        {
            // arange
            $test_Coins = new Coins;
            $input = 80;
            $input2 = 10;

            // act
            $result = $test_Coins->quarters($input);
            $result2 = $test_Coins->quarters($input2);

            // assert
            $this->assertEquals(3, $result);
            $this->assertEquals(0, $result2);
        }
        function test_Coins_returnDimes()
        {
            // arange
            $test_Coins = new Coins;
            $input = 24;
            $input2 = 8;

            // act
            $result = $test_Coins->dimes($input);
            $result2 = $test_Coins->dimes($input2);

            // assert
            $this->assertEquals(2, $result);
            $this->assertEquals(0, $result2);
        }
        function test_Coins_returnNickels()
        {
            // arange
            $test_Coins = new Coins;
            $input = 12;
            $input2 = 4;

            // act
            $result = $test_Coins->nickels($input);
            $result2 = $test_Coins->nickels($input2);

            // assert
            $this->assertEquals(2, $result);
            $this->assertEquals(0, $result2);
        }
        function test_Coins_returnPennies()
        {
            // arange
            $test_Coins = new Coins;
            $input = 4;
            $input2 = 1;

            // act
            $result = $test_Coins->pennies($input);
            $result2 = $test_Coins->pennies($input2);

            // assert
            $this->assertEquals(4, $result);
            $this->assertEquals(1, $result2);
        }
    }
?>
