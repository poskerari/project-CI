<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>aset/css/style.css">
<table width="100%" border="1">
	<tr>
		
			<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="aset/image/h4.png" height="50%" width="100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="aset/image/g1.png" height="50%" width="100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="aset/image/kinerja.png" height="50%" width="100%">
</div>

</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
		</td>
	</tr>
	<tr>
		<td height="100%" align="center">
			<div class="menu-dropdown">
				<ul>
					<li><a href="<?php echo base_url(); ?>menuutama">Home</a></li>
					<li><a href="#">Master</a>
						<ul>
							<li><a href="<?php echo base_url(); ?>Datakaryawan">Data Karyawan</a></li>
						</ul>
					</li>
					<li><a href="#">Transaksi</a>
						<ul>
							<li><a href="<?php echo base_url(); ?>Tabelkaryawan">Tabel Karyawan</a></li>
						</ul>
					</li>
					<li><a href="#">Laporan</a>
						<ul>
							<li><a href="<?php echo base_url(); ?>Cetaklaporan">Cetak Laporan</a></li>
						</ul>
					</li>
					<li><a href="<?php echo base_url(); ?>Logout">LogOut</a></li>
				</ul>	
			</div>	
		</td>
	</tr>
	<tr>
		<td height="400px" align="center">