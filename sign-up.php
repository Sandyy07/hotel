<?php

require_once "db.php";


//Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $mail = $_POST["email"];
   $passwd = $_POST["password"];
   $num = $_POST["mobile"];
   $fname = $_POST["fullname"];


   $query = "INSERT into signin (fullname, email, password, mobile) VALUES('$fname', '$mail', '$passwd', '$num')";
   $result = mysqli_query($con, $query);
   if($result){
      echo "You are registered Successfully.";
      echo "Go to Sign In Page.<a href='sign-in.php'>Link</a>";
   }
   else{
      echo "Something went wrong";
   }
}

mysqli_close($con);





?>



      <!DOCTYPE html>
      <html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <title>Sign Up</title>
        </head>
        <link rel="stylesheet" href="styles.css">
        <body>
          <section class="section-book">
            <div class="row">
              <div class="book">
                <div class="book-form">
                  <div class="margin-8">
                     <h1 class="heading-secondary">Sign Up</h1>
                     <form class="mt-4" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">

                           <input type="name" class="form-input" id="form-label" placeholder="Your Full Name" name="fullname">
                           <label for="exampleInputName" class="form-label">Your Full Name</label>
                        </div>
                        <div class="form-group">

                           <input type="email" class="form-input" id="exampleInputEmail3" placeholder="Enter email" name="email">
                           <label for="exampleInputEmail3" class="form-label">Email address</label>
                        </div>
                        <div class="form-group">

                           <input type="password" class="form-input" id="exampleInputPassword2" placeholder="Password" name="password">
                           <label for="exampleInputPassword2" class="form-label">Password</label>
                        </div>
                        <div class="form-group">

                           <input type="number" class="form-input" id="exampleInputMobile2" placeholder="Mobile" name="mobile">
                            <label for="exampleInputPassword2" class="form-label">Mobile Number</label>
                        </div>
                        <div class="form-group">
                           <input type="submit" class="btn btn-green" name="submit" value="Sign up">
                           <span style="color:white;">Already Have Account ? <a href="sign-in.php">Sign In</a></span>
                        </div>
                     </form>
                  </div>
                </div>
              </div>
            </div>
          </section>

        </body>
      </html>


   </body>

</html>
