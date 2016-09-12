<?php

/**
 * 抽象现金类 
 * 
 * @abstract
 * @package 
 * @version $id$
 * @copyright 1997-2005 The PHP Group
 * @author wenming.pan <panwm5712@gmail.com> 
 * @license PHP Version 3.0 {@link http://www.php.net/license/3_0.txt}
 */
abstract class Cash
{
	/**
	 * 接受现金进行处理 
	 * 
	 * @param mixed $money 
	 * @access public
	 * @return void
	 */
	public abstract function action_cach($money);
}

/* 正常收费 */
class CashNormal extends Cash
{
	public function action_cach($money)
	{
		return $money;
	}
	
}

/* 八折 */
class CashRebate extends Cash
{
	private $rebate;

	public function __construct($rebate)
	{
		$this->rebate = $rebate;
	}
	public function action_cach($money)
	{
		return $money * $this->rebate;
	}
	
}


/* 300 送 100 */
class CashMoney extends Cash
{
	private $money; // 消费金额
	private $cash; // 送现金

	public function __construct($money, $cash)
	{
		$this->money = $money;
		$this->cash = $cash;
	}
	public function action_cach($money)
	{

		$zk = floor($money/$this->money) * $this->cash;
		return $money - $zk;
	}
	
}



