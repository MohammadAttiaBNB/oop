<?php
include_once "laptop.php";
include_once "mobile.php";
include_once "tv.php";
use Devteame\y2025\laptop;
use Devteame\y2025\mobile;
use Devteame\y2025\tv;

$laptop1 = new laptop("hp","počítače","pavel");
$laptop1->setDescount()->getDescount();
$mobile = new mobile("iphone","drahy i dobry","honza");
$mobile->setDescount()->getDescount();
$tv= new tv("samsung","new television","mahmoud");
$tv->setDescount()->getDescount();

?>


