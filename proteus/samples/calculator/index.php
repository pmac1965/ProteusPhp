<!DOCTYPE html>
<!-- Demo PHP calculator -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculator example</title>
        <!-- <link href="style.css" rel="stylesheet" type="text/css" media="all"> -->
    </head>
    <body>
        <!-- The input form -->
        </br>
        <form method="GET">
            <input type="text" name="num1" placeholder="Number1">
            <input type="text" name="num2" placeholder="Number2">
            <select name="Operator">
                <option>None</option>
                <option>Add</option>
                <option>Subtract</option>
                <option>Multiply</option>
                <option>Divide</option>
            </select>
            </br>
            </br>
            <button type="submit" name="submit" value="submit">Calculate</button>
        </form>    
        <?php
        if (isset($_GET['submit']))
        {
            $val1       = $_GET['num1'];
            $val2       = $_GET['num2'];
            $operator   = $_GET['Operator'];
  
            if (!is_numeric($val1) || !is_numeric($val2))
            {
                $error = "No valid operands";
                $operator = "";
            }
            
            switch($operator)
            {
                case "None":
                    echo "</br>No operation selected.";
                    break;
                
                case "Add":
                    echo "</br>Add Result: ";
                    echo $val1 + $val2;
                    break;
                
                case "Subtract":
                    echo "</br>Subtract Result: ";
                    echo $val1 - $val2;
                    break;
                
                case "Multiply":
                    echo "</br>Multiply Result: ";
                    echo $val1 * $val2;
                    break;
                
                case "Divide":
                    echo "</br>Divide Result: ";
                    // Check for divide by zero
                    if ($val2 == 0)
                    {
                        echo "<b>Division By Zero</b> Error.";
                    }
                    else
                    {
                        echo $val1 / $val2;
                    }
                    break;
                    
                default:
                    echo "Error: " . $error;
            }
        }
        ?>
    </body>
</html>
