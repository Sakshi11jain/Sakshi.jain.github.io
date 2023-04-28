<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <style>
      body{
        background-image: url("Images/background.jpeg");
        background-repeat: no-repeat;
        background-size: cover;
        backdrop-filter: blur(5px);
        display: flex;
  			justify-content: center;
  			align-items: center;
  			height: 100vh;
}

.box {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  text-align: center;
  box-sizing: border-box;
  color: #551a8b;
  border: 2px solid black;
  font-size: 25px;
  font-weight: bold;
  background-color: rgb(208, 207, 207);
  width: 70%;
  margin: 0 auto;
  padding: 25px;
  border-radius: 5px;
}

form {
  flex: 1;
}

.image {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index:0;
}

.image img {
  max-width: 100%;
  height: auto;
  z-index:0;
}

h1{
        text-align:center;
        text-decoration:underline;
        color:black;
}

label {
  display: block;
  font-weight: bold;
  margin-right:40%;
        }

input[type="text"],
input[type="email"],
    textarea {
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
      width: 60%;
      align-items: center;
      box-sizing: border-box;
      margin-bottom: 10px;
    }
    textarea {
      height: 100px;
    }
    button[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      font-size: 16px;
    }
    .phpstyle{
      display: flex;
      justify-content: center;
      align-items: center;
      color:#551a8b;
      flex-flow: column;
    }
    .message {
      position:absolute;
      left:55%;
      top:85%;
      font-size: 25px;
      font-weight: bold;
      color: #551a8b;
    }
    .Home-button{
      position:absolute;
      left:78.5%;
      top:5%;
    }
    </style>
</head>
<body>
    <div class="box">
        <form method="POST">
          <h1>Contact Us</h1>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required><br><br>
      
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required><br><br>
      
          <label for="subject">Subject:</label>
          <input type="text" id="subject" name="subject" required><br><br>
      
          <label for="message">Message:</label>
          <textarea id="message" name="message" required></textarea><br><br>
      
          <button type="submit" name="contact-us">Submit</button>
        </form>
        <div class="Home-button">
          <a href="index.php"><button style="background-color:#CF9FFF; padding:4px; border-radius: 3px;">Go To Home</button></a>
        </div>
        <div class="image">
          <img src="Images/PracView.png" alt="PracView Image">
        </div> 
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
            if (isset($_POST['contact-us']))
            {
                  $name = mysqli_real_escape_string($conn, $_POST['name']);
                  $email = mysqli_real_escape_string($conn, $_POST['email']);
                  $subject = mysqli_real_escape_string($conn, $_POST['subject']);
                  $message = mysqli_real_escape_string($conn, $_POST['message']);
                  
                  $sql="INSERT INTO `contactus`(`name`,`email`,`subject`,`message`) VALUES ('$name','$email','$subject','$message') ";
                  $result=mysqli_query($conn, $sql);
                  echo "<div class = 'message'>ThankYou For Contacting Us!</div>";
                  exit(); 
            }
      ?> 
</body>
</html>