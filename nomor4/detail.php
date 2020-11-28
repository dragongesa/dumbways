<?php 
include_once('connect.php');
session_start();
if (!isset($_SESSION['userId'])) {
    header('location:login.php');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($connect, "SELECT * FROM image_blog INNER JOIN user ON image_blog.user_id=user.id where image_blog.id=$id");
    
    while ($arr = mysqli_fetch_assoc($query)){
        $title = $arr['title'];
        $content = $arr['content'];
        $fileImage = $arr['file_image'];
        $name = $arr['name'];
        $id = $arr['user_id'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="style.css">
    <style>
    .dflex {
    display: flex;
}
.maincontent {
    max-width: 70%;
    overflow: hidden;
}
.maincontent img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.sidebar {
    width: 30%;
    padding: 10px;
}
.button{
    margin-bottom:20px;
}
</style>
</head>
<body>
<?php 
if (isset($_GET['id'])) {
    

?>
<div class="container">
<div class="dflex">
<div class="maincontent">
<img src="<?= $fileImage; ?>" alt="" srcset="">
</div>
<div class="sidebar">
<h1 class="title">
<?= $title; ?>
</h1>
<p>
<?= $content; ?></p>
<?php 
if($id==$_SESSION['userId']){


?>
<form action="delete.php" method="get">
<input type="hidden" name="id"/ value=<?= $id; ?>>
<button  class="button" name="delete" type="submit" value="true"/>
</form>
Hapus data
</button>
<a  class="button" href="update.php?id=<?= $id; ?>">Update data</a>
<?php } ?>
</div>
</div>
</div>
</body>
<?php } ?>
</html>