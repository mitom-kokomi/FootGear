<?php
	$conn = pg_connect("host=localhost dbname=footgear user=postgres password=thangem9x ");



	if (isset($_POST['xoa'])){

              $number = $_POST['number'];
						 	$query = "UPDATE orders SET status = 'delete' WHERE ordernumber = '$number';";
					 		$result = pg_query($conn, $query);

							echo "<script>alert('Bạn đã xóa đơn hàng thành công');</script>";
					}

?>
