<?php

$api_key = "cf7e835b9c4fc9e5afed24f31fd2ed0f";

$ville = $_POST['ville'];

$api = 'http://api.openweathermap.org/data/2.5/weather?q='.$ville.'&units=metric&appid='.$api_key;

$weather_data = json_decode(file_get_contents($api), true);

$temperature = $weather_data['main']['temp'];
$humidite = $weather_data['main']['humidity'];
$ressenti = $weather_data['main']['feels_like'];
$image = $weather_data['weather']['0']['icon'];

?>
<html>
<header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	
		<link rel="stylesheet" href="css/ionicons.min.css">
		<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</header>
<body>
    <style>
        .img{
            width:200px;
            height:200px;
        }
        h4{
            font-size: 3rem;
            padding: 10px;
            color: #9a9a9a;
        }
        .footer-07 .ftco-footer-social li a {
    background: transparent;
    border: 1px solid #f7ae00c2;
}

.btn{
    margin:20px;
}
.en{
    background-color: #121212;
}
.footer-07 a {
    color: #f7ae00c2;
}
footer {
    padding: 1em 0;
    position: fixed;
left: 0;
bottom: 0;
width: 100%;
}
@media (max-width: 700px){
    h4{
        font-size: 2.5rem;
    }
    .container1{
        width: 320px;
        margin-bottom: 25vh;
        min-height: 1200px;
    }
    .footer-07{
        height: 17%;
        padding: 1em 0;
    }
    .flex-item:nth-child(1) {
    border-radius: 10px;
    -webkit-order: 0;
    -ms-flex-order: 0;
    order: 0;
    -webkit-flex: 2 1 auto;
    -ms-flex: 2 1 auto;
    flex: 2 1 auto;
    -webkit-align-self: auto;
    -ms-flex-item-align: auto;
    align-self: auto;
    max-width: 160px;
    background-color: #aeadad;
    max-height: 170px;
    margin: 20px;
    border: solid;
    -webkit-box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 5px 5px 15px 5px rgba(0,0,0,0); 
box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 5px 5px 15px 5px rgba(0,0,0,0);
    }

.flex-item:nth-child(2) {
    border-radius: 10px;
    -webkit-order: 0;
    -ms-flex-order: 0;
    order: 0;
    -webkit-flex: 2 1 auto;
    -ms-flex: 2 1 auto;
    flex: 2 1 auto;
    max-width: 160px;
    -webkit-align-self: auto;
    -ms-flex-item-align: auto;
    align-self: auto;
    background-color: #aeadad;
    max-height: 170px;
    margin: 20px;
    border: solid;
    -webkit-box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 5px 5px 15px 5px rgba(0,0,0,0); 
box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 5px 5px 15px 5px rgba(0,0,0,0);
    }

.flex-item:nth-child(3) {
    border-radius: 10px;
    -webkit-order: 0;
    -ms-flex-order: 0;
    order: 0;
    max-width: 160px;
    -webkit-flex: 2 1 auto;
    -ms-flex: 2 1 auto;
    flex: 2 1 auto;
    -webkit-align-self: auto;
    -ms-flex-item-align: auto;
    align-self: auto;
    background-color: #aeadad;
    max-height: 170px;
    margin: 20px;
    border: solid;
    -webkit-box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 5px 5px 15px 5px rgba(0,0,0,0); 
box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 5px 5px 15px 5px rgba(0,0,0,0);

    }
    .flex-item:nth-child(4) {
    border-radius: 10px;
    -webkit-order: 0;
    -ms-flex-order: 0;
    order: 0;
    max-width: 160px;
    -webkit-flex: 2 1 auto;
    -ms-flex: 2 1 auto;
    flex: 2 1 auto;
    -webkit-align-self: auto;
    -ms-flex-item-align: auto;
    align-self: auto;
    background-color: #aeadad;
    max-height: 170px;
    margin: 20px;
    border: solid;
    -webkit-box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 5px 5px 15px 5px rgba(0,0,0,0); 
box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 5px 5px 15px 5px rgba(0,0,0,0);
    }
}
BODY{
    background: url(img/fond1.jpg);
    background-size: cover;
    }
        .container1{
    text-align: center;
    margin-left: auto;
    margin-right:auto;
    margin-top: 40px;
    min-height: 510px;
    height : auto;
    max-width: 700px;
    -webkit-box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0); 
    box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);
    border-radius: 10px;
    background-color: #E1E1E1;
    }
.container2{
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: space-around; 
    -webkit-align-content: space-around;
    -ms-flex-line-pack: distribute;
    align-content: space-around;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
    margin-bottom: 20px;
    
    }
.size-icon{
    width:40%;
    height:50%;
    padding-top:7%;
    padding-bottom:10%;
}
.flex-item:nth-child(1) {
    border-radius: 10px;
    -webkit-order: 0;
    -ms-flex-order: 0;
    order: 0;
    -webkit-flex: 2 1 auto;
    -ms-flex: 2 1 auto;
    flex: 2 1 auto;
    -webkit-align-self: auto;
    -ms-flex-item-align: auto;
    align-self: auto;
    max-width: 130px;
    background-color: #a0a0a0;
    max-height: 170px;
    margin: 20px;
    border: solid;
    -webkit-box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 5px 5px 15px 5px rgba(0,0,0,0); 
box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 5px 5px 15px 5px rgba(0,0,0,0);
    }

.flex-item:nth-child(2) {
    border-radius: 10px;
    -webkit-order: 0;
    -ms-flex-order: 0;
    order: 0;
    -webkit-flex: 2 1 auto;
    -ms-flex: 2 1 auto;
    flex: 2 1 auto;
    max-width: 130px;
    -webkit-align-self: auto;
    -ms-flex-item-align: auto;
    align-self: auto;
    background-color: #a0a0a0;
    max-height: 170px;
    margin: 20px;
    border: solid;
    -webkit-box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 5px 5px 15px 5px rgba(0,0,0,0); 
box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 5px 5px 15px 5px rgba(0,0,0,0);
    }

.flex-item:nth-child(3) {
    border-radius: 10px;
    -webkit-order: 0;
    -ms-flex-order: 0;
    order: 0;
    max-width: 130px;
    -webkit-flex: 2 1 auto;
    -ms-flex: 2 1 auto;
    flex: 2 1 auto;
    -webkit-align-self: auto;
    -ms-flex-item-align: auto;
    align-self: auto;
    background-color: #a0a0a0;
    max-height: 170px;
    margin: 20px;
    border: solid;
    -webkit-box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 5px 5px 15px 5px rgba(0,0,0,0); 
box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 5px 5px 15px 5px rgba(0,0,0,0);

    }
    .flex-item:nth-child(4) {
    border-radius: 10px;
    -webkit-order: 0;
    -ms-flex-order: 0;
    order: 0;
    max-width: 130px;
    -webkit-flex: 2 1 auto;
    -ms-flex: 2 1 auto;
    flex: 2 1 auto;
    -webkit-align-self: auto;
    -ms-flex-item-align: auto;
    align-self: auto;
    background-color: #a0a0a0;
    max-height: 170px;
    margin: 20px;
    border: solid;
    -webkit-box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 5px 5px 15px 5px rgba(0,0,0,0); 
box-shadow: 5px 5px 5px 0px #000000, inset 4px 4px 15px 0px #000000, 5px 5px 15px 5px rgba(0,0,0,0);
    }

</style>
    <div class="container1">
        
        <div class="en">

        <strong><h4>Météo <?php echo $ville ?> <br></h4></strong>
        </div>
    <?php 
    if($image == '50n'){
        ?>
        <img src="img/50n.png" class="img" alt="">
        <?php
    }
    else if($image == '13n')
    {
        ?>
        <img src="img/13n.png" class="img" alt="">
        <?php
    }
    else if($image == '11n'){
        ?>
        <img src="img/11n.png" class="img" alt="">
        <?php
    }
    else if($image == '10n')
    {
        ?>
        <img src="img/10n.png" class="img" alt="">
        <?php
    }
    else if($image == '09n')
    {
        ?>
        <img src="img/09n.png" class="img" alt="">
        <?php
    }
    else if($image == '04n')
    {
        ?>
        <img src="img/04n.png" class="img" alt="">
        <?php
    }
    else if($image == '03n')
    {
        ?>
        <img src="img/03n.png" class="img" alt="">
        <?php
    }
    else if($image == '02n')
    {
        ?>
        <img src="img/02n.png" class="img" alt="">
        <?php
    }
    else if($image == '01n')
    {
        ?>
        <img src="img/01n.png" class="img" alt="">
        <?php
    }
    else if($image == '01d')
    {
        ?>
        <img src="img/01d.png" class="img" alt="">
        <?php
    }
    else if($image == '02d')
    {
        ?>
        <img src="img/02d.png" class="img" alt="">
        <?php
    }
    else if($image == '03d')
    {
        ?>
        <img src="img/01d.png" class="img" alt="">
        <?php
    }
    else if($image == '04d')
    {
        ?>
        <img src="img/04d.png" class="img" alt="">
        <?php
    }
    else if($image == '09d')
    {
        ?>
        <img src="img/09d.png" class="img" alt="">
        <?php
    }
    else if($image == '10d')
    {
        ?>
        <img src="img/01d.png" class="img" alt="">
        <?php
    }
    else if($image == '11d')
    {
        ?>
        <img src="img/01d.png" class="img" alt="">
        <?php
    }
    else if($image == '13d')
    {
        ?>
        <img src="img/01d.png" class="img" alt="">
        <?php
    }
    else if($image == '50d')
    {
        ?>
        <img src="img/50d.png" class="img" alt="">
        <?php
    }
    
    ?>
    <hr style="height:4px;border:none;color:#333;background-color:black;" />
    <div class="container2">
        <div class="flex-item">
            <img src="img/temperature.png" class="size-icon" alt="">
            <strong><p>La température est de <?php echo $temperature?>°C</p></strong>
        </div>
        <div class="flex-item">
            <img src="img/chaleur.png" class="size-icon" alt="">
            <strong><p>Le ressenti est de <?php echo $ressenti?>°C</p></strong>
    </div>
        <div class="flex-item">
            <img src="img/humidity.png" class="size-icon" alt="">
            <strong><p>L'humdité est de <?php echo $humidite; ?>%</p></strong>
        </div>
        <div class="flex-item">
            <img src="img/humidity.png" class="size-icon" alt="">
            <strong><p>L'humdité est de <?php echo $humidite; ?>%</p></strong>
        </div>
    </div>
    
    
    <input type="button" name="lien1" value="Retour" onclick="self.location.href='https://meteothomas.000webhostapp.com/'" class="btn btn-danger"onclick>

    </div>
    <footer class="footer-07">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
                    <a href="#">Menu</a>
							<a href="#">A Propos</a>
							<a href="#">Contact</a>
						</p>
						<ul class="ftco-footer-social p-0">
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="ion-logo-twitter"></span></a></li>
              <li class="ftco-animate"><a href="https://www.facebook.com/thomas.mt.7547031/" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="ion-logo-facebook"></span></a></li>
              <li class="ftco-animate"><a href="https://www.instagram.com/thomasde_76/" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="ion-logo-instagram"></span></a></li>
            </ul>
					</div>
				</div>
				
			</div>
		</footer>
		

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>