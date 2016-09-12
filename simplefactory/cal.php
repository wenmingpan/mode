<?php
include 'operate.php';
include 'operateFactory.php';

/* print_r($_POST); */
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operating = $_POST['operating'];

/* 逻辑业务分开 简单工厂模式来创建对象*/

$operate_obj = OperateFactory::createOperate($operating);
$operate_obj->num1 = $num1;
$operate_obj->num2 = $num2;
echo $operate_obj->get_result();
