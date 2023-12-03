<!DOCTYPE html>
<html lang="en" dir="ltr">
  
    <meta charset="utf-8">
    <title>Web3 Airdrops</title>
    <style media="screen">
      body{
        background-color: azure;
         
        
      }
      #welcome-section {
  margin-top: 200px;
  height: 100%;
  width: 100%;
  
}
      .div1{
        border: 5px #9627a2;
         border-radius: 25px;
           box-shadow: 10px 10px 10px 10px #6927a2;
           
        width: 88%;
        height:1000px;
        float: left;
        margin-right:10px;
           margin: 25px;
           background-color: #C0C0C0;
                   font-size: 18px;
                   

            
           

outline:  white ;

 
        padding-bottom: 25px;
        
        
      }
      .div2{
          
        width: 750px;
        margin-top: 70px;
        font-size: 30px;
        text-align: left;
        
      }
      img{
        width: 220px;
        height: 170px;
        float: center;
        
        margin-left: 13.5px;
        margin-right: 13.5px;
        margin-top: 10px;
        border-radius: 25px;
        
      }
      .divmain{
        margin-left: 60px;
        
      }
      
      .div3{
       
       position:relative; 
       left:55px;
       top:10px
        
          
      }
         
       #label2{
          
        font-size: 18px;
        font-weight: bold;
        margin-top: 100px;
        margin-right:15px;
        font-family: Arial, Helvetica, sans-serif
 

      }
    </style>
  
  <body>
      <section id="welcome-section">
    <?php include 'navbar.php' ?>
    <br><br>
    <div class="divmain">
           <?php include 'db.php';
           
           $id=$_POST['id'];

    $sql="SELECT * from news where id='$id'";
    $query=mysqli_query($conn,$sql);

while ($info=mysqli_fetch_array($query))
           { ?>
            
             <div class="div1" align="center">
          <p align="center"><?php echo $info['date']; ?></p>
          <img src="image/<?php echo $info['image']; ?>" alt="">
          <div class="div2" align="center">
            <?php echo $info['news']; ?>

          </div>
        </div>
      <?php } ?>

    </div>

  </body>
</html>
