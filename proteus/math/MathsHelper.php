<?php
/**
 * Copyright 2018 Paul Michael McNab
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * @package     ProteusPhp
 * @author      Paul Michael McNab
 * @copyright	Copyright (C)2018 Paul Michael McNab
 * @license     http://www.apache.org/licenses/LICENSE-2.0	Apache License
 * @since       Version 1.0.0
 * @filesource
 */


include_once 'ProteusPhp/proteus/core/Settings.php';


/**
 * In PHP, TRUE is represented the value 1, and FALSE is represented by NULL.
 * This function returns a string representation which is easier to display
 * 
 * @param   bool    $boolean    The variable to test.
 * @param   bool    $uppercase  Should the returned string be UPPERCASE or lowercase.
 * @return  string              true or false
 */
function BoolResult($boolean, $uppercase = FALSE)
{
    if (DEBUG == 1)
    {    
        assert(is_bool($boolean), "Incorrect type passed - Must be boolean");
        assert(is_bool($uppercase), "Incorrect type passed - Must be boolean");
    }
    
    
    if ($boolean === TRUE)
    {
        return $uppercase ? "TRUE" : "true";
    }        
    else
    {
        return $uppercase ? "FALSE" : "false";
    }
}
// Tests for later
/*
        $b = TRUE;
        echo 'Result :' . BoolResult($b) . "</br>";
        $b = FALSE;
        echo 'Result :' . BoolResult($b) . "</br>";

        $b = TRUE;
        echo 'Result :' . BoolResult($b, TRUE) . "</br>";
        $b = FALSE;
        echo 'Result :' . BoolResult($b, TRUE) . "</br>"; 
//*/


/**
 * Returns the specified percentage of a value.
 * 
 * @param   float   $percent    The percentage required
 * @param   float   $value      Thee value to get the percentage of
 * @return  float               The calculated percentage.
 */
function PercentageOfValue($percent, $value)
{
    if (DEBUG == 1)
    {    
        if (gettype($percent) != "float")
        {
            $percent = (float)$percent;
        }
        
        if (gettype($value) != "float")
        {
            $value = (float)$value;
        }
        
        // Check we have floats.
        assert(is_float($percent) == TRUE);
        assert(is_float($value) == TRUE);
    }
        
    $first  = $value * 100;
    $second = $value * $percent;
    $third  = ($first - $second) / 100;
    
    return $value - $third;
}
// Tests for later
/*
        $percent = PercentageOfValue(50, 200);
        echo "50 Percent of 200 is $percent</br>";
        
        $percent = PercentageOfValue(25, 200);
        echo "25 Percent of 200 is $percent</br>";
        
        $percent = PercentageOfValue(10, 400);
        echo "10 Percent of 400 is $percent</br>";
//*/


/**
 * Calculates 'amount's percentage in relation to 'total'.
 * E.g. (50, 200) == 25% of total.
 * 
 * @param   float   $amount     Expla
 * @param   float   $total      Expla
 * @return  float               The calculated percentage.
 */
function PercentageOfTotal($amount, $total)
{
    if (DEBUG == 1)
    {    
        if (gettype($amount) != "float")
        {
            $amount = (float)$amount;
        }
        
        if (gettype($total) != "float")
        {
            $total = (float)$total;
        }
        
        // Just so I can see them in action.
        assert(is_float($amount) == TRUE);
        assert(is_float($total) == TRUE);
    }
    
    $percentage  = ($amount / $total) * 100;

    return $percentage;
}
// Tests
/*
        $percent = PercentageOfTotal(50, 200);
        echo "50 is $percent% of 200</br>";
        $percent = PercentageOfTotal(100, 200);
        echo "100 is $percent% of 200</br>";
        $percent = PercentageOfTotal(350, 700);
        echo "350 is $percent% of 700</br>";
 //*/


/** Swaps two numbers.
 *  Allows for integers and floats.
 * 
 * @param   int     $a      Can be an integer or a float.
 * @param   float   $b      Can be an integer or a float.
 */
function Swap(&$a, &$b)
{
    if (DEBUG == 1)
    {
        assert(is_numeric($a));
        assert(is_numeric($b));
    }
    
    $tmp = $b;
    $b   = $a;
    $a   = $tmp;
}
//
/*
        $a = 200;
        $b = 10;
        echo "Numbers $a $b</br>";
        Swap($a,$b);
        echo "Numbers $a $b</br>";
        Swap($a,$b);
        echo "Numbers $a $b</br>";
//*/


/** This function tests if a number is power of 2
 * 
 * @param   integer     $size     An integer test value
 * @return  boolean     TRUE or FALSE
 */
function IsPowerOfTwo($size)
{
    if (DEBUG == 1)
    {
        assert(is_integer($size));
    }
    
    $result = FALSE;
    
    for ($i = 1; $i < 32; $i++)
    {
        //echo (1 << $i)."</br>";        
        if ($size == (1 << $i))
        {
            $result = TRUE;
            break;
        }
    }
    
    return $result;
}


/** Ensures a variable is clamped between the minimum and maximum range specified.
 * 
 * @param   Number  $var    The number to clamp.
 * @param   Number  $min    The minimum value the number can be.
 * @param   Number  $max    The maximum value the number can be.
 * @return  Number          The clamped number.
 */
function Clamp($var, $min, $max)
{
    if (DEBUG == 1)
    {
        assert(is_numeric($var));
        assert(is_numeric($var));
        assert(is_numeric($var));
    }
   
    return ($var < $min ? $min : $var > $max ? $max : $var);
}