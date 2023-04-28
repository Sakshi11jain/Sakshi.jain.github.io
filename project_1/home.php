<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PracView</title>
    <link rel="stylesheet" href="home.css?v=<?php echo time(); ?>">
</head>
<body>
    <nav id="top">
        <span><a href="#top"><img src="Images\PracViewLogo.png" alt="PracView Logo"></a></span>
        <ul>             
         <li><a href="Example.html">Example QnA</a></li>
         <li><a href="contact.html">Contact us</a></li>
         <li><a href="about.html">About us</a></li>
            <li>
              <div class="dropdown">
                <a>Interview Rounds</a>
                <ul class="options">
                  <li>Technical Round</li>
                  <li>Managerial Round</li>
                  <li>Hr Round</li>
                </ul>
              </div>
            </li>   
         <li></li>
        </ul>
    </nav>
    <div id="login-modal" class="modal">
      <div class="wrapper">
        <span class="close" onclick="hideLogin()">&times;</span>
         <div class="title-text">
           <div class="title login">
              Login Form
           </div>
           <div class="title signup">
              Signup Form
           </div>
        </div>
        <div class="form-container">
           <div class="slide-controls">
              <input type="radio" name="slide" id="login" checked>
              <input type="radio" name="slide" id="signup">
              <label for="login" class="slide login">Login</label>
              <label for="signup" class="slide signup">Signup</label>
              <div class="slider-tab"></div>
           </div>
           <?php
           $servername = "localhost";
            $username = "root";
            $password = "";
            $databasename = "project";
            $conn = mysqli_connect($servername, $username, $password, $databasename);
            if (!$conn)
            {
               die("Connection not established".mysqli_error());
            }
            if (isset($_POST['signup']))
            {
                  $Email = mysqli_real_escape_string($conn, $_POST['Email']);
                  $userName = mysqli_real_escape_string($conn, $_POST['userName']);
                  $password = mysqli_real_escape_string($conn, $_POST['password']);
                  
                  $sql="INSERT INTO `signup`(`email`,`name`,`password`) VALUES ('$Email','$userName','$password') ";
                  $result=mysqli_query($conn, $sql);
                  header("Location: index.php");
                  exit(); 
            }
            ?>
           <div class="form-inner">
           <form method="POST" class="login">
                 <div class="field">
                    <input type="text" name="user_name" placeholder="User Name" required>
                 </div>
                 <div class="field">
                    <input type="password" name="pass_word" placeholder="Password" required>
                 </div>
                 <?php
            if (isset($_POST['log-in']))
            {
              $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
              $pass_word = mysqli_real_escape_string($conn, $_POST['pass_word']);
    
              $sql = "SELECT * FROM `signup` WHERE `name`='$user_name' AND `password`='$pass_word'";
              $result = mysqli_query($conn, $sql);
              $count = mysqli_num_rows($result);
    
              if ($count == 1) {
                // Password matches, user is authenticated
                header("Location: index.php");
                exit();
              } 
              else {
                // Password does not match, show error message
                echo "<script>alert('Invalid Username or Password !!!');</script>";
                echo "Invalid Username Or Password!!!";
                echo " Please Try Again.";
              }
            }
            ?>
                 <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" name="log-in" value="Login">
                 </div>
                 <div class="signup-link">
                    Not a member? <a href="">Signup now</a>
                 </div>
              </form>
              <form method="POST" class="signup">
                 <div class="field">
                    <input type="text" name="Email" placeholder="Email Address" required>
                 </div>
                 <div class="field">
                    <input type="text" name="userName" placeholder="User Name" required>
                 </div>
                 <div class="field">
                    <input type="password" name="password" placeholder="Password" required>
                 </div>
                 <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" name="signup" value="Signup">
                 </div>
              </form>
           </div>
        </div>
     </div>
   </div>
    <div class="container">
      <a id="login-link" onclick="showLogin()"><div class="box">Get Started</div></a>
      <img class = "image1" src="Images/home_image1.gif" alt="interview image">
      <div class="Heading">Practice Interview With PracView</div>
    </div>
      <div class="column">
        <p class = "p">Welcome to PracView, your one-stop destination for practicing and improving your interview skills! 
          Our app offers a simulated interview experience with three rounds of questions - technical, managerial, and HR - 
          to help you prepare for your next job interview. We also provide a quiz section with multiple-choice questions to
           test your knowledge and build confidence. With PracView, you can practice in a safe and supportive environment and
            gain the skills and confidence to ace your next interview. Sign up today and start your journey to interview success! 
            ALL THE BEST !!!
        </p>
      </div>
    <script>
      const pracViewLink = document.querySelector('#top span');
      pracViewLink.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });

      function showLogin() {
        const modal = document.querySelector('#login-modal');
        modal.style.display = "block";
      }

      function hideLogin() {
        const modal = document.querySelector('#login-modal');
        modal.style.display = "none";
      }

      const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
         
    </script>
    <footer>
      <p>Copyright © 2023 - PracView</p>
    </footer>
</body>
</html>