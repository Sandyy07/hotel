<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Reviews</title>
  </head>
  <link rel="stylesheet" href="styles.css">
  <body>



    <section class="section-stories">
      <!-- keeping video in a div which is same size of section in element called video -->
      <div class="bg-video">
        <video class="bg-video-content" autoplay muted loop >
          <source src="images/video1.mp4" type="video/mp4">
            <source src="images/video1.webm" type="video/webm">
              Your browser is not supported
        </video>
      </div>
      <div class="u-center-text margin-8">
        <h2 class="heading-secondary">

        </h2>
      </div>
       <div class="row"> <!--row only for centering here -->
        <div class="story">
          <figure class="story_shape">
          <img src="images/default.jpg" alt="" class="story-img">
          <figcaption class="story-caption">
            Sandy
          </figcaption>
          </figure>
          <div class="story_text">
            <h3 class="heading-tertiary margin-2">
              <?php

              $host='localhost';
              $user='root';
              $password='';
              $dbname='hotel_reviews';
              $con= mysqli_connect($host,$user,$password,$dbname);

              if(!$con){
                  die("connection failed".mysqli_connect_error($con));
              }
              else{
                // echo "<br>";
                //   echo 'connected succesfully';
                //   echo "<br>";
              }

              $sql="SELECT name,review FROM reviewdataa WHERE id=3";

              $results=mysqli_query($con,$sql);

              if(mysqli_num_rows($results)>0){
          while($row=mysqli_fetch_array($results)){
            echo "<p style='visibility:hidden'>$row[1]</p>";

            echo "<h4>$row[0] </h4>";
              echo "<h4>$row[1]</h4>";
            echo "<p style='visibility:hidden'>$row[1]</p>";

          }

              }

              mysqli_close($con);
              ?>



            </h3>

          </div>
        </div>
      </div>

      <div class="row"> <!--row only for centering here -->
       <div class="story">
         <figure class="story_shape">
         <img src="images/default.jpg" alt="" class="story-img">
         <figcaption class="story-caption">
           Tommy
         </figcaption>
         </figure>
         <div class="story_text">
           <h3 class="heading-tertiary margin-2">
             <?php

             $host='localhost';
             $user='root';
             $password='';
             $dbname='hotel_reviews';
             $con= mysqli_connect($host,$user,$password,$dbname);

             if(!$con){
                 die("connection failed".mysqli_connect_error($con));
             }
             else{
               // echo "<br>";
               //   echo 'connected succesfully';
               //   echo "<br>";
             }

             $sql="SELECT name,review FROM reviewdataa WHERE id=4";
             $results=mysqli_query($con,$sql);

             if(mysqli_num_rows($results)>0){
         while($row=mysqli_fetch_array($results)){
                  echo "<p style='visibility:hidden'>$row[1]</p>";
                  echo "<h4>$row[0] </h4>";
                    echo "<h4>$row[1]</h4>";
                  echo "<p style='visibility:hidden'>$row[1]</p>";
         }

             }

             mysqli_close($con);
             ?>
           </h3>

         </div>
       </div>
     </div>


    </section>

















  </body>
</html>
