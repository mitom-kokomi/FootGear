<?php
 class sign_in {
	private $u,$p;
	function __construct($u,$p){
		$this->u = $u;
		$this->p = $p;
	}
	public function signin_user() {
		if (empty($this->u) || empty($this->p)){
			$alert = "Có nhập cũng thiếu đm ";
			return $alert;
		}
		else {
			$db_connection = pg_connect("host=localhost dbname=footgear user=postgres password=thangem9x");
			$sql = "select * from customer where username = '$this->u' and userpass = '$this->p' ";
			$query = pg_query($db_connection,$sql);
			$rows = pg_num_rows($query);
			if ($rows == 0) {
				$alert = "Có nhập cũng sai đm ";
				return $alert;
			}
			else {
				$sql1 = "select customername from customer where username ='$this->u' ";
				$query1 = pg_query($db_connection,$sql1);
				$_SESSION['customername'] = $query1 ;
				$_SESSION['username'] = $this->u;
				header('Location:../FootGear/index.php');
			}
		}
	}
}
?>
