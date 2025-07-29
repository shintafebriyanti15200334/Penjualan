<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Tampilan Menu Makanan</title>

<style>

body {
	background-image: url(img/bg.jpg);
}

h1 {
	font-size: 50px;
	font-family: elephant;
	text-align: center;
}

h2 {
	color: purple;
	font-size: 30px;
	font-family: algerian;
	text-align: center;
}

.button {
  border: none;
  color: white;
  padding: 0px 0px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 8px 8px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.mie{
  background-color: bisque;
  color: black;
  border: 2px solid #4CAF50;
  text-align: center;
  font-size: 20px;
}

.sate {
  background-color: lavender;
  color: black;
  border: 2px solid #4CAF50;
  text-align: center;
  font-size: 20px;
}

.nasi {
  background-color: lightgray;
  color: black;
  border: 2px solid #4CAF50;
  text-align: center;
  font-size: 20px;
}

.spagetti {
  background-color: lightskyblue;
  color: black;
  border: 2px solid #4CAF50;
  text-align: center;
  font-size: 20px;
}

</style>
</head>
<body>
<h1> The Special Food </h2>
<hr width="100%" size="8" color="pink">
<a href="produc.php">Back &#8592;</a> 
<h2> Tampilan Menu Makanan </h2> <pre> <font size="5"> <center>

<a href=""><button class="button mie"><img src="img/mie.jpg" height="250" width="300"><br>Mie Goreng</button></a>      <a href=""><button class="button sate"><img src="img/sate.jpg" height="250" width="300"><br>Sate Ayam</button></a><br> <br>

<a href=""><button class="button nasi"><img src="img/nasi.jpg" height="250" width="300"><br>Nasi Goreng</button></a>      <a href=""><button class="button spagetti"><img src="img/spageti.jpg" height="250" width="300"><br>Spagetti</button></a><br>

<form action="minuman.php" method="post"> 
<a href="minuman.php"><input type="submit" value="NEXT">
</form>
</body>
</html>
