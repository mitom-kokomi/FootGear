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
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-3">
            <div class="header-filter" style="color: white;background-color: #121212;height: 30px;line-height: 30px;cursor: pointer;font-weight: bold;text-indent: 5%;">
               Tác Vụ
            </div>
            <div class="dashboard">
              <button class="btn" type="button" name="button" style="width:100%;">Dashboard</button>
            </div>
            <div class="quanlydonhang">
              <button class="btn" type="button" name="button" style="width:100%;margin-top:10px"><a href="ordermanage.php">Quản lý đơn hàng</a> </button>
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
                <p style="background-color: #121212;width: 100%;height: 30px;line-height: 30px;font-weight: bold;padding-left: 10px; color: white;margin-bottom: 15px;">Danh sách sản phẩm</p>
            </div>

            <div class="row" >
              <?php include 'controlleredit.php'; ?>
              <?php

                $conn = pg_connect("host=localhost dbname=footgear user=postgres password=thangem9x ");
                $perpage = !empty($_GET['perpage'])?$_GET['perpage']:4;
                $currentpage =!empty($_GET['page'])?$_GET['page']:1;
                $offset = ($currentpage - 1) * $perpage;

                $select = "SELECT * FROM product ORDER BY productid ASC LIMIT '$perpage' OFFSET '$offset' ; ";

                $result = pg_query($select);
                $totalitem = pg_query($conn,"SELECT * FROM product; ");
                $totalitem = pg_num_rows($totalitem);
                $totalpage = ceil($totalitem / $perpage);
                while ($row = pg_fetch_array($result)) {

               ?>
               <div class="row" style="border-bottom:1px solid;">
                 <div class="col-md-3 col-xs-3" >

                   <img src="<?php echo $row['productimage'] ?>" class="img-responsive img-change">
                 </div>
                 <div class="col-md-9 col-xs-9">

                   <form class="form-inline" action="edit.php" method="POST">

                     <label for="name" style="width:20%">Tên sản phẩm: </label>
                     <input type="text" class="form-control" id="email" style="width:50%; margin-bottom:5px; margin-top:15px;"name="edit-productname"; value="<?php echo $row['productname'] ?>">
                     <label for="name" style="width:10%">ID :</label><input type="text"  style="width:20%; "name="productid" value="<?php echo $row["productid"] ?>">

                     <label for="name" style="width:20%">Loại sản phẩm: </label>
                     <input type="text" class="form-control" id="" style="width:40%;margin-bottom:5px;" name="edit-productline" value="<?php echo $row['productline'] ?>">
                     <label for="name" style="width:20%">Giá sản phẩm ($): </label>
                     <input type="number" class="form-control" id="" style="width:20%;" name="edit-price"value="<?php echo $row['price'] ?>">
                     <label for="name" style="width:20%">Hình ảnh: </label>
                     <input type="file" class="form-control" id="" style="width:40%;margin-bottom:5px;" name="edit-productimage" value="<?php echo $row['productimage'] ?>">
                     <label for="name" style="width:20%">Kích thước: </label>
                     <input type="text" class="form-control" id="" style="width:20%;" name="edit-size" value="<?php echo $row['size'] ?>">
                     <label for="name" style="width:20%">Mô tả: </label>
                     <input type="text" class="form-control" id="" style="width:80%;margin-bottom:5px;" name="edit-description" value="<?php echo $row['description'] ?>">
                     <button class="btn btn-primary" type="submit" name="saveedit" style="margin-left: 71%;margin-bottom:5px;">Lưu thay đổi</button>
                     <button class="btn btn-secondary" type="submit" name="delete" style="margin-left: 10px;margin-bottom:5px;">Xóa</button>

                   </form>

                 </div>
               </div>

                <?php } ?>
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
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

</body>
