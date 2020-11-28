<?php 
include_once('connect.php');

if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    $delete = $_GET['delete'];
    if ($delete == true) {
        $query = mysqli_query($connect, "DELETE FROM image_blog where id=$id");
        header('location:index.php');
    }
}

?>