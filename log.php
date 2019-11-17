<?php
    include 'inc/header.php';
    include 'classes/log/sign_in.php';
    include 'classes/log/sign_up.php';
?>
<?php
    //if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['sign_in'])) {
        $username = $_POST['username'];
        $userpass = $_POST['userpass'];

        $s = new sign_in($username,$userpass);
        $signin_check = $s->signin_user();
    }
    else {
        if (isset($_POST['sign_up'])) {
            $customername = $_POST['customername'];
            $username = $_POST['username'];
            $userpass = $_POST['userpass'];
            $phonenumber = $_POST['phonenumber'];
    
            $s1 = new sign_up($customername,$username,$userpass,$phonenumber);
            $signup_check = $s1->signup_user();
        }
    }
?>



    <!-- Đây là phần thân của trang đăng nhập, đăng kí -->
    <div class="container" style="padding-top:50px;padding-bottom:50px;">
        <div class="row">
            <div class="col-sm-5">
                <div class="container">
                    <h3>Đăng nhập</h3>
                    <form action="log.php" method="post">
                        <div class="form-group">
                            <label>Tài khoản:</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter Username" >
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu:</label>
                            <input type="password" class="form-control" name="userpass" placeholder="Enter Password" >
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Nhớ tài khoản
                        </div>
                        <button type="submit" class="btn btn-success" name="sign_in">
                            <a style="color:#fff !important;">Đăng nhập</a></button>
                        <span style="color:red;padding-left:45px;">
                            <?php
                                if (isset($signin_check)) echo $signin_check;
                            ?>
                        </span>

                    </form>
                </div>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5">
                <div class="container">
                    <h3>Đăng kí</h3>
                    <form action="log.php" method="post">
                        <div class="form-group">
                            <label>Tên người dùng</label>
                            <input type="text" class="form-control" name="customername" placeholder="Create Username" >
                        </div>
                        <div class="form-group">
                            <label>Tài khoản:</label>
                            <input type="text" class="form-control"name="username" placeholder="Create Username" >
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu:</label>
                            <input type="password" class="form-control" name="userpass" placeholder="Create Password" >
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại đăng kí: </label>
                            <input type="text" class="form-control" name="phonenumber" placeholder="Enter your phonenumber " >
                        </div>
                        <button type="submit" class="btn btn-success" name="sign_up">Đăng kí</button>
                        <span style="color:red;">
                            <?php
                                if (isset($signup_check)) echo $signup_check;
                            ?>
                        </span>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php
    include 'inc/footer.php';
?>