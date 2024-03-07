<?php


include "connection.php";

$currentpassword = $_POST["c"];
$newpassword = $_POST["n"];
$id = $_POST["i"];

if(empty($currentpassword)){
    echo("Please Enter Current Password.");
}else if(empty($newpassword)){
    echo("Please Enter New Password");
}else{

    $rs  = Database::search("SELECT * FROM shop.supplier WHERE `password` = '".$currentpassword."' AND `sup_id` = '".$id."'");

    $num = $rs->num_rows;

    if($num == 1){

    
    Database::iud("UPDATE shop.supplier SET `password` = '".$newpassword."' WHERE `sup_id` = '".$id."'");

    echo("success");

}else{

    echo("Your Current Password Invalid.");
}
}



?>