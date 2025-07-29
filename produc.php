<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Produk</title>
<style>

body{
	background-image: url(img/bg1.jpg);
}

h1 {
	font-size: 35px;
	font-family: Imprint MT Shadow;
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
  margin: 8px 4px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.makanan{
  background-color: lightgray;
  color: black;
  border: 2px solid #4CAF50;
  font-size: 20px;
}

.minuman {
  background-color: lightsalmon;
  color: black;
  border: 2px solid #4CAF50;
  font-size: 20px;
}

.dessert {
  background-color: pink;
  color: black;
  border: 2px solid #4CAF50;
  font-size: 20px;
}

</style>
</head>
<body>
<a class="back" href="login.php">Back &#8592;</a>
<h1> ^^ Welcome To "The Special Food" ^^ </h1> <center> <pre>
<br>
<a href="makanan.php"><button class="button makanan"><img src="img/makanan.jpg" width="320" height="250"><br>Makanan</button></a>         <a href="minuman.php"><button class="button minuman"><img src="img/minuman.jpg" height="250" width="280"><br>Minuman</button></a> <br><br>
<a href="dessert.php"><button class="button dessert"><img src="img/desssert.jpg" height="250" width="300"><br>Dessert</button></a>

</body>
</html>
