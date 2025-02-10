<?php 
namespace Devteame\y2025;
abstract class product{
    public string $title , $desc,$user  ;
    public int $price=12345 , $quantity=1,$newPrice;

    public function __construct($title,$desc,$user){
    $this->title=$title  ;
    $this->desc=$desc  ;
    $this->user=$user  ;
     echo "welcome $user "; 
     echo "<br>";   

    }

    abstract public function setDescount();
    abstract public function getDescount();

    public static function greet(){
        echo " thank you for using discount coupon";
     echo "<hr>";   

    }
}   


?>