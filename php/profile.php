<?php
    session_start();
    include 'backend.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../css/profile.css">
    <meta name="viewport" content="width=device-width, initial scale=1.0" charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b42eff874a.js" crossorigin="anonymous"></script>
    <title>Profile</title>
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
    </nav>

    <div class="main" style="height: auto;">
      <div class="profile-box">
        <div class="profile" style="margin-top: 26px;">
          <img src="../images/ava.png" alt="" width="256px" height="202px">
        </div>
        <div class="profile" style="height: 100px; font-size: 34px; font-weight: bold">
          <?php
            echo ($_SESSION['user_id'] != null ? '' : 'No one logged in!');
            echo showMe('users');
           ?>
        </div>
        <div class="bio">
          <div class="bio-item" style="margin-right: 30px;">
            <p style="font-weight: bold">Mobile phone:</p><br>
            <p style="font-weight: bold">Birth date:</p><br>
            <p style="font-weight: bold">Location:</p>
          </div>
          <div class="bio-item" style="margin-left: 30px;">
            <p><?php echo showStudentData($_SESSION['user_id'], 'phone_number'); ?></p><br>
            <p><?php echo showStudentData($_SESSION['user_id'], 'birthdate'); ?></p><br>
            <p><?php echo showStudentData($_SESSION['user_id'], 'location'); ?></p>
          </div>
        </div>
      </div>
      <div class="" style="height: auto;">
        <div class="results-box">
          <div class="results-box-results">
            <form method="post" class="each-results">
                <button class="pass-button test-button" type="submit" name="test-button">Take a test</button>
            </form>
            <div class="each-results" style="border: 1px solid #064420;">
              <button id="myBtn1" type="submit" name="test-details" class="test-name"><h2 ><a href="#">Man-Nature</a></h2></button>
              <h2 class="percentage"><?php echo $_SESSION['nature-percent'].'%'?></h2>
            </div>
          </div>
          <div class="results-box-results">
            <div class="each-results" style="border: 1px solid #064420;">
              <button id="myBtn2" type="submit" name="test-details" class="test-name"><h2 ><a href="#">Man-Sign System</a></h2></button>
              <h2 class="percentage"><?php echo $_SESSION['sign-system-percent'].'%'?></h2>
            </div>
            <div class="each-results" style="border: 1px solid #064420;">
              <button id="myBtn3" type="submit" name="test-details" class="test-name"><h2 ><a href="#">Man-Man</a></h2></button>
              <h2 class="percentage"><?php echo $_SESSION['man-percent'].'%'?></h2>
            </div>
          </div>
          <div class="results-box-results">
            <div class="each-results" style="border: 1px solid #064420;">
              <button id="myBtn4" type="submit" name="test-details" class="test-name"><h2 ><a href="#">Man-Artistic</a></h2></button>
              <h2 class="percentage"><?php echo $_SESSION['artistic-percent'].'%'?></h2>
            </div>
            <div class="each-results" style="border: 1px solid #064420;">
              <button id="myBtn5" type="submit" name="test-details" class="test-name"><h2 ><a href="#">Man-Technology</a></h2></button>
              <h2 class="percentage"><?php echo $_SESSION['technology-percent'].'%'?></h2>
            </div>
          </div>
        </div>
        <br>
        <div class="results-box" style="height: auto;">
          <div class="results-box-results" style="margin-bottom: -55px;">
            <h1>Connect with Psychologists</h1>
          </div><br>
          <?php
            echo showPsychologists();
           ?>
          <!-- <div class="psychologist-info" style="border: 1px solid #064420; background-color: #39a9cb; border-radius: 15px; width: 94%; height: 80px; margin: 0px 18px; padding: 12px 20px; box-sizing: border-box;">
            <div class="" style="width: 80%; display: inline-flex;">
              <p style="font-size: 20px; margin-right: 16px; font-weight: bold;"><span style="font-weight: lighter; font-size: 16px;">First name:</span><br>Ray</p>
              <p style="font-size: 20px; margin-right: 16px; font-weight: bold;"><span style="font-weight: lighter; font-size: 16px;">Last name:</span><br>Duldiyev</p>
            </div>
            <div class="" style="width: 50%; display: inline-flex; float: right;">
              <button id="moreInfo6" type="submit" name="moreInfo6" style="display: block; float: right; width: auto; font-size: 16px; background-color: #bdc7c9; border: 1px solid #064420; border-radius: 10px; padding: 0px 5px; height: 40px; margin-top: 6px;">More info</button>
              <p style="margin-left: 20px;"></p>
              <button type="submit" name="sendReq1" style="display: block; float: right; width: auto; font-size: 16px; background-color: #1eae98; border: 1px solid #064420; border-radius: 10px; padding: 0px 5px; height: 40px; margin-top: 6px;">Send a request</button>
            </div>
          </div><br><br>
          <div id="myModal6" class="modal">
            <div class="modal-content" style="width: 400px;">
              <p>1</p>
            </div>
          </div>
          <script>
            var modal6 = document.getElementById("myModal6");
            var btn6 = document.getElementById("moreInfo6");
            btn6.onclick = function() {
              modal6.style.display = "block";
            }
          </script> -->
        </div>
        <form method="post">
          <button class="logout logout-button" type="submit" name="logout" style="padding-top: 12px; color: white">Log out</button>
        </form>
      </div>
    </div>

    <div id="myModal1" class="modal">
      <div class="modal-content">
        <p><strong>Man-Nature</strong> - all professions related to crop production, animal
        husbandry and forestry, i.e. with natural objects and
        phenomena.
        <br><strong>The object of work is:</strong> living organisms, plants, animals and
        biological processes.
        <br><strong>Professions of this type are associated with:</strong>
        <ul>research, analysis of the state and conditions of life of plants or
        animals, study of living and inanimate nature, description, research (agronomist, microbiologist, zootechnicist, hydrobiologist, agrochemist,
        phytopathologist, geologist, geneticist, botanist, zoologist, metrologist, etc.);</ul>
        <ul>cultivation and care of plants and animals (forester, field breeder,
        florist, grower, the grower, farmer, gardener, beekeeper, Forester,
        farmer, livestock, etc.);</ul>
        <ul>prevention, rehabilitation and treatment of diseases and
        animals (veterinarian, ecologist, Forester, doctor quarantine service, etc.);</ul>
        <ul>conversion and processing (gardener, food technologist
        industry, ryboobrabotchikov, etc.);</ul>
        <ul>service, protection of flora and fauna (Forester,
        grower, the grower, breeder, etc.);</ul>
        <ul>the production, exploitation of natural resources (hunter,
        fisherman, woodcutter, agronomist, animal technician, etc.)</ul>
        <strong>Inclinations and preferences, expressed abilities</strong>
        <ul>care for and observe animals;</ul>
        <ul>raise plants or animals;</ul>
        <ul>prepare food (mushrooms, berries, fish…);</ul>
        <ul>fight against diseases, pests;</ul>
        <ul>grow vegetables and fruits;</ul>
        <ul>navigate natural phenomena;</ul>
        <ul>observe, study various natural phenomena.</ul>
        <strong>Professionally important qualities:</strong> observation, aptitude for
        systematization, stability of attention, the need for motor
        activity.
        <br><strong>Psychological requirements of the "man-nature" professions:</strong>
        <ul>developed imagination, visual-imaginative thinking, good
        visual memory, observation, the ability to anticipate and
        evaluate changing natural factors;</ul>
        <ul>since the results of the activity are revealed after quite a
        long time, the specialist must have patience,
        perseverance, must be ready to work outside of teams, sometimes
        in difficult weather conditions, in mud, etc.</ul></p>
      </div>
    </div>

    <div id="myModal2" class="modal">
      <div class="modal-content">
        <p><strong>Man-Sign</strong> - all professions related to counting, digital and
        alphabetic signs, including music specialties,
        most of the professions are related to the processing of information.<br><strong>The objects of labor are:</strong> conventional signs, ciphers, codes, tables, numbers,
        numeric values, symbols, texts.<br>
        <strong>Professions of this type are associated with:</strong>
        <ul>texts in the native or foreign languages, restoration,
        correction of distortions (proofreader, editor, typist,
        clerk, telegraph operator, typesetter, translator, etc.);</ul>
        <ul>numbers, formulas, tables, conversion, calculation,
        sorting (accountant, economist, cashier, statistician, postman,
        programmer, PC operator, etc.);</ul>
        <ul>drawings, diagrams, maps (navigator, draftsman, cartographer,
        surveyor, designer, process engineer, copyist, etc.);</ul>
        <ul>audio signals, encryption, decryption, recognition
        characters (radio operator, telephone operator, stenographer, sound engineer, linguist,
        philologist, historian, mathematician, librarian, etc.);</ul>
        <ul>traffic management (dispatcher, traffic police inspector, etc.);</ul>
        <ul>preparation and storage of documentation (notary, archivist,
        clerk, etc.).</ul>
        <strong>Inclinations and preferences, expressed abilities:</strong>
        <ul>to process texts and tables, to make calculations and calculations, to
        process information;</ul>
        <ul>work with drawings, maps, and diagrams;</ul>
        <ul>receive and transmit signals and messages;</ul>
        <ul>count in the mind, to operate with signs and symbols;</ul>
        <ul>search for and fix bugs.</ul>
        <strong>Professionally important qualities:</strong> ability to mathematics, developed
        abstract thinking, high stability of attention, tendency to
        communication, accuracy and perseverance.<br>
        <strong>Psychological requirements of the "Man-Sign" professions:</strong>
        <ul>good memory;</ul>
        <ul>ability to focus on abstract material for a long time;</ul>
        <ul>good distribution and switching of attention;</ul>
        <ul>accuracy of perception, the ability to see what is behind the conventional signs;</ul>
        <ul>perseverance, patience;</ul>
        <ul>logical thinking.</ul></p>
      </div>
    </div>

    <div id="myModal3" class="modal">
      <div class="modal-content">
        <p><strong>Man - Man</strong> - all professions related to working with people, serving people,and communicating.<br><strong>The object of work is:</strong> people, groups, collectives.<br><strong>Professions of this type are related to:</strong>
        <ul>medical care of people and their care (doctor, dental
        technician, nurse, etc.);</ul>
        <ul>education, training, training of other people (educator
        preschool institutions, orphanages, teacher in schools, etc.
        educational institutions, master of industrial training,
        sports coach, tutor, etc.);</ul>
        <ul>household service (salesman, conductor, waiter, hairdresser,
        janitor, etc.);</ul>
        <ul>legal assistance and protection (judge, lawyer, police officer, lawyer,
        the local police inspector, etc.);</ul><ul>protection of society and the state (military, legal counsel,
        the policeman, inspector, etc.);</ul>
        <ul>information services (librarian, guide, lecturer and
        etc.);</ul>
        <ul>the organization of people, leadership and management (administrator,
        Manager, etc.);</ul>
        <ul>by study description, study other people (sociologist,
        psychologist, journalist, investigator, etc.).</ul>
        <strong>Inclinations and preferences expressed ability:</strong>
        <ul>service people;</ul>
        <ul>practicing treatment;</ul>
        <ul>training, education;</ul>
        <ul>protection of rights and security;</ul>
        <ul>managing people;</ul>
        <ul>easy to meet and communicate with new people;</ul>
        <ul>sensitivity and kindness to others</ul>
        <ul>the abilityto listen carefully to people;</ul>
        <ul>the ability to independently organize your own work and the work of others;</ul>
        <ul>the ability to speak well and clearly and speak publicly.</ul>
        <strong>Professionally important qualities:</strong>
        <ul>developed communication skills;</ul>
        <ul>emotional stability;</ul>
        <ul>fast attention switching;</ul>
        <ul>observation skills;</ul>
        <ul>organizational skills.</ul>
        <strong>Psychological requirements of the "man-man" professions:</strong>
        <ul>the desire to communicate</ul>
        <ul>the ability to easily make contact with strangers</ul>
        <ul>sustainable well-being when working with people;</ul>
        <ul>benevolence, responsiveness, self-control, ability to restrain
        emotions;</ul>
        <ul>the ability to analyze the behavior of others and your own</ul>
        <ul>to understand the intentions and moods of other people</ul>
        <ul>to understand people's relationships, the ability to settle differences
        between them, organize their interaction;</ul>
        <ul>the ability to mentally put yourself in the place of another person</ul>
        <ul>the ability to listen, take into account the opinion of another person;</ul>
        <ul>ability to master speech, facial expressions, gestures, developed speech,</ul>
        <ul>the ability to find a common language with different people, the ability to convince
        people;</ul>
        <ul>accuracy, punctuality, concentration;</ul>
        <ul>knowledge of human psychology.</ul></p>
      </div>
    </div>

    <div id="myModal4" class="modal">
      <div class="modal-content">
        <p><strong>Man-Artistic</strong> - all creative specialties.
        <br><strong>The object of work of these specialties are:</strong> artistic images,
        methods of their construction, their roles, elements and features.
        <br><strong>Professions of this type are associated with:</strong>
        <ul>creation, transformation, design, modeling of
        works of art (writer, artist, composer,
        director, fashion designer, designer, architect, sculptor, journalist,
        choreographer, hairdresser, pastry chef, etc.);</ul>
        <ul>reproduction, production of various works of art
        single copy (conductor, musician, vocalist, actor, jeweler,
        restorer, decorator, florist, cutter, engraver, cabinet maker, etc.)</ul>
        <ul>copying, reproduction of works of art in mass production (master of painting, grinder
        of stone and crystal, painter, printer, etc.)</ul>
        <strong>Inclinations, preferences, expressed abilities:</strong>
        <ul>engage in artistic design;</ul>
        <ul>engage in artistic creativity (painting, sculpture,</ul>
        <ul>photography, film, etc.);</ul>
        <ul>compose (poetry, prose, etc.);</ul>
        <ul>perform on stage;</ul>
        <ul>make beautiful handmade things;</ul>
        <ul>singing, playing musical instruments.</ul>
        <strong>Professionally important qualities:</strong>vivid imagination, imaginative thinking
        , creativity, flexibility of the senses, special abilities,
        development of functional abilities (hearing, vision, speech, taste, etc.).<br>
        <strong>Psychological requirements of the professions "man-artistic image":</strong>
        <ul>artistic abilities, developed visual perception;</ul>
        <ul>observation, visual memory, visual-imaginative thinking,
        creative imagination;</ul>
        <ul>knowledge of the psychological laws of emotional impact on people</ul></p>
      </div>
    </div>

    <div id="myModal5" class="modal">
      <div class="modal-content">
        <p><strong>Man-Technology</strong> - all technical professions, professions in which there
        is an active interaction with a variety of devices,
        machines, mechanisms, apparatuses, machine tools.
        <br><strong>The object of labor is:</strong> technical systems and objects (mechanisms,
        machines, apparatuses, installations), materials and types of energy.
        <br><strong>Professions of this type are associated with:</strong>
        <ul>creation, installation, assembly and adjustment of technical devices
        (specialists in the manufacture of parts, machines, mechanisms manually, on
        machine tools and automatic lines; locksmiths, assembly, assembly,
        electrical, construction and finishing specialists; specialists in
        the extraction and processing of industrial raw materials, food production, i.e. designer, designer, engineer, radio installer,
        welder, etc
        .);</ul><ul>operation of technical means and devices (specialists work
        on machines, manage transport, automatic systems, for
        example, a driver, tractor driver, locksmith, turner, seamstress, etc.);</ul>
        <ul>maintenance of technical facilities (specialists in setting up and
        maintaining equipment, managing machines, machines,
        machinery, vehicles, and construction machinery);</ul>
        <ul>restoration and repair of technical equipment, products
        (mechanic, electrician, radio mechanic, etc.);</ul>
        <ul>study (specialists in monitoring and analyzing the quality of products and
        mechanisms, specialists in testing the quality of products).</ul>
        <strong>Inclinations and preferences, expressed abilities:</strong>
        <ul>explore, observe;</ul>
        <ul>create and test new samples;</ul>
        <ul>plan, design, design, develop,
        model;</ul>
        <ul>come up with new ways of doing things;</ul>
        <ul>independently organize your own work and the work of others;</ul>
        <ul>make unconventional decisions.</ul>
        <strong>Professionally important qualities:</strong> technical mindset,
        spatial imagination, aptitude for practical work,
        emotional stability.
        <br><strong>Psychological requirements of the "man-tech" professions:</strong>
        <ul>good coordination of movements;</ul>
        <ul>accurate visual, auditory, vibrational, and kinesthetic
        perception;</ul>
        <ul>developed technical and creative thinking and imagination;</ul>
        <ul>ability to switch and concentrate attention;</ul>
        <ul>observation skills.</ul></p>
      </div>
    </div>

    <footer class="footer" style="width: 100%; margin-top: 0px; position: absolute">
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
      function showMenu() {
        navLinks.style.right="0";
      }
      function hideMenu() {
        navLinks.style.right="-200px";
      }

      var modal1 = document.getElementById("myModal1");
      var modal2 = document.getElementById("myModal2");
      var modal3 = document.getElementById("myModal3");
      var modal4 = document.getElementById("myModal4");
      var modal5 = document.getElementById("myModal5");

      var btn1 = document.getElementById("myBtn1");
      var btn2 = document.getElementById("myBtn2");
      var btn3 = document.getElementById("myBtn3");
      var btn4 = document.getElementById("myBtn4");
      var btn5 = document.getElementById("myBtn5");

      btn1.onclick = function() {
        modal1.style.display = "block";
      }
      btn2.onclick = function() {
        modal2.style.display = "block";
      }
      btn3.onclick = function() {
        modal3.style.display = "block";
      }
      btn4.onclick = function() {
        modal4.style.display = "block";
      }
      btn5.onclick = function() {
        modal5.style.display = "block";
      }

      window.onclick = function(event) {
        <?php
          for ($i = 1; $i <= 5; $i++) {
            echo "if (event.target == modal".$i.") {
                    modal".$i.".style.display = \"none\";
                  }\n";
          }
          echo closeWindows();
         ?>
      }

    </script>
  </body>
</html>
