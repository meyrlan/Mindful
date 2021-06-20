<?php
session_start();
include 'backend.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial scale=1.0"charset="utf-8">
    <title>For applicants</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/b42eff874a.js" crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/applicants.css">
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
      <h1>In this section all the best universities in the world and in the CIS countries for schoolchildren  are presented</h1>
      <a href="universities.php" class="btnuni">Explore universities</a>
    </div>
  </section>
  <section class="cisuni">
    <h1>Top 3 universities of CIS countries </h1>
    <p class="ciscountries">Kazakhstan</p>
    <div class="cisuni-row">
      <div class="cisuni-col">
        <div class="uniimage">
          <img src="../images/aitu.jpeg">
        </div>
        <h3>Astana IT University</h3>
        <p>Nur-Sultan</p>
        <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#aitu">Learn more</button>
      </div>
      <div class="cisuni-col">
        <div class="uniimage">
          <img src="../images/kbtu.jpg">
        </div>
        <h3>Kazakh-British Technical University</h3>
        <p>Almaty</p>
        <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#kbtu">Learn more</button>
      </div>
      <div class="cisuni-col">
        <div class="uniimage">
          <img src="../images/nu.jpg">
        </div>
        <h3>Nazarbayev University</h3>
        <p>Nur-Sultan</p>
        <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#nu">Learn more</button>
      </div>
    </div>


    <!-- UKRAINE -->


    <p class="ciscountries">Ukraine</p>
    <div class="cisuni-row">
      <div class="cisuni-col">
        <div class="uniimage">
          <img src="../images/igor.jpg">
        </div>
        <h3>
National Technical University of Ukraine
"Igor Sikorsky Kyiv Polytechnic Institute"</h3>
        <p>Kiyv</p>
        <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#igor">Learn more</button>
      </div>
      <div class="cisuni-col">
        <div class="uniimage">
          <img src="../images/sumy.jpg">
        </div>
        <h3>Sumy State University</h3>
        <p>Sumy</p>
        <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#sumy">Learn more</button>
      </div>
      <div class="cisuni-col">
        <div class="uniimage">
          <img src="../images/taras.jpg">
        </div>
        <h3>Taras Shevchenko National University of Kyiv</h3>
        <p>Kiyv</p>
        <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#taras">Learn more</button>
      </div>
    </div>

    <!--Russia-->

    <p class="ciscountries">Russia</p>
    <div class="cisuni-row">
      <div class="cisuni-col">
        <div class="uniimage">
          <img src="../images/msu.jpg">
        </div>
        <h3>Lomonosov Moscow State University</h3>
        <p>Moscow</p>
        <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#msu">Learn more</button>
      </div>
      <div class="cisuni-col">
        <div class="uniimage">
          <img src="../images/hse.jpg">
        </div>
        <h3>National Research University Higher School of Economics</h3>
        <p>Moscow, Nizhny Novgorod, Saint Petersburg, Perm
</p>
        <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#hse">Learn more</button>
      </div>
      <div class="cisuni-col">
        <div class="uniimage">
          <img src="../images/spb.jpg">
        </div>
        <h3>Saint Petersburg State University</h3>
        <p>Saint Petersburg</p>
        <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#spb">Learn more</button>
      </div>
    </div>

    <!--Turkey-->

    <p class="ciscountries">Turkey</p>
    <div class="cisuni-row">
      <div class="cisuni-col">
        <div class="uniimage">
          <img src="../images/cankaya.jpg">
        </div>
        <h3>Cankaya University</h3>
        <p>Ankara</p>
        <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#cankaya">Learn more</button>
      </div>
      <div class="cisuni-col">
        <div class="uniimage">
          <img src="../images/sabanci.jpg">
        </div>
        <h3>Sabanci University</h3>
        <p>Istanbul</p>
        <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#sabanci">Learn more</button>
      </div>
      <div class="cisuni-col">
        <div class="uniimage">
          <img src="../images/bilkent.jpg">
        </div>
        <h3>Bilkent University</h3>
        <p>Ankara</p>
        <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#bilkent">Learn more</button>
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
          <ul style="list-style: none">
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
  <!--Turkey-->
  <div id="cankaya" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cankaya University</h4>
        </div>
        <div class="modal-body">
          <p class="point">PROGRAMS</p>
          <p class="feature">Bachelor</p>
          <p class="list">
            Agricultural faculty
            <br>Faculty of Communications
            <br>Dentistry
            <br>Faculty of Theology
            <br>Faculty of Education
            <br>Faculty of Engineering
            <br>Health care
            <br>Humanitarian sciences
            <br>Jurisprudence
            <br>Faculty of Medicine
            <br>Faculty of Pharmacy
            <br>Political science
            <br>Natural Sciences
            <br>Faculty of Sports
            <br>Veterinary
            <br>Pharmaceuticals
            <br>Computer engineering
            <br>Electronics
            <br>Energy and materials development
            <br>Biomedical engineering
            <br>Veterinary
            <br>Biology
            <br>Fisheries and aquaculture
            <br>Theology
            </p>
            <p class="point">REQUIREMENTS</p>
            <p class="list">Entrance test<br>Internal exams</p>
            <p class="point">EDUCATION LANGUAGE</p>
            <p class="list">English<br>Turkish</p>
            <p class="point">WEBSITE</p>
            <p class="list"><a href="http://www.cankaya.edu.tr">http://www.cankaya.edu.tr</a></p>
        </div>
      </div>
    </div>
  </div>

  <div id="sabanci" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sabanci University</h4>
        </div>
        <div class="modal-body">
          <p class="point">PROGRAMS</p>
          <p class="feature">Bachelor</p>
          <p class="list">
            Computer Science and Engineering
            <br>Mechatronics
            <br>Industrial Engineering
            <br>Molecular Biology, Genetics and Bioengineerin
            <br>Science in Materials Science and Nanoengineering
            <br>Electronics
            <br>Arts
            <br>Psychology
            <br>Management
            <br>Visual Arts and Communication Design
            <br>Political Science and International Studies
            <br>Economics
            </p>
            <p class="point">REQUIREMENTS</p>
            <p class="list">
              IELTS 6.5, TOEFL 80, or according to the results of the internal test of the University
              <br>GPA: 3.5+
              <br>One of the results for the International tests (SAT etc.) or UNT exams
              <br>International science olympiads
              <br>Official transcripts
              <br>2 letters of recommendation
            </p>
            <p class="point">EDUCATION LANGUAGE</p>
            <p class="list">English<br>Turkish</p>
            <p class="point">WEBSITE</p>
            <p class="list"><a href="https://www.sabanciuniv.edu">https://www.sabanciuniv.edu</a></p>
        </div>
      </div>
    </div>
  </div>

  <div id="bilkent" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Bilkent University</h4>
        </div>
        <div class="modal-body">
          <p class="point">PROGRAMS</p>
          <p class="feature">Bachelor</p>
          <p class="list">
            Urban Design and Landscape Architecture
            <br>Communication and Design
            <br>Industrial Engineering
            <br>Computer Technology and Information Systems
            <br>International Relations
            <br>English Language and Literature
            <br>Archeology
            <br>Computer Science
            <br>Interior Architecture and Environmental Design
            <br>Political Science and Public Administration
            <br>Mathematics
            <br>Management
            <br>Molecular Biology and Genetics
            <br>Psychology
            <br>Tourism and Hotel Management
            <br>Physics
            <br>Chemistry
            <br>Electrical and Electronic Engineering
            <br>Philosophy
            <br>Economics
            </p>
            <p class="point">REQUIREMENTS</p>
            <p class="list">Entrance test<br>Internal exams</p>
            <p class="point">EDUCATION LANGUAGE</p>
            <p class="list">English<br>Turkish</p>
            <p class="point">WEBSITE</p>
            <p class="list"><a href="https://w3.bilkent.edu.tr/bilkent/">https://w3.bilkent.edu.tr/bilkent/</a></p>
        </div>
      </div>
    </div>
  </div>

  <!--Russia-->

  <div id="msu" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Lomonosov Moscow State University</h4>
        </div>
        <div class="modal-body">
          <p class="point">PROGRAMS</p>
          <p class="feature">Bachelor</p>
          <p class="list">
            Faculty of Mechanics and Mathematics
            <br>Faculty of Computational Mathematics and Cybernetics
            <br>Faculty of Physics
            <br>Chemical faculty
            <br>Faculty of Materials Science
            <br>Department of Biology
            <br>Faculty of Bioengineering and Bioinformatics
            <br>Faculty of Soil Science
            <br>Faculty of Geology
            <br>Faculty of Geography
            <br>Faculty of Fundamental Medicine
            <br>Faculty of Fundamental Physical and Chemical Engineering
            <br>Biotechnology Faculty
            <br>Faculty of Space Research
            <br>History department
            <br>Faculty of Philology
            <br>Faculty of Philosophy
            <br>Faculty of Economics
            <br>Faculty of Law
            <br>Faculty of Journalism
            <br>Psychology faculty
            <br>Institute of Asian and African Studies
            <br>Sociological faculty
            <br>Faculty of Foreign Languages ​​and Regional Studies
            <br>Faculty of Public Administration
            <br>Faculty of World Politics
            <br>Faculty of Arts
            </p>
            <p class="point">REQUIREMENTS</p>
            <p class="list">Entrance test<br>Internal exams <br>Unified State Exam</p>
            <p class="point">EDUCATION LANGUAGE</p>
            <p class="list">English<br>Russian</p>
            <p class="point">WEBSITE</p>
            <p class="list"><a href="https://www.msu.ru/">https://www.msu.ru/</a></p>
        </div>
      </div>
    </div>
  </div>

  <div id="hse" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">National Research University Higher School of Economics</h4>
        </div>
        <div class="modal-body">
          <p class="point">PROGRAMS</p>
          <p class="feature">Bachelor</p>
          <p class="list">
            Graduate School of Law and Administration
            <br>Institute of State and Municipal Administration
            <br>Institute of Communication Management
            <br>Institute of Tax Management and Real Estate Economics
            <br>Institute of Education
            <br>Institute for Resource Support of Procurement and Sales Management for State and Municipal Needs. A.B. Solovyova
            <br>Institute for Professional Retraining of Specialists of the Graduate School of Business, National Research University Higher School of Economics
            <br>Institute for Statistical Studies and Economics of Knowledge
            <br>Institute of Construction and Housing and Communal Services GASIS
            <br>Institute of Economics and Regulation of Infrastructure Industries
            <br>Department of Innovation Management
            <br>International Center for Training in Logistics at the Higher School of Business, National Research University Higher School of Economics
            <br>Moscow Institute of Electronics and Mathematics. A.N. Tikhonov
            <br>Faculty of Urban and Regional Development
            <br>Faculty of Humanities
            <br>Faculty of pre-university training
            <br>Faculty of Communications, Media and Design
            <br>Faculty of Computer Science
            <br>Faculty of Mathematics
            <br>Faculty of World Economy and International Affairs
            <br>Faculty of Law
            <br>Faculty of Social Sciences
            <br>Faculty of Economic Sciences
            </p>
            <p class="point">REQUIREMENTS</p>
            <p class="list">Internal exams<br>Unified State Exam</p>
            <p class="point">EDUCATION LANGUAGE</p>
            <p class="list">English<br>Russian</p>
            <p class="point">WEBSITE</p>
            <p class="list"><a href="https://www.hse.ru/en/">https://www.hse.ru/en/</a></p>
        </div>
      </div>
    </div>
  </div>

  <div id="spb" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Saint Petersburg State University</h4>
        </div>
        <div class="modal-body">
          <p class="point">PROGRAMS</p>
          <p class="feature">Bachelor</p>
          <p class="list">
            Clinical medicine
            <br>Biological
            <br>Oriental
            <br>Arts
            <br>Department of Excellence in Film and Television Artist
            <br>Mathematical-mechanical
            <br>Medical
            <br>International relations
            <br>Political Science
            <br>Applied Mathematics - Control Processes
            <br>Psychology
            <br>Liberal Arts and Sciences
            <br>Sociology
            <br>Physical
            <br>Philological
            <br>Economic
            <br>Legal
            <br>Earth sciences
            <br>Chemistry
            <br>Philosophy
            <br>History
            <br>Graduate School of Journalism and Mass Communication
            <br>Graduate School of Management
            <br>Dentistry and medical technology
            </p>
            <p class="point">REQUIREMENTS</p>
            <p class="list">Internal exams<br>Unified State Exam</p>
            <p class="point">EDUCATION LANGUAGE</p>
            <p class="list">English<br>Russian</p>
            <p class="point">WEBSITE</p>
            <p class="list"><a href="https://spbu.ru/">https://spbu.ru/</a></p>
        </div>
      </div>
    </div>
  </div>


  <!--Kazakhstan-->


  <div id="aitu" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Astana IT University</h4>
        </div>
        <div class="modal-body">
          <p class="point">PROGRAMS</p>
          <p class="feature">Bachelor</p>
          <p class="list">
            Computer Science <br>
            Software Engineering <br>
            Big Data Analysis <br>
            Industrial Automation <br>
            Media Technologies <br>
            Digital Journalism <br>
            Cybersecurity <br>
            IT-management<br>
            Telecommunication systems
            </p>
            <p class="point">REQUIREMENTS</p>
            <p class="list">IELTS 5.0/TOEFL ITP 460+/TOEFL IBT 46-59/APTIS B1 <br> UNT 70+</p>
            <p class="point">EDUCATION LANGUAGE</p>
            <p class="list">English</p>
            <p class="point">WEBSITE</p>
            <p class="list"><a href="https://astanait.edu.kz/">https://astanait.edu.kz/</a></p>
        </div>
      </div>
    </div>
  </div>
  <div id="kbtu" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Kazakh-British Technical University</h4>
        </div>
        <div class="modal-body">
          <p class="point">PROGRAMS</p>
          <p class="feature">Bachelor</p>
          <p class="list">
            Faculty of Information Technology: Information systems, Computer technology and software, Automation and management
            <br>Faculty of Energy and Oil and Gas Industry: Oil and gas business
            <br>Faculty of Geology and Geological Exploration: Geology and exploration of solid mineral deposits, Oil and gas geology, Geophysical methods of prospecting and exploration of mineral deposits
            <br>Kazakhstan Marine Academy: Marine engineering and technology
            <br>International School of Economics: Finances; Economics, Financial Analysis
          </p>
          <p class="feature">Master's degree</p>
            <p class="list">
              Faculty of Information Technology: Information systems
              <br>Faculty of Energy and Oil and Gas Industry: Oil and gas business, Industrial project management and engineering
              <br>Faculty of Geology and Geological Exploration: Geology and exploration of solid minerals, Geology and exploration of hydrocarbon raw materials
              <br>Kazakhstan Marine Academy: Offshore engineering and marine transportation, Transport engineering and planning
              <br>International School of Economics: Finances; Economics, Financial Analysis
              </p>
            <p class="feature">PhD</p>
              <p class="list">
                Faculty of Information Technology:Computer Science Computer Engineering and Management.
  <br>Faculty of Energy and Oil and Gas Industry: Oil and gas business
  <br>sFaculty of Geology and Geological Exploration: Geology and exploration of mineral fields
                </p>
            <p class="point">REQUIREMENTS</p>
            <p class="list">IELTS 5.5 <br>UNT 60+</p>
            <p class="point">EDUCATION LANGUAGE</p>
            <p class="list">English</p>
            <p class="point">WEBSITE</p>
            <p class="list"><a href="https://kbtu.edu.kz/ru/">https://kbtu.edu.kz/ru/ </a></p>
        </div>
      </div>
    </div>
  </div>
  <div id="nu" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nazarbayev University</h4>
        </div>
        <div class="modal-body">
          <p class="point">PROGRAMS</p>
          <p class="feature">Bachelor</p>
          <p class="list">
            School of Sciences and Humanities: Anthropology, Economics, History, Philosophy and Religious Studies, Political Science and International Relations, Sociology, Biology, Chemistry, Mathematics, Physics. Languages Linguistics and Literature
            <br>School of Medicine: Nursing programs
            <br>School of Mining and Geosciences: Petroleum Engineering, Mining Engineering, Applied Geology
            <br>School of Engineering and Digital Sciences: Mechanical and Aerospace Engineering, Chemical and Materials Engineering, Civil and Environmental Engineering, Electrical and Computer Engineering, Computer Science, Robotics and Mechatronics
          </p>
          <p class="feature">Master's degree</p>
            <p class="list">
              Graduate School of Business: Business Administration, Executive Business Administration, Finance, Engineering Management
              <br>Graduate School of Public Policy: Public Policy, Public Administration
              <br>Graduate School of Education: Educational Leadership (School leadership), Educational Leadership (Higher education), Educational Leadership (inclusive education), Multilingual Education, School of Sciences and Humanities, Master of Arts in Political Science and International Relations, Master of Arts in Economics, Master of Arts in Eurasian Studies, Master of Science in Biological Sciences and Technologies, Master of Science in Chemistry, Master of Science in Applied Mathematics, Master of <br>Science in Physics
              <br>School of Medicine: Public Health, Molecular Medicine, Doctor of Medicine
              <br>School of Mining and Geosciences: Mining Engineering, Petroleum Engineering
              <br>School of Engineering and Digital Sciences: Mechanical and Aerospace Engineering, Chemical and Materials Engineering, Civil and Environmental Engineering, Electrical and Computer, Engineering, Engineering Management, MSc Biomedical Engineering, Computer Sciences, Robotics
            </p>
            <p class="feature">PhD</p>
              <p class="list">
                Graduate School of Public Policy: Public Policy
                <br>Graduate School of Education: Education
                <br>School of Sciences and Humanities: PhD in Eurasian Studies, PHD in Mathematics, PhD in Physics, PhD in Life Sciences
                </p>
            <p class="point">REQUIREMENTS</p>
            <p class="list">IELTS 6.5 overall (6.0 in each section)/
              TOEFL iBT - 79 (reading - 13, listening - 12, speaking - 18, writing - 21)
              /TOEFL PDT* - 574 <br>SAT Reasoning Test - 1240 Essay is required
              /ACT - 27 composite score. Writing part is required <br>
              SAT Subject Test(specific) <br> Interview(specific)
            </p>
            <p class="point">EDUCATION LANGUAGE</p>
            <p class="list">English</p>
            <p class="point">WEBSITE</p>
            <p class="list"><a href="https://nu.edu.kz/">https://nu.edu.kz/</a></p>
        </div>
      </div>
    </div>
  </div>


  <!--UKR-->


  <div id="igor" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">National Technical University of Ukraine "Igor Sikorsky Kyiv Polytechnic Institute"</h4>
        </div>
        <div class="modal-body">
          <p class="point">PROGRAMS</p>
          <p class="feature">Bachelor</p>
          <p class="list">
            Faculty of heat and power engineering: Computer Science, Software Engineering, Automation and Computer-Integrated Technologies, Heat and Power Engineering, Nuclear Power Engineering, Mechanical and Power Engineering
            <br>Institute for applied system analysis: System Analysis, Computer Science
            <br>Educational-scientific institute of telecommunication systems: Telecommunications and Radio Engineering
            <br>Faculty of applied mathematics: Applied Mathematics, Computer Engineering, Software Engineering
            <br>Faculty of informatics and computer science: Software Engineering, Computer Engineering, Information Systems and Technologies
            <br>Faculty of electronics: Micro- and Nano-System Techniques, Electronics Telecommunications and Radio Engineering
            <br>Faculty of radio engineering: Telecommunications and Radio Engineering
            <br>Institute of physics and technology: Applied Physics and Nanomaterials, Applied Mathematics, Cyber Security
            <br>Faculty of electric power engineering and automatics: Electrical Power Engineering, Electrical Engineering and Electromechanics
            <br>Institute of energy saving and energy management: Electrical Energetics, Electrical Engineering and Electromechanics, Heat and Power Engineering, Mining
            <br>Institute of mechanical engineering: Applied Mechanics
            <br>Faculty of instrumentation engineering: Automation and Computer-Integrated Technologies, Metrology and Information-Measuring Technology
            <br>E.O. Paton institute of materials science and welding: Applied Mechanics, Materials Science, Metallurgy
            <br>Faculty of chemical technology: Chemical Technologies and Engineering, Automation and Computer-Integrated Technologies
            <br>Faculty of chemical engineering: Ecology,Chemical Technologies and Engineering, Automation and Computer-Integrated Technologies, Applied Mechanics, Industrial Engineering
            <br>Faculty of physics and mathematics:Mathematics, Physics and Astronomy
            <br>FACULTY OF BIOMEDICAL ENGINEERING: Computer Science, Biomedical Engineering, Physical Therapy, Ergotherapy
            <br>FACULTY OF BIOTECHNOLOGY AND BIOTECHNICS: Industrial Engineering, Biotechnology and Bioengineering
            <br>INSTITUTE OF PRINTING AND PUBLISHING: Fine Arts, Decorative Art, Restoration, Journalism, Management, Industrial Engineering, Publishing and Printing
            <br>FACULTY OF MANAGEMENT AND MARKETING: Economics, Marketing, Management
            <br>FACULTY OF SOCIOLOGY AND LAW: Sociology, Philosophy, Social Work, Public Management and Administration, Law
            <br>FACULTY OF LINGUISTICS: Philology
            <br>INSTITUTE OF AEROSPACE TECHNOLOGIES: Avia and Space-Rocket Techniques, Avionics
            <br>INSTITUTE OF SPECIAL COMMUNICATION AND INFORMATION PROTECTION: Computer Science, Cybersecurity, Telecommunications and radio engineering
            </p>
          <p class="feature">Master's degree</p>
            <p class="list">
              INSTITUTE OF SPECIAL COMMUNICATION AND INFORMATION PROTECTION: Computer Systems and Special Communication Technologies, Security of the State Information Resources, Special Telecommunication Systems
                <br>INSTITUTE OF AEROSPACE TECHNOLOGIES: Planes and Helicopters, Aerospace and Rocket Systems Engineering, Rocket and Space Complexes, Control systems of flight venicles and complexes engineering
                <br>FACULTY OF LINGUISTICS: Germanic Languages and Literatures (translation included), the first – English, Germanic Languages and Literatures (translation included), the first – German, Romance Languages and Literatures (translation included), the first – French
                <br>FACULTY OF SOCIOLOGY AND LAW: Conflict Resolution and Mediation, Social philosophy and philosophy of history, International Social Projects and Volunteer Activities, Administrative Management, Electronic Governance, Commercial and Administrative Law and Procedure, Information Law and Intellectual Property Law
                <br>FACULTY OF MANAGEMENT AND MARKETING: Economic Cybernetics, International Economics, Business Enterprise Economics, Human Resource Management and Labor Economics, Industrial Marketing, Business Analytics, Management in the Field of Defense-Industrial Complex, Management and Business Administration, Management of Investments and Innovations, Management of International Business, Logistics
                <br>INSTITUTE OF PRINTING AND PUBLISHING: Fine Arts, Advertising and Public Relations, Publishing and Editing, Media Management and Administration in Publishing and Printing Industry, Computerized Printing Systems, Technologies of Printed and Electronic Publications
                <br>FACULTY OF BIOTECHNOLOGY AND BIOTECHNICS: Equipment of Pharmaceutical and Biotechnological Productions, Biotechnology
                <br>FACULTY OF BIOMEDICAL ENGINEERING: Information Technologies in Biology and Health Care, Medical Engineering, Regenerative and Biopharmaceutical Engineering, Physical Therapy, Ergotherapy
                <br>FACULTY OF PHYSICS AND MATHEMATICS: Actuarial and Financial Mathematics, Mathematical and Computer Methods for Modeling of Dynamic Systems, Computer Simulation of Physical Processes
                <br>FACULTY OF CHEMICAL ENGINEERING: Ecological Safety, Chemical Technologies of Timber and Vegetable Matter Processing, Industrial Ecology and Resources-Efficient Clean Technologies, Automation and Computer-Integrated Technologies of Chemical Productions, Packaging and Packaging Equipment Engineering, Engineering of Production Equipment for Polymer and Building Materials and Products, Engineering of Production Equipment for Chemical, Oil Refining, Cellulose and Paper Production
                <br>FACULTY OF CHEMICAL TECHNOLOGY: Chemical Technologies of Inorganic Substances and Water Purification, Chemical Technologies of Organic Substances, Chemical Technologies of Cosmetic Products and Food Additives, Electrochemical Technologies of Inorganic and Organic Materials, Chemical Technologies of Inorganic Ceramic Materials, Chemical Technologies of Inorganic and Organic Binders and Composite Materials, Computer-Integrated Sustainable Chemical Productions
                <br>E.O. PATON INSTITUTE OF MATERIALS SCIENCE AND WELDING: Technologies and Engineering in Welding, Similar Welding Technologies and Resource Saving, Laser Techniques and Computerized Processes of Physical and Technical Material Processing, Computer Modeling of Metal and Physical Processes, Metallurgy and Computer Simulation of Heat Treatment Processes, Nanotechnology and Computer Design of Materials, Special Metallurgy, Computerized Molding Processes
                <br>FACULTY OF INSTRUMENTATION ENGINEERING: Computer-Integrated Technologies of Instrument Making, Computer-Integrated Technologies for Device Engineering, Computer-Integrated Technologies, Navigation and Control Systems, Computer-Integrated Optoelectronic Systems and Technologies, Robotic and automated systems of non-destructive testing and diagnostics, Information-Measuring Technology of Ecological Safety, Metrology and Measuring Techniques, Information Measuring Technologies and Systems
                <br>INSTITUTE OF MECHANICAL ENGINEERING: Dynamics and Strength of Machines, Production Engineering, Applied mechanics of materials plasticity, Technologies of Aircraft Manufacturing, Computer Design Technologies of Machine Tools, Robots and Machines, Engineering Design Tool Systems, Automated and Robotic Mechanical Systems
                <br>INSTITUTE OF ENERGY SAVING AND ENERGY MANAGEMENT:Electricity Supply Systems for Consumers, Energy Management and Energy Efficiency, Engineering of Automated Electrical and Technical Complexes, Electromechanical and Mechatronic Systems of Energy Intensive Industries, Energy Management and Engineering of Heat and Power Systems, Geoengineering
                <br>FACULTY OF ELECTRIC POWER ENGINEERING AND AUTOMATICS: Electric Power Plants, Alternative and Renewable Sources of Energy, Electric Power Systems and Networks, Control, Protection and Automation of Power Systems, Electrical Devices and Electrotechnological Complexes, Electric Machines and Apparatus, Electromechanical Automation Systems and Electrical Drive and electromobility
                <br>FACULTY OF HEAT AND POWER ENGINEERING: Computer monitoring and Geometric Modeling in Information Systems, Software Engineering of Distributed Systems, Automation and Computer-Integrated Technologies of Cyber-Energy Systems, Industrial and Municipal Heat and Power Engineering and Energy Saving, Thermal Power Plants, Modeling and Сomputer Technologies in Thermophysics, Nuclear Power Plants, Physical Protection, Accounting and Control of Nuclear Materials, Engineering and Сomputer, Technologies of Heat and Power systems
                <br>INSTITUTE FOR APPLIED SYSTEM ANALYSIS: System Analysis and Control, System Analysis of Financial Markets, Artificial Intelligence Systems and Methods, Intelligent Service-Oriented Distributed Computing
                <br>EDUCATIONAL-SCIENTIFIC INSTITUTE OF TELECOMMUNICATION SYSTEMS: Information and Communication Technologies, Telecommunication Systems and Networks, Infocommunication Engineering and Programming
                <br>FACULTY OF APPLIED MATHEMATICS: Data Science and Mathematical Modeling, Systems Programming and Specialized Computer Systems, Software of Computer and Information Retrieval Systems
                <br>FACULTY OF INFORMATICS AND COMPUTER SCIENCE: Software engineering for computer-aided systems, Software Engineering for Computer Systems, Computer Systems and Networks, Information Control Systems and Technologies, Integrated Information Systems, Information Support of Robotic Systems
                <br>FACULTY OF ELECTRONICS: Micro- and Nanoelectronics, Electronic Micro- and Nanosystems and Technologies, Electronic Devises and Equipment, Electronic Components and Systems, Acoustic Electronic Systems and Technologies of Acoustic Information Processing, Electronic Multimedia Systems and Internet of Things, Information and Computing Facilities of Electronic Systems
                <br>FACULTY OF RADIO ENGINEERING: Radio Technical Information Technologies, Radio Communication and Signal Processing, Radio Systems Engineering, Intelligent Technologies of Microsystem Radio Electronic Equipment
                <br>INSTITUTE OF PHYSICS AND TECHNOLOGY: Applied Physics, Mathematical Methods of Cryptographic Information Security, Mathematical Methods of Modeling, Pattern Rrecognition and Data Security, Systems, Technologies and Mathematical Methods of Cyber Security, Technical Information Security Systems</p>
            <p class="point">REQUIREMENTS</p>
            <p class="list">Entrance test <br>Interview</p>
            <p class="point">EDUCATION LANGUAGE</p>
            <p class="list">Ukarainian</p>
            <p class="point">WEBSITE</p>
            <p class="list"><a href="http://www.univ.kiev.ua/en/">http://www.univ.kiev.ua/en/</a></p>
        </div>
      </div>
    </div>
  </div>
  <div id="sumy" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sumy State University</h4>
        </div>
        <div class="modal-body">
          <p class="point">PROGRAMS</p>
          <p class="feature">Bachelor</p>
          <p class="list">
            Academic and Research Institute of Business Technologies “UAB”: Economics, International Economic Relations, Accounting and Taxation, Finance, Banking and Insurance
            <br>Oleg Balatskyi Academic and Research Institute of Finance, Economics and Management: Business, Trade and Exchange Activities, Economics, Finance, Banking and Insurance, Management, Marketing
            <br>Academic and Research Institute of Law: Law, International Law, History and Archeology
            <br>The Faculty of Electronics and Informational Technologies: Computer Sciences, Applied Mathematics, Electrical Energetics, Electrical Engineering and Electromechanics, Micro and Nanosystem Technology, Electronics, Telecommunications and Radio Engineering
            <br>Medical Institute: Physical Education and Sports, Physical Therapy, Ergotherapy, Public Health
            <br>Faculty of Foreign Philology and Social Communications: Philology, Journalism
            <br>Faculty of Technical Systems and Energy Efficient Technologies: Power Machine Building, Heat Power Engineering, Environmental Protection Technology, Chemistry, Materials Science Industrial Mechanical Engineering, Applied Mechanics
          </p>
          <p class="feature">Master's degree</p>
            <p class="list">
              Academic and Research Institute of Business Technologies “UAB”: International Economic Relations, Economics, Accounting and Taxation, Finance, Banking and Insurance
              <br>Oleg Balatskyi Academic and Research Institute of Finance, Economics and Management: Economics, Finance, Banking and Insurance, Management Public Management and Administration, Marketing, Business, Trade and Exchange Activities
              <br>Faculty of Electronics and Informational Technologies: Computer Sciences, Applied Mathematics, Electrical Energetics, Electrical Engineering and Electromechanics, Automation and Computer-Integrated Technologies, Micro and Nanosystem Technology, Electronics, Biomedical Engineering
              <br>Medical Institute: Medicine, Physical Education and Sports, Dentistry, Pediatrics
              <br>Academic and Research Institute of Law: Law
              <br>Faculty of Foreign Philology and Social Communications: Philology, Journalism
              <br>Faculty of Technical Systems and Energy Efficient Technologies: Applied Mechanics, Industrial Mechanical Engineering, Power Machine Building, Heat Power Engineering, Materials Science, Environmental Protection Technologies
            </p>
            <p class="feature">PhD</p>
              <p class="list">
                Economics (accredited and available for admission in 2021-2026)
                <br>International Business Administration and Business Analytics
                </p>
            <p class="point">REQUIREMENTS</p>
            <p class="list">Entrance test <br>Interview</p>
            <p class="point">EDUCATION LANGUAGE</p>
            <p class="list">Ukarainian</p>
            <p class="point">WEBSITE</p>
            <p class="list"><a href="https://sumdu.edu.ua/uk/">https://sumdu.edu.ua/uk/</a></p>
        </div>
      </div>
    </div>
  </div>
  <div id="taras" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Taras Shevchenko National University of Kyiv</h4>
        </div>
        <div class="modal-body">
          <p class="point">PROGRAMS</p>
          <p class="feature">Bachelor</p>
          <p class="list">
            Faculty of Chemistry: Chemistry (language of tuition: Ukrainian)
            <br>Faculty of Computer Science and Cybernetics:Applied Mathematics (language of tuition: Ukrainian), Software Engineering (language of tuition: Ukrainian), Informatics (language of tuition: Ukrainian), System Analysis (language of tuition: Ukrainian)
            <br>Faculty of Economics: Enterprise Economics (language of tuition: Ukrainian), Enterprise Economics (based on educational level of Junior Specialist) (language of tuition: Ukrainian), Enterprise Economics (language of tuition: Russian), Economics (language of tuition: English), Economic Analysis and Statistics (language of tuition: Ukrainian), Economic Cybernetics (language of tuition: Ukrainian), Economics and Economic Policy (language of tuition: Ukrainian), Economics and Economic Policy (based on educational level of Junior Specialist) (language of tuition: Ukrainian), International Economics (language of tuition: Ukrainian), Accounting and Auditing (language of tuition: Ukrainian), Accounting and Auditing (based on educational level of Junior Specialist) (language of tuition: Ukrainian), Finance and Credit (language of tuition: Ukrainian), Finance and Credit (based on educational level of Junior Specialist) (language of tuition: Ukrainian), Finance and Credit (language of tuition: Russian), Management of Organizations (language of tuition: Ukrainian), Management of Organizations (based on educational level of Junior Specialist) (language of tuition: Ukrainian), Marketing (language of tuition: Ukrainian), Entrepreneurship and Exchange Activities (language of tuition: Ukrainian), Entrepreneurship and Exchange Activities (based on educational level of Junior Specialist) (language of tuition: Ukrainian), Trade, Logistics and Environmental Entrepreneurship (language of tuition: Ukrainian), Trade, Logistics and Environmental Entrepreneurship (based on educational level of Junior Specialist) (language of tuition: Ukrainian)
            <br>Faculty of Geography: Geography (language of tuition: Ukrainian), Cartography, Geographic Information Systems, Remote Earth Sensing (language of tuition: Ukrainian), Meteorology (language of tuition: Ukrainian), Soil Science, Land Management and Territorial Planning (language of tuition: Ukrainian), Water Resources Management and Ecology (language of tuition: Ukrainian), Cross-Border Environmental Cooperation (language of tuition: Ukrainian), Economic Geography (language of tuition: Ukrainian), Geomorphology and Naturally Cognitive Tourism (language of tuition: Ukrainian), Natural Geography (language of tuition: Ukrainian), Urbanistics and City Planning (language of tuition: Ukrainian), Geodesy and Land Management (language of tuition: Ukrainian), Gastronomic tourism (language of tuition: Ukrainian). Tourism (language of tuition: Ukrainian), Tourism (Language of tuition: Russian)
            <br>Faculty of History: Secondary education (History) (language of tuition: Ukrainian), Museology, Monument Studies (language of tuition: Ukrainian), Archiving and Documentation Management (language of tuition: Ukrainian), American and European studies (with in-depth study of foreign languages) (language of tuition: Ukrainian), Archeology and prehistory (language of tuition: Ukrainian), East European historical studies (language of tuition: Ukrainian), Histiry (language of tuition: Ukrainian), History of arts (language of tuition: Ukrainian), History of Ukraine and cultural anthropology (with in-depth study of foreign languages), Orientalism (language of tuition: Ukrainian), Practical (public) history (with in-depth study of foreign languages) (language of tuition: Ukrainian), World Ukrainianity in civilizational progress (with in-depth study of foreign languages) (language of tuition: Ukrainian), World History (language of tuition: Russian)
            <br>Faculty of Information Technology: Software Engineering (language of tuition: Ukrainian), Software Engineering (based on educational level of Junior Specialist) (language of tuition: Ukrainian), Applied Programming (language of tuition: Ukrainian), Computer Science (language of tuition: Ukrainian), Data Analysis (language of tuition: Ukrainian), Cybersecurity (language of tuition: Ukrainian), Cybersecurity (based on educational level of Junior Specialist) (language of tuition: Ukrainian), Software Technologies of Internet of Things (language of tuition: Ukrainian), Network and Internet Technologies (language of tuition: Ukrainian), Faculty of Mechanics and Mathematics, Mathematics (language of tuition: Ukrainian), Computer Mathematics (language of tuition: Ukrainian), Computer Mechanics (language of tuition: Ukrainian), Statistics (language of tuition: Ukrainian)
            <br>Faculty of Philosophy: Religious Studies (language of tuition: Ukrainian), Philosophy (language of tuition: Ukrainian), Culturology (language of tuition: Ukrainian), Politology (language of tuition: Ukrainian), Politology (language of tuition: Russian), Governance in the Public Sphere (language of tuition: Ukrainian), Governance in the Public Sphere (language of tuition: Russian)
            <br>Faculty of Physics: Astronomy (language of tuition: Ukrainian), Physics (language of tuition: Ukrainian), Physics (Jointly with Kyiv Academic University) (language of tuition: Ukrainian), Optotechnics (language of tuition: Ukrainian), Optotechnics (based on educational level of Junior Specialist) (language of tuition: Ukrainian)
            <br>Faculty of Psychology: Psychology (language of tuition: Ukrainian), Social Work (language of tuition: Ukrainian), Social Pedagogy (language of tuition: Ukrainian), Faculty of Radiophysics, Electronics and Computer Systems, Applied Physics, Nanoelectronics and Computer Technologies (language of tuition: Ukrainian), Electronics and Information Technologies in Medicine (language of tuition: Ukrainian), Econophysics (language of tuition: Ukrainian), Computer Systems and Networks Engineering (language of tuition: Ukrainian), Information Security of Telecommunications Systems and Networks (language of tuition: Ukrainian), Information Security of Telecommunications Systems and Networks (based on educational level of Junior Specialist) (language of tuition: Ukrainian)
            <br>Faculty of Sociology: Sociology (language of tuition: Ukrainian), Social Technologies (language of tuition: Ukrainian)
          </p>
          <p class="feature">Master's degree</p>
            <p class="list">
              Faculty of Sociology: Gender Studies (Dual degree program with the University of Lund, Sweden), Social Technologies (language of tuition: Ukrainian), Sociology (language of tuition: Ukrainian), Sociology (Language of tuition: English)
              <br>Faculty of Psychology: Pedagogy of Higher Education (language of tuition: Ukrainian), Clinical Psychology with the Foundations of Psychotherapy (language of tuition: Ukrainian), Political Psychology (language of tuition: Ukrainian), Psychology (language of tuition: Ukrainian), Psychology of Childhood and Family with the Foundations of Psychotherapy (language of tuition: Ukrainian), Management of Educational Institution (language of tuition: Ukrainian), Social Inclusion (language of tuition: Ukrainian), Social Rehabilitation (language of tuition: Ukrainian), Social Pedagogy (language of tuition: Ukrainian), Social Work (language of tuition: Ukrainian)
              <br>Faculty of Physics: Astrophysics (language of tuition: Ukrainian), Medical Physics (language of tuition: Ukrainian), Nuclear Power (language of tuition: Ukrainian), Physics of High-Energies (language of tuition: Ukrainian), Physics of Nanosystems (language of tuition: Ukrainian), Quantum Field Theory (language of tuition: Ukrainian), Quantum Computers, Computing and Information (language of tuition: Ukrainian), Laser and Optoelectronic Technics (language of tuition: Ukrainian)
              <br>Faculty of Philosophy: Religious Studies (language of tuition: Ukrainian), Applied Philosophy (language of tuition: Ukrainian), Philosophy (language of tuition: Ukrainian), Culturology (language of tuition: Ukrainian), Politology (language of tuition: Ukrainian), Politology (language of tuition: Russian), Public Management and Administration (language of tuition: Ukrainian), Public Management and Administration (For civil servants in order of the National Agency for Civil Service) (language of tuition: Ukrainian), Public Service (language of tuition: Ukrainian), Public Service (language of tuition: Russian)
              <br>Faculty of Mechanics and Mathematics: Actuarial and Financial Mathematics (language of tuition: Ukrainian), Mathematics (language of tuition: Ukrainian), Mathematics (language of tuition: English), Mathematics (language of tuition: Russian), Mathematical Economics and Econometrics (Joint Degree program with Kyiv School of Economics and Houston University, USA) (language of tuition: English), Applied and Theoretical Statistics (language of tuition: Ukrainian), Applied and Theoretical Statistics (language of tuition: English), Computer Mechanics (language of tuition: Ukrainian), Computer Mechanics (language of tuition: English)
              <br>Faculty of Information Technology: Software Engineering (language of tuition: Ukrainian), Artificial Intelligence Technologies (language of tuition: Ukrainian), Control information systems (language of tuition: Ukrainian), Information Analysis and Impacts (language of tuition: Ukrainian), Project Management (language of tuition: Ukrainian), Cybersecurity (language of tuition: Ukrainian), Software Technologies of Internet of Things (language of tuition: Ukrainian)
              <br>Faculty of History: Museology, Monument Studies (language of tuition: Ukrainian), American and European studies (language of tuition: Ukrainian), Archeology (language of tuition: Ukrainian), Archival studies (language of tuition: Ukrainian), East European historical studies (language of tuition: Ukrainian), Ethnology (language of tuition: Ukrainian), Historical Tourism Studies (language of tuition: Ukrainian), History (language of tuition: Ukrainian), History of Arts (language of tuition: Ukrainian), History of Ukraine (language of tuition: Ukrainian), Military history (language of tuition: Ukrainian), Orientalism (language of tuition: Ukrainian)
              <br>Faculty of Geography: Geography (language of tuition: Ukrainian), Cartography and geoinformation systems (language of tuition: Ukrainian), Hydrology (language of tuition: Ukrainian), Meteorology (language of tuition: Ukrainian), Economic and Social Geography (language of tuition: Ukrainian), Geographical Country Studies and Geoglobalistics (language of tuition: Ukrainian/English), Geography of Enhastronomic Recreation and Tourism (Dual degree program with Camerino University, Italy) (language of tuition: Ukrainian/English), Geomorphology and Paleography (language of tuition: Ukrainian), Natural Geography (language of tuition: Ukrainian), Political Geography and Geopolitics (language of tuition: Ukrainian), Recreation and Tourism Geography (language of tuition: Ukrainian), Urbanistics and Regional Development (language of tuition: Ukrainian), Land Management and Cadaster (language of tuition: Ukrainian), Tourism (language of tuition: Ukrainian), Tourism (language of tuition: English), Tourism (language of tuition: Russian)
              <br>Faculty of Economics: Enterprise Economics (language of tuition: Ukrainian), Economic Analysis and Statistics (language of tuition: Ukrainian), Economic Cybernetics (language of tuition: Ukrainian), Economics and Economic Policy (language of tuition: Ukrainian), Economics and Enterprise (Business) Evaluation (Double degree programme with Higher Business School of National Louis University, Poland) (language of tuition: Ukrainian/English), Economics and Law (language of tuition: Ukrainian), Economics and Politics (language of tuition: English), Health Economics and Statistics (language of tuition: Ukrainian), International Economics (language of tuition: Ukrainian), Accounting and Auditing (language of tuition: Ukrainian), Corporate Finance (language of tuition: Ukrainian), Financial Markets and Risk-Management (Double degree programme with the Masaryk University, Czech Republic) (language of tuition: Ukrainian/English), Finances of Public Sector (Double degree programme together with Nord University, Norway) (language of tuition: Ukrainian/English), Financial Services and Financial Institutions (language of tuition: Ukrainian), Financial Services and Risk Management (language of tuition: Ukrainian), Management of Public Finance (language of tuition: Ukrainian), Risk-Management and Insurance (language of tuition: Ukrainian), Management of Innovation Activity (language of tuition: Ukrainian), Management of Organizations and Administration (language of tuition: Ukrainian), Business Administration and Counseling (The program envisages double diploma with the University of Macerata, Italy) (language of tuition: Ukrainian/English), Marketing (language of tuition: Ukrainian), Applied Economics (language of tuition: Ukrainian), E-commerce (language of tuition: Ukrainian), Economic Security of Entrepreneurship (language of tuition: Ukrainian), Environmental Entrepreneurship (language of tuition: Ukrainian)
              <br>Faculty of Chemistry: Chemistry (language of tuition: Ukrainian), Cosmetic Chemistry (language of tuition: Ukrainian), Medical Chemistry (language of tuition: Ukrainian), Pharmaceutical Chemistry (language of tuition: Ukrainian)
              <br>Faculty of Computer Science and Cybernetics: Applied Mathematics (language of tuition: Ukrainian), Software of Systems (language of tuition: Ukrainian), Artificial Intelligence (language of tuition: English), Business Informatics (language of tuition: Ukrainian), Informatics (language of tuition: Ukrainian), Mathematical Methods of Artificial Intelligence (language of tuition: Ukrainian), Systems and Methods of Decision Making (language of tuition: Ukrainian)
              <br>Faculty of Radiophysics, Electronics and Computer Systems: Applied Physics (Language of tuition: English), Applied Physics and Nanomaterials (language of tuition: Ukrainian), Biomedical Physics, Engineering and Informatics (language of tuition: Ukrainian), Radiophysics and Electronics (language of tuition: Ukrainian), Computer Systems and Networks (language of tuition: Ukrainian), Information Protection in Telecommunications (language of tuition: Ukrainian), Information Security of Telecommunications Systems and Networks (language of tuition: Ukrainian)
            </p>
            <p class="feature">PhD</p>
              <p class="list">
                Faculty of Radiophysics, Electronics and Computer Systems: Applied Physics and Nanomaterials (language of tuition: Ukrainian), Computer Engineering (language of tuition: Ukrainian), Telecommunications and Electrical Engineering (language of tuition: Ukrainian)
                <br>Faculty of Psychology: Educational, Pedagogical Sciences (language of tuition: Ukrainian), Psychology (language of tuition: Ukrainian), Social Work (language of tuition: Ukrainian)
                <br>Faculty of Physics: Physics and Astronomy (language of tuition: Ukrainian)
                <br>Faculty of Economics: Economics (language of tuition: Ukrainian), Accounting and Taxation (language of tuition: Ukrainian), Finance, Banking and Insurance (language of tuition: Ukrainian), Management (language of tuition: Ukrainian), Marketing (language of tuition: Ukrainian), Entrepreneurship, Trade and Exchange Activities (language of tuition: Ukrainian)
                <br>Faculty of Chemistry: Chemistry (language of tuition: Ukrainian)
                <br>Faculty of Computer Science and Cybernetics: Applied Mathematics (language of tuition: Ukrainian), Software Engineering (language of tuition: Ukrainian), Informatics (language of tuition: Ukrainian), System Analysis (language of tuition: Ukrainian)
                <br>Faculty of Geography: Hydrometeorology (language of tuition: Ukrainian), Geography (language of tuition: Ukrainian), Tourism (language of tuition: Ukrainian)
                <br>Faculty of History: History and Acrheology (language of tuition: Ukrainian)
                <br>Faculty of Information Technology: Software Engineering (language of tuition: Ukrainian), Computer Science (language of tuition: Ukrainian), Cybersecurity (language of tuition: Ukrainian), Information Systems and Technologies (language of tuition: Ukrainian)
                <br>Faculty of Mechanics and Mathematics: Mathematics (language of tuition: Ukrainian), Statistics (language of tuition: Ukrainian)
                <br>Faculty of Philosophy: Religious Studies (language of tuition: Ukrainian), Philosophy (language of tuition: Ukrainian), Culturology (language of tuition: Ukrainian), Politilogy (language of tuition: Ukrainian), Public Management and Administration (language of tuition: Ukrainian)
                <br>Faculty of Psychology: Sociology (language of tuition: Ukrainian)
              </p>
            <p class="point">REQUIREMENTS</p>
            <p class="list">Entrance test <br>Interview</p>
            <p class="point">EDUCATION LANGUAGE</p>
            <p class="list">English<br>Ukrainian<br>Russian</p>
            <p class="point">WEBSITE</p>
            <p class="list"><a href="http://www.univ.kiev.ua/en/">http://www.univ.kiev.ua/en/</a></p>
        </div>
      </div>
    </div>
  </div>
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
      </div>
    </div>
  </div>

  </body>
  </html>
