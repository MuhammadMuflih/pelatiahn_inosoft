<?php

class calc{
    protected $battery;

    public function __construct()
    {
        $this->battery = 0;
    }

    public function charger(){
        $this->battery += 30;
        echo "Your battery : ".$this->battery. PHP_EOL;
    }

    protected function useBattery(){
        $this->battery -= 10;
    }

    protected function checkBattery(){
        if($this->battery < 10){
            return true;
        }
        return false;
    }

    public function sum($num1, $num2){
        if($this->checkBattery()){
            echo "low battery". PHP_EOL;
            return;
        }
        else{
            $this->useBattery();
            echo "result : " . $num1+$num2. PHP_EOL;
        }
    }

    public function sub($num1, $num2){
        if($this->checkBattery()){
            echo "low battery". PHP_EOL;
            return;
        }
        else{
            $this->useBattery();
            echo "result : " . $num1-$num2. PHP_EOL;
        }
    }

    public function multiple($num1, $num2){
        if($this->checkBattery()){
            echo "low battery". PHP_EOL;
            return;
        }
        else{
            $this->useBattery();
            echo "result : " . $num1*$num2. PHP_EOL;
        }
    }

    public function dev($num1, $num2){
        if($this->checkBattery()){
            echo "low battery". PHP_EOL;
            return;
        }
        else{
            if($num2 == 0){
                echo "!!ERROR!!". PHP_EOL;
                return;
            }
            $this->useBattery();
            echo "result : " . $num1/$num2. PHP_EOL;
        }
    }

    public function square($num1, $num2){
        if($this->checkBattery()){
            echo "low battery". PHP_EOL;
            return;
        }
        else{
            if( $num1**$num2 > 1000000 ){
                echo "Value outside the specified limit!!". PHP_EOL;
                return;
            }
            echo "result : " . $num1**$num2. PHP_EOL;
        }
    }

}


class newCalc extends calc{
    protected function useBattery(){
        $this->battery -= 5;
    }

    protected function checkBattery(){
        if($this->battery < 5){
            return true;
        }
        return false;
    }
}
?>