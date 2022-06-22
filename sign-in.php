<?php

require_once "db.php";

//Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $mail = $_POST["email"];
   $passwd = $_POST["password"];

   $query = "SELECT * FROM signin WHERE email='$mail' AND password='$passwd'";
   $result = mysqli_query($con, $query);
   $rows = mysqli_num_rows($result);
   if($rows == 1){
      header("Location: index.html");
   }
   else{
      echo "Wrong password or email";
   }
}

mysqli_close($con);

?>



      <!DOCTYPE html>
      <html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <title>Sign In</title>
        </head>
        <link rel="stylesheet" href="styles.css">
        <body>
          <section class="section-book">
            <div class="row">
              <div class="book">
                <div class="book-form">
                  <div class="margin-8">
                     <h1 class="heading-secondary">Sign In</h1>
                     <form class="mt-4" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">

                           <input type="email" class="form-input" id="exampleInputEmail2" placeholder="Enter email" name="email">
                            <label for="exampleInputEmail2" class="form-label">Email address</label>
                        </div>
                        <div class="form-group">

                           <input type="password" class="form-input" id="exampleInputPassword2" placeholder="Password" name="password">
                            <label for="exampleInputPassword2" class="form-label">Password</label>
                        </div>
                        <div class="sign-info">
                           <input type="submit" class="btn btn-green" name="submit" value="Sign in">
                           <span style="color:white;">Don't have an account? <a href="sign-up.php">Sign up</a></span>
                        </div>
                     </form>
                  </div>
                </div>

            </div>
          </section>
















   </body>
</html>
