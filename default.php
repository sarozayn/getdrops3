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
  height: 100vh;
  width: 100%;
  
}
      .div1{
        border: 5px #9627a2;
         border-radius: 25px;
           box-shadow: 10px 10px 10px 10px #6927a2;
           
        width: 250px;
        height:400px;
        float: left;
           margin: 23px;
           background-color: #C0C0C0;
            outline:  white ;
             padding-bottom: 25px;
        
        
      }
      .div2{
          
        width: 247px;
        text-align:center;
        border: 4px solid LightGray;
        border-radius: 15px;
           box-shadow: 2px 2px 2px 0px #03fc30;
           border color :#03fc30;
        height: 61px;
        overflow: hidden;
        margin-top:90%;
        margin-bottom:10%;
        margin-left: 0px;
        margin-right: 0px;
        
        font-size: 15px;
        font-weight: bold;
        color: #141823;
        font-family: Arial, Helvetica, sans-serif;
        
      }
      img{
        width: 220px;
        height: 170px;
        float: left;
        
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
          
        font-size: 12px;
        font-weight: bold;
        margin-top: 100px;
        margin-right:15px;
        font-family: Arial, Helvetica, sans-serif;
      
        
         
     
    
      

      }
      #claim{
          width:150px;
          height:30px;
        font-size: 26px;
        color:#39FF14;
        font-weight: bold;
        border:2px;
          border-radius: 17px;
           margin-top: 20px;
        margin-left:45px;
        margin-right: 20px;
        text-align:center;
         
          background-color: #6927a2
          
      }
    </style>
  
  <body>
      <section id="welcome-section">
    <?php include 'navbar.php' ?>
    <br><br>
    <div class="divmain">
      <?php
      include 'db.php';

      $sql="SELECT * from news order by id desc";
      $query=mysqli_query($conn,$sql);

      while ($info=mysqli_fetch_array($query)) {
        ?>

        <div class="div1">
          <img src="image/<?php echo $info['image']; ?>" alt="">
         
          <div class="div2">
            <?php echo $info['title']; ?>
          </div>

          <div class="div3">
            
            <label id="label2"> <?php echo formatDate1($info['date']); ?></label>
            <label id="label2"> <?php echo formatDate2($info['date']); ?> </label>

          </div>
          
          <form class="" action="fullnews.php" method="post">
            <input type="text" name="id" value="<?php echo $info['id']; ?>" hidden>
            <input id="claim" type="submit" name="fullnews" value="Claim">

          </form>

        </div>

        <?php
      }

      ?>

    </div>

  </body>
</html>
