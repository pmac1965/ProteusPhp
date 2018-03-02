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


CommandLineParser($argc, $argv);


/**
 *
 */
function CommandLineParser($argc, $argv)
{
	assert(is_numeric($argc), "ARGC should be an integer. Maybe parameter order is mixed up");
	assert(is_array($argv), "ARGV should be an array. Maybe parameter order is mixed up");
	
	for ($i = 0; $i < $argc; $i++)
	{
		$val = $argv[$i];
		
		
        switch($val[0])
		{
			case "/":
				//printf("Val %s\n", $val);
				CommandValidate($val, $i, $argc);
				break;
				
			default:
				//printf("Val %s\n", $val);
				break;
		}
	}
}


function CommandValidate($command, $index, $count)
{
	//$logLevels = array("verbose", "debug", "info", "warn", "error");
	
	// Place outside loop - stop constant creation.
	$commands = array(array("/LogLevel", 1, "LogLevelValidator", array("verbose", "debug", "info", "warn", "error")),
					  array("/LogFile", 1, "LogFileValidator", NULL),
					  array("/Help", 0, NULL, NULL)
					 );
					  
  	$cmd_count = count($commands);

	$found = FALSE;
	
	for ($i=0; $i < $cmd_count; $i++)
	{
		if (in_array($command, $commands[$i]))
		{
			$found = TRUE;
			
			$parameters = $commands[$i][1];		// Get parameter count.
			$validator  = $commands[$i][2];		// Get parameter validator.
			$switches   = $commands[$i][3];
			
			//print($parameters);
			//var_dump($validator);			
/*			if ($switches != NULL)
			{
				var_dump($switches);
			}//*/
			echo "Command $command\n";
			
			if ($parameters > 0)
			{
				GetSwitchParameters($i, $cmd_count, $switches);
				
				if ($validator != NULL)
				{
					$validator(NULL, $switches);
				}
			}
			break;
		}
	}
	
	
//	if ($found)
//	{
	//	echo "Command $command at $index is found\n";
	//}
}


function GetSwitchParameters($index, $count, $params)
{	
	echo "Index $index of $count\n";
	
	if ($index < $count)
	{
		echo "Params $params\n";

		if ($params > 0)
		{
			
		}
	}
}


function LogLevelValidator($setting, $parameters)
{
	//echo "Called LogLevelValidator\n";	
	//echo $parameters;
	if (is_array($parameters))
	{		
		//echo $parameters[0];
	}
}


function LogFileValidator($setting, $parameters)
{
	//echo "Called LogFileValidator\n";
	//echo $parameters;
}
