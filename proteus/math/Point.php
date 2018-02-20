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
 */


include_once 'ProteusPhp/proteus/core/settings.php';


/** A simple 3D point.
 * A simple 3D point.
 * 
 */
class Point3
{    
    public $x;              // Members are public for faster access.
    public $y;              // Didn't like multiple vars on one line?
    public $z;              // Doesn't have multiple constructors!
                            // no operator overloading

    
    /**
     * The only Point3 constructor.
     * 
     * @param   var     $x      X parameter.
     * @param   var     $y      Y parameter.
     * @param   var     $z      Z parameter.
     * @author  Paul Michael McNab.
     * @version 1.0.0
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
    

    /**
     * Makes a copy of this class
     * 
     * @param Point3 $point
     * @return A duplicated point.
     */
    public function duplicate($point)
    {
        // Check we're duplicating same object type.
        if (DEBUG == 1)
        {    
            //assert(is_a('Point3', "Can only duplicate objects of same class"));
            assert($point instanceof Point3);  
/*            if (!is_a('Point3', "Can only duplicate objects of same class"))
            {
                throw new InvalidArgumentException("We need a Point3 for correct duplication.");
            }//*/
        }
    
        $instance = new self();
        $instance->x = $point->x;
        $instance->y = $point->y;
        $instance->z = $point->z;

        return $instance;
    }
    
    
    //
    //
    public function add($point)
    {        
        // Check we're duplicating same object type.
        if (DEBUG == 1)
        {    
            //assert(is_a('Point3', "Can only duplicate objects of same class"));
            assert($point instanceof Point3);  
            /*if (!is_a('Point3', "Can only duplicate objects of same class")) {
                throw new InvalidArgumentException("We need a Point3 for correct duplication.");
//                return;
            }//*/
        }
        
        $this->x += $point->x;
        $this->y += $point->y;
        $this->z += $point->z;
    }
}
