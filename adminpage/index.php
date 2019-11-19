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
            <div class="col-sm-6">
                    <a href="index.php">
                            <img src="img/Logo.png" style="width:150px;height:86px;margin-top:3%;" alt="Logo">
                        </a>
            </div>
            <div class="col-sm-6" style="margin-top:4%;">
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
              <button class="btn" type="button" name="button" style="width:100%;margin-top:10px">Quản lý đơn hàng</button>
            </div>
            <div class="quanlysanpham">
              <div class="dropdown" >
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" style="width:100%;margin-top:10px;">Thêm sản phẩm mới<span class="caret"></span></button>
                  <ul class="dropdown-menu" style="width:100%;">
                    <li><a href="#">Thêm</a></li>
                    <li><a href="edit.php">Sửa</a></li>
                    <li><a href="#">Xóa</a></li>
                  </ul>
                </div>
            </div>

          </div>
          <div class="col-md-9 col-xs-9">
            <div class="col-xs-12">
                <p style="background-color: #121212;width: 100%;height: 30px;line-height: 30px;font-weight: bold;padding-left: 10px; color: white;margin-bottom: 15px;">Thêm sản phẩm mới</p>
            </div>
            <div class="add">
              <form class="formadd form-group" action="index.php" method="post">
                    <?php include 'connect.php'; ?>
                    <label class="" for="">Tên sản phẩm :</label>
                    <input type="text" class="form-control " name="new-productName" value="" placeholder="Nhập tên sản phẩm"><br>
                    <label class="" for="">Loại sản phẩm :</label>
                    <input type="text" class="form-control " name="new-productLine" value="" placeholder="Nhập tên sản phẩm"><br>
                    <label class="" for="">Hình ảnh sản phẩm :</label>
                    <input type="file" class="form-control " name="new-productImage" value="" placeholder="Hình ảnh"><br>
                    <label for="">Giá sản phẩm ($) :</label><input class="form-control" type="number" name="new-price" value="" placeholder="Nhập giá sản phẩm"><br>
                    <label for="">Kích thước :</label><input class="form-control" type="text" name="new-size" value="" placeholder="Nhập kích thước sản phẩm"><br>
                    <label for="">Mô tả sản phẩm :</label>
                    <textarea name="new-description" class="form-control" rows="8" cols="80" placeholder="Nhập mô tả"></textarea><br>
                    <button class="btn btn-success" type="submit" name="add">Lưu</button>





              </form>
            </div>
            <div class="col-xs-12">
                <p style="background-color: #121212;width: 100%;height: 30px;line-height: 30px;font-weight: bold;padding-left: 10px; color: white;margin-bottom: 15px;">Danh sách sản phẩm</p>
            </div>
            <div class="row">
              <?php

                $conn = pg_connect("host=localhost dbname=postgres user=postgres password=postgre ");
                $select = "SELECT * FROM product;";
                $result = pg_query($conn,$select);
                while ($row = pg_fetch_array($result)) {

               ?>

              <div class="col-xs-12 col-sm-4 product" style="padding:0;height: 385px" id="pro1">
                      <div class="sanpham" id="sanpham1">
                          <!--phần đầu chứa hình ảnh của sản phẩm-->
                          <div class="header-image-product" style="height: 200px">
                              <div class="right" style="width: 80%;;float:left">
                                  <img src="<?php echo $row["productimage"] ?>" class="img-responsive img-change">
                              </div>
                          </div>
                             <!--kết thúc phần đầu của sản phẩm-->
                             <!--phần thông tin của sản phẩm-->
                          <br>
                          <br>
                          <div class="info-product" align="center">
                          <br><p style="font-weight: bold"><?php echo $row["productname"] ?></p>
                              <p class="price-product" style="font-weight: bold"><?php echo $row["price"]?> $</p>

                          <!--các nút yêu cầu mua hàng và View Product sản phẩm-->
                              <p class="footer-product">
                                  <button type="button" class="btn btn-success btn-click-muahang">Shop Now</button>
                                  <button type="button" class="btn btn-info btn-click-xem-chi-tiet">View Product
                                  </button>
                              </p>
                          </div>
                             <!--kết thúc phần thông tin của sản phầm-->
                      </div>

              </div>
            <?php } ?>
            </div>

          </div>
        </div>
      </div>
    </div>
    <style media="screen">

    </style>

</body>
