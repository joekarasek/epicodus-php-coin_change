<?php
    class Coins
    {
        function quarters($input)
        {
            $result = floor( $input / 25 ); // rounds down to the nearest interger, for example, 80 divided by 25 gives you 3.2, floor rounds down to 3
            return $result;
        }
        function dimes($input)
        {
            $result = floor( $input / 10 );
            return $result;
        }
        function nickels($input)
        {
            $result = floor( $input / 5 );
            return $result;
        }
        function pennies($input)
        {
            return $input;
        }

        // Use previous functions to take input change and return an associative array with the correct change quantities
        function returnChange($input)
        {
            $result = array();
            $result['quarters'] = $this->quarters($input);
            $input = $input % 25;
            $result['dimes'] = $this->dimes($input);
            $input = $input % 10;
            $result['nickels'] = $this->nickels($input);
            $input = $input % 5;
            $result['pennies'] = $this->pennies($input);

            return $result;
        }


    }
 ?>
