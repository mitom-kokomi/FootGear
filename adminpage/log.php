<?php
    include 'sign_in.php';
    if (isset($_POST['btn_sign'])) {
        $adname = $_POST['adname'];
        $adpass = $_POST['adpass'];

        $s = new sign_in($adname,$adpass);
        $signin_check = $s->signin_ad();
    }
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
    <title>Admin</title>
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
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="input-group col-md-12">
                                <h1 style="color:red;">ADMIN PAGE</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <button  class="btn btn-success" style="border:1px solid;float:right;">
                            <a href="log.php" style="color: cornsilk !important;">Tài khoản</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Thân-->
    <div class="container" style="padding-top:50px;padding-bottom:50px;">
        <div class="row">
            <div class = "col-sm-4" ></div>
            <div class="col-sm-5">
                <div class="container">
                    <h3>Đăng nhập dành cho Admin</h3>
                    <form action="log.php" method="post">
                        <div class="form-group">
                            <label>Tài khoản:</label>
                            <input type="text" class="form-control" name="adname" placeholder="Enter  your name" >
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu:</label>
                            <input type="password" class="form-control" name="adpass" placeholder="Enter Password" >
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Nhớ tài khoản
                        </div>
                        <button type="submit" class="btn btn-success" name="btn_sign">
                            <a style="color:#fff !important;">Đăng nhập</a></button>
                        <span style="color:red;padding-left:45px;">
                            <?php
                                if (isset($signin_check)) echo $signin_check;
                            ?>
                        </span>

                    </form>
                </div>
            </div>  
            <div class = "col-sm-3" ></div>
        </div>
        <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>



    <!--chân-->
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