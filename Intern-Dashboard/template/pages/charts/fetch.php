<?php

//echo $return = "Welcome to AJAX"
$server = "localhost";
$user = "root";
$pass = "";
$db = "signup";

$con = mysqli_connect($server, $user, $pass , $db,);

$query = "SELECT firstname FROM studentreg";

$query_run = mysqli_query($con,$query);
$result_array = [];

if(mysqli_num_rows($query_run) > 0)
{
    foreach($query_run as $row){

        array_push($result_array, $row);
    }

    header('Content-type:application/json');
    echo json_encode($result_array);

}
else{
    echo $return = "<h3>No record found</h3>";
}



?>