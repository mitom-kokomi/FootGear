<?php
    session_start();
    include 'inc/header.php';
?>
<?php
    if (isset($_POST['ok'])) echo "<script>alert('Đơn hàng của bạn sẽ được giao trong thời gian ngắn nhất')</script>";
?>
<div class="container" style="padding-top:50px;padding-bottom:50px;">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-5">
                <h3 style="text-align:center;">Nhập thông tin người nhận</h3><br>
                <div class="container">
                    <form action="productList.php" method="post">
                        <div class="form-group">
                            <label style="text-align:center;">Tên người nhận hàng</label>
                            <input type="text" class="form-control" name="getname" placeholder="đang chờ ..." >
                        </div>
                        <div class="form-group">
                            <label style="text-align:center;">Số điện thoại người nhận hàng </label>
                            <input type="text" class="form-control" name="getphone" placeholder="đang chờ ..." >
                        </div>
                        <div class="form-group">
                            <label style="text-align:center;">Địa chỉ nhận hàng</label>
                            <input type="text" class="form-control" name="getaddress" placeholder="đang chờ ..." >
                        </div>
                        <div class="form-group">
                            <p style="font-weight: bold;color:red;text-align:center;">Thanh toán trực tiếp khi nhận hàng</p>
                        </div>
                        <button type="submit" class="btn btn-success" name="ok" style="margin-left:40%;">Hoàn tất</button>
                    </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>



    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>


<?php
    include 'inc/footer.php';
?>