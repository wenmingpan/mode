<?php

/**
 * 操作工厂类创建对象 
 * 
 * @package 
 * @version $id$
 * @copyright 1997-2005 The PHP Group
 * @author wenming.pan <panwm5712@gmail.com> 
 * @license PHP Version 3.0 {@link http://www.php.net/license/3_0.txt}
 */
class OperateFactory
{
	public static function createOperate($operate)
	{
		$operate_obj = null;
		switch ($operate) {
			case '+':
				$operate_obj = new OperateAdd();
				break;
			case '-':
				$operate_obj = new OperateMinus();
				break;
			case '*':
				$operate_obj = new OperateMult();
				break;
			case '/':
				$operate_obj = new OperateDiv();
				break;
		}
		return $operate_obj;
	}
}
