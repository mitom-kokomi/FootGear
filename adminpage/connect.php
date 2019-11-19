<?php
	$conn = pg_connect("host=localhost dbname=postgres user=postgres password=postgre ");

	if (isset($_POST['add'])) {

					$newproductname = $_POST['new-productName'];
					$newproductline = $_POST['new-productLine'];
					$newproductimage = $_POST['new-productImage'];
					$newprice = $_POST['new-price'];
					$newsize = $_POST['new-size'];
					$newdescription = $_POST['new-description'];

					if ($newproductname=="" || $newproductline =="" || $newproductimage =="" || $newprice =="" || $newsize =="" || $newdescription  =="" )
						$echo = "Chưa điền đủ thông tin sản phẩm";
					 else{
						 	$query = "INSERT INTO product(productname,productimage,price,description,productline,size) VALUES ('$newproductname','img/$newproductimage','$newprice','$newdescription','$newproductline','$newsize');";
					 		$result = pg_query($conn, $query);
							echo "<script>alert('bạn đã thêm sản phẩm thành công')</script>";
					}
				}
?>
