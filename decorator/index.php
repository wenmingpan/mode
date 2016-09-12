<?php

include 'person.php';

$p = new Person('LiMing');
$ts = new Tshirts();
$ts->setComponent($p);
$s = new Shoes();
$s->setComponent($ts);
$s->show();

$p2 = new Person('Zhangs');
$s1 = new Shoes();
$s1->setComponent($p2);
$s1->show();
/* $ts1 = new Tshirts(); */
/* $ts1->setComponent($s1); */
/* $ts1->show(); */
echo '111';
