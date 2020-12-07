<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">
  

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     -->
   
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/js/script.js">
  

  </head>

<body>

  <header style="min-height: 100px; border: 2px solid red;">
    <div class="contain" >
      <img src="/image/logo8.jpg" alt="" style="width: 100%;">
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


        <a href="#loginfrm"><button type="button" onclick="myFunction()" id="join" class="btn"
            style="margin: 8px; padding: 6px; width: 180px; color:black; font-size: 20px; background-color: rgb(99, 99, 245);">Join
            Us</button> </a>       

      </div>
    </div>
    
  </header>

  
   <main style="border: 2px solid red; background:  #A1A1A1; ">
     <div class="center" method="POST" action="#">
        <h2>Sign Into Your Account</h2>
        <table border="collepse">
          <tr>
            <td>
              <label for="userName">UserName</label>
            </td>
            <td>
              <input type="text" name="username" id="username" placeholder="Username">
            </td>
          </tr>
          <tr>
            <td>
              <label for="password">Password</label>
            </td>
            <td>
              <input type="text" placeholder="********">
            </td>
          </tr>
          <tr >
            <td colspan="2"> <button class="btn" style="margin: auto; left: 400px;">LogIn</button> <br>
              <a href="forget.php">Forgot Password?</a> <br>
              <label for="ac">Don't Have an account <a href="signup.php">Register here</a></label>
              <br>
              <a href="#!">Terms of use.</a> <br>
              <a href="#!">Privacy policy</a>
            </td> 
          </tr>
         
          </table>
        <br> 
        
     </div>

   

  </main>
  


 
</body>

</html>

