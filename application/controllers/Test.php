<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('Bigtalk');
	}

	public function index() {
		$this->load->view('common/header');
		$this->load->view('test');
		$this->load->view('common/footer');
	}

	public function testbigtalk() {
		$action = '';
		$number1 = '';
		$number2 = '';

		$operater = new Choseoperater();
		$operat = $operater->getoperater($action);

		if ($operater) {
			if ($action  && $number1  && $number2 ) {
				echo $operater->getresult($number1, $number2);
			} else {
				echo '请你算算！！';
			}
		} else {
			echo '晓得囊个算哦！';
		}
	}
}
