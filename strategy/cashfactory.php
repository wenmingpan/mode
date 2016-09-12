<?php

include 'cash.php';

class CashFactoy
{
	private $cash_obj;

	public static function create_cash($type)
	{
		switch ($type) {
			case 1:
				$cash_obj = new CashNormal();
				break;
			case 2:
				$cash_obj = new CashRebate(0.8);
				break;
			case 3:
				$cash_obj = new CashRebate(0.7);
				break;
			case 4:
				$cash_obj = new CashMoney(300, 100);
				break;
			case 5:
				$cash_obj = new CashMoney(500, 200);
				break;
		}

		return $cash_obj;
	}
}
