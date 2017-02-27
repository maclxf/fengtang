<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// 运算的父类提供基本的四种运算方法 + - * /
class Operation {
	protected $first;
	protected $sec;

	public function __construct($first, $sec) {
		$this->first = $first;
		$this->sec = $sec;
	}

	abstract public function getresult();
}

class Operationadd extends Operation {

	public function getresult() {
		$ret = parent::first + parent::sec;

		return $ret;
	}

}


class Operationsub extends Operation {
	public function getresult() {
		$ret = parent::first  - parent::sec;

		return $ret;
	}

}

class Operationmultip extends Operation {
	public function getresult() {
		$ret = parent::first  * parent::sec;

		return $ret;
	}
}

class Operationdiv extends Operation {

	public function getresult() {
		if (parent::sec != 0) {
			$ret = parent::first  / parent::sec;

			return $ret;
		} else {
			return '被除数不能为0！';
		}
	}
}


class Choseoperater {
	public function getoperater($operat) {
		$operat = NULL;
		switch ($operat) {
			case '+':
				$operater = new Operationadd();
				break;
			case '-':
				$operater = new Operationsub();
				break;
			case '*':
				$operater = new Operationmultip();
				break;
			case '/':
				$operater = new Operationdiv();
				break;
			default:
				$operater = NULL;
				break;
		}
		return $operater;
	}
}

