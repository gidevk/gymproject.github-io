<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>classes</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/js/script.js">


</head>

<body>

  <header>
    <video autoplay muted loop id="myVideo">
      <source src="/image/video.mp4" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>

    <div class="contain">
      <img src="/image/logo8.jpg" alt="" style="width: 100%;">
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


        <a href="signup.php"><button type="button"  id="join" class="btn"
          >Join
          Us</button> </a>
        
       

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

      </div>
      <br>

      <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>


    </div>

   


  </header>


  <main >

  
    <div class="site-content">
  <!-- main content start : everything outside these tags are the framework elements and inside are content elements -->


  <span id="DeltaPlaceHolderMain">

    <section class="gym-floor">
      <div class="gym-floor-header">
        <div class="gym-floor-header-inner">
          <div class="gym-floor-header-content">
            <h1 ID="CLASSES">Classes</h1>
            <h2 class="white">Group Exercise Classes
            </h2>
            <p class="p1Body white">Our expert instructors will guide you through new routines designed to get you
              moving in <br> new and exciting ways. Our group exercise classes are a fun and effective way to work out <br>
              and help you reach your exercise goals. Come and try something new.
            </p>
          </div>
        </div>
      </div>
      <div class="gym-floor-content">
        <div class="card gym-floor-card cycle">
          <div class="card-content">
            <h2 class="white category-name">Grid Training </h2>
            <p class="p2body white description">Grid Training is our high intensity, interval programme designed
              to build strength, stability, stamina and team spirit. </p>
            <p class="p3-14 white" style="margin-bottom:24px">Includes:

              <span class="p3-14-bold">Grid Training</span>
            </p>
            <div class="button-row" style="margin-top:0">
              <div class="button-default button-default-red small-button"
                style="padding-right:50px;padding-left:50px">
              </div>
            </div>
          </div>
          <div class="card-image">

            <img
              src="https://www.virginactive.co.za/sites/content/PublishingImages/Classes/ClassCategory/category_header/grid.jpg"
              alt="">

          </div>
        </div>
        <div class="card gym-floor-card cycle">
          <div class="card-content">
            <h2 class="white category-name">Yoga </h2>
            <p class="p2body white description">Yoga for everyone (yes, even you!). Our classes focus on aligning
              and <br> strengthening your body and restoring a sense of calm.</p>
            <p class="p3-14 white" style="margin-bottom:24px">Includes:
              <span class="p3-14-bold">Yoga Calm, Yoga Strength, Yoga Align</span>
            </p>
            <div class="button-row" style="margin-top:0">
              <div class="button-default button-default-red small-button"
                style="padding-right:50px;padding-left:50px">
              </div>
            </div>
          </div>
          <div class="card-image">

            <img
              src="https://www.virginactive.co.za/sites/content/PublishingImages/Classes/ClassCategory/category_header/yoga.jpg"
              alt="">
          </div>
        </div>
        <div class="card gym-floor-card cycle">
          <div class="card-content">
            <h2 class="white category-name">Cycle </h2>
            <p class="p2body white description">Cycle takes outdoor cycling principles and presents them to you in
              an indoor studio. <br> Let the music set the pace as you boost your fitness levels with time in the
              saddle. </p>
            <p class="p3-14 white" style="margin-bottom:24px">Includes:
              <span class="p3-14-bold">Ride</span>
            </p>
            <div class="button-row" style="margin-top:0">
              <div class="button-default button-default-red small-button"
                style="padding-right:50px;padding-left:50px">
              </div>
            </div>
          </div>
          <div class="card-image">

            <img
              src="https://www.virginactive.co.za/sites/content/PublishingImages/Classes/ClassCategory/category_header/CYCLE.jpg"
              alt="">

          </div>
        </div>
        <div class="card gym-floor-card cycle">
          <div class="card-content">
            <h2 class="white category-name">Dance and Conditioning </h2>
            <p class="p2body white description">Choreographed routines that use elements of dance to make you
              sweat, sway and smile while you shake it off.</p>
            <p class="p3-14 white" style="margin-bottom:24px">Includes:
              <span class="p3-14-bold">Pound, Zumba, Core Conditioning, Shape, Step</span>
            </p>
            <div class="button-row" style="margin-top:0">
              <div class="button-default button-default-red small-button"
                style="padding-right:50px;padding-left:50px">
              </div>
            </div>
          </div>
          <div class="card-image">
            <img
              src="https://www.virginactive.co.za/sites/content/PublishingImages/Classes/ClassCategory/category_header/studio-one.jpg"
              alt="">
          </div>
        </div>
        <div class="card gym-floor-card cycle">
          <div class="card-content">
            <h2 class="white category-name">Boxing </h2>
            <p class="p2body white description">We use the basic principles of combat to create fun,  fast-paced
              classes to KO calories,<br> build stamina and endurance  and allow you to blow off some steam.</p>
            <p class="p3-14 white" style="margin-bottom:24px">Includes: <span class="p3-14-bold">Kick, Boxing,
                Rumble</span> </p>
            <div class="button-row" style="margin-top:0">
              <div class="button-default button-default-red small-button"
                style="padding-right:50px;padding-left:50px"></div>
            </div>
          </div>
          <div class="card-image"> <img
              src="https://www.virginactive.co.za/sites/content/PublishingImages/Classes/ClassCategory/category_header/boxing.jpg"
              alt=""> </div>
        </div>
        <div class="card gym-floor-card cycle">
          <div class="card-content">
            <h2 class="white category-name">Pilates </h2>
            <p class="p2body white description">Strengthen your body by preparing it to move better in the real
              world. Pilates focuses on precision and posture. </p>
            <p class="p3-14 white" style="margin-bottom:24px">Includes: <span class="p3-14-bold">Reformer Pilates,
                Pilates, Anti-Gravity Pilates</span> </p>
            <div class="button-row" style="margin-top:0">
              <div class="button-default button-default-red small-button"
                style="padding-right:50px;padding-left:50px"> </div>
            </div>
          </div>
          <div class="card-image"> <img src="https://www.virginactive.co.za/sites/content/PublishingImages/Classes/ClassCategory/category_header/pilates.jpg"
              alt=""> </div>
        </div>
        <div class="card gym-floor-card cycle">
          <div class="card-content">
            <h2 class="white category-name">Swim </h2>
            <p class="p2body white description">Learn to swim, do your laps or take in a class, we’ve got water
              workouts <br> that will leave you feeling stronger and energised.</p>
            <p class="p3-14 white" style="margin-bottom:24px">Includes: <span class="p3-14-bold">Splash Aqua
                Fitness, Learn to Swim</span> </p>
            <div class="button-row" style="margin-top:0">
              <div class="button-default button-default-red small-button"
                style="padding-right:50px;padding-left:50px">
              </div>
            </div>
            <div class="card-image"><img
                src="https://www.virginactive.co.za/sites/content/PublishingImages/Classes/ClassCategory/category_header/swim.jpg"
                alt=""> </div>
          </div>
          <div class="card gym-floor-card cycle">
            <div class="card-content">
              <h2 class="white category-name">Kids </h2>
              <p class="p2body white description">From 6 months to 13 years, kids have access to developmentally
                appropriate <br> movement spaces where they can move in a safe and secure environment.</p>
              <p class="p3-14 white" style="margin-bottom:24px">Includes: <span class="p3-14-bold">Grid Squad,
                  Go52,
                  GameOn, Boost </span> </p>
              <div class="button-row" style="margin-top:0">
                <div class="button-default button-default-red small-button"
                  style="padding-right:50px;padding-left:50px"> </div>
              </div>
            </div>
            <div class="card-image"> <img
                src="https://www.virginactive.co.za/sites/content/PublishingImages/Classes/ClassCategory/category_header/kids.jpg"
                alt=""> </div>
          </div>
        </div>
    </section>
    <div class="clearfix">
      <!-- empty -->
    </div>
    <!-- module row container end -->

  </span>

  <!-- main content end : everything outside these tags are the framework elements and inside are content elements -->

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

        <!-- <div class="col-md-3 contact footer-menu"  style="margin: 20px;">
          <h1>Social</h1>
          <ul>
            <li><a href="https://www.facebook.com/">Facebook</a></li>
            <li><a href="https://www.twitter.com">Twitter</a></li>
            <li><a href="https://www.github.com">Github</a></li>
            <li><a href="https://www.pinterest.com">Pinterest</a></li>
             <li><a href="https://www.googelplus.com">Google Plus</a></li> -->
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


