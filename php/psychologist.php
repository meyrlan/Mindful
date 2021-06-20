<?php
    session_start();
    include 'backend.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../css/admin.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/b42eff874a.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <title>Psychologist</title>
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
                            <li><a href="internships.php">Internships</a></li>
                            <li><a href="articles.php">Articles</a></li>
                        </ul>
                    </li>
                    <li><a href="joinour2.php">Join our community</a></li>
                    <li><a href="contacts.php">Сontacts</a></li>
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
        </nav><br>

        <div class="main">
          <h1>Hello,
            <?php
              echo ($_SESSION['psychologist_id'] != null ? '' : 'No one logged in!');
              echo showMe('psychologists');
             ?>
          </h1><br>
          <form class="buttons" method="post" style="display: block; float: left">
            <button id="photo" class="request-button detail-button" type="button" name="photo">Photo</button>
            <button id="edudoc" class="request-button detail-button" type="button" name="edu-doc">Educational document</button>
            <button id="cv" class="request-button detail-button" type="button" name="personal-cv">Personal CV</button>
            <button id="change" class="request-button detail-button" type="button" style="background-color: #39a9cb" name="change">Change</button>
            <button class="request-button detail-button" type="submit" style="background-color: #fc5404" name="logout">Log out</button>
          </form>
          <br><br><br>
          <h2>Current requests</h2>
          <?php
              $requests = showConsults();
              echo $requests;
          ?>
        </div>

        <div id="myModal" class="modal">
           <span class="close">&times;</span>
           <img class="modal-content" id="img">
           <div id="caption"></div>
        </div>

        <script>
             var modal = document.getElementById("myModal");
             var photo = document.getElementById("photo");
             var edudoc = document.getElementById("edudoc");
             var cv = document.getElementById("cv");
             var modalImg = document.getElementById("img");
             var captionText = document.getElementById("caption");
             photo.onclick = function(){
                 modal.style.display = "block";
                 modalImg.src = "../images/<?php echo $_SESSION['photo']; ?>";
                 captionText.innerHTML = "Photo";
             }
             edudoc.onclick = function(){
                 modal.style.display = "block";
                 modalImg.src = "../images/<?php echo $_SESSION['edu_document']; ?>";
                 captionText.innerHTML = "Educational document";
             }
             cv.onclick = function(){
                 modal.style.display = "block";
                 modalImg.src = "../images/<?php echo $_SESSION['personal_cv']; ?>";
                 captionText.innerHTML = "Personal CV";
             }
        </script>

        <div id="myModalChange" class="modal1">
          <div class="modal-content1">
            <h3>Change you documents</h3><br>
            <form action="" method="post" enctype="multipart/form-data">
              <h4>Photo</h4>
              <input type="file" id="photo" name="photo"><br><br>
              <h4>Education Document</h4>
              <input type="file" id="edu_doc" name="edu_doc"><br><br>
              <h4>Personal CV</h4>
              <input type="file" id="cv" name="cv"><br><br>
              <button type="submit" name="change" style="width: auto; height: auto; padding: 10px 15px; border-radius: 10px; background-color: #3c8dad; border: none; float: right; cursor: pointer">OK</button>
              <br><br>
            </form>
          </div>
        </div>

        <script>
          var modal1 = document.getElementById("myModalChange");
          var change = document.getElementById("change");
          change.onclick = function(){
              modal1.style.display = "block";
          }
        </script>

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
            function myFunction() {
                if (confirm("Direct to Whatsapp app?"))
                    return true;
                return false;
            }

            for (var i = 0; i <= 100; i++) {
                var span = document.getElementsByClassName("close")[i];
                span.onclick = function() {
                    modal.style.display = "none";
                }
            }
        </script>
    </body>
</html>
