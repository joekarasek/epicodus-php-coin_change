<?php
    class Coins
    {
        function quarters($input)
        {
            $result = floor( $input / 25 ); // rounds down to the nearest interger, for example, 80 divided by 25 gives you 3.2, floor rounds down to 3
            return $result;
        }
    }
 ?>
