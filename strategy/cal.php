<?php

header("content-type: text/html; charset=utf-8");
/* require_once 'cashfactory.php'; */
require_once 'strategy.php';
require_once 'cash.php';

$price = $_POST['price'];
$count = $_POST['count'];
$type = $_POST['type'];

$totle = $price * $count;

/* 1: 简单工厂模式 */
/* $cash_obj = CashFactoy::create_cash($type); */
/* echo $pay = $cash_obj->action_cach($totle); */

/* 策略模式 */
$stragegy = new CashContext($type);
echo $stragegy->get_result($totle);
/* print_r($cash_obj); */
