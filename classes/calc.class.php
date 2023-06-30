<?php
class Calc {
    public $operater;
    public $num1;
    public $num2;

    public function __construct(string $operater, int $num1, int $num2){
        $this->operater = $operater;
        $this->num1 = $num1;
        $this->num2 = $num2;

    }

    public function calculator() {
        switch ($this->operater) {
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
                
            case 'sub':
                $result = $this->num1 - $this->num2; 
                return $result;
                
            case 'div':
                $result = $this->num1 / $this->num2; 
                return $result;
            
            case 'mul':
                $result = $this->num1 * $this->num2; 
                return $result;
                
            default:
                echo "error: unknown";
                break;
        }
    }
    
}

?>