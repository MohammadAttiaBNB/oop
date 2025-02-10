<?php 
namespace Devteame\y2025;
include_once "product.php";
use Devteame\y2025\product;
final class mobile extends product{
    public function setDescount(){
        $this->newPrice = ceil($this->price*0.01); 
        return $this;       
    }
    public function getDescount(){
        echo "mobile:$this->title . old price:$this->price E.G.P price after descount:$this->newPrice";  
        product::greet();
       return $this;   
    }

}
?>
