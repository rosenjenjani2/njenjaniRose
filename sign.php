<html>
<head>
    <title>Signup Form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
    <div>
    <?php
    if (isset($_POST['create'])) {
      $firstname    = $_POST['firstname'];
      $email       = $_POST['email'];
      $password    = $_POST['password']; 
    

      $sql = "INSERT INTO users (firstname, email, password) values(?,?,?)";
      $stmtinsert = $db->prepare($sql);
      $result = $stmtinsert->execute([ $firstname, $email, $password]);
      if($result){
        echo 'successfully saved.';
      }else{
        echo 'There errors retype properly';
      }


    }


    ?>
  </div>
    <div id="Signup-box">
        <div class="left-box">
            <h1>Sign Up</h1>

            <input type="text" name="Username" placeholder="Username" />
            <input type="text" name="Email" placeholder="Email" />
            <input type="password" name="password" placeholder="Password" />
            <input type="submit" name="signup-button" value="Sign Up">


        </div>
        <div class="right-box">
            <span class="signinwith">Sign Up With<br/>Social Network</span>

            <button class="social facebook">Log in with Facebook</button>
            <button class="social twitter">Log in with Twitter</button>
            <button class="social google">Log in with Google+</button>


        </div>
        <div class="or">OR</div>
    </div>

</body>
</html>