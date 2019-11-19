<?php
	$conn = pg_connect("host=localhost dbname=postgres user=postgres password=postgre ");



	if (isset($_POST['delete'])){

              $id = $_POST['productid'];
						 	$query = "DELETE FROM product WHERE productid = '$id';";
					 		$result = pg_query($conn, $query);
							echo "string";
					}
          if (isset($_POST['saveedit'])){
            $productname = $_POST['edit-productname'];
            $productline = $_POST['edit-productline'];
            $productimage = $_POST['edit-productimage'];
            $price = $_POST['edit-price'];
            $size = $_POST['edit-size'];
            $description = $_POST['edit-description'];
                      $id = $_POST['productid'];
        						 	$query = "UPDATE product SET
                      productname = '$productname',
                      productline = '$productline',
                      productid = '$id',
                      productimage = '$productimage',
                      price = '$price',
                      size = '$size',
                      description = '$description'
                      WHERE productid = '$id' ";
        					 		$result = pg_query($conn, $query);
        							echo "string 2";
        					}



?>
