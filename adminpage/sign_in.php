<?php
 class sign_in {
	private $u,$p;
	function __construct($u,$p){
		$this->u = $u;
		$this->p = $p;
	}
	public function signin_ad() {
		if (empty($this->u) || empty($this->p)){
			$alert = "Vui lòng điền đầy đủ thông tin";
			return $alert;
		}
		else {
			$db_connection = pg_connect("host=localhost dbname=footgear user=postgres password=thangem9x");
			$sql = "select * from ad where aduser = '$this->u' and adpass = '$this->p' ";
			$query = pg_query($db_connection,$sql);
			$rows = pg_num_rows($query);
			if ($rows == 0) {
				$alert = "Sai tên hoặc mật khẩu";
				return $alert;
			}
			else {
				$_SESSION['aduser'] = $this->u;
				header('Location:edit.php');
			}
		}
	}
}
?>
