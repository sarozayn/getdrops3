<!DOCTYPE html>
<html lang="en" dir="ltr">
 
    <meta charset="utf-8">
   <link href="http://fonts.cdnfonts.com/css/thegoodmonolith" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>News Website</title>
    
    <style media="screen">
      
@import url('http://fonts.cdnfonts.com/css/thegoodmonolith');

.navbar{
    

  height: 150px;
  width: 100%;
  border-bottom-left-radius:80% 45%;
  border-bottom-right-radius:80% 45%;
  



background: #6927a2;
box-shadow: inset 30px 30px 14px #59218a,
            inset -30px -30px 14px #792dba;
   font-family: 'TheGoodMonolith', sans-serif;
}




.nav-logo{

margin-top:-40px;
float:left;
margin-left:-20px;


}


.container{

display: flex;
float:center;


  font-family: 'TheGoodMonolith', sans-serif;
 

 
}
.container .coin-price{
    display: flex;
    padding: 10px;
   
    background: #6927a2;
     border-bottom-left-radius:40px;
  border-top-right-radius:40px ; 
box-shadow:  5px 5px 19px #2b1042,
         -5px -5px 19px #a73eff;
    margin: 20px;
     margin-top: 40px;
     
    
    
    
    
    
}

.container .coin-price .logo{
    width: 25px;
    height:25px;
    margin-right: 60px;
     
}
.container .coin-price .logo img{
    width: 130%;
    height:130%;
     margin-top: 6px;
  margin-left:27px;
   
  
}
.container .coin-price div{
    display: block;
     
}
.container .coin-price div h1{
    font-size: 15px;
    color:white;
     margin-right: 10px;
     
     
}

.social-media{
    

   margin-top:50px;
 width:100%;
 height:80px;
   overflow: hidden;
 position: relative;
 border-radius: 15px;
background: #6927a2;
box-shadow: inset 5px 5px 10px #2a1041,
            inset -5px -5px 10px #a83eff;
            

  
   
 }
.social-media ul{
    
    display:flex;
     
    
}



.social-media ul a {
   
   
    width:100%;
  text-decoration: none;
  transform:translateX(100%);
  
animation: cssmarquee 25s linear infinite;
}
@keyframes cssmarquee {
0% {
transform: translateX(100%);
}
100% {
transform: translateX(-100%);
}
}

.fa-twitter {
    font-size:55px;
    color:#1eff00;
     margin-top:9px;
    
    
    
}


.fa-telegram
{
    font-size:55px;
    color:#1eff00;
     margin-top:9px;
   
    
    
    
}
.fa-telegram a1{
    
    font-size:30px;
     font-family: 'TheGoodMonolith', sans-serif;
    
}
.fa-twitter a2{
    
    font-size:30px;
     font-family: 'TheGoodMonolith', sans-serif;
     
}
body.active
{
  background: #411469;
  
}
#toggle
{
    
  position: relative;
  display: block;
  width: 80px;
  height: 40px;
  border-radius: 160px;
  background: #6927a2;
  transition: 0.5s;
  box-shadow: inset 0 8px 60px rgba(0,0,0,0.1),
              inset 0 8px 8px rgba(0,0,0,0.1),
              inset 0 -4px 4px rgba(0,0,0,0.1);
border-radius: 63px;
background: #6927a2;
box-shadow: inset 50px 50px 100px #2a1041,
            inset -50px -50px 100px #a83eff;
 float:right;
 margin-top:50px;
 margin-left:0px;
 margin-right:20px;
}
#toggle.active
{
  background: #411469;
  box-shadow: inset 0 2px 40px rgba(0,0,0,0.1),
              inset 0 2px 8px rgba(0,0,0,0.1),
              inset 0 -4px 8px rgba(0,0,0,0.05);
}
#toggle i.indicator
{
  position: absolute;
  top: 0;
  left: 0;
  width: 40px;
  height: 40px;
  cursor: pointer;
  background: linear-gradient(to bottom, #190729,  #411469);
  transform: scale(0.9);
  box-shadow: 0 8px 40px rgba(0,0,0,0.5),
              inset 0 4px 4px rgba(255,255,255,0.2),
              inset 0 -4px 4px rgba(255,255,255,0.2);
  border-radius: 50%;
  transition: 0.5s;
}
#toggle.active i.indicator
{
  left: 40px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.1),
              inset 0 4px 4px rgba(255,255,255,1),
              inset 0 -4px 4px rgba(255,255,255,1);
  background: linear-gradient(to bottom, #6927a2, #782abd);
}

    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <head>
     <div class="navbar">
         
     <a class="nav-logo" href="https://getdrops3.xyz/"> <img src="https://getdrops3.xyz/logo.png" height="200px" width="200px" >
      </a>
    
    
    <div id="toggle">
		<i class="indicator"></i>
	</div>
	
	<script>
		const body = document.querySelector('body');
		const toggle = document.getElementById('toggle');
		toggle.onclick = function(){
			toggle.classList.toggle('active');
			body.classList.toggle('active');
		}
	</script>
	
<div class="container">
        <div class="coin-price">
            <div class="logo"><img src="https://cryptologos.cc/logos/bitcoin-btc-logo.png?v=023" ></div>
            <div>
                <h1>$<span id="bitcoin"></span></h1>
                <h1>Bitcoin</h1>
            </div>
        </div>
        <div class="coin-price">
            <div class="logo"><img src="https://cryptologos.cc/logos/ethereum-eth-logo.png?v=023" ></div>
            <div>
                <h1>$<span id="ethereum"></span></h1>
                <h1>Ethereum</h1>
            </div>
        
        </div>
        <div class="coin-price">
            <div class="logo"><img src="https://cryptologos.cc/logos/litecoin-ltc-logo.png?v=023" ></div>
            <div>
                <h1>$<span id="litecoin"></span></h1>
                <h1>Litecoin</h1>
            </div>
        </div>
       
        
</div>

    
    
    </div>
   
    <script src="ap.js"></script>
   
  
 

  </head>
 <div class="social-media">
                    <ul>
                        
                      
                      
                      
                       <a href="https://twitter.com/getdrops3" class="fa fa-twitter" target="_blank"  ><a2> Follow us on twitter</a2></a>
                       <a href="https://t.me/getdrops3" class="fa fa-telegram" target="_blank"  ><a1> Join Telegram Channel</a1></a>


                      
                       
                       
                    </ul>
                    
                 </div>
    
  
</html>
