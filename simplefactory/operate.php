<?php
/**
 * Operate 
 * 
 * @package 
 * @version $id$
 * @copyright 1997-2005 The PHP Group
 * @author wenming.pan <panwm5712@gmail.com> 
 * @license PHP Version 3.0 {@link http://www.php.net/license/3_0.txt}
 */
class Operate
{
	public $num1;
	public $num2;

	public function get_result()
	{
		$result = 0;
		return $result;
	}
}

/* 用继承--各自单独处理 减低耦合 */
class OperateAdd extends Operate
{
	public function get_result()
	{
		return $this->num1 + $this->num2;
	}
}

class OperateMinus extends Operate
{
	public function get_result()
	{
		return $this->num1 - $this->num2;
	}
}

class OperateMult extends Operate
{
	public function get_result()
	{
		return $this->num1 * $this->num2;
	}
}

class OperateDiv extends Operate
{
	public function get_result()
	{
		if ($this->num2 == 0) {
			exit('error');
		}
		return $this->num1 / $this->num2;
	}
}

/* ...还可以继续扩充... */
