
<!DOCTYPE html>
<html lang="en" dir="ltr">
  
    <meta charset="utf-8">
    <title>Web3 Airdrops</title>
    <link href="http://fonts.cdnfonts.com/css/thegoodmonolith" rel="stylesheet">
                <head>
  <title>Web3 Airdrops</title>
  <link rel="icon" href="header.png" type="image/icon type width: 100px; ">
</head>
    <style media="screen">
    @import url('http://fonts.cdnfonts.com/css/thegoodmonolith');
      body{
        background-color: #6927a2;
         
        
      }
      #welcome-section {
  
  height: 100%;
  width: 100%;
  
}
      .div1{
        border: 5px #9627a2;
        border-radius: 25px;
        box-shadow: 6px 6px 6px 6px #3b1f53;
        width: 88%;
        height:auto;
        float: left;
        margin-right:10px;
        margin: 25px;
        background-color: #3d1f57;
        font-size: 25px;
        color:white;
        font-family: 'TheGoodMonolith', sans-serif;
        
                   

            
           

outline:  white ;

 
        padding-bottom: 25px;
        
        
      }
       .div1 p{
            font-family: 'TheGoodMonolith', sans-serif;
            font-size:30px;
            font-weight:bold;
       }
      .div2{
          
          
        width: 750px;
        margin-top: 70px;
        font-size: 30px;
        text-align: left;
        color:#27df20;
        font-weight:bold;
       font-family: 'TheGoodMonolith', sans-serif;
        
      }
      .div1 img{
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
        font-family: 'TheGoodMonolith', sans-serif;
        
      }
      
      .div3{
       
       position:relative; 
       left:55px;
       top:10px
        font-family: 'TheGoodMonolith', sans-serif;
          
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
          <img src="https://getdrops3.xyz/image/<?php echo $info['image']; ?>" alt="">
          <div class="div2" align="center">
            <?php echo $info['news']; ?>

          </div>
        </div>
         <?php include 'footer.php' ?>
      <?php } ?>

    </div>

  </body>
</html>
