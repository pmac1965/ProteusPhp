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


include_once 'ProteusPhp/proteus/core/Settings.php';
include_once 'ProteusPhp/proteus/math/MathsHelper.php';


class Colour // Needs more design work to see what colour types are used and how
{
    // Standard HTML colours.
    const AliceBlue  			= 0xF0F8FF00;
    const AntiqueWhite 		 	= 0xFAEBD7;
    const Aqua  				= 0x00FFFF;
    const Aquamarine  			= 0x7FFFD4;
    const Azure  				= 0xF0FFFF;
    const Beige  				= 0xF5F5DC;
    const Bisque  				= 0xFFE4C4;
    const Black  				= 0x000000;
    const BlanchedAlmond  		= 0xFFEBCD;
    const Blue  				= 0x0000FF;
    const BlueViolet  			= 0x8A2BE2;
    const Brown  				= 0xA52A2A;
    const BurlyWood  			= 0xDEB887;
    const CadetBlue  			= 0x5F9EA0;
    const Chartreuse  			= 0x7FFF00;
    const Chocolate  			= 0xD2691E;
    const Coral  				= 0xFF7F50;
    const CornflowerBlue  		= 0x6495ED;
    const Cornsilk  			= 0xFFF8DC;
    const Crimson  				= 0xDC143C;
    const Cyan  				= 0x00FFFF;
    const DarkBlue  			= 0x00008B;
    const DarkCyan  			= 0x008B8B;
    const DarkGoldenRod  		= 0xB8860B;
    const DarkGray  			= 0xA9A9A9;
    const DarkGrey  			= 0xA9A9A9;
    const DarkGreen  			= 0x006400;
    const DarkKhaki  			= 0xBDB76B;
    const DarkMagenta  			= 0x8B008B;
    const DarkOliveGreen  		= 0x556B2F;
    const DarkOrange  			= 0xFF8C00;
    const DarkOrchid  			= 0x9932CC;
    const DarkRed  				= 0x8B0000;
    const DarkSalmon  			= 0xE9967A;
    const DarkSeaGreen  		= 0x8FBC8F;
    const DarkSlateBlue  		= 0x483D8B;
    const DarkSlateGray  		= 0x2F4F4F;
    const DarkSlateGrey  		= 0x2F4F4F;
    const DarkTurquoise  		= 0x00CED1;
    const DarkViolet  			= 0x9400D3;
    const DeepPink  			= 0xFF1493;
    const DeepSkyBlue  			= 0x00BFFF;
    const DimGray  				= 0x696969;
    const DimGrey  				= 0x696969;
    const DodgerBlue  			= 0x1E90FF;
    const FireBrick  			= 0xB22222;
    const FloralWhite  			= 0xFFFAF0;
    const ForestGreen  			= 0x228B22;
    const Fuchsia  				= 0xFF00FF;
    const Gainsboro  			= 0xDCDCDC;
    const GhostWhite  			= 0xF8F8FF;
    const Gold  				= 0xFFD700;
    const GoldenRod  			= 0xDAA520;
    const Gray  				= 0x808080;
    const Grey  				= 0x808080;
    const Green  				= 0x008000;
    const GreenYellow  			= 0xADFF2F;
    const HoneyDew  			= 0xF0FFF0;
    const HotPink  				= 0xFF69B4;
    const IndianRed   			= 0xCD5C5C;
    const Indigo   				= 0x4B0082;
    const Ivory  				= 0xFFFFF0;
    const Khaki  				= 0xF0E68C;
    const Lavender  			= 0xE6E6FA;
    const LavenderBlush  		= 0xFFF0F5;
    const LawnGreen  			= 0x7CFC00;
    const LemonChiffon  		= 0xFFFACD;
    const LightBlue  			= 0xADD8E6;
    const LightCoral  			= 0xF08080;
    const LightCyan  			= 0xE0FFFF;
    const LightGoldenRodYellow	= 0xFAFAD2;
    const LightGray  			= 0xD3D3D3;
    const LightGrey  			= 0xD3D3D3;
    const LightGreen  			= 0x90EE90;
    const LightPink  			= 0xFFB6C1;
    const LightSalmon  			= 0xFFA07A;
    const LightSeaGreen  		= 0x20B2AA;
    const LightSkyBlue  		= 0x87CEFA;
    const LightSlateGray  		= 0x778899;
    const LightSlateGrey  		= 0x778899;
    const LightSteelBlue  		= 0xB0C4DE;
    const LightYellow  			= 0xFFFFE0;
    const Lime  				= 0x00FF00;
    const LimeGreen  			= 0x32CD32;
    const Linen  				= 0xFAF0E6;
    const Magenta  				= 0xFF00FF;
    const Maroon  				= 0x800000;
    const MediumAquaMarine		= 0x66CDAA;
    const MediumBlue  			= 0x0000CD;
    const MediumOrchid  		= 0xBA55D3;
    const MediumPurple  		= 0x9370DB;
    const MediumSeaGreen  		= 0x3CB371;
    const MediumSlateBlue  		= 0x7B68EE;
    const MediumSpringGreen		= 0x00FA9A;
    const MediumTurquoise  		= 0x48D1CC;
    const MediumVioletRed  		= 0xC71585;
    const MidnightBlue  		= 0x191970;
    const MintCream  			= 0xF5FFFA;
    const MistyRose  			= 0xFFE4E1;
    const Moccasin  			= 0xFFE4B5;
    const NavajoWhite  			= 0xFFDEAD;
    const Navy  				= 0x000080;
    const OldLace  				= 0xFDF5E6;
    const Olive  				= 0x808000;
    const OliveDrab  			= 0x6B8E23;
    const Orange  				= 0xFFA500;
    const OrangeRed  			= 0xFF4500;
    const Orchid  				= 0xDA70D6;
    const PaleGoldenRod  		= 0xEEE8AA;
    const PaleGreen  			= 0x98FB98;
    const PaleTurquoise  		= 0xAFEEEE;
    const PaleVioletRed  		= 0xDB7093;
    const PapayaWhip  			= 0xFFEFD5;
    const PeachPuff  			= 0xFFDAB9;
    const Peru  				= 0xCD853F;
    const Pink  				= 0xFFC0CB;
    const Plum  				= 0xDDA0DD;
    const PowderBlue  			= 0xB0E0E6;
    const Purple  				= 0x800080;
    const RebeccaPurple  		= 0x663399;
    const Red  					= 0xFF0000;
    const RosyBrown  			= 0xBC8F8F;
    const RoyalBlue  			= 0x4169E1;
    const SaddleBrown  			= 0x8B4513;
    const Salmon  				= 0xFA8072;
    const SandyBrown  			= 0xF4A460;
    const SeaGreen  			= 0x2E8B57;
    const SeaShell  			= 0xFFF5EE;
    const Sienna  				= 0xA0522D;
    const Silver  				= 0xC0C0C0;
    const SkyBlue  				= 0x87CEEB;
    const SlateBlue  			= 0x6A5ACD;
    const SlateGray  			= 0x708090;
    const SlateGrey  			= 0x708090;
    const Snow  				= 0xFFFAFA;
    const SpringGreen  			= 0x00FF7F;
    const SteelBlue  			= 0x4682B4;
    const Tan  					= 0xD2B48C;
    const Teal  				= 0x008080;
    const Thistle  				= 0xD8BFD8;
    const Tomato  				= 0xFF6347;
    const Turquoise  			= 0x40E0D0;
    const Violet  				= 0xEE82EE;
    const Wheat  				= 0xF5DEB3;
    const White  				= 0xFFFFFF;
    const WhiteSmoke  			= 0xF5F5F5;
    const Yellow  				= 0xFFFF00;
    const YellowGreen  			= 0x9ACD32;
        
           
    private $colour = 0;
    
    
    public function __construct($red, $green, $blue, $alpha = 255)
    {
        if (DEBUG == 1)
        {
            assert(is_integer($red)   && IsBetween($red, 0, 255));
            assert(is_integer($green) && IsBetween($green, 0, 255));
            assert(is_integer($blue)  && IsBetween($blue, 0, 255));
            assert(is_integer($alpha) && IsBetween($alpha, 0, 255));
        }
        
        $this->colour  = (($red & 255) << 24);
        $this->colour |= (($green & 255) << 16);
        $this->colour |= (($blue & 255) << 8);
        $this->colour |=  ($alpha & 255);
    }
    
    
    public function FromFloats($red, $green, $blue, $alpha = 1.0)
    {
        if (DEBUG == 1)
        {
            assert(is_float($red)   && IsBetween($red, 0.0, 1.0));
            assert(is_float($green) && IsBetween($green, 0.0, 1.0));
            assert(is_float($blue)  && IsBetween($blue, 0.0, 1.0));
            assert(is_float($alpha) && IsBetween($alpha, 0.0, 1.0));
        }
        
        $this->colour  = ($red   * 255) << 24;
        $this->colour |= ($green * 255) << 16;
        $this->colour |= ($blue  * 255) << 8;
        $this->colour |= ($alpha * 255);
    }
    
    
    public function FromRGBA($colour)
    {
/*        if (DEBUG == 1)
        {
            assert(is_integer($colour));
        }//*/
        
        $this->colour = $colour;
    }    
    
    public function Red()
    {
        return (($this->colour & 0xFF000000) >> 24);
    }
    
    
    public function Green()
    {
        return (($this->colour & 0x00FF0000) >> 16);
    }
    
    
    public function Blue()
    {
        return (($this->colour & 0x0000FF00) >> 8);
    }
    
    
    public function Alpha()
    {
        return ($this->colour & 0x000000FF);
    }
    
    
    public function Colour()
    {
        return $this->colour;
    }
}
