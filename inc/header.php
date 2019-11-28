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
                            <form class="input-group col-md-12" action="../FootGear/search.php" method ="post">
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