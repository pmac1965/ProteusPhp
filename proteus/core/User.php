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



class User // https://stackoverflow.com/questions/4707053/php-user-class-login-logout-signup
{
    protected   $first_name;
    protected   $last_name;
    protected   $middle_name;
    
    
    public function __construct($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
    
    
    public function __destruct()
    {
        echo "User destruct</br>";
    }
    
    
    // Method shouldn't need to be overridden, so final is ok.
    final public function GetFirstName()
    {
        return $this->first_name;
    }
    
    
    // Method shouldn't need to be overridden, so final is ok
    final public function GetLastName()
    {
        return $this->last_name;
    }
    
    
    public function login()
    {        
    }
    
    
    public function logout()
    {        
    }
}
