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


// Find a better use/location - wrong location? what was I thinking?
function MakePassword(){
    $password = "test123";
        
    /*$pwd = password_hash($password, PASSWORD_DEFAULT);
    echo $pwd;
    echo "</br>;//*/
    
    
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    
    if (passord_verify($password, $hashedPwd) == 1)
    {
    }
}
