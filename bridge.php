<?php 
       session_start();
       $username = $_SESSION['username'];


    $db_connection = pg_connect("host=localhost dbname=footgear user=postgres password=thangem9x");
    $sql1 = "select customernumber from customer where username = '$username' ;";
    $cn = pg_query($db_connection,$sql1);
    $dong = pg_fetch_row($cn);
    $producid = $_GET['id'];    
    $sql = "INSERT INTO orders(customernumber,productid,orderdate,amount,status,customeraddress) values ('$dong[0]','$producid','17-09-2020',1,'incart','Ha Noi');";
    $query = pg_query($db_connection,$sql);

    header('Location:paymentPage.php') ;

?>