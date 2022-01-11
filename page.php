
<!DOCTYPE html>

<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>petshop</title>  
	<link rel="stylesheet" href="page.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>

	<div class="header"> 
		<a href="index.php" class="name">Petshop.com</a>
		<div class="header-right">
			<a href="signup.php">Sign Up</a>
			<a class="active" href="index.php">Login</a>
			<a href="#about">About</a>
		</div>
	</div>

	
	<form class="choose"action="page.php" method="get">
		<button class="types" type="submit" value="cat" name="cat">Cats</button>
		<button class="types" type="submit" value="dog" name="dog">Dogs</button>
	</form>
	<?php

	$pet_type=$_GET['pet_type'];
	if(isset($_GET['pet_type'])) {
		$sql = "SELECT pet_name, price FROM pet_details WHERE pet_type='$pet_type'";
		//$result=mysql_query($sql);
	} 

	elseif (isset($_GET['cat'])) {
		header("Location: page.php?pet_type=cat");
	}
	else
	{
		header("Location: page.php?pet_type=dog");
		exit;
	 }
?>

	<br><br>
	<div class="wrapper">
		<table class="table1">
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Image</th>
			</tr>
			
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "petshopdb";
			$conn = mysqli_connect($servername, $username, $password, $db);
			//mysqli_select_db('petshopdb', $conn);
			if ($conn->connect_error) 
			{
				die("Connection failed: " . $conn->connect_error);
			}

			//$sql = "SELECT pet_name , pet_type, price FROM pet_details";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) 
			{


				while($row = $result->fetch_assoc()) 
				{
					
					$img_name = "img\\" . $row['pet_name'] . ".jpg";
					//Displaying the pet_details contents
					echo"<tr>".
					"<td>". 
					$row['pet_name'].
					"</td>".
					"<td>".
					$row['price'].
					"</td>".
					"<td>".
					"<img src = '" . $img_name . "'>".
					"</td>".
					"</tr>";
				}
			}
			?>

		</table>
	</div>
	<div class = "sqlquery">
		<?php
		echo "<div class='queryused'>SQL Query Used : <div class='query'>$sql;</div></div>";
		?>
	</div>

	<footer>
		<div class="credits">
			<ul >
				<li><h3><a target="_blank" href="http://moveforward100.com">www.moveforward100.com</a></h3></li>
				<li>SQL Injection Practice Website</li>
				<li>Happy Hacking!</li>
			</ul>  
		</div>
	</footer>
</body>
</html>
</html>



<?php


/*
$count = 0;
			// output data of each row
while($row = $result->fetch_assoc()) 
{

	<tr>
	<td><img src='img/' $row['pet_name'] . "jpg"; "</td>
	<td>"$row['pet_name']"</td>
	<td>"$row['price']"</td>

	</tr>



	$pet_type=$_GET['pet_type'];
	if(isset($_GET['pet_type'])) {
		$sql = "SELECT pet_type, pet_name, price FROM pet_details";
		$result=mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
	} 

	elseif (isset($_GET['cats'])) {
		header("Location: page.php?pet_type=cat");
	}
	else
	{
		header("Location: page.php?pet_type=dog");
		exit;
	}


	echo "<tr><th>Images</th><th>Names</th><th>Price</th><th>Add to cart</th></tr>";


	$row = mysqli_fetch_assoc($result);

	while() 
	{	
		print_r($row);

		echo "$row['pet_name']";
								//$img = "<td><img src='img/$row['name'].JPG'></td>";


		if($row['name']=='bull dog'){
			$img = "<td><img src='img/bulldog.JPG'></td>";
			}elseif($row['name']=='Bombay cat'){
				$img = "<td><img src='img/bombay cat.jpg'></td>";
				}elseif($row['name']=='german sheapord'){
					$img = "<td><img src='img/german sheapord.jpg'></td>";
					}elseif($row['name']=='pug'){
						$img = "<td><img src='img/pug.jpg'></td>";
						}elseif($row['name']=='Labrador'){
							$img = "<td><img src='img/labrador.jpg'></td>";
							}elseif($row['name']=='siamese'){
								$img = "<td><img src='img/siamese.jpg'></td>";
								}elseif($row['name']=='british shorthair'){
									$img = "<td><img src='img/brit.jpg'></td>";
								}
								elseif($row['name']=='persian'){
									$img = "<td><img src='img/persian.jpg'></td>";
								}
								else{
									$img = "<td>image</td>";
								}
								echo "<tr>". $img ."<td>". $row['name'] ."</td><td>".$row['price'] ." $</td><td><button type='button' class = 'cart'><img src='img/addcart.png'></button></td></tr>";
							}
*/
							?>