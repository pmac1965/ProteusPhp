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


/** A simple 3D point.
 * 
 * A test class which is not intended for use. I used it to test code syntax, 
 * usage and test language constructs.
 * 
 * @notes   DO NOT USE
 * @author  Paul Michael McNab.
 * @version 1.0.0
 */
class Point3
{    
    public $x;              // No operators/operator overloading
    public $y;              // Didn't like multiple vars on one line?
    public $z;              // Doesn't have multiple constructors!


    /**
     * The only Point3 constructor. 
     *  Apparently we only have one constructor.
     * 
     * @param   Number  $x      X parameter.
     * @param   Number  $y      Y parameter.
     * @param   Number  $z      Z parameter.
     */
    public function __construct($x = 0, $y = 0, $z = 0)
    {
        if (DEBUG == 1)
        {
            assert(is_numeric($x));
            assert(is_numeric($y));
            assert(is_numeric($z));
        }
        
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    
    
/*    public function __clone()
    {
        echo "Implement a deep copy clone, even though its unnecessary for this class\n";        
    }//*/
    
    
/*    public function __get($name) // __set
    {
        
    }//*/
    

    /**
     * Makes a copy of this class
     * 
     * @param Point3 $point
     * 
     * @return A duplicated point.
     */
/*    public function Duplicate($point)
    {
        // Check we're duplicating same object type.
        if (DEBUG == 1)
        {    
            assert($point instanceof Point3);  
        }
    
        $instance = new self();
        $instance->x = $point->x;
        $instance->y = $point->y;
        $instance->z = $point->z;

        return $instance;
    }//*/
    
    
    /**
     * Adds a point to this point.
     * 
     * @param Point3 $point
     * 
     * @return  The updated point.
     */
    public function Add($point)
    {        
        // Check we're duplicating same object type.
        if (DEBUG == 1)
        {
            assert(is_a($point, "Point3"));
        }
        
        $this->x += $point->x;
        $this->y += $point->y;
        $this->z += $point->z;
        
        return $this;
    }
    
    
    /**
     * Subtracts a point from this point.
     * 
     * @param Point3 $point
     * 
     * @return  The updated point point.
     */
    public function Sub($point)
    {        
        // Check we're duplicating same object type.
        if (DEBUG == 1)
        {    
            assert($point instanceof Point3);  
        }
        
        $this->x -= $point->x;
        $this->y -= $point->y;
        $this->z -= $point->z;
        
        return $this;
    }
    
    
    /**
     * Multiplies a point by this point.
     * 
     * @param Point3 $point
     * 
     * @return  The updated point point.
     */
    public function Mul($point)
    {        
        // Check we're duplicating same object type.
        if (DEBUG == 1)
        {    
            if (!is_a($point, "Point3")) 
            {
                throw new InvalidArgumentException("We need a Point3 for correct duplication.");
            }
        }
        
        $this->x *= $point->x;
        $this->y *= $point->y;
        $this->z *= $point->z;
        
        return $this;
    }
    
    
    /**
     * Divides this point by a point.
     * 
     * @param Point3 $point
     * 
     * @return  The updated point point.
     */
    public function Div($point)
    {        
        // Check we're duplicating same object type.
        if (DEBUG == 1)
        {    
            if (!is_a($point, "Point3")) 
            {
                throw new InvalidArgumentException("We need a Point3 for correct duplication.");
            }
        }
        
        $this->x /= $point->x;
        $this->y /= $point->y;
        $this->z /= $point->z;
        
        return $this;
    }
    
    
    /**
     * __toString
     * 
     * A magic method to return a string representation of this class.
     * 
     * @return A string representation of a Point3 class
     */
    public function __toString()
    {
        return "Point3($this->x, $this->y, $this->z)";
    }
    
    
//    public function __add($__value__) // To add
}
