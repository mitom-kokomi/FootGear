<?php
 class sign_in {
	private $u,$p;
	function __construct($u,$p){
		$this->u = $u;
		$this->p = $p;
	}
	public function signin_user() {
		if (empty($this->u) || empty($this->p)){
			$alert = "Vui lòng điền đầy đủ thông tin";
			return $alert;
		}
		else {
			$db_connection = pg_connect("host=localhost dbname=footgear user=postgres password=thangem9x");
			$sql = "select * from customer where username = '$this->u' and userpass = '$this->p' ";
			$query = pg_query($db_connection,$sql);
			$rows = pg_num_rows($query);
			if ($rows == 0) {
				$alert = "Sai tên hoặc mật khẩu";
				return $alert;
			}
			else {
				$_SESSION['username'] = $this->u;
				header('Location:../FootGear/index.php');
			}
		}
	}
}
?>
