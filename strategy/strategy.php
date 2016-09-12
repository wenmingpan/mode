<?php

class CashContext
{
	private $cash_obj;

	public function __construct($type)
	{
		$stragegy = null;
		switch ($type) {
			case 1:
				$stragegy = new CashNormal();
				break;
			case 2:
				$stragegy = new CashRebate(0.8);
				break;
			case 3:
				$stragegy = new CashRebate(0.7);
				break;
			case 4:
				$stragegy = new CashMoney(300, 100);
				break;
			case 5:
				$stragegy = new CashMoney(500, 200);
				break;
		}
		$this->cash_obj = $stragegy;
	}

	public function get_result($money)
	{
		return $this->cash_obj->action_cach($money);
	}
}
