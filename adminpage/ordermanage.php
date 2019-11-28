<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include 'controller_manage.php'; ?>
    <!-- Đây là top -->
    <div class="container" style="padding-bottom:15px;border-bottom:1px solid;">
        <div class="row">
            <div class="col-sm-5">
                    <a href="index.php">
                            <img src="img/Logo.png" style="width:150px;height:86px;margin-top:3%;" alt="Logo">
                        </a>
            </div>
            <div class="col-sm-7" style="margin-top:4%;">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="input-group col-md-12">
                                <h1 style="color:red;">ADMIN PAGE</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <button  class="btn btn-success" style="border:1px solid;float:right;">
                            <a href="log.php" style="color: cornsilk !important;">Tài khoản</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
      <div class="">
        <div class="row">
          <div class="col-xs-12 col-sm-2">
            <div class="header-filter" style="color: white;background-color: #121212;height: 30px;line-height: 30px;cursor: pointer;font-weight: bold;text-indent: 5%;">
               Tác Vụ
            </div>
            <div class="dashboard">
              <button class="btn" type="button" name="button" style="width:100%;">Dashboard</button>
            </div>
            <div class="quanlydonhang">
              <button class="btn" type="button" name="button" style="width:100%;margin-top:10px"><a href="ordermanage.php">Quản lý đơn hàng</a></button>
            </div>
            <div class="quanlysanpham">
              <div class="dropdown" >
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" style="width:100%;margin-top:10px;">Quản lý sản phẩm<span class="caret"></span></button>
                  <ul class="dropdown-menu" style="width:100%;">
                    <li><a href="index.php">Thêm</a></li>
                    <li><a href="edit.php">Chỉnh Sửa</a></li>

                  </ul>
                </div>
            </div>

          </div>
          <div class="col-md-9 col-xs-9">
            <div class="col-xs-12">
                <p style="background-color: #121212;width: 100%;height: 30px;line-height: 30px;font-weight: bold;padding-left: 10px; color: white;margin-bottom: 15px;">Quản lý đơn hàng</p>
            </div>

            <div class="row" >
            
              <?php

                $conn = pg_connect("host=localhost dbname=footgear user=postgres password=thangem9x ");
                $perpage = !empty($_GET['perpage'])?$_GET['perpage']:4;
                $currentpage =!empty($_GET['page'])?$_GET['page']:1;
                $offset = ($currentpage - 1) * $perpage;

                $select = "SELECT * FROM orders INNER JOIN product ON orders.productid = product.productid
                       INNER JOIN customer ON orders.customernumber = customer.customernumber where (orders.status = 'shipped') or (orders.status = 'not delivery') ORDER BY ordernumber ASC LIMIT '$perpage' OFFSET '$offset' ; ";

                $result = pg_query($select);
                $totalitem = pg_query($conn,"SELECT * FROM orders INNER JOIN product ON orders.productid = product.productid
                       INNER JOIN customer ON orders.customernumber = customer.customernumber where (orders.status = 'shipped') or (orders.status = 'not delivery'); ");
                $totalitem = pg_num_rows($totalitem);
                $totalpage = ceil($totalitem / $perpage);
                while ($row = pg_fetch_array($result)) {

               ?>
               <div class="row" style="border-bottom:1px solid;">

                 <div class="col-md-12 col-xs-12">

                   <div class="table-responsive">
                      <table class="table table-hover table-bordered">
                         <thead>
                            <tr>
                               <th style="width:5%;">STT</th>
                               <th style="width:25%;">ẢNH</th>
                               <th style="width:15%;">TÊN</th>
                               <th style="width:15%;">MÔ TẢ</th>
                               <th style="width:5%;">SIZE</th>
                               <th style="width:5%;">SL</th>
                               <th style="width:10%;">TỔNG</th>
                               <th style="width:5%;">T.THÁI</th>
                               <th style="width:15%;">KH</th>
                               <th></th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr>
                              <form class="" action="ordermanage.php" method="post">


                               <td><input style="width:30px;" type="text" name="number" value=" <?php echo $row['ordernumber'] ?>"></td>
                               <td>
                                  <img src="<?php echo $row['productimage'] ?>" style="display: block;width:200px;height: 200px ">
                               </td>
                               <td>
                                  <h4>
                                     <?php echo $row['productname'] ?><br/>
                                  </h4>
                                  <p>mã sản phẩm :<?php echo $row['productid'] ?></p>
                               </td>
                               <td><?php echo $row['description'] ?></td>
                               <td><?php echo $row['size'] ?></td>
                               <td>
                                 <?php echo $row['amount'] ?>

                               </td>
                               <?php $sum =   $row['amount'] * $row['price']?>
                               <td class="sum-money"><?php echo $sum ?> $ </td>

                               <td><?php echo $row['status'] ?></td>
                                <td>địa chỉ : <?php echo $row['customeraddress'] ; echo"<br>";
                                echo "sdt : "; echo $row['phone'];echo "<br>";
                                echo "ngày đặt : "; echo $row['orderdate']?></td>
                                <td>

                                    <button type="submit" name="xoa"> Xóa</button>

                                </td>
                                </form>
                            </tr>
                         </tbody>
                      </table>
                   </div>
                 <?php } ?>
                 </div>
               </div>


                <ul class="pagination" style="margin-left : 40%;">
                  <?php include 'pagination.php'; ?>
                </ul>

            </div>

          </div>
        </div>
      </div>
    </div>
    <style media="screen">

    </style>
     <div class="container" style="margin-top:60px;padding-top:30px;color:black;text-align: center;border-top:2px solid;">
        <div class="row">
            <div class="col-md-3">
                <a style="color: black !important;" href="#">CUSTOMER SERVICE</a>
                <br><a href style="color: black !important;">Get Help</a>
                <br><a href style="color: black !important;">Track Orders</a>
                <br><a href style="color: black !important;">Returns and Refunds</a>
            </div>
            <div class="col-md-3">
                <a href="#" style="color: black !important;">COMPANY INFO</a>
                <br><a href style="color: black !important;">About Us</a>
                <br><a href style="color: black !important;">Careers</a>
                <br><a href style="color: black !important;">Mobile Apps</a>
            </div>
            <div class="col-md-3">
                <a href="#" style="color: black !important;">PRIVACY & TERMS</a>
                <br><a href style="color: black !important;">Privacy & Security</a>
                <br><a href style="color: black !important;">Statement</a>
                <br><a href style="color: black !important;">Terms and Conditions</a>
            </div>
            <div class="col-md-3">
                <a href="#" style="color: black !important;">PAYMENT METHOD</a>
                <div class="row" style="margin-top:5px ;">
                    <div class="col-md-4 col-xs-4">
                        <img src="img/checkout-page1.png" style="border:1px solid;">
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <img src="img/checkout-page2.png" style="border:1px solid;">
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <img src="img/checkout-page3.png" style="border:1px solid;">
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
