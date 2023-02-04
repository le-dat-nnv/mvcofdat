<?php
require_once 'exExtends/people.php';
require_once 'exExtends/adults.php';
require_once 'exExtends/childrens.php';
//$adults = new \exExtends\adults();
//$adults->eat();
//$adults->setChan('2');
//$adults->go();
//$children = new \exExtends\childrens();
//$children->eat();
//$children->setChan('2');
//$children->setTay('2');
//$children->bo();

$adults = new \exExtends\adults('2' , '2' , '1' , '1' , '1020002');
$adults->di();