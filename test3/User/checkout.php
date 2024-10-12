<?php
session_start();
$total = $_SESSION['total'];
$date = Date("Y-m-d G:i:s");
$order_qty = array_sum($_SESSION['cart']);
$act = $_GET['act'];


if($act == 'confirm'){
    $ins = "INSERT INTO orders(orders_id, orders_name, orders_qty, orders_cost, orders_date) VALUES (NUll,'[value-2]','[value-3]','[value-4]','[value-5]')";
}