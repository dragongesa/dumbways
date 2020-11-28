<?php 
include_once('connect.php');
session_start();

if (!isset($_SESSION['status'])) {
    $_SESSION['status'] = "";

}
$query = mysqli_query($connect, "SELECT image_blog.id,title,content,file_image,user_id,name,email FROM image_blog
INNER JOIN user ON image_blog.user_id=user.id");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="header">

    <h1>JawabNo4</h1>
    <div class="menu">
    <?php 
    if($_SESSION['status'] !="login"){
        ?>
        <a class="button" href="login.php">Login</a>
    <?php 
    }else{
    ?>
        <a class="button" href="tambahpost.php">Add Image Blog</a>
        <a class="button" href="tambahuser.php">Add User</a>
        <a class="button" href="logout.php">Logout</a>
    <?php } ?>
    </div>
    </div>
   <div class="main">

   <?php 
   while ($arr = mysqli_fetch_assoc($query)) {
    $idPost = $arr['id'];
    $title = $arr['title'];
    $name = $arr['name'];
    $content = $arr['content'];
    $fileImage = $arr['file_image'];
    $userId = $arr['user_id'];
   
   
   ?>
<div class="content">
<img src="<?= $fileImage; ?>" alt="" class="imagerbanget"/>
<div class="innercontent">

    <h2><?= $title; ?></h2>
    <span><?= $name; ?></span>
    <a href="detail.php?id=<?= $idPost; ?>">View Detail</a>

</div>


</div>
<?php }; ?>
   </div>
   
    </div>
</body>
</html>