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


/**
 * Tests if a string is a palindrome. 
 * Trying some coding tests. My version is very C++ like, but it works!
 * 
 * @param   String  $string
 * @return  Boolean TRUE or FALSE
 */
function IsPalindrome($string)
{
    $result = FALSE;
    
    if (is_string($string))
    {
        $len = strlen($string);
        
        if ($len >= 2)
        {
            // Set indices into string.
            $idx_beg = 0;
            $idx_end = $len - 1;
            
            while (($idx_end - $idx_beg) >= 1)
            {
                // Are the characters the same?
                if ($string[$idx_beg++] == $string[$idx_end--]) 
                {
                    $result = ($idx_end - $idx_beg <= 1);
                } 
                else 
                {
                    break;
                }
            }            
        }
    }
    
    return $result;
}
