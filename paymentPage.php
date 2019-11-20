<?php
   session_start();
   include 'inc/header.php';
?>
    <div class="table-product" style="padding-bottom:35px;padding-top:35px;">
            <div class="container">
                <h4>YOUR BAG</h4>

               <div class="row">
                 <?php

                   $conn = pg_connect("host=localhost dbname=footgear user=postgres password=thangem9x ");

                   $select = "SELECT * FROM orders INNER JOIN product ON orders.productid = product.productid WHERE customernumber = 1;  ";

                   $result = pg_query($select);

                   while ($row = pg_fetch_array($result)) {

                  ?>
                  <div class="table-responsive">
                     <table class="table table-hover table-bordered">
                        <thead>
                           <tr>
                              <th width="10%">ID</th>
                              <th width="25%">IMAGE</th>
                              <th width="20%">NAME</th>
                              <th width="15%">MÔ TẢ</th>
                              <th width="10%">SIZE</th>
                              <th width="10%">AMOUNT</th>
                              <th width="20%">SUM</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td><?php echo $row['ordernumber'] ?></td>
                              <td>
                                 <img src="<?php echo $row['productimage'] ?>" style="display: block;width:200px;height: 200px ">
                              </td>
                              <td>
                                 <h4>
                                    <?php echo $row['productname'] ?><br/>
                                 </h4>
                                 <p>mã sản phẩm :<?php echo $row['productid'] ?></p>
                              </td>
                              <td><?php echo $row['description'] ?></td>
                              <td><?php echo $row['size'] ?></td>
                              <td>
                                <input class="input-form" id="so-luong" type="number" name="amount-input" value="<?php echo $row['amount'] ?>">

                              </td>
                              <?php $sum =   $row['amount'] * $row['price']?>
                              <td class="sum-money"><?php echo $sum ?></td>
                              <script>
                                  $(document).ready(function () {
                                      var price = <?php echo $row['price'] ?>;
                                      $("#so-luong").change(function () {
                                      var so_luong = $(this).val();
                                      var sum= parseInt(so_luong)* price;
                                      $('.sum-money').text(sum);
                                      });
                                      $('.btn-buy-it').click(function(){
                                          alert("Bạn đã mua sản phẩm thành công");
                                      });
                                  });
                              </script>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                <?php } ?>
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

<?php
    include 'inc/footer.php';
?>
