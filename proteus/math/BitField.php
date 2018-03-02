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
 * Need to see how bitfield manipulation is done in php,
 * before I finalise this class.
 */
class BitField
{
    private $flags = 0;

    public function __construct($setAll = TRUE)
    {
        if ($setAll == TRUE)
        {
            $this->flags = 0xFFFFFFFF; // Keep at 32 bits for older systems
        }
        else
        {
            $this->flags = 0;
        }
    }

    public function Set($bit)
    {
        $this->flags = $bit;
    }


    public function Bits()
    {
        return decbin($this->flags);
    }

    public function TestFlag($bit)
    {
        if (DEBUG == 1) 
        {
            assert(is_integer($bit) && IsBetween($bit, 0, 31));
        }

        return (($this->flags & (1 << $bit)) == (1 << $bit));
    }

    public function SetFlag($bit)
    {
        $this->flags |=  $bit;
    }

/// @def PRCLEAR_FLAG
/// Clears a bit flag.
#define PRCLEAR_FLAG(flag, bit)     ((flag) &= ~(bit))
    public function ClearFlag($bit)
    {
        $this->flags &= ~$bit;
    }

/// @def PRFLIP_FLAG
/// Flips a bit flag.
#define PRFLIP_FLAG(flag, bit)      ((flag) ^=  (bit))            
    public function FlipFlag($bit)
    {
        $this->flags ^=  $bit;
    }
}
