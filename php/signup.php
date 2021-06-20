<?php
    session_start();
    include 'backend.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/signup.css">
    <title>Sign up</title>
    <style>
        .error {color: #FF0000;}
        .success-field {
            padding: 5px 55px;
            border-radius: 10px;
            background-color: #04AA6D;
            color: white;
        }
        .fail-field {
            padding: 5px 51px;
            border-radius: 10px;
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
  <nav>
    <a href="#"><img id ="logo"src = "../images/logo.jpg"></a>
    <div class="nav-links" id="navLinks">
      <i class="fas fa-times" onclick="hideMenu()"></i>
      <ul>
        <li><a href="main.php">Mindful</a></li>
        <li><a href="pupils.php">For pupils</a>
          <ul class="dropdown">
            <li><a href="test_choices.php">Career test</a></li>
            <li><a href="olympiades.php">Olympiades</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="articles.php">Articles</a></li>
          </ul>
        </li>
        <li><a href="applicants.php">For applicants</a>
          <ul class="dropdown">
            <li><a href="universities.php">Universities</a></li>
            <li><a href="articles.php">Articles</a></li>
          </ul>
        </li>
        <li><a href="students.php">For students</a>
          <ul class="dropdown">
            <li><a href="internship.php">Internships</a></li>
            <li><a href="articles.php">Articles</a></li>
          </ul>
        </li>
        <li><a href="joinour2.php">Join our community</a></li>
        <li><a href="contacts.php">Contacts</a></li>
        <li><a href="<?php
                        if ($_SESSION['user_id'] == null) {
                            if ($_SESSION['psychologist_id'] == null) {
                                echo './login2.php';
                            } else {
                                echo './psychologist.php';
                            }
                        } else {
                            echo './profile.php';
                        }
                      ?>"><img id="user" src="../images/user.png"></a></li>
      </ul>
    </div>
    <i class="fas fa-bars" onclick="showMenu()"></i>
  </nav>


  <img id="keka" src="../images/loginpic.svg" width="30%">

    <div id="login">
        <form method="post">
            <div class="container">
                <label for="email"><b>Email</b></label>
                <input type="text" name="email" placeholder="E-mail">
                <label for="fname"><b>First name</b></label>
                <input type="text" name="fname" placeholder="First name">
                <label for="lname"><b>Last name </b></label>
                <input type="text" name="lname" placeholder="Second name">
                <label for="birthdate"><b>Birth date </b></label>
                <input type="text" name="birthdate" placeholder="Birth date">
                <label for="phoneNumber"><b>Phone number </b></label>
                <input type="text" name="phoneNumber" placeholder="Phone number">
                <label for="location"><b>Location</b></label>
                <input type="text" name="location" placeholder="Location">
                <label for="password"><b>Password</b></label>
                <input type="password" name="password" placeholder="Password">
                <label for="c_password"><b>Repeat password</b></label>
                <input type="password" name="c_password" placeholder="Confirm password">
                <span class="psw">Already signed up? <a href="login2.php">Login</a></span>
                <button type="submit" name="signup" value="submit">Sign up</button>
            </div>
        </form>
    </div>

    <footer class="footer">
       <div class="container">
        <div class="row">
          <div class="footer-col">
            <img src="../images/logo.jpg">
          </div>
            <div class="line"></div>
          <div class="footer-col">
            <ul>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">MindFul.edu@mail.kz</a></li>
              <li><a href="#">+7-771-777-77-77</a></li>
            </ul>
          </div>
            <h4 class="copy">Copyright All Rights Reserved 2021 MindFulEdu</h4>
        </div>
       </div>
    </footer>
    <script>
      var navLinks = document.getElementById('navLinks');
      function showMenu(){
        navLinks.style.right="0";
      }
      function hideMenu(){
        navLinks.style.right="-200px";
      }
    </script>

</body>
</html>
