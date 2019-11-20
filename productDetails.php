<?php
   session_start();
    include 'inc/header.php';
?>

   <!-- Đây là thân-->
   <?php
   $conn = pg_connect("host=localhost dbname=footgear user=postgres password=thangem9x ");





    ?>

   <div class="product-detail">
        <div class="container">
           <div class="row">
              <p style="width: 100%;height: 40px;background-color: #d7d7d7;line-height: 40px;color: #121212;text-indent: 1%;">HOME > NIKE > Nike 1
              </p>
           </div>
        </div>
        <div class="container">
           <div class="row">
            <?php
               if (isset($_GET['id'])) {
                  $producid = $_GET['id'];

                  $db_connection = pg_connect("host=localhost dbname=footgear user=postgres password=thangem9x");
                  $sql = "select * from product where productid = '$producid' ;";
                  $query = pg_query($db_connection,$sql);
                  $row = pg_fetch_row($query);
                  //echo $row['productimage'];

            ?>
              <!--phần bên trái hiển thị  hình ảnh sản phẩm-->
              <div class="col-xs-12 col-sm-7" style="padding:0">
                 <!--nơi chứa hình ảnh chính ( slide trượt-->
                 <div class="img-top" style="width: 100%;overflow: hidden">
                    <img src="<?php echo $row[2];?>" alt="..." class="img-responsive img-top-change"
                       style="display: block;">
                 </div>
                 <!--kết thúc  phần trượt sản phẩm-->

                 <!--các sản phẩm cùng loại-->
                 <div class="other-product" style="margin-top: 50px;padding-bottom: 20px;">
                    <p class="title" style="font-size: 22px;font-weight: bold;">
                       OTHER COLORS
                    </p>
                    <div class="list-other-product" style="clear: both">
                       <div class="other other1"
                          style="width: 180px;height: 180px;float: left;margin-right: 70px;cursor: pointer">
                          <img src="img/sanpham8.jpg" style="display: inline-block;width: 180px;height: 180px;">
                       </div>
                    </div>
                    <div class="list-other-product" >
                       <div class="other other2" style="width: 180px;height: 180px;float: left;;cursor: pointer">
                          <img src="img/sanpham9.jpg" style="display: inline-block;width: 180px;height: 180px;">
                       </div>
                    </div>
                 </div>
              </div>
              <!--kết thúc phần hiển  thị hình ảnh-->
              <!--phần bên phải hiển thi thông tin sản phẩm-->
              <div class="col-xs-12 col-sm-5" >
                 <!-- phần chứa logo của sản ;phẩm -->

                 <div class="info-product">
                    <p class="name-product" style="font-size: 25px; font-weight: 700"><?php echo "Tên sản phẩm : ".$row[1];?></p>
                    <p class="price" style="font-size: 28px; color: red;"><?php echo "Giá : $".$row[4];?></p>

                    <p>
                        <?php echo "Mô tả : ".$row[5];?>
                    </p>
                    <p>
                        <?php echo "ProductCode : ".$row[0];?>
                    </p>

                    <!-- khu vực lựa chọn kích thước sản phẩm -->
                    <div class="choose-size-product" style="margin-top: 10px">
                       <p style="font-weight: bold;"><?php echo "Size : ".$row[6];?></p>

                       </div>
                       <div class="add-to-cart" style="margin-top:30px;">
                          <button class="btn btn-success btn-lg btn-block btn-click-add-to-cart disabled">
                                <a href="bridge.php?id=<?php echo $row[0];?>" style="color: black!important;">ADD TO CART</a>
                          </button>
                       </div>
                    </div>
                 </div>
              </div>
              <?php } ?>
              <!--kết thúc phần phía bên phải-->
           </div>
        </div>
     </div>

    <script>
        // xử lý sự kiện trang xem chi tiết sản phẩm thông tin sản phẩm
$(document).ready(function () {

// khi di  chuyển chuột vào các ô của  hinh ảnh chi tiết
$('.box-detail').mouseenter(function () {
    $(this).css('transform','scale(1.3)');
    var src = $(this).find('img').attr('src');
    // thay thể
    $(this).parent().parent().find('.img-top-change').attr('src',src);
});
$('.box-detail').mouseleave(function () {
    $(this).css('transform','scale(1)');
});
$('.box-detail').click(function () {
    $(this).css('border','1px solid');
    var src = $(this).find('img').attr('src');
    // thay thể
    $(this).parent().parent().find('.img-top-change').attr('src',src);
});
$('.box-size-pro').click(function () {
    $(this).css('background-color','gray');
    var src = $(this).find('img').attr('src');
    $('.btn-click-add-to-cart').css('opacity','1.0')
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
