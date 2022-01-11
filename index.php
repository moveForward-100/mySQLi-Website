<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <meta charset='utf-8'>

    <title>Petshop - moveForward(100)</title>
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
          <form class="contact100-form validate-form"  action="index.php" method="post">

            <div class="wrap-input100 validate-input">
              <input class="input100" type="text" name="user_name" placeholder="user_name">
              <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input">
              <input class="input100" type="text" name="password" placeholder="password">
              <span class="focus-input100"></span>
            </div>
            <div class="container-contact100-form-btn">
              <button class="contact100-form-btn" type="submit" value="Login" name="Login" >
                <span>
                  <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
                  Login
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

      if (!$conn) 
      {
        die("Connection failed: " . mysqli_connect_error());
      }

      if(isset($_POST['Login'])) {
        $user_name=$_POST['user_name'];
        $password=$_POST['password'];
        $sql="SELECT * FROM user_details WHERE user_name ='$user_name' AND password ='$password'";

        $result= mysqli_query($conn, $sql);
        $count=mysqli_num_rows($result);

        if($count>0)
        {
          
          //Displaying the Shop button only after a successful login
          echo "
          <div class='container-contact100-form-btn'>
          <a class='contact100-form-btn' href='page.php'>Shop</a>
          </div>
          <div class='inc'>Login successful!</div>";


          //echo "<script>window.open('page.php', '_blank');</script>";
        }
        else
        {
          echo "<div class='inc'>Incorrect username or password! Try again.</div>";

        }
        echo "<div class='queryused'>SQL Query Used : <div class='query'>SELECT * FROM user_details WHERE user_name='$user_name' and password='$password'</div></div>";


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