<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration paga</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<!-- <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet"> -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> 
	


<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/js/script.js">
</head>
<body>

  <header style="min-height: 100px;">
    <!-- <div class="contain" > -->
      <!-- <img src="/image/logo8.jpg" alt="" > -->
      <div class="left">
        <img src="/image/logo1.jpg" alt="logo">
      </div>
      <div class="mid" >

        <ul class="navbar">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php"> About Us</a></li>
          <li><a href="classes.php">Calsses</a></li>
          <li><a href="#contact">Contact Us</a></li>

        </ul>

      </div>


      <div class="right" >
    
        <a href="https://www.facebook.com/"> <img src="/image/fblogo.jpg" alt="fb"> </a>
        <a href="https://www.twitter.com"><img src="/image/twtlogo.png" alt="twiter"></a>
        <a href="https://www.github.com"><img src="/image/ghlogo.png" alt="github"> </a>
        <a href="https://www.pinterest.com"><img src="/image/ptlogo.png" alt="pinterest"> </a> <br>


        <a href="signup.php"><button type="button" onclick="myFunction()" id="join" class="btn"
            style="margin: 8px; padding: 6px; width: 180px; color:black; font-size: 20px; background-color: rgb(99, 99, 245);">Join
            Us</button> </a>       

      </div>
    <!-- </div> -->
    
  </header>

  <main style="background: grey; min-height: 720px; ">

    <!-- <span id="msg"></span> -->

    
    <form action="insert.php" method="POST" class="center"  >
      <div class="lgform" id="loginfrm">
        <h2>Get membership</h2>
        <label for="text"></label>
        <input type="text" name="name" id="name" placeholder="Enter your Name"><br><br>
        <input type="tel" name="mobile" id="mobile" placeholder="Enter your mobile no."><br><br>
        <input type="email" name="email" id="email" placeholder="Enter Your E-mail"><br><br>
        <input type="number" name="age" id="age" placeholder="Enter Your age"><br><br>

        <label for="gender">Choose Gender</label>

        <select name="gender" id="gender" >
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
        <br>

        <button type="submit" name="submit" id="submit" class="btn">Submit</button>
      </div>
    </form>



    <!-- for showing the user data form database -->

  <div class="container">
   <br/>
   <h2 align="center">Search Members deatils with Ajax Live </h2><br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Members NAME" class="form-control" />
    </div>
   </div>
   <br/>
   <div id="result"></div>
  </div>
      <?php 
      include('insert.php');
    
      ?>
  </main>

  <footer>

  </footer>
  
<script >
  
$(document).ready(function(){
  var form =$('#loginfrm');

  $('#submit').click(function(){
    // e.preventDefault();
    $.ajax({
      url: form.attr("action"),
      type: 'post',
      data: $("#loginfrm input").serialize(),

      success:function(data){
        // alert('DAta added successfully!.')
        console.log(data);
      }

    });
  });
});

// -------------------------------------------------------------------

$(document).ready(function(){

load_data();

function load_data(query)
{
 $.ajax({
  url:"fetch.php",
  method:"POST",
  data:{query:query},

  success:function(data)
  {
   $('#result').html(data);
  }

 });
}

$('#search_text').keyup(function(){
 var search = $(this).val();
 if(search != '')
 {
  load_data(search);
 }
 else
 {
  load_data();
 }
});
});

 </script>
  
</body>
</html>

