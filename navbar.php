<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>News Website</title>
    <style media="screen">
      *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  
}
body{
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  
}
.navbar{
    margin-top:-200px;
  height: 150px;
  width: 100%;
  padding: 0px 0px;
   border-bottom-left-radius:80% 45%;
border-bottom-right-radius:80% 45%;
box-shadow: 0px 10px 20px 30px rgba(0,0,0,0.36);
  background-color: #6927a2;
  
  position: relative;
   z-index: 10000;
}
.navbar .nav-header{
  display: inline;
}
.navbar .nav-header .nav-logo{
    

  display: inline-block;
  margin-top: -30px;
  margin-left:-45px;
  position: relative;
  z-index: 1;
}
.navbar .nav-links{
    

  display: inline;
  float: right;
  font-size: 18px;
   margin-top: 19px;
  margin-left:49px;
  Height:55px;
  z-index: 1;
}
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
    margin-top: -110px;
  margin-left:320px;
 

  z-index: 1;
}
.container .coin-price{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px 9px;
    border-radius: 65px;
    box-shadow: 0 0 6px #ccc;
    margin: 10px;
    z-index: 1;
    
}

.container .coin-price .logo{
    width: 25px;
    height:25px;
    margin-right: 60px;
    z-index: 1;
}
.container .coin-price .logo img{
    width: 130%;
    height:130%;
     margin-top: -5px;
  margin-left:38px;
  z-index: 1;
}
.container .coin-price div{
    display: block;
}
.container .coin-price div h1{
    font-size: 15px;
    color:white;
     margin-right: 10px;
     z-index: 1;
}
.marquee-outer {
 height: 150px;	
  margin-top: -155px;
  width :auto;
 overflow: hidden;
 position: relative;
 color: orange;
 border-bottom-left-radius:100% 50%;
border-bottom-right-radius:100% 50%;


 z-index: 2;
}
.marquee-inner {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 
 
 line-height: 0px;
 text-align: center;
 z-index: 2;
 /* Starting position */
 -moz-transform:translateX(-100%);
 -webkit-transform:translateX(-100%);	
 transform:translateX(-100%);
 /* Apply animation to this element */	
 -moz-animation: scroll-right 15s linear infinite;
 -webkit-animation: scroll-right 15s linear infinite;
 animation: scroll-right 20s linear infinite;
}
/* Move it (define the animation) */
@-moz-keyframes scroll-right {
 0%   { -moz-transform: translateX(-100%); }
 100% { -moz-transform: translateX(100%); }
}
@-webkit-keyframes scroll-right {
 0%   { -webkit-transform: translateX(-100%); }
 100% { -webkit-transform: translateX(100%); }
}
@keyframes scroll-right {
 0%   { 
 -moz-transform: translateX(-100%); /* Browser bug fix */
 -webkit-transform: translateX(-100%); /* Browser bug fix */
 transform: translateX(-100%); 		
 }
 100% { 
 -moz-transform: translateX(100%); /* Browser bug fix */
 -webkit-transform: translateX(100%); /* Browser bug fix */
 transform: translateX(100%); 
 }
}
    </style>
     <div class="navbar">
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
  <!-- Navbar logo -->
  
  <div class="nav-header">
    <div class="nav-logo">
        
      <a href="https://getdrops3.xyz/">
        <img src="logo.png" height="25px" width="25px" alt="logo">
      </a>
    </div>
  </div>
  <div class="marquee-outer">
<div class="marquee-inner"><img src="gif1.gif" width="100" height="27" alt="Swimming fish"></div>
</div>
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
   
    <script src="ap.js"></script>
   
  
 
</div>
  </head>
 
</html>
