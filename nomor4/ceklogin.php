<?php 
include_once('connect.php');
$email = $_POST['email'];
 
$login = mysqli_query($connect,"SELECT * FROM user where email='$email'");
$cek = mysqli_num_rows($login);
 while ($arr = mysqli_fetch_assoc($login)) {
 $name = $arr['name'];
 $id = $arr['id'];
 }
if($cek > 0){
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $name;
    $_SESSION['userId'] = $id;
    $_SESSION['status'] = "login";
    header("location:/nomor4/index.php");
    echo $_SESSION['name'];
}else{
	header("location:/nomor4/login.php");	
}

?>