<?php
$server = "localhost";
$user = "myniitpo_intern";
$pass = "?wv&2N0?mhuH";
$db = "myniitpo_portaldb";

$con = mysqli_connect($server, $user, $pass , $db,'3306');

if($con)
{ 
    
    ?>
    <!-- <script>
        alert("Database connected!")
        </script> -->
<?php
}

else{ ?>
    <script>
        alert("Database Connection Error! Kindly Contact Admin.")
        </script>

    <?php
}


?>

