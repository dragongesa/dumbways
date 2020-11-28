<?php 
 include_once('connect.php');
 session_start();
 if (isset($_GET['id'])) {
     $id = $_GET['id'];
     $query = mysqli_query($connect, "SELECT * FROM image_blog INNER JOIN user ON image_blog.user_id=user.id where image_blog.id=$id");
     while ($arr = mysqli_fetch_assoc($query)){
        $title = $arr['title'];
        $content = $arr['content'];
        $fileImage = $arr['file_image'];
        $name = $arr['name'];
    }
 
    }
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    
    $title = $_POST['title'];
    $content = $_POST['content'];
    // echo "File is an image - " . $check["mime"] . ".";
    $post = mysqli_query($connect, "UPDATE image_blog SET title='$title',content='$content'");
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TambahPost</title>
    <style>
        input[type=text] , textarea{
    display: block;
    padding:8px;
    background: #DBEAFE;
            border: none;
            border-radius: 8px;
            margin-bottom:20px;
}
textarea{
    width: calc(100% - 20px);
    font-size: 12px;
    resize:none;
}
input[type=text]{
    width: calc(100% - 20px);
    font-size: 35px;
}
input[type="file"] {
    padding: 10px;
    border-radius: 4px;
    background: #eee;
    width: calc(70% - 24px);
}
select#user_id {
    padding: 10px;
    border: none;
    width: 30%;
    background: #eee;
    border-radius: 4px;
    font-size: 14px;
    font-weight: 700;
}
.container{
    background:#fff;
    border-radius:8px;
    max-width: 800px;
    margin: auto;
    margin-bottom: 80px;
    margin-top: 80px;
    height: auto;
    padding: 20px;
    box-shadow: 0 3px 6px -1px rgb(0 0 0 / 0.3);
}
.button, input[type=submit]{
    margin-top:20px;
            cursor: pointer;
            background: #1D4ED8;
            border-style: solid;
            padding: 10px;
            border-radius: 4px;
            border-color: #1d4ed8;
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            text-align: center;
        }
        .buttongroup {
    display: flex;
    justify-content: space-between;
}
.gambar {
    width: 400px;
    height: 120px;
    object-fit: cover;
    border-radius: 8px;
}
.formbawah {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
    </style>
</head>
<body>
    <div class="container">

        <form action="update.php" method="post" enctype="multipart/form-data">
        <input type="text" name="title" id="title" value="<?= $title; ?>" autocomplete="off"/>
        <textarea name="content" id="content" cols="30" rows="10" ><?= $content; ?></textarea>
        <div class="formbawah">
        <?php if (!$fileImage) {
            ?>
            <input type="file" accept="image/*" name="file" value="<?= $fileImage; ?>" required />
             

        <?php }else {
            
         ?>
         <img class="gambar" src="<?= $fileImage; ?>">
         <?php } ?>

            <span>Akan mengedit sebagai <?= $_SESSION['name']; ?></span>
        </div>
        <div class="buttongroup">
            <input class="button" type="submit" name="submit" value="Post Sekarang"/>
            <a class="button" href="4read.php">Kembali</a>

        </div>
        
        
        </form>
    </div>
</body>
</html>