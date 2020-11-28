<?php 
 include_once('connect.php');
 session_start();
 if (!isset($_SESSION['userId'])) {
     header('location:login.php');
 }
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $target_dir = "uploads/";
    $title = $_POST['title'];
    $content = $_POST['content'];
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $userId = $_POST['user_id'];
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["file"]["tmp_name"]);
  if($check !== false) {
    // echo "File is an image - " . $check["mime"] . ".";
    $post = mysqli_query($connect, "INSERT INTO image_blog(title,content,file_image,user_id) VALUES ('$title','$content','$target_file','$userId')");
    $uploadOk = 1;
    // echo $post?"success": "gagal";
    move_uploaded_file($_FILES['file']['tmp_name'],$target_file);
    header('location: index.php');
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
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

    </style>
</head>
<body>
    <div class="container">



        <form action="tambahpost.php" method="post" enctype="multipart/form-data">
        <input type="text" name="title" id="title" placeholder="Masukkan judul" autocomplete="off"/>
        <textarea name="content" id="content" cols="30" rows="10" placeholder="Teks artikel disini"></textarea>
        <div class="formbawah">
            <input type="file" accept="image/*" name="file" required/>
            <input type="hidden" name="user_id" value=<?= $_SESSION['userId']; ?>>
            <span>Akan memposting sebagai <?= $_SESSION['name']; ?></span>
        </div>
        <div class="buttongroup">
            <input class="button" type="submit" name="submit" value="Post Sekarang"/>
            <a class="button" href="index.php">Kembali</a>

        </div>
        
        
        </form>
    </div>
</body>
</html>