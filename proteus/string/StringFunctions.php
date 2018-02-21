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


/**
 * Tests a variable to see if its NULL or is an empty string.
 *
 * @param   string  $string     A string to test.
 * @return  bool    TRUE if the passed string is NULL or empty.
 * @author  Paul Michael McNab.
 * @version 1.0.0
 */
function IsNullOrEmpty($string)
{	
	if ($string === NULL)
	{
		return TRUE;
	} 

	if (is_string($string))
	{		
		if (strlen($string) === 0)
		{
			return TRUE;
		} 
	}
	
	return FALSE;
}


/**
 * Determines if a character is whitespace.
 * 
 * @param   string $char    The character to test. 
 * @return  boolean         TRUE or FALSE
 */
function IsWhitespace($char)
{
    return ($char == ' '  ||
            $char == '\r' || 
            $char == '\n' ||
            $char == '\t');
}
