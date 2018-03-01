<!DOCTYPE html>
<!-- Demo PHP calculator -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculator example</title>
    </head>
    <body>
        <!-- The input form -->
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
            <button type="submit" name="submit" value="submit">Calculate</button>
        </form>    
        <?php
//function is_empty(&$val) {
//  return empty($val) && $val !== "0";
//} 

        if (isset($_GET['submit']))
        {
            $val1       = $_GET['num1'];
            $val2       = $_GET['num2'];
            $operator   = $_GET['Operator'];
            
            //var_dump($val1);
            //var_dump($val2);
            //var_dump($operator);
  
            if (!isset($val1) || !isset($val2))
            {
                $error = "No operands";
                $operator = "";
            }
            
            switch($operator)
            {
                case "None":
                    echo "No operation selected.";
                    break;
                
                case "Add":
                    echo "This answer is: ";
                    echo $val1 + $val2;
                    break;
                
                case "Subtract":
                    echo $val1 - $val2;
                    break;
                
                case "Multiply":
                    echo $val1 * $val2;
                    break;
                
                case "Divide":
                    // Check for divide by zero
                    if ($val2 == 0)
                    {
                        echo $val1;
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
