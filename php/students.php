<?php
session_start();
include 'backend.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial scale=1.0"charset="utf-8">
    <title>For students</title>
    <link rel="stylesheet" href="../css/students.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/b42eff874a.js" crossorigin="anonymous"></script>
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
                      ?>"><img id="user" src="../images/userr.png"></a></li>
      </ul>
    </div>
    <i class="fas fa-bars" onclick="showMenu()"></i>
  </nav>
  <section class="header">
    <div class="text-box">
      <h1>It's time to start your career</h1>
    </div>
  </section>
  <section class="why">
    <h1 id="desc">Internships</h1>
    <h1 id="reasons">5 Reasons Why An</br>Internship Is Important</br>For Your Future Career</h1>
    <div class="left">
      <div class="leftcontent">
        <h2>1</h2>
        <p>An Internship Provides Real Life Experience and Exposure</p>
      </div>
    </div>
    <div class="right">
      <div class="rightcontent">
        <h2>2</h2>
        <p>The Opportunity To Learn More About Yourself</p>
      </div>
    </div>
    <div class="left">
      <div class="leftcontent">
        <h2>3</h2>
        <p>Get Connected and Develop Your Professional Network</p>
      </div>
    </div>
    <div class="right">
      <div class="rightcontent">
        <h2>4</h2>
        <p>Prevent CV From Going To The Trash</p>
      </div>
    </div>
    <div class="left">
      <div class="leftcontent">
        <h2>5</h2>
        <p>Transition Into A Full-Time Position</p>
      </div>
    </div>
    <a href="#">SEE AVAILABLE INTERNSHIPS</a>
  </section>
  <section class="masterclasses">
    <h1>Master Classes</h1>
    <p>Develop your soft and hard skills to get an Internship in the future</p>
    <div class="masterclasses-row">
      <div class="masterclasses-col">
        <h3>Design thinking </h3>
        <p>Design thinking is a human-centered approach to designing innovative solutions. It is based on the tools used by designers, and is used to integrate people's needs, business needs, and technological capabilities. The design thinking methodology can be applied in a variety of situations-from the development of a new project, product or service to the strategy of building a company's relationship with its customers.</p>
        <a href="#" class="btnmc">Learn More</a>
      </div>
      <div class="masterclasses-col">
        <h3>The Walt Disney Method </h3>
        <p>This method is often used to develop new ideas and approaches to solving a problem and draws on the real-world experience of Walt Disney. The specificity of this approach is that it allows you to improve the idea as much as possible, taking into account the perspectives of the "dreamer", "realist" and "critic".</p>
        <a href="#" class="btnmc">Learn More</a>
      </div>
      <div class="masterclasses-col">
        <h3>Simulation game “Changes”</h3>
        <p>Who actually initiates the changes in the city? With the help of this game, participants will try on different roles (society, residents, politics, business) and try to make decisions in accordance with the goals and objectives of the roles. The game exposes the seemingly non-obvious needs of certain social roles and helps to understand why we act this way or that in real life.</p>
        <a href="#" class="btnmc">Learn More</a>
      </div>
    </div>
  </section>
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
