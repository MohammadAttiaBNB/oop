<?php 
namespace Devteame\y2025;
include_once "product.php";

 class laptop extends product{

    public function setDescount(){
        $this->newPrice = ceil($this->price*0.9);    
        return $this;   
    }
    public function getDescount(){
        echo "laptop:$this->title . old price:$this->price USD . price after descount:$this->newPrice USD ";     
        product::greet();
        return $this;   

    }

}
?>