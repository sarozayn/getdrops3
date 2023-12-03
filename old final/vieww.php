<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert News</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <style media="screen">
      textarea{
        width: 550px;
        height: 300px;
        font-size: 20px;
      }
      div{
        border: 2px solid black;
        width: 600px;
        margin-left: 450px;
        margin-top: 50px;
        padding: 30px;
      }
      input[type=file]{
        font-size: 20px;
      }
      input[type=submit]{
        font-size: 20px;
        font-weight: bold;
        margin-left: 200px;
      }
    </style>
    
   
  </head>
  <body>
    <div class="">
      <form class="" action="vieww.php" method="post" enctype="multipart/form-data">
        <textarea name="news" rows="20" cols="80" placeholder="Enter News" required></textarea><br><br>
        <input type="username" name="title" value="" placeholder="enter your title here" required><br><br>
        
        <input type="file" name="image" value="" required><br><br>
        <input type="submit" name="submit" value="Submit">

      </form>
      <?php
     
require "connection.php";
$editorContent = $statusMsg = '';
      if (isset($_POST['submit'])) {
          $editorContent = $_POST['editor'];
          
          
$conexao = conexao::getInstance();

        $news=$_POST['news'];
        $title=$_POST['title'];
        $image=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tem_loc=$_FILES['image']['tmp_name'];
        $image_store="image/".$image;

        move_uploaded_file($image_tem_loc,$image_store);

        $sql="INSERT INTO news(title,news,image)VALUES('$title','$news','$image')";
        
        $stm = $conexao->prepare($sql);
$stm->execute();

 

      }


       ?>

    </div>

  </body>
</html>
