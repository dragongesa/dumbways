<?php 
 include_once('connect.php');
 session_start();
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $buatUser = mysqli_query($connect, "INSERT INTO user(name,email) VALUES ('$name','$email')");
  header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TambahPost</title>
    <style>
        input[type=text] , input[type=email],textarea{
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
input[type=text],input[type=email]{
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



        <form action="tambahuser.php" method="post">
        <input type="text" name="name" id="title" placeholder="Nama Kamu" autocomplete="off"/>
        <input type="email" name="email" id="title" placeholder="Email Kamu" autocomplete="off"/>
        <div class="buttongroup">
            <input class="button" type="submit" name="submit" value="Buat User"/>
            <a class="button" href="index.php">Kembali</a>

        </div>
        
        
        </form>
    </div>
</body>
</html>