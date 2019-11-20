<?php
   session_start();
   include 'inc/header.php';
?>
    <div class="table-product" style="padding-bottom:35px;padding-top:35px;">
            <div class="container">
                <h4>YOUR BAG</h4>
               <div class="row">
                  <div class="table-responsive">
                     <table class="table table-hover table-bordered">
                        <thead>
                           <tr>
                              <th width="10%">ID</th>
                              <th  width="25%">IMAGE</th>
                              <th width="20%">NAME</th>
                              <th width="15%">COLOR</th>
                              <th width="10%">SIZE</th>
                              <th width="10%">AMOUNT</th>
                              <th width="20%">SUM</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>
                                 <img src="img/sanpham6.jpg" style="display: block;width:200px;height: 200px ">
                              </td>
                              <td>
                                 <h4>
                                    Nike Air Force - Men Shoes<br/>
                                 </h4>
                                 <p>ID: 012234235</p>
                              </td>
                              <td>white</td>
                              <td>39</td>
                              <td>
                                 <select name="" id="so-luong" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                 </select>
                              </td>
                              <td class="sum-money">110</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="row">
                  <div class="left">
                     <div class="col-xs-12 col-sm-3">
                        <button type="button" class="btn btn-success" >
                            <a href="productList.php" style="color:cornsilk !important;">Continue Shopping</a>
                        </button>
                     </div>
                  </div>
                  <div class="right" style="float: right;">
                    <div class="col-xs-12 col-sm-3 col-sm-offset-6">
                     <button type="button" class="btn btn-primary btn-buy-it" style="margin-left:850px ;">
                         <a href="index.php" style="color: cornsilk !important;">Buy It</a>
                     </button>
                  </div>
               </div>
                           </button>
                        </div>
                  </div>
               </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#so-luong").change(function () {
            var so_luong = $(this).val();
            var sum= parseInt(so_luong)*110;
            $('.sum-money').text(sum);
            });
            $('.btn-buy-it').click(function(){
                alert("Bạn đã mua sản phẩm thành công");
            });
        });
    </script>
<?php
    include 'inc/footer.php';
?>