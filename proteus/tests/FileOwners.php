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


class FileOwners
{
    public static function groupByOwners($files)
    {
        return NULL;
    }
}

$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);


//var_dump(FileOwners::groupByOwners($files));

/*
Implement a groupByOwners function that:

    Accepts an associative array containing the file owner name for each file name.
    Returns an associative array containing an array of file names for each owner name, in any order.

For example, for associative array ["Input.txt" => "Randy", "Code.py" => "Stan", "Output.txt" => "Randy"] the groupByOwners function should return ["Randy" => ["Input.txt", "Output.txt"], "Stan" => ["Code.py"]].
//*/