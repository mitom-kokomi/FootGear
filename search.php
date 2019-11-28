<?php
    session_start();
?>
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
    <title>FootGear</title>
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
                            <form class="input-group col-md-12" action="search.php" method ="post">
                                <input class="form-control py-2" type="text" placeholder="Tìm kiếm theo tên sản phẩm" name ="searchtext" 
                                value="<?php echo (isset($_GET['searchtext'])?$_GET['searchtext'] : "");?>">
                                <span class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit" name="btn_search">
                                        <i class="fa fa-search">
                                        </i>
                                    </button>
                                </span>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1">
                        <button  class="btn btn-light" style="border:1px solid;float:right;">
                            <a href="paymentPage.php" ><i class="fas fa-shopping-cart"></i></a></button>
                    </div>
                    <div class="col-sm-1">
                        <button  class="btn btn-light" style="border:1px solid;float:right;">
                            <a href="log.php" ><i class="fas fa-user-circle"></i></a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="list-brand">
        <div class="container">
           <div class="row">
              <div class="col-md-2 col-xs-2 nike"> <a href="productList.php"><img src="img/br1.png" alt="br1"/></a></div>
              <div class="col-md-2 col-xs-2 jordan"> <a href="#"><img src="img/br2.png" alt="br2"/></a></div>
              <div class="col-md-2 col-xs-2 palladium"> <a href="#"><img src="img/br3.png" alt="br3"/></a></div>
              <div class="col-md-2 col-xs-2 adidas"> <a href="#"><img src="img/br4.png" alt="br4"/></a></div>
              <div class="col-md-2 col-xs-2 converse"> <a href="#"><img src="img/br5.png" alt="br5"/></a></div>
              <div class="col-md-2 col-xs-2 van"> <a href="#"><img src="img/br6.png" alt="br6"/></a></div>
           </div>
        </div>
     </div>



   <!-- Đây là thân-->
   <div class="body-list-product" style="clear: both">
        <div class="container">
           <div class="row">
              <div class="col-xs-12 col-sm-3" style="border:1px solid lightgray;padding: 0;clear: both">
                 <div class="header-filter" style="color: white;background-color: #121212;height: 40px;line-height: 40px;cursor: pointer;font-weight: bold;text-indent: 5%;">
                    FILTER PRODUCTS
                 </div>
                 <!--loc san pham theo ten nha san xuat-->
                 <div class="filter-producer" style="cursor: pointer">
                        <div class="header-producer" style="border-bottom: 1px solid">
                           <p style="font-weight: bold;">PRODUCER</p>
                           <p><span class="glyphicon glyphicon-chevron-down hide-show-producer" style="font-size: 20px" data-check="show"></span></p>
                        </div>
                        <div class="body-producer">
                           <ul class="list-group" style="margin-top: 10px">
                              <li class="list-group-item" style="padding: 0px;">
                                 <div class="checkbox">
                                    <label style="font-size: 1.2em">
                                    <input type="checkbox" value="" unchecked>
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span> NIKE
                                    </label>
                                 </div>
                              </li>
                              <li class="list-group-item" style="padding: 0px;">
                                 <div class="checkbox">
                                    <label style="font-size: 1.2em">
                                    <input type="checkbox" value="" unchecked>
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span> VANS
                                    </label>
                                 </div>
                              </li>
                              <li class="list-group-item" style="padding: 0px;">
                                 <div class="checkbox">
                                    <label style="font-size: 1.2em">
                                    <input type="checkbox" value="" unchecked>
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span> KAPPA
                                    </label>
                                 </div>
                              </li>
                              <li class="list-group-item" style="padding: 0px;">
                                 <div class="checkbox">
                                    <label style="font-size: 1.2em">
                                    <input type="checkbox" value="" unchecked>
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span> ADIDAS
                                    </label>
                                 </div>
                              </li>
                              <li class="list-group-item" style="padding: 0px;">
                                 <div class="checkbox">
                                    <label style="font-size: 1.2em">
                                    <input type="checkbox" value="" unchecked>
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span> CONVERSE
                                    </label>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                 <!--kết thúc lọc theo nhà sản xuất-->
                 <!--lọc theo SIZE-->
                 <div class="filter-size" style="cursor: pointer">
                    <div class="header-size" style="border-top: 1px solid;border-bottom: 1px solid">
                       <p style="font-weight: bold"> SIZE</p>
                       <p><span class="glyphicon glyphicon-chevron-down hide-show-size" style="font-size: 20px" data-check="show"></span></p>
                    </div>
                    <div class="body-size">
                       <ul class="list-group" style="margin-top: 10px">
                          <li class="list-group-item" style="padding: 0px;">
                             <div class="checkbox">
                                <label style="font-size: 1.2em">
                                <input type="checkbox" value="" unchecked>
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span> XS
                                </label>
                             </div>
                          </li>
                          <li class="list-group-item" style="padding: 0px;">
                             <div class="checkbox">
                                <label style="font-size: 1.2em">
                                <input type="checkbox" value="" unchecked>
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span> S
                                </label>
                             </div>
                          </li>
                          <li class="list-group-item" style="padding: 0px;">
                             <div class="checkbox">
                                <label style="font-size: 1.2em">
                                <input type="checkbox" value="" unchecked>
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span> M
                                </label>
                             </div>
                          </li>
                          <li class="list-group-item" style="padding: 0px;">
                             <div class="checkbox">
                                <label style="font-size: 1.2em">
                                <input type="checkbox" value="" unchecked>
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span> L
                                </label>
                             </div>
                          </li>
                          <li class="list-group-item" style="padding: 0px;">
                             <div class="checkbox">
                                <label style="font-size: 1.2em">
                                <input type="checkbox" value="" unchecked>
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span> XL
                                </label>
                             </div>
                          </li>
                          <li class="list-group-item" style="padding: 0px;">
                             <div class="checkbox">
                                <label style="font-size: 1.2em">
                                <input type="checkbox" value="" unchecked>
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span> XXL
                                </label>
                             </div>
                          </li>
                       </ul>
                    </div>
                 </div>
                 <!--kết thúc lọc theo SIZE-->
                 <div class="filter-color" style="cursor: pointer">
                    <div class="header-color" style="border-top: 1px solid;border-bottom: 1px solid">
                       <p style="font-weight: bold"> COLOR</p>
                       <p><span class="glyphicon glyphicon-chevron-down hide-show-color" style="font-size: 20px" data-check="show"></span></p>
                    </div>
                    <div class="body-color">
                       <ul class="list-group" style="margin-top: 10px">
                          <li class="list-group-item" style="padding: 0px;">
                             <div class="checkbox">
                                <label style="font-size: 1.2em">
                                <input type="checkbox" value="" unchecked>
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span> Black
                                </label>
                             </div>
                          </li>
                          <li class="list-group-item" style="padding: 0px;">
                             <div class="checkbox">
                                <label style="font-size: 1.2em">
                                <input type="checkbox" value="" unchecked>
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span> Blue
                                </label>
                             </div>
                          </li>
                          <li class="list-group-item" style="padding: 0px;">
                             <div class="checkbox">
                                <label style="font-size: 1.2em">
                                <input type="checkbox" value="" unchecked>
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span> Brown
                                </label>
                             </div>
                          </li>
                          <li class="list-group-item" style="padding: 0px;">
                             <div class="checkbox">
                                <label style="font-size: 1.2em">
                                <input type="checkbox" value="" unchecked>
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span> Mutil
                                </label>
                             </div>
                          </li>
                          <li class="list-group-item" style="padding: 0px;">
                             <div class="checkbox">
                                <label style="font-size: 1.2em">
                                <input type="checkbox" value="" unchecked>
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span> Yellow
                                </label>
                             </div>
                          </li>
                          <li class="list-group-item" style="padding: 0px;">
                             <div class="checkbox">
                                <label style="font-size: 1.2em">
                                <input type="checkbox" value="" unchecked>
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span> White
                                </label>
                             </div>
                          </li>
                       </ul>
                    </div>
                 </div>
                 <!--lọc theo màu sắc-->
              </div>
              <!--phần chính - danh sách các sản phẩm -->


              <div class="list-product col-md-9 col-xs-9">
                    <div class="col-xs-12" style="padding:0">
                            <p style="background-color: #121212;width: 100%;height: 40px;line-height: 40px;font-weight: bold;padding-left: 10px; color: white;margin-bottom: 15px;">ALL</p>
                    </div>
                    <div class="row">
                        <?php
                           $db_connection = pg_connect("host=localhost dbname=footgear user=postgres password=thangem9x");
                           //$sql = "SELECT * FROM product; ";
                           //$result = pg_query($sql);

                           $perpage = !empty($_GET['perpage'])?$_GET['perpage']:6;
                           $currentpage =!empty($_GET['page'])?$_GET['page']:1;
                           $offset = ($currentpage - 1) * $perpage;

                           if ( isset($_POST['btn_search'])  ) {
                                $search = $_POST['searchtext'] ;
                                $select = "SELECT * FROM product  where productname like '%$search%' ORDER BY productid ASC LIMIT '$perpage' OFFSET '$offset' ; ";
                                $result = pg_query($select);
                                $totalitem = pg_query($db_connection,"SELECT * FROM product  where productname like '%$search%' ;");
                                $totalitem = pg_num_rows($totalitem);
                                $totalpage = ceil($totalitem / $perpage);

                                while ($row = pg_fetch_array($result)) { 
                                    
                        ?> 

                            <div class="col-xs-12 col-sm-4 product" style="padding:0;height: 385px" id="pro1">
                                    <div class="sanpham" id="sanpham1">
                                        <!--phần đầu chứa hình ảnh của sản phẩm-->
                                        <div class="header-image-product" style="height: 200px">
                                            <div class="right" style="width: 80%;;float:left">
                                                <img src=" <?php echo $row['productimage']?> " class="img-responsive img-change">
                                            </div>
                                        </div>
                                           <!--kết thúc phần đầu của sản phẩm-->
                                           <!--phần thông tin của sản phẩm-->
                                        <br>
                                        <br>
                                        <div class="info-product" align="center">
                                        <br><p style="font-weight: bold"><?php echo $row['productname'] ?></p>
                                            <p class="price-product" style="font-weight: bold"> <?php echo $row['price']?> </p>
                                              
                                        <!--các nút yêu cầu mua hàng và View Product sản phẩm-->
                                             <p class="footer-product">
                                                <a href="productDetails.php?view=detail&id=<?php echo $row['productid']?>" class="btn btn-success" >View Prodcut</a>
                                             </p>
                                        </div>
                                           <!--kết thúc phần thông tin của sản phầm-->
                                    </div>
                            </div>
                        <?php } }?>  
                    </div> 
                    <ul class="pagination" style="float:right;padding-top:30px;">
                        <?php include 'adminpage/pagination.php'; ?>
                     </ul>
              </div>
           </div>
        </div>




        <!--kết thúc phần danh sách các sản phầm-->
     </div>
     </div>
     </div>
     </div>
     <!--kết thúc phần chi tiết  danh sách các sản phẩm -->

    <!-- Đây là phần footer -->


   <script>
      // xư lý sự kiện của danh sách chi tiết sản phầm
      $(document).ready(function () {
      //  xử lý sự kiện khi người dùng click vao sản phẩm
      $(document).on('click','.product',function () {
         window.location="productDetails.php";
      });
      $(document).on('click','.btn-click-xem-chi-tiet',function () {
        window.location="productDetails.php";
      });
      $(document).on('click','.btn-click-muahang',function () {
         window.location="cartPage.php";
      });

    
      // ban đâu sẽ ẩn  hết các thành phần( phần ảnh review và  các nút bấm)
      $(".product .header-image-product .left").hide();
      $('.product .info-product .footer-product').hide();

      $('.product').mouseenter(function () {
         $(this).css('border','1px solid gray').css('border-radius','5px');
         $(this).find('.header-image-product .left').show();
         $(this).find('.info-product .footer-product').show();

      // xử lý sự kiện di chuyển vào các ô nhỏ

        $(this).find('.box').mouseenter(function () {
            $(this).css('border','1px solid');
            var src= $(this).find('img').attr('src');

            $(this).parent().parent().find('.img-change').attr('src',src);
        });
        $(this).find('.box').mouseleave(function () {
            $(this).css('border','none');
        });
    });
    $('.product').mouseleave(function () {
        var id = $(this).attr('id');
        $(this).css('border','none');
        $(this).find('.header-image-product .left').hide();
        $(this).find('.info-product .footer-product').hide();
    });



});
    </script>
       <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
<?php
    include 'inc/footer.php';
?>
