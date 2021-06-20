<?php
session_start();
include 'backend.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial scale=1.0"charset="utf-8">
    <title>Career test</title>
    <link rel="stylesheet" href="../css/teststyle.css">
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
<?php
	$q1 = $_POST['choice1'];
  $q2 = $_POST['choice2'];
  $q3 = $_POST['choice3'];
  $q4 = $_POST['choice4'];
  $q5 = $_POST['choice5'];
  $q6 = $_POST['choice6'];
  $q7 = $_POST['choice7'];
  $q8 = $_POST['choice8'];
  $q9 = $_POST['choice9'];
  $q10 = $_POST['choice10'];
  $q11 = $_POST['choice11'];
  $q12 = $_POST['choice12'];
  $q13 = $_POST['choice13'];
  $q14 = $_POST['choice14'];
  $q15 = $_POST['choice15'];
  $q16 = $_POST['choice16'];
  $q17 = $_POST['choice17'];
  $q18 = $_POST['choice18'];
  $q19 = $_POST['choice19'];
  $q20 = $_POST['choice20'];

  $tech = 0;
  $nature = 0;
  $man = 0;
  $sign = 0;
  $art = 0;
//choice1
	if ($q1 == "care") {
		$nature++;
	}
  else {
    $tech++;
  }
  //choice2
  if ($q2 == "help") {
		$man++;
	}
  else {
    $sign++;
  }
  //choice3
  if ($q3 == "book") {
		$art++;
	}
  else {
    $nature++;
  }
  //choice3
  if ($q4 == "materials") {
		$tech++;
	}
  else {
    $man++;
  }
  //choice3
  if ($q5 == "nonfiction") {
		$sign++;
	}
  else {
    $art++;
  }//choice3
  if ($q6 == "animals") {
		$nature++;
	}
  else {
    $man++;
  }//choice3
  if ($q7 == "drawings") {
		$art++;
	}
  else {
    $tech++;
  }//choice3
  if ($q8 == "explain") {
		$man++;
	}
  else {
    $art++;
  }//choice3
  if ($q9 == "repair") {
		$tech++;
	}
  else {
    $sign++;
  }//choice3
  if ($q10 == "treat") {
		$nature++;
	}
  else {
    $sign++;
  }//choice3
  if ($q11 == "varieties") {
		$nature++;
	}
  else {
    $tech++;
  }//choice3
  if ($q12 == "people") {
		$man++;
	}
  else {
    $sign++;
  }//choice3
  if ($q13 == "artclub") {
		$art++;
	}
  else {
    $nature++;
  }//choice3
  if ($q14 == "devices") {
		$tech++;
	}
  else {
    $man++;
  }//choice3
  if ($q15 == "accurate") {
		$sign++;
	}
  else {
    $art++;
  }//choice3
  if ($q16 == "tests") {
		$nature++;
	}
  else {
    $man++;
  }//choice3
  if ($q17 == "draw") {
		$art++;
	}
  else {
    $tech++;
  }//choice3
  if ($q18 == "trips") {
		$man++;
	}
  else {
    $art++;
  }//choice3
  if ($q19 == "parts") {
		$tech++;
	}
  else {
    $sign++;
  }//choice3
  if ($q20 == "plant") {
		$nature++;
	}
  else {
    $sign++;
  }
  $totalnature = $nature / 20 *100;
  $totaltech = $tech / 20 *100;
  $totalman = $man / 20 *100;
  $totalart = $art / 20 *100;
  $totalsign = $sign / 20 *100;

  setTestResults($totalnature, $totaltech, $totalman, $totalart, $totalsign);

	    echo "<center>You are
        </br>Man-Nature for <strong>$totalnature%</strong>
        </br>Man-Technology for <strong>$totaltech%</strong>
        </br>Man-Man for <strong>$totalman%</strong>
        </br>Man-Sign system for <strong>$totalsign%</strong>
        </br>Man-Artistic for <strong>$totalart%</strong>
        </center>";
?>
<section class="testres">


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
</body>
</html>
