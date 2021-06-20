<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "root", "mindfuledu-db");

    if(!$conn){
        echo "<h3>Unable to establish connection to Database</h3>";
    }

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        login($conn, $email, $password, $role);
    }

    function login($conn, $email, $password, $role) {
        if ($email == 'admin' && $password == "admin") {
          header('location: ./admin.php');
        }
        if ($role == 'student') {
            $sql1 = "SELECT * FROM `users` WHERE `password` = '$password' AND `email` = '$email' AND `role` = '$role'";
            $res1 = mysqli_query($conn, $sql1);
            foreach ($res1 as $r) {
                if ($email == $r['email'] && $password == $r['password'] && $role == $r['role']) {
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    $_SESSION['user_id'] = $r['user_id'];

                    $user_id = $_SESSION['user_id'];
                    $sql3 = "SELECT * FROM `results` WHERE `user_id` = '$user_id'";
                    $res2 = mysqli_query($conn, $sql3);
                    foreach ($res2 as $r) {
                        $_SESSION['nature-percent'] = $r['nature'];
                        $_SESSION['sign-system-percent'] = $r['sign_system'];
                        $_SESSION['man-percent'] = $r['man'];
                        $_SESSION['artistic-percent'] = $r['artistic'];
                        $_SESSION['technology-percent'] = $r['technology'];
                    }

                    echo "<script>alert(\"Successfully logged in!\")</script>";
                    header('location: ./profile.php');
                    return;
                }
            }
        } else {
            $sql2 = "SELECT * FROM `psychologists` WHERE `password` = '$password' AND `email` = '$email'";
            $res2 = mysqli_query($conn, $sql2);
            foreach ($res2 as $r) {
                if ($email == $r['email'] && $password == $r['password']) {
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    $_SESSION['psychologist_id'] = $r['psychologist_id'];

                    $_SESSION['photo'] = $r['photo'];
                    $_SESSION['edu_document'] = $r['edu_document'];
                    $_SESSION['personal_cv'] = $r['personal_cv'];

                    echo "<script>alert(\"Successfully logged in!".($_SESSION['psychologist_id'] != null ? "Yes" : "No")."\")</script>";
                    header('location: ./psychologist.php');
                    return;
                }
            }
        }
        echo "<script>alert(\"Wrong email or password!\")</script>";
    }

    if (isset($_POST['signup'])) {
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];

        $birthdate = $_POST['birthdate'];
        $phoneNumber = $_POST['phoneNumber'];
        $location = $_POST['location'];

        signup($conn, $email, $fname, $lname, $password, $c_password, $birthdate, $phoneNumber, $location);
    }

    function signup($conn, $email, $fname, $lname, $password, $c_password, $birthdate, $phoneNumber, $location) {

        $password_pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';

        if ($password == $c_password && filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match($password_pattern, $password) == 1 && isEmailExist($conn, $email)) {
            $sql = "INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `password`, `email`, `birthdate`, `role`, `phone_number`, `location`, `chatwith_id`) VALUES (NULL, '$fname', '$lname', '$password', '$email', '$birthdate', 'student', '$phoneNumber', '$location', 0)";
            mysqli_query($conn, $sql);

            $sql1 = "SELECT * FROM `users` WHERE `password` = '$password' AND `email` = '$email' AND `role` = 'student'";
            $res1 = mysqli_query($conn, $sql1);
            foreach ($res1 as $r) {
                $user_id = $r['user_id'];
                $sql2 = "INSERT INTO `results` (`id`, `user_id`, `nature`, `technology`, `man`, `artistic`, `sign_system`) VALUES (NULL, '$user_id', '0', '0', '0', '0', '0')";
                mysqli_query($conn, $sql2);
            }

            echo "<script>alert(\"Successfully registered!\")</script>";
        } else {
            $requirements = "WARNING!\\nEmail must be as following example:\\n - bob@example.com\\nPassword must follow these requirements:\\n - a minimum of 8 characters \\n - at least one uppercase letter \\n - at least one number (digit) \\n - at least one of the following special characters !@#$%^&*-";
            echo "<script>alert(\"$requirements\")</script>";
        }
    }

    if (isset($_POST['join'])) {
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        $birthdate = $_POST['birthdate'];
        $phone_number = $_POST['phone_number'];
        $photo = $_FILES['photo'];
        $edu_doc = $_FILES['edu_doc'];
        $cv = $_FILES['cv'];
        joinCommunity($conn, $email, $fname, $lname, $password, $c_password, $birthdate, $phone_number, $photo, $edu_doc, $cv);
    }

    function joinCommunity($conn, $email, $fname, $lname, $password, $c_password, $birthdate, $phone_number, $photo, $edu_doc, $cv) {
        $password_pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';
        if (isEmailExist($conn, $email)) {
            echo "<script>alert(\"This email already exists!\")</script>";
            return;
        }
        if ($password == $c_password && filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match($password_pattern, $password) == 1) {
            $photoNewName = uploadFile($photo, $_FILES['photo']['name'], $_FILES['photo']['tmp_name'], $_FILES['photo']['size'], $_FILES['photo']['error'], $_FILES['photo']['type'], true);
            $eduDocNewName = uploadFile($edu_doc, $_FILES['edu_doc']['name'], $_FILES['edu_doc']['tmp_name'], $_FILES['edu_doc']['size'], $_FILES['edu_doc']['error'], $_FILES['edu_doc']['type'], true);
            $cvNewName = uploadFile($cv, $_FILES['cv']['name'], $_FILES['cv']['tmp_name'], $_FILES['cv']['size'], $_FILES['cv']['error'], $_FILES['cv']['type'], true);

            if ($photoNewName != "Your file is too large!" && $photoNewName != "There was an error uploading your file!" && $photoNewName != "You cannot upload files of this type!" &&
                $eduDocNewName != "Your file is too large!" && $eduDocNewName != "There was an error uploading your file!" && $eduDocNewName != "You cannot upload files of this type!" &&
                $cvNewName != "Your file is too large!" && $cvNewName != "There was an error uploading your file!" && $cvNewName != "You cannot upload files of this type!"){
                  $sql = "INSERT INTO `psychologists` (`psychologist_id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `birthdate`, `photo`, `edu_document`, `personal_cv`, `applied`) VALUES (NULL, '$fname', '$lname', '$email', '$password', '$phone_number', '$birthdate', '$photoNewName', '$eduDocNewName', '$cvNewName', '0')";
                  mysqli_query($conn, $sql);
                  echo "<script>alert(\"Successfully registered!\")</script>";
            } else {
              header('location: ./joinour2.php');
            }
        } else {
            $requirements = "WARNING!\\nEmail must be as following example:\\n - bob@example.com\\nPassword must follow these requirements:\\n - a minimum of 8 characters \\n - at least one uppercase letter \\n - at least one number (digit) \\n - at least one of the following special characters !@#$%^&*-";
            echo "<script>alert(\"$requirements\")</script>";
        }
    }

    if (isset($_POST['change'])) {
        $photo = $_FILES['photo'];
        $edu_doc = $_FILES['edu_doc'];
        $cv = $_FILES['cv'];
        changeFiles($conn, $_SESSION['psychologist_id'], $photo, $edu_doc, $cv);
    }

    function changeFiles($conn, $psychologist_id, $photo, $edu_doc, $cv) {
      $photoNewName = uploadFile($photo, $_FILES['photo']['name'], $_FILES['photo']['tmp_name'], $_FILES['photo']['size'], $_FILES['photo']['error'], $_FILES['photo']['type'], false);
      $eduDocNewName = uploadFile($edu_doc, $_FILES['edu_doc']['name'], $_FILES['edu_doc']['tmp_name'], $_FILES['edu_doc']['size'], $_FILES['edu_doc']['error'], $_FILES['edu_doc']['type'], false);
      $cvNewName = uploadFile($cv, $_FILES['cv']['name'], $_FILES['cv']['tmp_name'], $_FILES['cv']['size'], $_FILES['cv']['error'], $_FILES['cv']['type'], false);

      if ($photoNewName != "Your file is too large!" && $photoNewName != "There was an error uploading your file!" && $photoNewName != "You cannot upload files of this type!") {
        $sql = "UPDATE `psychologists` SET `photo` = '$photoNewName' WHERE `psychologists`.`psychologist_id` = $psychologist_id";
        $_SESSION['photo'] = $photoNewName;
      }
      if ($eduDocNewName != "Your file is too large!" && $eduDocNewName != "There was an error uploading your file!" && $eduDocNewName != "You cannot upload files of this type!") {
        $sql = "UPDATE `psychologists` SET `edu_document` = '$eduDocNewName' WHERE `psychologists`.`psychologist_id` = $psychologist_id";
        $_SESSION['edu_document'] = $eduDocNewName;
      }
      if ($cvNewName != "Your file is too large!" && $cvNewName != "There was an error uploading your file!" && $cvNewName != "You cannot upload files of this type!") {
        $sql = "UPDATE `psychologists` SET `personal_cv` = '$cvNewName' WHERE `psychologists`.`psychologist_id` = $psychologist_id";
        $_SESSION['personal_cv'] = $cvNewName;
      }

      mysqli_query($conn, $sql);
    }

    function uploadFile($file, $fileName, $fileTmpName, $fileSize, $fileError, $fileType, $boo) {
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 100000000) {
                    $fileNewName = uniqid('', true).".".$fileActualExt;
                    $fileDestination = "../images/".$fileNewName;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    return $fileNewName;
                } else {
                    if ($boo == true) echo "<script>alert(\"Your file is too large!\")</script>";
                    return "Your file is too large!";
                }
            } else {
                if ($boo == true) echo "<script>alert(\"There was an error uploading your file!\")</script>";
                return "There was an error uploading your file!";
            }
        } else {
            if ($boo == true) echo "<script>alert(\"You cannot upload files of this type!\")</script>";
            return "You cannot upload files of this type!";
        }
    }

    function isEmailExist($conn, $email) {
        $sql = "SELECT * FROM `psychologists` WHERE `email` = '$email'";
        $res = mysqli_query($conn, $sql);
        foreach ($res as $r) {
            if ($r['email'] == $email) {
                return true;
            }
        }
        return false;
    }

    if (isset($_REQUEST['test-button'])) {
        header("location: ./test_choices.php");
    }

    function setTestResults($nature, $technology, $man, $artistic, $sign_system) {
        $conn = mysqli_connect("localhost", "root", "root", "mindfuledu-db");
        $user_id = $_SESSION['user_id'];
        $sql = "UPDATE `results` SET `nature` = '$nature', `technology` = '$technology', `man` = '$man', `artistic` = '$artistic', `sign_system` = '$sign_system' WHERE `user_id` = '$user_id'";
        mysqli_query($conn, $sql);
        $_SESSION['nature-percent'] = $nature;
        $_SESSION['sign-system-percent'] = $sign_system;
        $_SESSION['man-percent'] = $man;
        $_SESSION['artistic-percent'] = $artistic;
        $_SESSION['technology-percent'] = $technology;
        $conn->close();
    }

    if (isset($_POST['logout'])) {
        session_destroy();
        header('location: ./login2.php');
    }

    function showMe($who) {
        $conn = mysqli_connect("localhost", "root", "root", "mindfuledu-db");
        if ($who == "users") {
          $user_id = $_SESSION['user_id'];
          $sql = "SELECT * FROM `users` WHERE `user_id` = '$user_id'";
          $res = mysqli_query($conn, $sql);
          foreach ($res as $r) {
              return $r['first_name'].' '.$r['last_name'];
          }
        } else {
          $psychologist_id = $_SESSION['psychologist_id'];
          $sql = "SELECT * FROM `psychologists` WHERE `psychologist_id` = '$psychologist_id'";
          $res = mysqli_query($conn, $sql);
          foreach ($res as $r) {
              return $r['first_name'].' '.$r['last_name'];
          }
        }
        $conn->close();
    }

    function showRequests() {
        $conn = mysqli_connect("localhost", "root", "root", "mindfuledu-db");
        $sql = "SELECT *  FROM `psychologists`";
        $res = mysqli_query($conn, $sql);
        $output = "";
        $_SESSION['numberOfRequests'] = 0;
        foreach ($res as $r) {
            if ($r['applied'] == '0') {
                $_SESSION['numberOfRequests'] = $_SESSION['numberOfRequests'] + 1;
                $output .= "<br><div class=\"requested-item\">
                     <form class=\"buttons\" method=\"post\" onsubmit=\"return myFunction()\">
                       <button id=\"accept".$r['psychologist_id']."\" class=\"request-button accept-button\" type=\"submit\" name=\"accept".$r['psychologist_id']."\" value=\"Accept\">Accept</button>
                       <button id=\"refuse".$r['psychologist_id']."\" class=\"request-button refuse-button\" type=\"submit\" name=\"refuse".$r['psychologist_id']."\" value=\"Refuse\">Refuse</button>
                     </form>
                     <div style=\"width: 15px; height: 1px; float: right\"></div>
                     <form class=\"buttons\" method=\"post\">
                       <button id=\"photo".$r['psychologist_id']."\" class=\"request-button detail-button\" type=\"button\" name=\"photo".$r['psychologist_id']."\">Photo</button>
                       <button id=\"edudoc".$r['psychologist_id']."\" class=\"request-button detail-button\" type=\"button\" name=\"edu-doc".$r['psychologist_id']."\">Educational document</button>
                       <button id=\"cv".$r['psychologist_id']."\" class=\"request-button detail-button\" type=\"button\" name=\"personal-cv".$r['psychologist_id']."\">Personal CV</button>
                       <button id=\"more".$r['psychologist_id']."\" class=\"request-button detail-button\" type=\"button\" name=\"details".$r['psychologist_id']."\">More info</button>
                     </form>
                     <div class=\"buttons\" style=\"float: left; display: block; color: #393e46; padding-top: 5px;\">
                       <span>Name:</span>
                       <br>
                       <span style=\"font-weight: bold; font-size: 20px;\">".$r['first_name']." ".$r['last_name']."</span>
                     </div>
                     <div style=\"width: 30px; height: 1px; float: left\"></div>
                     <div class=\"buttons\" style=\"float: left; display: block; color: #393e46; padding-top: 5px;\">
                       <span>Mobile number:</span>
                       <br>
                       <span style=\"font-weight: bold; font-size: 20px;\">".$r['phone_number']."</span>
                     </div>
                   </div><br>
                   <div id=\"myModal\" class=\"modal\">
                      <span class=\"close\">&times;</span>
                      <img class=\"modal-content\" id=\"img01\">
                      <div id=\"caption\"></div>
                   </div>
                   <script>
                        var modal = document.getElementById(\"myModal\");
                        var photo = document.getElementById(\"photo".$r['psychologist_id']."\");
                        var edudoc = document.getElementById(\"edudoc".$r['psychologist_id']."\");
                        var cv = document.getElementById(\"cv".$r['psychologist_id']."\");
                        var modalImg = document.getElementById(\"img01\");
                        var captionText = document.getElementById(\"caption\");
                        photo.onclick = function(){
                            modal.style.display = \"block\";
                            modalImg.src = \"../images/".$r['photo']."\";
                            captionText.innerHTML = \"Photo 4x3\";
                        }
                        edudoc.onclick = function(){
                            modal.style.display = \"block\";
                            modalImg.src = \"../images/".$r['edu_document']."\";
                            captionText.innerHTML = \"Educational document\";
                        }
                        cv.onclick = function(){
                            modal.style.display = \"block\";
                            modalImg.src = \"../images/".$r['personal_cv']."\";
                            captionText.innerHTML = \"Personal CV\";
                        }
                   </script>";
            }
        }
        $conn->close();
        return $output;
    }

    function showRequested() {
        $conn = mysqli_connect("localhost", "root", "root", "mindfuledu-db");
        $sql = "SELECT *  FROM `psychologists`";
        $res = mysqli_query($conn, $sql);
        $output = "";
        foreach ($res as $r) {
            if ($r['applied'] == '1') {
                $output .= "<br><div class=\"requested-item\" style=\"background-color: #8ab6d6\">
                         <div style=\"width: 15px; height: 1px; float: right\"></div>
                         <form class=\"buttons\" method=\"post\">
                           <button id=\"photo".$r['psychologist_id']."\" class=\"request-button detail-button\" type=\"button\" name=\"photo".$r['psychologist_id']."\">Photo</button>
                           <button id=\"edudoc".$r['psychologist_id']."\" class=\"request-button detail-button\" type=\"button\" name=\"edu-doc".$r['psychologist_id']."\">Educational document</button>
                           <button id=\"cv".$r['psychologist_id']."\" class=\"request-button detail-button\" type=\"button\" name=\"personal-cv".$r['psychologist_id']."\">Personal CV</button>
                           <button id=\"more".$r['psychologist_id']."\" class=\"request-button detail-button\" type=\"button\" name=\"details".$r['psychologist_id']."\">More info</button>
                         </form>
                         <div class=\"buttons\" style=\"float: left; display: block; color: #393e46; padding-top: 5px;\">
                           <span>Name:</span>
                           <br>
                           <span style=\"font-weight: bold; font-size: 20px;\">".$r['first_name']." ".$r['last_name']."</span>
                         </div>
                         <div style=\"width: 30px; height: 1px; float: left\"></div>
                         <div class=\"buttons\" style=\"float: left; display: block; color: #393e46; padding-top: 5px;\">
                           <span>Mobile number:</span>
                           <br>
                           <span style=\"font-weight: bold; font-size: 20px;\">".$r['phone_number']."</span>
                         </div>
                       </div><br>
                       <div id=\"myModal\" class=\"modal\">
                          <span class=\"close\">&times;</span>
                          <img class=\"modal-content\" id=\"img01\">
                          <div id=\"caption\"></div>
                       </div>
                       <script>
                            var modal = document.getElementById(\"myModal\");
                            var photo = document.getElementById(\"photo".$r['psychologist_id']."\");
                            var edudoc = document.getElementById(\"edudoc".$r['psychologist_id']."\");
                            var cv = document.getElementById(\"cv".$r['psychologist_id']."\");
                            var modalImg = document.getElementById(\"img01\");
                            var captionText = document.getElementById(\"caption\");
                            photo.onclick = function(){
                                modal.style.display = \"block\";
                                modalImg.src = \"../images/".$r['photo']."\";
                                captionText.innerHTML = \"Photo 4x3\";
                            }
                            edudoc.onclick = function(){
                                modal.style.display = \"block\";
                                modalImg.src = \"../images/".$r['edu_document']."\";
                                captionText.innerHTML = \"Educational document\";
                            }
                            cv.onclick = function(){
                                modal.style.display = \"block\";
                                modalImg.src = \"../images/".$r['personal_cv']."\";
                                captionText.innerHTML = \"Personal CV\";
                            }
                       </script>";
            }
        }
        $conn->close();
        return $output;
    }

    function showConsults() {
        $conn = mysqli_connect("localhost", "root", "root", "mindfuledu-db");
        $sql = "SELECT * FROM `users`";
        $res = mysqli_query($conn, $sql);
        $output = "";
        foreach ($res as $r) {
            if ($r['chatwith_id'] == $_SESSION['psychologist_id']) {
                $output .= "<br><div class=\"requested-item\">
                     <form class=\"buttons\" method=\"post\" onsubmit=\"return myFunction()\">
                       <button id=\"accept".$r['user_id']."\" class=\"request-button accept-button\" type=\"submit\" name=\"chat".$r['user_id']."\" value=\"Accept\">Chat via Whatsapp</button>
                     </form>
                     <div style=\"width: 20px; height: 1px; float: right\"></div>
                     <div class=\"buttons\" style=\"float: left; display: block; color: #393e46; padding-top: 5px;\">
                       <span>Student name:</span>
                       <br>
                       <span style=\"font-weight: bold; font-size: 20px;\">".$r['first_name']." ".$r['last_name']."</span>
                     </div>
                     <div style=\"width: 20px; height: 1px; float: left\"></div>
                     <div class=\"buttons\" style=\"float: left; display: block; color: #393e46; padding-top: 5px;\">
                       <span>Mobile number:</span>
                       <br>
                       <span style=\"font-weight: bold; font-size: 20px;\">".$r['phone_number']."</span>
                     </div>
                     <div style=\"width: 20px; height: 1px; float: left\"></div>
                     <div class=\"buttons\" style=\"float: left; display: block; color: #393e46; padding-top: 5px;\">
                       <span>Birth date:</span>
                       <br>
                       <span style=\"font-weight: bold; font-size: 20px;\">".$r['birthdate']."</span>
                     </div>
                     <div style=\"width: 20px; height: 1px; float: left\"></div>
                     <div class=\"buttons\" style=\"float: left; display: block; color: #393e46; padding-top: 5px;\">
                       <span>Location:</span>
                       <br>
                       <span style=\"font-weight: bold; font-size: 20px;\">".$r['location']."</span>
                     </div>
                   </div><br>
                   <div id=\"myModal\" class=\"modal\">
                      <span class=\"close\">&times;</span>
                      <img class=\"modal-content\" id=\"img01\">
                      <div id=\"caption\"></div>
                   </div>
                   <script>
                        var modal = document.getElementById(\"myModal\");
                        var photo = document.getElementById(\"photo".$r['psychologist_id']."\");
                        var edudoc = document.getElementById(\"edudoc".$r['psychologist_id']."\");
                        var cv = document.getElementById(\"cv".$r['psychologist_id']."\");
                        var modalImg = document.getElementById(\"img01\");
                        var captionText = document.getElementById(\"caption\");
                        photo.onclick = function(){
                            modal.style.display = \"block\";
                            modalImg.src = \"../images/".$r['photo']."\";
                            captionText.innerHTML = \"Photo 4x3\";
                        }
                        edudoc.onclick = function(){
                            modal.style.display = \"block\";
                            modalImg.src = \"../images/".$r['edu_document']."\";
                            captionText.innerHTML = \"Educational document\";
                        }
                        cv.onclick = function(){
                            modal.style.display = \"block\";
                            modalImg.src = \"../images/".$r['personal_cv']."\";
                            captionText.innerHTML = \"Personal CV\";
                        }
                   </script>";
            }
        }
        $conn->close();
        return $output;
    }

    function showPsychologists() {
      $conn = mysqli_connect("localhost", "root", "root", "mindfuledu-db");
      $sql = "SELECT *  FROM `psychologists`";
      $res = mysqli_query($conn, $sql);
      $output = "";
      foreach ($res as $r) {
        $output .= "<div class=\"psychologist-info\" style=\"border: 1px solid #064420; background-color: #39a9cb; border-radius: 15px; width: 94%; height: 80px; margin: 0px 18px; padding: 12px 20px; box-sizing: border-box;\">
                      <div style=\"width: 70%; display: inline-flex;\">
                        <p style=\"font-size: 20px; margin-right: 16px; font-weight: bold;\"><span style=\"font-weight: lighter; font-size: 16px;\">First name:</span><br>".$r['first_name']."</p>
                        <p style=\"font-size: 20px; margin-right: 16px; font-weight: bold;\"><span style=\"font-weight: lighter; font-size: 16px;\">Last name:</span><br>".$r['last_name']."</p>
                      </div>
                      <div style=\"width: 50%; display: inline-flex; float: right;\">
                        <button id=\"myBtn".(6 + $r['psychologist_id'])."\" type=\"submit\" name=\"moreInfo6\" style=\"float: right; width: auto; font-size: 16px; background-color: #bdc7c9; border: 1px solid #064420; border-radius: 10px; padding: 0px 10px; height: 40px; margin-top: 6px;\">More info</button>
                        <p style=\"margin-left: 20px;\"></p>
                        <form method=\"post\">
                          <button type=\"submit\" name=\"sendReq".$r['psychologist_id']."\" style=\"float: right; width: auto; font-size: 16px; background-color: #1eae98; border: 1px solid #064420; border-radius: 10px; padding: 0px 10px; height: 40px; margin-top: 6px;\">Send a request</button>
                        </form>
                      </div>
                    </div><br><br>
                    <div id=\"myModal".(6 + $r['psychologist_id'])."\" class=\"modal\">
                      <div class=\"modal-content\" style=\"width: 600px;\">
                        <p style=\"font-weight: bold; font-size: 20px;\">Information</p>
                        <p style=\"font-size: 14px;\">here goes your info</p>
                      </div>
                    </div>
                    <script>
                      var modal".(6 + $r['psychologist_id'])." = document.getElementById(\"myModal".(6 + $r['psychologist_id'])."\");
                      var btn".(6 + $r['psychologist_id'])." = document.getElementById(\"myBtn".(6 + $r['psychologist_id'])."\");

                      btn".(6 + $r['psychologist_id']).".onclick = function() {
                        modal".(6 + $r['psychologist_id']).".style.display = \"block\";
                      }
                    </script>";
      }
      return $output;
    }

    function closeWindows() {
      $conn = mysqli_connect("localhost", "root", "root", "mindfuledu-db");
      $sql = "SELECT *  FROM `psychologists`";
      $res = mysqli_query($conn, $sql);
      $output = "";
      foreach ($res as $r) {
        $output .= "if (event.target == modal".(6 + $r['psychologist_id']).") {
                      modal".(6 + $r['psychologist_id']).".style.display = \"none\";
                    }\n";
      }
      return $output;
    }

    function refuse_func($id) {
        $conn = mysqli_connect("localhost", "root", "root", "mindfuledu-db");
        $sql = "DELETE FROM `psychologists` WHERE `psychologist_id` = '".$id."'";
        $_SESSION['numberOfRequests'] = $_SESSION['numberOfRequests'] - 1;
        mysqli_query($conn, $sql);
        $conn->close();
    }

    function accept_func($id) {
        $conn = mysqli_connect("localhost", "root", "root", "mindfuledu-db");
        $sql = "UPDATE `psychologists` SET `applied` = '1' WHERE `psychologists`.`psychologist_id` = '".$id."'";
        $_SESSION['numberOfRequests'] = $_SESSION['numberOfRequests'] - 1;
        $_SESSION['numberOfRequested'] = $_SESSION['numberOfRequested'] + 1;
        mysqli_query($conn, $sql);
        $conn->close();
    }

    function showStudentData($id, $data) {
        $conn = mysqli_connect("localhost", "root", "root", "mindfuledu-db");
        $sql = "SELECT *  FROM `users` WHERE `user_id` = ".$id."";
        $res = mysqli_query($conn, $sql);
        foreach ($res as $r) {
          return $r[$data];
        }
        return "";
    }

    function showPsychologistData($id, $data) {
        $conn = mysqli_connect("localhost", "root", "root", "mindfuledu-db");
        $sql = "SELECT *  FROM `psychologist` WHERE `user_id` = ".$id."";
        $res = mysqli_query($conn, $sql);
        foreach ($res as $r) {
          return $r[$data];
        }
        return "";
    }

    if (isset($_POST[''])) {

    }

    if (isset($_POST['sendReq1'])) {
        echo requestPsycho(1);
    }
    if (isset($_POST['sendReq2'])) {
        echo requestPsycho(2);
    }
    if (isset($_POST['sendReq3'])) {
        echo requestPsycho(3);
    }
    if (isset($_POST['sendReq4'])) {
        echo requestPsycho(4);
    }
    if (isset($_POST['sendReq5'])) {
        echo requestPsycho(5);
    }
    if (isset($_POST['sendReq6'])) {
        echo requestPsycho(6);
    }
    if (isset($_POST['sendReq7'])) {
        echo requestPsycho(7);
    }
    if (isset($_POST['sendReq8'])) {
        echo requestPsycho(8);
    }
    if (isset($_POST['sendReq9'])) {
        echo requestPsycho(9);
    }
    if (isset($_POST['sendReq10'])) {
        echo requestPsycho(10);
    }

    function requestPsycho($id) {
        $conn = mysqli_connect("localhost", "root", "root", "mindfuledu-db");
        $user_id = $_SESSION['user_id'];
        $sql = "UPDATE `users` SET `chatwith_id` = '$id' WHERE `users`.`user_id` = $user_id";
        mysqli_query($conn, $sql);
        echo "<script>alert(\"Successfully requested!\")</script>";
    }


    if (isset($_POST['accept1'])) {
        accept_func(1);
    }
    if (isset($_POST['accept2'])) {
        accept_func(2);
    }
    if (isset($_POST['accept3'])) {
        accept_func(3);
    }
    if (isset($_POST['accept4'])) {
        accept_func(4);
    }
    if (isset($_POST['accept5'])) {
        accept_func(5);
    }
    if (isset($_POST['accept6'])) {
        accept_func(6);
    }
    if (isset($_POST['accept7'])) {
        accept_func(7);
    }
    if (isset($_POST['accept8'])) {
        accept_func(8);
    }
    if (isset($_POST['accept9'])) {
        accept_func(9);
    }
    if (isset($_POST['accept10'])) {
        accept_func(10);
    }

    if (isset($_POST['refuse1'])) {
        refuse_func(1);
    }
    if (isset($_POST['refuse2'])) {
        refuse_func(2);
    }
    if (isset($_POST['refuse3'])) {
        refuse_func(3);
    }
    if (isset($_POST['refuse4'])) {
        refuse_func(4);
    }
    if (isset($_POST['refuse5'])) {
        refuse_func(5);
    }
    if (isset($_POST['refuse6'])) {
        refuse_func(6);
    }
    if (isset($_POST['refuse7'])) {
        refuse_func(7);
    }
    if (isset($_POST['refuse8'])) {
        refuse_func(8);
    }
    if (isset($_POST['refuse9'])) {
        refuse_func(9);
    }
    if (isset($_POST['refuse10'])) {
        refuse_func(10);
    }

    $conn->close();
?>
