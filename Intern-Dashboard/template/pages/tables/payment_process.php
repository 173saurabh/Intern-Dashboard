<?php
session_start();
include('../../dbcon.php');
if(isset($_POST['amt']) && isset($_POST['name']) ) {
    $amount = $_POST['amt'];
    $name = $_POST['name'];
    $payment_status = "pending";
    $added_on = date('Y-m-d h:i:s');

    mysqli_query($con, "insert into payment(name,amount,payment_status,added_on) values('$name','$amount','$payment_status','$added_on')");

    $_SESSION['Pid'] = mysqli_insert_id($con);
}


if(isset($_POST['payment_id']) && isset($_SESSION['Pid'])) {

    $payment_id = $_POST['payment_id'];
    $payment_status = "complete";
    
    mysqli_query($con, "update payment set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['Pid']."'");

}





?>