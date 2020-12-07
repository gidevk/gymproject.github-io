<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="js/text" href="/js/script.js">


</head>

<body>

    <header>
        <img src="/image/logo8.jpg" alt="" style="width: 100%;">
        <div class="left">
            <img src="/image/logo1.jpg" alt="logo">
        </div>
        <div class="mid">
            
        <ul class="navbar">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html"> About Us</a></li>
            <li><a href="fitness.html">Fitness Calculator</a></li>
            <li><a href="#contact">Contact Us</a></li>
            
        </ul>

        </div>

        <div class="right">
            <button class="btn">Facebook</button>
            <button class="btn">WhatsApp</button>
            <button class="btn">Instagram</button>

        </div>


        <!-- Slideshow container -->
        <div class="slideshow-container" style="border: 2px solid red; height: 300px;">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="/image/jym4.jpg">
            <div class="text">Caption Text</div>
            </div>
        
            <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="/image/jym5.jpg" >
            <div class="text">Caption Two</div>
            </div>
        
            <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="/image/jym3.jpg" style="object-fit:cover;">
            
            <div class="text">Caption Three</div>
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

   
    </header> 

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
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
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