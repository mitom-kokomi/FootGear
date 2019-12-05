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
			//header('location:../Footgear/productList.php');
        }
    }
?>