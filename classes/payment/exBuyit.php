<?php
    class exBuyit {
        private $u;

	    function __construct(){

        }

        public function buy($u) {
            $this->u = $u;
            $db_connection = pg_connect("host=localhost dbname=footgear user=postgres password=thangem9x");

            $sql1 = "select customernumber from customer where username = '$this->u' ;";
            $result = pg_query($sql1);
            $row = pg_fetch_array($result);
            $cn = $row['customernumber'] ;
            //$cn = pg_query($db_connection,$sql1);

            $sql = "update orders set status = 'delivery' where customernumber = '$cn'; ";
			$query = pg_query($db_connection,$sql);
			header('location:../Footgear/productList.php');
        }

        public function addinfo($phone,$address,$username)
        {
          $db_connection = pg_connect("host=localhost dbname=footgear user=postgres password=thangem9x");
          $sql1 = "select customernumber from customer where username = '$username' ;";
          $result = pg_query($db_connection,$sql1);
          $row = pg_fetch_array($result);
          $cn = $row['customernumber'] ;

          $sql = "update customer set phone = '$phone' where username = '$username';";
          $sqll = "update orders set customeraddress = '$address' where customernumber = '$cn';";
          $kq = pg_query($db_connection,$sql);
          $kq2 = pg_query($db_connection,$sqll);

          header('location: index.php');
        }
    }
?>
