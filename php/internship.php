<?php
    session_start();
    include 'backend.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial scale=1.0"charset="utf-8">
    <title>Internship</title>
    <link rel="stylesheet" href="../css/internship.css">
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
                      ?>"><img id="user" src="../images/user.png"></a></li>
      </ul>
    </div>
    <i class="fas fa-bars" onclick="showMenu()"></i>
  </nav>
  <section class="header">
    <div class="text-box">
      <h1>Explore new opportunities <br>with us</h1>
      <p> internship and all applications for you.</p>
    </div>
  </section>


<div class="container-fluid">
  <h1 id="h1ali">Select Your Summer 2022 Internship </h1>
</div>

<div class="grid-container">
  <div><img id="barcelona" src="../images/barcelona.png" width="100%"> <p id="pforall">  A Summer abroad in Spain can take your language skills and professional skills to a whole new level. Live and work in a truly unique city close to the Mediterranean this summer and really boost your résumé.</p> <input type="button" value="More"> </div>
  <div><img id="dublin" src="../images/dublin.png" width="100%"><p id="pforall">Summer 2022 internships in Dublin offer high caliber 8-week internship placements with shared student housing in central city areas, as well as fun excursions and social programs.</p> <input type="button" value="More"/> </div>
  <div><img id="berlin" src="../images/berlin.png" width="100%"><p id="pforall">Challenge yourself with an internship abroad in the fascinating capital of Germany. No matter your career field, we have plenty of internship placements in Berlin. Start planning for a life-changing summer.</p> <input type="button" value="More"></div>
  <div><img id="madrid" src="../images/madrid.png" width="100%"><p id="pforall">Madrid, the vibrant capital of Spain, has summer internships available in many career fields. Enjoy everything the city has to offer and improve your Spanish with an 8-week summer internship in Madrid.</p><input type="button" value="More"></div>
  <div><img id="milan" src="../images/milan.png" width="100%"><p id="pforall">Spend your summer abroad in Italy! Milan programs combine language immersion and professional internship placement. As “The Fashion Capital of the World,” this stylish and sophisticated city offers vast internship opportunities.</p><input type="button" value="More"></div>
  <div><img id="london" src="../images/london.png" width="100%"><p id="pforall">Put yourself on the map with a summer internship in London, England. With award-winning internship opportunities in virtually every career field, our summer 2022 8-week London internship program will put you ahead.</p><input type="button" value="More"></div>

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
