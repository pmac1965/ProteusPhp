<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function FunctionExist($function)
{
    if (function_exists($function))
    {
        return TRUE;
    }
    else
    {
        //echo "Function does not exist - better write our own";
        return FALSE;
    }
}
