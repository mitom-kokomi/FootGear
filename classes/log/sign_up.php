<?php
class sign_up {
	private $t,$u,$p,$pn;
	function __construct($t,$u,$p,$pn) {
		$this->t = $t;
		$this->u = $u;
		$this->p = $p;
		$this->pn = $pn;
	}
	function signup_user(){
		if (empty($this->t) || empty($this->u) || empty($this->p) || empty($this->pn)) {
			$alert = "Vui lòng điền đầy đủ thông tin";
			return $alert;
		}
		else {
			$db_connection = pg_connect("host=localhost dbname=footgear user=postgres password=thangem9x");

			$sql_check_username = "select * from customer where username = '$this->u'";
			$query_check_username = pg_query($db_connection,$sql_check_username);
			$rows = pg_num_rows($query_check_username);

			if ($rows > 0) {
				$alert = "Trùng username rồi , nhập  lại cmmđ";
				return $alert;
			}
			else {
				$sql = "insert into customer(customername,phone,username,userpass) values ('$this->t','$this->pn','$this->u','$this->p')";
				$query = pg_query($db_connection,$sql);

				$alert = "Bạn đã đăng kí tài khoản thành công";
				return $alert;
			}
		}
	}
}
?>