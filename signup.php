
<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <meta charset='utf-8'>

    <title>petshop</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
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



    <div class="main">
      <div class="container-contact100">
        <div class="wrap-contact100">
          <form class="contact100-form validate-form"  action="signup.php" method="post">

            <div class="wrap-input100 validate-input">
              <input class="input100" type="text" name="user_name" placeholder="user_name" required>
              <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input">
              <input class="input100" type="text" name="card_number" placeholder="card_number"required>
              <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input">
              <input class="input100" type="date" name="expiry_date" placeholder="expiry_date" required>
              <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input">
              <input class="input100" type="text" name="phone_number" placeholder="phone_number"required>
              <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input">
              <input class="input100" type="text" name="card_pin" placeholder="card_pin" required>
              <span class="focus-input100"></span>
            </div>


            <div class="wrap-input100 validate-input">
              <input class="input100" type="password" name="password" placeholder="password" required>
              <span class="focus-input100"></span>
            </div>


            <div class="container-contact100-form-btn">
              <button type = "submit" class="contact100-form-btn" type="submit" value="Signup" name="Signup"  >
                <span>
                  <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
                  Signup
                </span>
              </button>
            </div>
          </form>
        </div>
      </div>
      <?php	
      error_reporting(0);
      $servername = "localhost";
      $username = "root";
      $password = "";
      $db = "petshopdb";
      $conn = mysqli_connect($servername, $username, $password , $db);

      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

    //mysqli_select_db('petshopdb', $conn);

  
  if($_POST['Signup']){
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $phone_number=$_POST['phone_number'];
    $card_number=$_POST['card_number'];
    $expiry_date=$_POST['expiry_date'];
    $card_pin=$_POST['card_pin'];


    $sql1="INSERT INTO user_details(user_name,password,phone_number) VALUES('$user_name','$password','$phone_number')";
    
    $sql2="INSERT INTO creditcard_details(card_number, expiry_date, card_pin, user_name) VALUES ('$card_number', '$expiry_date', '$card_pin', '$user_name')";

    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);

    if ($result1 == true &&  $result2 == true) {
      echo ""; //New records created successfully";
      echo "<div class='inc'>Successfully Signed Up!</div>";
    } else {
      echo "Error: " . $sql1 . $sql2 . "<br>" . mysqli_error($conn);
    }



    echo "<div class='queryused'>SQL Query Used : <div class='query'>INSERT INTO user_details(user_name,password,phone_number) VALUES('$user_name','$password','$phone_number')');</div></div>";
    echo "<div class='queryused'>SQL Query Used : <div class='query'>INSERT INTO creditcard_details(card_number, expiry_date, card_pin, user_name) VALUES ('$card_number', '$expiry_date', '$card_pin', '$user_name')";

  }

  ?>


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


<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
  <!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
    <!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->