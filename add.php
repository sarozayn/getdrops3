  <?php
      include 'db.php';

      {
        $news=$_POST['news'];
        $title=$_POST['title'];
       $target_dir = "image/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

       move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

        $sql="INSERT INTO news(title,news,image)VALUES('$title','$news','$image')";
        $query=mysqli_query($conn,$sql);

      }

$retorno = array('codigo' => '1', 'mensagem' => $_FILES["image"]["tmp_name"]);
echo json_encode($retorno);
      ?>
