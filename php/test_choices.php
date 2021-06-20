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
    <section class="pretest">
      <div><img src="../images/pic.png"></div>
      <div>
        <p>Each person is characterized by a more or less clearly expressed
      preference for activities that correspond to the subject of work
      that is more close to him. This is due to the predominance of
      certain interests and personal characteristics. Someone likes to
      work with appliances, and this is easy for him, and someone, on the contrary, feels horror from one
      type of household appliances, but his hobby is communication.</p>
      </div>
    </section>
    <section class="test">
      <p id="intro">Let's assume that after appropriate education, you can do
  any job.</br>But if you had to choose<strong> only one</strong> of the two
  possibilities, which would you prefer?</p>
  <form method="post" action="test.php">
    <div class="question">
			<p><strong>Choice 1</strong></p>
			<p><input type="radio" name="choice1" value="care"required>Take care of animals</p>
			<p><input type="radio" name="choice1" value="serve">Serve and support machines, appliances (monitor, adjust)</p>
		</div>
    <div class="question">
			<p><strong>Choice 2</strong></p>
			<p><input type="radio" name="choice2" value="help" required>Helping the sick people</p>
			<p><input type="radio" name="choice2" value="make">Make tables, diagrams, programs for computers</p>
		</div>
    <div class="question">
			<p><strong>Choice 3</strong></p>
			<p><input type="radio" name="choice3" value="book"required>Monitor the quality of book illustrations, posters, art cards, records</p>
			<p><input type="radio" name="choice3" value="plants">Monitor the condition and the growth of plants</p>
		</div>
    <div class="question">
			<p><strong>Choice 4</strong></p>
			<p><input type="radio" name="choice4" value="materials"required>Process materials (wood, fabric, metal, plastic, etc.)</p>
			<p><input type="radio" name="choice4" value="sell">Bring products to the consumer, advertise, sell</p>
		</div>
    <div class="question">
			<p><strong>Choice 5</strong></p>
			<p><input type="radio" name="choice5" value="nonfiction"required>Discuss non-fiction books, articles</p>
			<p><input type="radio" name="choice5" value="artbooks">Discuss art books (or plays, concerts)</p>
		</div>
    <div class="question">
			<p><strong>Choice 6</strong></p>
			<p><input type="radio" name="choice6" value="animals"required>Raise animals</p>
			<p><input type="radio" name="choice6" value="actions">Train people in performing any actions (labor, training, sports)</p>
		</div>
    <div class="question">
			<p><strong>Choice 7</strong></p>
			<p><input type="radio" name="choice7" value="drawings"required>Copy drawings, images (or tune musical instruments)</p>
			<p><input type="radio" name="choice7" value="vehicle">Operate any cargo vehicle - crane, tractor, diesel locomotive, etc.</p>
		</div>
    <div class="question">
			<p><strong>Choice 8</strong></p>
			<p><input type="radio" name="choice8" value="explain"required>Inform, explain to people the information they need (in the information desk, on excursions, etc.)</p>
			<p><input type="radio" name="choice8" value="exhibitions">Arrange exhibitions, showcases (or participate in the preparation of plays, concerts)</p>
		</div>
    <div class="question">
			<p><strong>Choice 9</strong></p>
			<p><input type="radio" name="choice9" value="repair"required>Repair clothing, equipment, house</p>
			<p><input type="radio" name="choice9" value="errors">Search for and correct errors in texts, tables, figures</p>
		</div>
    <div class="question">
			<p><strong>Choice 10</strong></p>
			<p><input type="radio" name="choice1" value="treat"required>Treat animals</p>
			<p><input type="radio" name="choice1" value="calculations">Perform calculations, calculations</p>
		</div>
    <div class="question">
			<p><strong>Choice 11</strong></p>
			<p><input type="radio" name="choice11" value="varieties"required>Develop new plant varieties</p>
			<p><input type="radio" name="choice11" value="design">Design and construct new types of industrial products (cars, clothing, houses, food, etc.)</p>
		</div>
    <div class="question">
			<p><strong>Choice 12</strong></p>
			<p><input type="radio" name="choice12" value="people"required>Deal with disputes, quarrels between people, to convince;to explain, to punish, to encourage</p>
			<p><input type="radio" name="choice12" value="tables">Understand drawings, diagrams, tables</p>
		</div>
    <div class="question">
			<p><strong>Choice 13</strong></p>
			<p><input type="radio" name="choice13" value="artclub"required>Observe, study the work of art clubs</p>
			<p><input type="radio" name="choice13" value="microbes">Observe, study the life of microbes</p>
		</div>
    <div class="question">
			<p><strong>Choice 14</strong></p>
			<p><input type="radio" name="choice14" value="devices"required>Maintain, adjust medical devices</p>
			<p><input type="radio" name="choice14" value="care">Provide people with medical care for injuries, bruises, burns, etc.</p>
		</div>
    <div class="question">
			<p><strong>Choice 15</strong></p>
			<p><input type="radio" name="choice15" value="accurate"required>Make accurate descriptions-reports on observed phenomena, events, measured objects, etc.</p>
			<p><input type="radio" name="choice15" value="events">Artistically describe and depict events (observed and imagined)</p>
		</div>
    <div class="question">
			<p><strong>Choice 16</strong></p>
			<p><input type="radio" name="choice16" value="tests"required>Perform laboratory tests in the hospital</p>
			<p><input type="radio" name="choice16" value="patients">Receive, examine patients, talk to them, prescribe treatment</p>
		</div>
    <div class="question">
			<p><strong>Choice 17</strong></p>
			<p><input type="radio" name="choice17" value="draw"required>Paint and draw the walls of rooms, on the clothing</p>
			<p><input type="radio" name="choice17" value="installation">Carry out the installation or assembly of machines, devices, etc.</p>
		</div>
    <div class="question">
			<p><strong>Choice 18</strong></p>
			<p><input type="radio" name="choice18" value="trips"required>Organize cultural trips to theaters, museums, excursions, hiking trips, etc.</p>
			<p><input type="radio" name="choice18" value="concerts">Play on stage, take part in concerts</p>
		</div>
    <div class="question">
			<p><strong>Choice 19</strong></p>
			<p><input type="radio" name="choice19" value="parts"required>Produce parts, products according to drawings, build buildings</p>
			<p><input type="radio" name="choice19" value="technical">Engage in technical drawing, copy technical drawings, maps</p>
		</div>
    <div class="question">
			<p><strong>Choice 20</strong></p>
			<p><input type="radio" name="choice20" value="plant"required>Fight against plant diseases, pests of the forest, garden</p>
			<p><input type="radio" name="choice20" value="keyboard">Work on keyboard machines (typewriter, teletype, typesetting machine, etc.)</p>
		</div>
		<div class="question">
			<p><input type="submit" value="Results"/></p>
		</div>
	</form>
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
