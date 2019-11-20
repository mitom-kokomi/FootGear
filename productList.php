<?php
    include 'inc/header.php';
?>

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
                           $sql = "SELECT * FROM product; ";
                           $result = pg_query($sql);

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
<?php
    include 'inc/footer.php';
?>
