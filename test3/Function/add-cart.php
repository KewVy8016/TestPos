<?php
session_start();
include('../con_db.php');
	if(empty($_SESSION['cart'])){
		header('Location: ../USER/cart.php');
	}
	$p_id = $_GET['id']; 
	$act = $_GET['act'];

	if($act=='add' && isset($p_id))
	{
		if(isset($_SESSION['cart'][$p_id]))
		{
			$_SESSION['cart'][$p_id]++;
            header('Location:../index.php?act=home');
		}
		else
		{
			$_SESSION['cart'][$p_id]=1;
            header('Location:../index.php?act=home');
		}
	}

	if($act=='remove' && isset($p_id))  //ยกเลิกสั่งซื้อ
	{
		unset($_SESSION['cart'][$p_id]);
        header('Location:../User/cart.php');
	}


	if($act=='update')
	{
		$amount_array = $_POST['amount'];
		foreach($amount_array as $p_id=>$amount)
		{
			$_SESSION['cart'][$p_id]=$amount;
            header('Location:../User/cart.php');
		}
	}
