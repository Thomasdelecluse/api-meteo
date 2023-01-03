
<html>
<header>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	
		<link rel="stylesheet" href="css/ionicons.min.css">
		<link rel="stylesheet" href="css/style.css">
</header>
<body>
    <style>
       body {
background: url(img/fond.jpeg);

}
.footer-07 .ftco-footer-social li a {
background: transparent;
border: 1px solid #0ebe08;
    
}
footer {
 padding: 3em 0;
position: fixed;
left: 0;
bottom: 0;
width: 100%;
}
        .container1{
text-align: center;
margin-left: auto;
margin-right: auto;
margin-top: 30vh;
max-width: 400px;
-webkit-box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0); 
box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);
border-radius: 10px;
background-color: #E1E1E1;

}
h3{

    padding: 10px;
    color: #9a9a9a;
}
.ent{
    background-color: #121212;
}
.btn{

    margin-top: 8px;
    margin-bottom: 20px;
}
.F{
    max-width: 250;
margin: auto;
}
@media (max-width: 920px){
    .container1{
        width: 250px;
        margin-top: 15vh;
    }
    .footer-07{
        height: 19%;
        padding: 1em 0;
    }
}


</style>
    <div class="container1">
        <div class="ent">
        <h3>Application météo<br></h3>
        </div>

        
<form action="Meteo.php" method="post">
    <strong><label for="vil">Votre Ville:</label></strong>
    <input type="text" onclick="myFunction()"class="F form-control" placeholder="Ville" required name="ville" id="vil">
    <button type="submit"  class="btn btn-success" >Sauvegarder</button>
</form>
<script>
   function myFunction() {
    [].forEach.call(document.querySelectorAll('.footer-07'), function (el) {
  el.style.visibility = 'hidden';
});

}
</script>
</div>
		<footer id="foot" class="footer-07">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<p class="menu">
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

