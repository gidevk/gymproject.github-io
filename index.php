
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Gym</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/js/script.js">
  <link rel="mysql" href="mygym.sql">

</head>

<body>

  <header>
    <video autoplay muted loop id="myVideo">
      <source src="/image/video.mp4" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>

    <div class="contain">
      <!-- <img src="/image/logo8.jpg" alt="" style="width: 100%;"> -->
      <div class="left">
        <img src="/image/logo1.jpg" alt="logo">
      </div>
      <div class="mid">

        <ul class="navbar">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php"> About Us</a></li>
          <li><a href="classes.php">Calsses</a></li>
          <li><a href="#contact">Contact Us</a></li>

        </ul>

      </div>


      <div class="right">
    
        <a href="https://www.facebook.com/"> <img src="/image/fblogo.jpg" alt="fb"> </a>
        <a href="https://www.twitter.com"><img src="/image/twtlogo.png" alt="twiter"></a>
        <a href="https://www.github.com"><img src="/image/ghlogo.png" alt="github"> </a>
        <a href="https://www.pinterest.com"><img src="/image/ptlogo.png" alt="pinterest"> </a> <br>

     
        <a href="signup.php"><button type="button" id="join" class="btn" onclick="MyFunction()"
            >Join
            Us</button> </a>
        <!-- <a href="signup.php" class="btn">Join Us</a> -->
      </div>


      <!-- Slideshow container -->
      <div class="slideshow-container" style=" height: 300px;">


        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="/image/jym4.jpg">

          <!-- <video src="/image/video.mp4" style="animation-play-state: paused;"></video> -->
          <div class="text">
            <h1>Healthy Body <br> Healdy Life</h1>
          </div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="/image/jym5.jpg">
          <div class="text">
            <h1>If it’s not personal, It’s not possible! <br>See The Results and Feel the difference immediatly.</h1>
          </div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="/image/jym8.jpg" style="align-items: center;">

          <div class="text">
            <h1>Action is the foundational key to all success.</h1>
          </div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
      </div>
      <br>

      


    </div>

  

  </header>


  <main >
    <div id="main">

      
      <!-- <img src="/image/jym1.jpg" style="object-fit:cover;"> -->
      <!-- <img src="/image/jym1.jpg" alt="jym1 pic"> -->
      <h2>Our Gym is Your Gym </h2>

      <h4>Kick your feet up! With a gym designed around you, we think you’ll love it here.</h4>
      <br> <br> <br> <br>

      <h1> Energy is for Everyone</h1>
      <h4>Believe in the power of a motivating group fitness community.</h4>
      <br><br><br><br>

      <div class="open" style="text-align:left; padding: 15%;">
        <h1>BODDYWORK GYM IS OPEN!</h1>
        <h4>BODDYWORK Gym,Hyderabad premier fitness gym in University of hyderabad with internationally certified
          personal trainers, is waiting for you!</h4>

        <h4>We are offering you the chance to get fit the fun way with a Free Day Pass! With high octane, energetic
          music, and a fun, motivating environment,BODDYWORK Gym is your fitness destination!</h4>

        <ul>
          <li>Internationally Certified Personal Trainers</li>
          <li>Dedicated Personal Training & 1500 Sq Ft Open Air CrossFit Studio</li>
          <li>Open 7 days between 6:00 AM to 10:00 PM</li>
          <li>Convenient Location.</li>
          <li>Beginner-friendly Group Fitness Classes</li>
          <!-- <li></li> -->
          <li> Book Your Favorite Classes, Track Your Workout & Diet Plan Via Our Free App </li>
          <li>Clean, Comfortable, Safe Environment</li>

        </ul>
      </div>


      <div>
        <table>
          <tr>

          </tr>
        </table>
      </div>

      

      <style>
     
      </style>
      


    </div>


  </main>


  <footer class="footer"> <br>
    <h1>Keep your body fit .<br> & strong to <br>
      live longer.</h1>
    <!-- <h1>Action is the foundational key to all success.</h1> -->
    <hr>
    <!-- Footer Section -->
    <div class="footer" id="contact">
      <table>
        <tr>
          <td style="width: 50%;">

            <div class="col-md-6 contact" style="margin: 20px; text-align:left; padding: 15%;">
              <h1>About Trainer</h1><br>
              <p>There are up to ten GYM trainer in this <b> BoddyWork Gym </b>. <br> <br> Some may call it a tagline,
                but for us, it’s a way of life. It’s our Monday-thru-every-day mantra. An unfiltered philosophy that
                drives us to create a community and a gym for all.

                No judgments means room for everyone, regardless of shape, size, age, race, gender or fitness level. No
                matter your workout of choice, we want you to feel good while reaching your goals </p>

              <!-- <p>Pellentesque eget dolor gravida, tempus purus ac, ultricies mauris. Etiam est nisl,<br>
                          mole stie sed egestas bibendum, varius eu diam.</p> -->
            </div>

          </td>
          <td style="text-align: center;">
            <div class="col-md-3 contact">
              <h1>Contact Us</h1>

              <!-- <a href="mailto:support@gmail.com">contact@iland.com</a> </div> -->

              <aside id="widget_contacts_1613631680_widget" class="widget widget_contacts">


                <div class="contacts_wrap">
                  <div class="contacts_info">
                    <span class="contacts_phone">
                      <span class="contacts_label"> Phone:</span>
                      <span class="contacts_info_content">
                        <a href="tel: (+91) 95 074 23 209 ">(+91) 95 074 23 209 </a> <br><br>
                      </span>
                    </span>
                    <span class="contacts_email">
                      <span class="contacts_label"> E-Mail:</span>
                      <span class="contacts_info_content">
                        <a href="indradevjee@gmail.com">indradevjee@gmail.com</a> <br><br>
                      </span></span>
                    <span class="contacts_address">
                      <span class="contacts_label"> Address:</span>
                      <span class="contacts_info_content">Hyderabad, Telengna, <br>500048, INDIA</span>
                    </span>

                    <p style="text-align: center;"> Contact our 24/7 customer support if you have any questions. <br>
                      We'll help you out. </p>
                  </div>
                </div><!-- /.contacts_wrap -->
              </aside>
            </div>
          </td>

        </tr>
      </table>
      <div class="container">

        
        </ul>
      </div>


    </div>


  </footer>
</body>

<script>
  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 10000); // Change image every 2 seconds
  }

  var slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
</script>

</html>