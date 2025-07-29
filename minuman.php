<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tampilan Menu Minuman</title>

<style>

body {
	background-image: url(img/bgg.jpg);
}

h1 {
	font-size: 50px;
	font-family: elephant;
	text-align: center;
}

h2 {
	color: purple;
	font-size: 30px;
	font-family: castellar;
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

.tea{
  background-color: lemonchiffon;
  color: black;
  border: 2px solid #4CAF50;
  font-size: 20px;
}

.coffe {
  background-color: bisque;
  color: black;
  border: 2px solid #4CAF50;
  font-size: 20px;
}

.jus {
  background-color: honeydew;
  color: black;
  border: 2px solid #4CAF50;
  font-size: 20px;
}

.bubble {
  background-color: lavender;
  color: black;
  border: 2px solid #4CAF50;
  font-size: 20px;
}

</style>
</head>
<body>
<h1> The Special Food </h2>
<hr width="100%" size="8" color="pink">
<a href="produc.php">Back &#8592;</a> <br>
<h2> Tampilan Menu Minuman </h2> <font size="5"> <center> <pre>

<a href=""><button class="button tea"><img src="img/tea.jpg" height="250" width="300"><br>Lemon Tea</button></a>       <a href=""><button class="button coffe"><img src="img/kopi.jpg" height="250" width="300"><br>Aneka Coffe</button></a><center> <br>

 <a href=""><button class="button jus"><img src="img/jus.jpg" height="250" width="300"><br>Aneka Jus</button></a>       <a href=""><button class="button bubble"><img src="img/boba.jpg" height="250" width="300"><br>Boba MilkShake</button></a>

<form action="dessert.php" method="post"> 
<a href="dessert.php"><input type="submit" value="NEXT">

</form>
</body>
</html>