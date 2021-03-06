<?php
// -----------------------------------------------------------------------------
// Copyright 2018 Paul Michael McNab
// 
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//      http://www.apache.org/licenses/LICENSE-2.0
// 
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
// -----------------------------------------------------------------------------


include_once 'ProteusPhp/proteus/core/Settings.php';
include_once 'ProteusPhp/proteus/core/Consts.php';


/** 
 * TRUE is represented the value 1, and FALSE is represented by NULL.
 * This function returns a string representation which is easier to display
 * 
 * @param   bool    $boolean    The variable to test.
 * @param   bool    $uppercase  Should the returned string be UPPERCASE or lowercase.
 * @return  string              A string containing true or false.
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


/**
 * Calculates 'amount's percentage in relation to 'total'.
 * E.g. (50, 200) == 25% of total.
 * 
 * @param   float   $amount     The amount to find.
 * @param   float   $total      The total percentage to use.
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


/** 
 * Swaps two numbers passed by reference.
 * Allows for integers and floats.
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


/** 
 * This function tests if a number is power of 2
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
        if ($size == (1 << $i))
        {
            $result = TRUE;
            break;
        }
    }
    
    return $result;
}


/** 
 * Ensures a variable is clamped between the minimum and maximum range specified.
 * 
 * @param   Number  $var    The numeric variable to clamp.
 * @param   Number  $min    The minimum value the number can be.
 * @param   Number  $max    The maximum value the number can be.
 * @return  The clamped number.
 */
function Clamp($var, $min, $max)
{
    if (DEBUG == 1)
    {
        assert(is_numeric($var));
        assert(is_numeric($min));
        assert(is_numeric($max));
    }
   
    return ($var < $min ? $min : $var > $max ? $max : $var);
}
/** // Older version
 * Ensures a variable is between the minimum and maximum range specified.
 */
/*function clamp($val, $minVal, $maxVal)
{
	return max($minVal, min($maxVal, $val));
}//*/


/** 
 * Used to test if a variable is between the minimum and maximum range specified.
 * 
 * @param   Number  $var    The numeric variable to test.
 * @param   Number  $min    The minimum value the number can be.
 * @param   Number  $max    The maximum value the number can be.
 * @return  TRUE or FALSE
  */
function IsBetween($var, $min, $max)
{
    if (DEBUG == 1)
    {
        assert(is_numeric($var));
        assert(is_numeric($min));
        assert(is_numeric($max));
    }
    
    return ($var >= $min && $var <= $max);
}


/**
 * Calculates the smallest of 3 numbers.
 * 
 * @param   Number  $a      A numeric value.
 * @param   Number  $b      A numeric value.
 * @param   Number  $c      A numeric value.
 * @return  Number  The smallest of the 3 numbers.
 */
function MinMin($a, $b, $c)
{
    if (DEBUG == 1)
    {
        assert(is_numeric($a));
        assert(is_numeric($b));
        assert(is_numeric($c));
    }
        
    return ($a < $b ? min($a, $c) : min($b, $c));
}


/**
 * Calculates the largest of 3 numbers.
 * 
 * @param   Number  $a      A numeric value.
 * @param   Number  $b      A numeric value.
 * @param   Number  $c      A numeric value.
 * @return  Number  The smallest of the 3 numbers.
 */
function MaxMax($a, $b, $c)
{
    if (DEBUG == 1)
    {
        assert(is_numeric($a));
        assert(is_numeric($b));
        assert(is_numeric($c));
    }

    return ($a > $b ? max($a, $c) : max($b, $c));
}


/**
 * Calculates the absolute of a float number.
 * 
 * @param   float   $a      The float to convert to an absolute.
 * @return  float   The absolute float value.
 */
function Fabs($a)
{
    if (DEBUG == 1)
    {
        assert(is_numeric($a));
    }
    
    return ($a < 0.0 ? -$a : $a);
}


/**
 * Performs linear interpolation over time.
 * 
 * @param   float   $time       Current time
 * @param   float   $from       Start value
 * @param   float   $to         End value
 * 
 * @return float    Unsure if this will be useful. Changes a value over time.
 */
function Lerp($time, $from, $to)
{
    if (DEBUG == 1)
    {
        assert(is_float($time));
        assert(is_float($from));
        assert(is_float($to));
    }
    
    return ($from + ($time * ($to - $from)));
}


/**
 * Converts radians to degrees.
 */
function RadToDeg($radians)
{
    return ($radians * (180.0 / PI));
}


/**
 * Converts degrees to radians.
 */
function DegToRad($degrees)
{
    return ($degrees * (PI / 180.0));
}
