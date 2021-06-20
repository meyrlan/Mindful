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
        <title>Administration</title>
    </head>
    <body>
        <nav>
            <a href="#"><img id ="logo"src = "../images/logo.jpg"></a>
            <div class="nav-links" id="navLinks">
                <i class="fas fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="./main.php">Mindful</a></li>
                    <li><a href="pupils.php">For pupils</a>
                        <ul class="dropdown">
                            <li><a href="test_choices.php">Career test</a></li>
                            <li><a href="./olympiades.php">Olympiades</a></li>
                            <li><a href="./courses.php">Courses</a></li>
                            <li><a href="./articles.php">Articles</a></li>
                        </ul>
                    </li>
                    <li><a href="./applicants.php">For applicants</a>
                        <ul class="dropdown">
                            <li><a href="./universities.php">Universities</a></li>
                            <li><a href="#">Articles</a></li>
                        </ul>
                    </li>
                    <li><a href="students.php">For students</a>
                        <ul class="dropdown">
                            <li><a href="./internship.php">Internships</a></li>
                            <li><a href="./articles.php">Articles</a></li>
                        </ul>
                    </li>
                    <li><a href="./joinour2.php">Join our community</a></li>
                    <li><a href="./contacts.php">Сontacts</a></li>
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
              <h1>Requests</h1>
            <?php
                $requests = showRequests();
                echo $requests;
                if ($_SESSION['numberOfRequests'] == 0) {
                    echo "<br>No requests found";
                }
            ?>
            <br><br><h1>Accepted</h1>
            <?php
                $requests = showRequested();
                echo $requests;
            ?>
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
            function myFunction() {
                if (confirm("Confirm your action!"))
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
