<?php
// Investigate this further.
class NonNumericException extends Exception
{
    private $value;
    
    
    function __construct($value)
    {
        $this->value = $value;
    }
    
    
    public function info() 
    {
        //printf($this->msg, $this->value);
        $errorMsg = 'Error on line ' . $this->getLine() . ' in ' . $this->getFile()
                    . ': <b>' . $this->getMessage() . '</b> is not a valid E-Mail address';
        
        return $errorMsg;
    }
    
  /*public function errorMessage() {
    //error message
    $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
    .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
    return $errorMsg;
  }//*/
}



class NotAString
{
    private $value;
    
    
    function __construct($value)
    {
        $this->value = $value;
    }
    
}