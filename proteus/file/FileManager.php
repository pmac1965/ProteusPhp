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
 * @since       Version 1.0.0
 */


class FileManager
{
    public $filehandle;
    
    
    public function __construct($filename, $mode)
    {        
        print 'ctor </br>';
    }

    public function __destruct()
    {
        print 'dtor </br>';
    }
    
    
    public function Open()//$filename, $mode)
    {        
    }
    
    public function Close()//$filename, $mode)
    {        
    }
        
    public function Save()
    {        
    }
    
    public function Read()
    {        
    }
}