<?php
    include 'inc/header.php';
?>

    <!-- Đây là phần thân của trang đăng nhập, đăng kí -->
    <div class="container" style="padding-top:50px;padding-bottom:50px;">
        <div class="row">
            <div class="col-sm-5">
                <div class="container">
                    <h3>Đăng nhập</h3>
                    <form action="/action_page.php">
                        <div class="form-group">
                            <label>Tài khoản:</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter Username" >
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Password" >
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Nhớ tài khoản
                        </div>
                        <button type="submit" class="btn btn-success">
                            <a href="index.php" style="color:#fff !important;">Đăng nhập</a></button>
                    </form>
                </div>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5">
                <div class="container">
                    <h3>Đăng kí</h3>
                    <form action="/action_page.php">
                        <div class="form-group">
                            <label>Tài khoản:</label>
                            <input type="text" class="form-control" id="username" placeholder="Create Username" >
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu:</label>
                            <input type="password" class="form-control" id="password" placeholder="Create Password" >
                        </div>
                        <div class="form-group">
                            <label>Nhập lại mật khẩu:</label>
                            <input type="password" class="form-control" id="password" placeholder="Repeat Password" >
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại hoặc email đăng kí:</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter your phonenumber or email" >
                        </div>
                        <button type="submit" class="btn btn-success">Đăng kí</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include 'inc/footer.php';
?>