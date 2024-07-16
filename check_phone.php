
<?php
$phone = $_POST['phone'];
$con = new mysqli('localhost','root','','exam');
$sql = "select phone from tbl_users where phone='$phone'";
$query = $con->query($sql);
if($query->num_rows==1){
    echo 'Phone already taken<br>';
    echo 'Try another number<br>';
}else{
    echo 'Phone available<br>';
}

echo 'Thank You for Coming here!!'
?>