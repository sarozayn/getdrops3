<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="http://fonts.cdnfonts.com/css/thegoodmonolith" rel="stylesheet">
    <title>Responsive Animated Website Footer</title>
     <style media="screen">
     @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
     @import url('http://fonts.cdnfonts.com/css/thegoodmonolith');
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}


footer
{
    position: relative;
    width: 100%;
    padding: 20px 50px;
    background: #6927a2;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 100px;
    font-family: 'TheGoodMonolith', sans-serif;
}
footer .wave
{
    position: absolute;
    top: -70px;
    left: 0;
    width: 100%;
    height: 70px;
    background: url(wave.png);
    background-size: 1000px 100px;
}
footer .wave#wave1
{
    z-index: 1000;
    opacity: 1;
    bottom: 0;
    animation: animate 4s linear infinite;
}
footer .wave#wave2
{
    z-index: 999;
    opacity: 0.5;
    bottom: 10px;
    animation: animate2 4s linear infinite;
}
footer .wave#wave3
{
    z-index: 998;
    opacity: 0.2;
    bottom: 15px;
    animation: animate 3s linear infinite;
}
footer .wave#wave4
{
    z-index: 999;
    opacity: 0.7;
    bottom: 20px;
    animation: animate2 3s linear infinite;
}

@keyframes animate
{
    0%,100%
    {
        background-position-x: 1000px;
    }
    100%
    {
        background-position-x: 0px;
    }
}
@keyframes animate2
{
    0%,100%
    {
        background-position-x: 0px;
    }
    100%
    {
        background-position-x: 1000px;
    }
}
.social,
.menu
{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10px 0;
    flex-wrap: wrap;
    font-family: 'TheGoodMonolith', sans-serif;
}
.social li,
.menu li
{
    list-style: none;
}
.social li a 
{
    font-size: 2em;
    color: #fff;
    margin: 0 10px;
    display: inline-block;
    transition: 0.5s;
    font-family: 'TheGoodMonolith', sans-serif;
}
.social li a:hover 
{
    transform: translateY(-10px);
}

.menu li a 
{
    font-size: 1.2em;
    color: #fff;
    opacity: 0.75;
    margin: 0 15px;
    text-decoration: none;
    display: inline-block;
    font-family: 'TheGoodMonolith', sans-serif;
}
.menu li a:hover 
{
    opacity: 1;
}
footer p 
{
    color: #fff;
    text-align: center;
    margin-top: 15px;
    font-size: 1.1em;
    font-family: 'TheGoodMonolith', sans-serif;
}
</style>
</head>
<body>
    
	<footer>
		<div class="waves">
			<div class="wave" id="wave1"></div>
			<div class="wave" id="wave2"></div>
			<div class="wave" id="wave3"></div>
			<div class="wave" id="wave4"></div>
		</div>
		<ul class="social">
			<li><a href="#"><ion-icon name="cash-outline"></ion-icon></a></li>
			<li><a href="https://twitter.com/getdrops3" target="_blank" ><ion-icon name="logo-twitter"></ion-icon></a></li>
			<li><a href="https://mail.google.com/mail/u/0/?fs=1&to=support@getdrops3.xyz&tf=cm" target="_blank"><ion-icon name="mail-outline"></ion-icon></a></li>
			<li><a href="https://t.me/getdrops3" target="_blank"><ion-icon name="paper-plane-outline"></ion-icon></a></li>
			
		</ul>
		<ul class="menu">
			<li><a href="https://getdrops3.xyz/">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Donate Us</a></li>
			<li><a href="#">Team</a></li>
			<li><a href="https://mail.google.com/mail/u/0/?fs=1&to=support@getdrops3.xyz&tf=cm"  target="_blank">Contact</a></li>
		</ul>
		<p>©2022 Getdrops3 Team | All Rights Reserved</p>
	</footer>
	
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>