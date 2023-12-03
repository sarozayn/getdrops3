<!DOCTYPE html>
<html lang="en" dir="ltr">
  
    <meta charset="utf-8">
    <link href="http://fonts.cdnfonts.com/css/thegoodmonolith" rel="stylesheet">
                
    <title>Web3 Airdrops</title>
    <style media="screen">
    @import url('http://fonts.cdnfonts.com/css/thegoodmonolith');

                
      body{
          
      background-color: #6927a2;
      
         
        
      }

      #welcome-section {
            

 
       margin-top: 200px;
       height: 100%;
       width: 100%;
  
      }
      
      .div1{
          
        
border-radius: 47px;
background: #6927a2;
box-shadow: inset 5px 5px 18px #552083,
            inset -5px -5px 18px #7d2ec1;
        width: 250px;
        height:400px;
        float: left;
        margin: 23px;
       
        
        
        padding-bottom: 25px;
        
        
      }
      .div2{
          
        width: 250px;
        text-align:center;
        border-radius: 15px;
        border color :#CAE7DF;
        height: 61px;
        overflow: hidden;
        margin-top:90%;
        margin-bottom:10%;
        margin-left: 0px;
        margin-right: 0px;
        font-size: 22px;
        font-weight: bold;
                color:white;

        font-family: 'TheGoodMonolith', sans-serif;
        
      }
     .div1 img{
          
        width: 220px;
        height: 170px;
        float: left;
        margin-left: 13.5px;
        margin-right: 13.5px;
        margin-top:13.5px;
        
        border-radius: 50px;
background: #6927a2;
box-shadow:  5px 5px 10px #521e7e,
             -5px -5px 10px #8030c6;
        
      }
      
      .divmain{
          
        margin-left: 60px;
        
      }
      
      .div3{
       
       position:relative; 
       left:55px;
       top:55px
       
                                                
       
        
          
      }
         
       #label2{
          
        font-size: 13px;
        font-weight: bold;
        margin-top: 100px;
        margin-right:24px;
        font-family: 'TheGoodMonolith', sans-serif;
              color:white;

        
         
     
    
      

      }
      #claim{
          
        width:150px;
        height:30px;
        font-size: 26px;
        color:#39FF14;
         border-radius: 50px;
background: linear-gradient(145deg, #5f2392, #702aad);
box-shadow:  5px 5px 10px #2d1146,
             -5px -5px 10px #a53dfe;
        font-weight: bold;
        border:2px;
        border-radius: 
        margin-top: 20px;
        margin-left:45px;
        margin-right: 20px;
        text-align:center;
       
        font-family: 'TheGoodMonolith', sans-serif;
        
        
          
      }
      
    #claim:hover{
        color:white;
        cursor: pointer;
        
    }
    

    .welcome-section{
font-size:80px;
float:center;
text-align: center;
 font-family: 'TheGoodMonolith', sans-serif;
 color:white;
 font-weight:bold;
    }

    


    </style>
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Web3 Airdrops</title>
  <link rel="icon" href="header.png" type="image/icon type">
</head>
  <body>
      <?php 
      include 'navbar.php' ?>
      
   <div  class="welcome-section" <li> Latest Airdrops</li> 
    
      </div>
    
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
          
           <form class="" action="/claim/<?php echo $info['title']; ?>" method="POST">
            <input type="text" name="id" value="<?php echo $info['id']; ?>" hidden>
             <input type="text" name="title" value="<?php echo $info['title']; ?>" hidden>
            <input id="claim" type="submit" name="Claimnow" value="Claim">

          </form>

        </div>
        

        <?php
      }

      ?>
      
     </div>
      </body>
      
 

 
    
      </div>

 <?php include 'footer.php' ?>

  
</html>

