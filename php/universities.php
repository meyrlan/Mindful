<?php
session_start();
include 'backend.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial scale=1.0"charset="utf-8">
    <title>For students</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/b42eff874a.js" crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/universities.css">

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
      <h1>Find the university of your dream!</h1>
    </div>
  </section>
  <section class="main">
    <p class="partname">Asia</p>
    <div class="cntr-row">
      <div class="cntr-col">
        <div class="content">
          <img src="../images/flag/china.png">
          <h3>China</h3>
        </div>
        <div class="tex">
          <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#china">Learn more</button>
       </div>
      </div>
      <div class="cntr-col">
        <div class="content">
          <img src="../images/flag/Malaysia.png">
          <h3>Malaysia</h3>
        </div>
        <div class="tex">
          <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#Malaysia">Learn more</button>
       </div>
      </div>
      <div class="cntr-col">
        <div class="content">
          <img src="../images/flag/japan.png">
          <h3>Japan</h3>
        </div>
         <div class="tex">
           <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#japan">Learn more</button>
        </div>
      </div>
      <div class="cntr-col">
        <div class="content">
          <img src="../images/flag/Singapore.png">
          <h3>Singapore</h3>
        </div>
        <div class="tex">
          <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#Singapore">Learn more</button>
       </div>
      </div>
    </div>
    <div class="cntr-row">
      <div class="cntr-col">
        <div class="content">
          <img src="../images/flag/south-korea.png">
          <h3>South Korea</h3>
        </div>
        <div class="tex">
          <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#southkorea">Learn more</button>
       </div>
      </div>
      <div class="cntr-col">
        <div class="content">
          <img src="../images/flag/uae.png">
          <h3>UAE</h3>
        </div>
        <div class="tex">
          <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#uae">Learn more</button>
       </div>
      </div>
      <div class="cntr-col">
        <div class="content">
          <img src="../images/flag/Azerbaijan.png">
          <h3>Azerbaijan</h3>
        </div>
        <div class="tex">
          <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#Azerbaijan">Learn more</button>
       </div>
      </div>
      <div class="cntr-col">
        <div class="content">
          <img src="../images/flag/Georgia.png">
          <h3>Georgia</h3>
        </div>
        <div class="tex">
          <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#Georgia">Learn more</button>
       </div>
      </div>
    </div>


    <!--EUROPE-->


    <p class="partname">Europe</p>
    <div class="cntr-row">
      <div class="cntr-col">
        <div class="content">
          <img src="../images/flag/Denmark.png">
          <h3>Denmark</h3>
        </div>
        <div class="tex">
          <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#Denmark">Learn more</button>
       </div>
      </div>
      <div class="cntr-col">
        <div class="content">
          <img src="../images/flag/Finland.png">
          <h3>Finland</h3>
        </div>
        <div class="tex">
          <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#Finland">Learn more</button>
       </div>
      </div>
      <div class="cntr-col">
        <div class="content">
          <img src="../images/flag/uk.png">
          <h3>United Kingdom</h3>
        </div>
         <div class="tex">
           <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#uk">Learn more</button>
        </div>
      </div>
      <div class="cntr-col">
        <div class="content">
          <img src="../images/flag/France.png">
          <h3>France</h3>
        </div>
        <div class="tex">
          <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#France">Learn more</button>
       </div>
      </div>
    </div>
    <div class="cntr-row">
      <div class="cntr-col">
        <div class="content">
          <img src="../images/flag/Germany.png">
          <h3>Germany</h3>
        </div>
        <div class="tex">
          <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#Germany">Learn more</button>
       </div>
      </div>
      <div class="cntr-col">
        <div class="content">
          <img src="../images/flag/Switzerland.png">
          <h3>Switzerland</h3>
        </div>
        <div class="tex">
          <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#Switzerland">Learn more</button>
       </div>
      </div>
      <div class="cntr-col">
        <div class="content">
          <img src="../images/flag/cr.png">
          <h3>Czech Republic</h3>
        </div>
         <div class="tex">
           <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#cr">Learn more</button>
        </div>
      </div>
      <div class="cntr-col">
        <div class="content">
          <img src="../images/flag/Spain.png">
          <h3>Spain</h3>
        </div>
        <div class="tex">
          <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#Spain">Learn more</button>
       </div>
      </div>
    </div>


    <!--AFRICA-->


    <p class="partname">Africa</p>
    <div class="cntr-row">
      <div class="cntr-col">
        <div class="content">
          <img src="../images/flag/Egypt.png">
          <h3>Egypt</h3>
        </div>
        <div class="tex">
          <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#Egypt">Learn more</button>
       </div>
      </div>
      <div class="cntr-col">
        <div class="content">
          <img src="../images/flag/south-africa.png">
          <h3>South Africa</h3>
        </div>
         <div class="tex">
           <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#southafrica">Learn more</button>
        </div>
      </div>
      <div class="col"></div>      <div class="col"></div>      <div class="col"></div>      <div class="col"></div>      <div class="col"></div><div class="col"></div>
      <div class="col"></div>      <div class="col"></div>      <div class="col"></div>      <div class="col"></div>      <div class="col"></div>
      <div class="col"></div>      <div class="col"></div>      <div class="col"></div>      <div class="col"></div>      <div class="col"></div>

    </div>


        <!--EUROPE-->


        <p class="partname">Americas</p>
        <div class="cntr-row">
          <div class="cntr-col">
            <div class="content">
              <img src="../images/flag/Canada.png">
              <h3>Canada</h3>
            </div>
            <div class="tex">
              <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#Canada">Learn more</button>
           </div>
          </div>
          <div class="cntr-col">
            <div class="content">
              <img src="../images/flag/Mexico.png">
              <h3>Mexico</h3>
            </div>
            <div class="tex">
              <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#Mexico">Learn more</button>
           </div>
          </div>
          <div class="cntr-col">
            <div class="content">
              <img src="../images/flag/usa.png">
              <h3>USA</h3>
            </div>
             <div class="tex">
               <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#usa">Learn more</button>
            </div>
          </div>
          <div class="cntr-col">
            <div class="content">
              <img src="../images/flag/chile.png">
              <h3>Chile</h3>
            </div>
            <div class="tex">
              <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#chile">Learn more</button>
           </div>
          </div>
        </div>
        <div class="cntr-row">
          <div class="cntr-col">
            <div class="content">
              <img src="../images/flag/Brazil.png">
              <h3>Brazil</h3>
            </div>
            <div class="tex">
              <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#Brazil">Learn more</button>
           </div>
          </div>
          <div class="cntr-col">
            <div class="content">
              <img src="../images/flag/Colombia.png">
              <h3>Colombia</h3>
            </div>
            <div class="tex">
              <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#Colombia">Learn more</button>
           </div>
          </div>
          <div class="cntr-col">
            <div class="content">
              <img src="../images/flag/Argentina.png">
              <h3>Argentina</h3>
            </div>
             <div class="tex">
               <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#Argentina">Learn more</button>
            </div>
          </div>
          <div class="cntr-col">
            <div class="content">
              <img src="../images/flag/peru.png">
              <h3>Peru</h3>
            </div>
            <div class="tex">
              <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#peru">Learn more</button>
           </div>
          </div>
        </div>

        <!--Australia and Oceania-->


        <p class="partname">Australia and Oceania</p>
        <div class="cntr-row">
          <div class="cntr-col">
            <div class="content">
              <img src="../images/flag/Australia.png">
              <h3>Australia </h3>
            </div>
            <div class="tex">
              <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#Australia">Learn more</button>
           </div>
          </div>
          <div class="cntr-col">
            <div class="content">
              <img src="../images/flag/new-Zealand.png">
              <h3>New Zealand </h3>
            </div>
             <div class="tex">
               <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#newzealand">Learn more</button>
            </div>
          </div>
          <div class="col"></div>      <div class="col"></div>      <div class="col"></div>      <div class="col"></div>      <div class="col"></div><div class="col"></div>
          <div class="col"></div>      <div class="col"></div>      <div class="col"></div>      <div class="col"></div>      <div class="col"></div>
          <div class="col"></div>      <div class="col"></div>      <div class="col"></div>      <div class="col"></div>      <div class="col"></div>

        </div>
  </section>
  <div id="china" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">China</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://www.tsinghua.edu.cn/en/">Tsinghua University</a> </p>
          <p class="nameuni"> <a href="http://peking.university/">Peking University</a> </p>
          <p class="nameuni"> <a href="https://en.sjtu.edu.cn/">Shanghai Jiao Tong University</a> </p>
          <p class="nameuni"> <a href="https://www.zju.edu.cn/english/">Zhejiang University (National Che Kiang University)</a> </p>
          <p class="nameuni"> <a href="https://www.fudan.edu.cn/en/">Fudan University (Shanghai Medical University)</a> </p>
          <p class="nameuni"> <a href="https://en.ustc.edu.cn/">University of Science & Technology of China</a> </p>
          <p class="nameuni"> <a href="https://www.nju.edu.cn/EN/">Nanjing University</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="Malaysia" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Malaysia</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://uitm.edu.my/">Universiti Teknologi MARA</a> </p>
          <p class="nameuni"> <a href="https://www.um.edu.my/">Universiti Malaya</a> </p>
          <p class="nameuni"> <a href="https://www.usm.my/">Universiti Sains Malaysia</a> </p>
          <p class="nameuni"> <a href="https://www.ukm.my/portal/">Universiti Kebangsaan Malaysia</a> </p>
          <p class="nameuni"> <a href="https://www.utm.my/">Universiti Teknologi Malaysia</a> </p>
          <p class="nameuni"> <a href="https://upm.edu.my/">Universiti Putra Malaysia</a> </p>
          <p class="nameuni"> <a href="https://www.iium.edu.my/">Universiti Islam Antarabangsa Malaysia</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="japan" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Japan</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://www.u-tokyo.ac.jp/en/">The University of Tokyo</a> </p>
          <p class="nameuni"> <a href="https://www.kyoto-u.ac.jp/en">Kyoto University</a> </p>
          <p class="nameuni"> <a href="https://www.keio.ac.jp/">	Keio University</a> </p>
          <p class="nameuni"> <a href="https://www.osaka-u.ac.jp/">Osaka University</a> </p>
          <p class="nameuni"> <a href="https://www.waseda.jp/top/en/">Waseda University</a> </p>
          <p class="nameuni"> <a href="https://www.global.hokudai.ac.jp/">Hokkaido University</a> </p>
          <p class="nameuni"> <a href="https://www.tohoku.ac.jp/">Tohoku University</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="Singapore" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Singapore</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://www.nus.edu.sg/">	National University of Singapore</a> </p>
          <p class="nameuni"> <a href="https://www.ntu.edu.sg/">Nanyang Technological University</a> </p>
          <p class="nameuni"> <a href="https://www.smu.edu.sg/">Singapore Management University</a> </p>
          <p class="nameuni"> <a href="https://www.sutd.edu.sg/">Singapore University of Technology and Design</a> </p>
          <p class="nameuni"> <a href="https://www.suss.edu.sg/">	Singapore University of Social Sciences</a> </p>
          <p class="nameuni"> <a href="https://www.lasalle.edu.sg/">LASALLE College of the Arts</a> </p>
          <p class="nameuni"> <a href="https://www.singaporetech.edu.sg/">Singapore Institute of Technology</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="southkorea" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">South Korea</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://en.snu.ac.kr/">Seoul National University</a> </p>
          <p class="nameuni"> <a href="https://www.kaist.ac.kr/en/html/kaist/01.html">KAIST</a> </p>
          <p class="nameuni"> <a href="https://www.yonsei.ac.kr/">Yonsei University</a> </p>
          <p class="nameuni"> <a href="https://wwwe.sogang.ac.kr/wwwe/index_new.html">	Sogang University</a> </p>
          <p class="nameuni"> <a href="https://www.korea.ac.kr/mbshome/mbs/en/index.do">Korea University</a> </p>
          <p class="nameuni"> <a href="https://www.pusan.ac.kr/eng/Main.do">Pusan National University</a> </p>
          <p class="nameuni"> <a href="https://www.hanyang.ac.kr/web/eng">Hanyang University</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="uae" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">United Arab Emirates</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://uaeu.ac.ae/en/">United Arab Emirates University</a> </p>
          <p class="nameuni"> <a href="https://www.aus.edu/">American University of Sharjah</a> </p>
          <p class="nameuni"> <a href="https://www.sharjah.ac.ae/">University of Sharjah</a> </p>
          <p class="nameuni"> <a href="https://nyuad.nyu.edu/">New York University Abu Dhabi</a> </p>
          <p class="nameuni"> <a href="https://www.ku.ac.ae/admissions">Khalifa University</a> </p>
          <p class="nameuni"> <a href="https://gradgetstarted.zu.ac.ae/">Zayed University</a> </p>
          <p class="nameuni"> <a href="https://www.aud.edu/">American University in Dubai</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="Azerbaijan" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Azerbaijan</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://www.khazar.org/">Khazar University</a> </p>
          <p class="nameuni"> <a href="http://bsu.edu.az/en/">Baku State University</a> </p>
          <p class="nameuni"> <a href="https://ada.edu.az/">ADA University</a> </p>
          <p class="nameuni"> <a href="https://unec.edu.az/en/">Azerbaijan State University of Economics</a> </p>
          <p class="nameuni"> <a href="http://asoiu.edu.az/en">Azerbaijan State University of Oil and Industry</a> </p>
          <p class="nameuni"> <a href="http://www.aztu.edu.az/azp/">Azerbaijan Technical University</a> </p>
          <p class="nameuni"> <a href="https://www.amu.edu.az/en/home">Azerbaijan Medical University</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="Georgia" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Georgia</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://www.tsu.ge/en">Ivane Javakhishvili Tbilisi State University</a> </p>
          <p class="nameuni"> <a href="https://iliauni.edu.ge/en/">Ilia State University</a> </p>
          <p class="nameuni"> <a href="https://gtu.ge/Eng/">Georgian Technical University</a> </p>
          <p class="nameuni"> <a href="https://www.uga.edu/">The University of Georgia</a> </p>
          <p class="nameuni"> <a href="https://ibsu.edu.ge/en/">International Black Sea University</a> </p>
          <p class="nameuni"> <a href="https://www.bsu.edu.ge/?lang=en">Batumi Shota Rustaveli State University</a> </p>
          <p class="nameuni"> <a href="https://tsmu.edu/ts/index.php?&lang=en">Tbilisi State Medical University</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="Denmark" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Denmark</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://www.ku.dk/english/">University of Copenhagen</a> </p>
          <p class="nameuni"> <a href="https://www.dtu.dk/english">Technical University of Denmark</a> </p>
          <p class="nameuni"> <a href="https://www.au.dk/">Aarhus University</a> </p>
          <p class="nameuni"> <a href="https://www.en.aau.dk/">Aalborg University</a> </p>
          <p class="nameuni"> <a href="https://www.sdu.dk/en">University of Southern Denmark</a> </p>
          <p class="nameuni"> <a href="https://www.cbs.dk/en">Copenhagen Business School (CBS)</a> </p>
          <p class="nameuni"> <a href="https://ruc.dk/en">Roskilde University (RUC)</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="Finland" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Finland</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://www.helsinki.fi/">University of Helsinki</a> </p>
          <p class="nameuni"> <a href="https://www.aalto.fi/en">Aalto University</a> </p>
          <p class="nameuni"> <a href="https://www.utu.fi/en">University of Turku</a> </p>
          <p class="nameuni"> <a href="http://www.jyu.fi/">University of Jyväskylä</a> </p>
          <p class="nameuni"> <a href="https://www.oulu.fi/en">University of Oulu</a> </p>
          <p class="nameuni"> <a href="https://www.tuni.fi/en">Tampere University</a> </p>
          <p class="nameuni"> <a href="https://www.lut.fi/web/en">Lappeenranta University of Technology</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="uk" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">United Kingdom</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://www.ox.ac.uk/">University of Oxford</a> </p>
          <p class="nameuni"> <a href="https://www.cam.ac.uk/">University of Cambridge</a> </p>
          <p class="nameuni"> <a href="https://www.ucl.ac.uk/">UCL (University College of London)</a> </p>
          <p class="nameuni"> <a href="https://www.imperial.ac.uk/">Imperial College London</a> </p>
          <p class="nameuni"> <a href="https://www.ed.ac.uk/">University of Edinburgh</a> </p>
          <p class="nameuni"> <a href="https://www.manchester.ac.uk/">University of Manchester</a> </p>
          <p class="nameuni"> <a href="https://www.kcl.ac.uk/">King’s College London (KCL)</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="France" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">France</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://psl.eu/en">Universite PSL (Paris Sciences & Lettres)</a> </p>
          <p class="nameuni"> <a href="https://www.polytechnique.edu/en">Ecole Polytechnique</a> </p>
          <p class="nameuni"> <a href="https://www.sorbonne-universite.fr/en">Sorbonne University</a> </p>
          <p class="nameuni"> <a href="https://www.centralesupelec.fr/en">CentraleSupelec</a> </p>
          <p class="nameuni"> <a href="http://www.ens-lyon.fr/en/">Ecole Normale Superieure de Lyon</a> </p>
          <p class="nameuni"> <a href="https://www.ecoledesponts.fr/en">Ecole des Ponts ParisTech</a> </p>
          <p class="nameuni"> <a href="https://www.sciencespo.fr/en">Sciences Po Paris</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="Germany" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Germany</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://www.tum.de/">Technische Universitat Munchen</a> </p>
          <p class="nameuni"> <a href="https://www.lmu.de/">Ludwig-Maximilians - Universitat Munchen</a> </p>
          <p class="nameuni"> <a href="https://www.uni-heidelberg.de/">Ruprecht-Karls-Universitat Heidelberg</a> </p>
          <p class="nameuni"> <a href="https://www.hu-berlin.de/en">Humboldt-Universitat zu Berlin</a> </p>
          <p class="nameuni"> <a href="https://www.kit.edu/">KIT, Karlsruher Institut fur Technologie</a> </p>
          <p class="nameuni"> <a href="https://www.fu-berlin.de/en/index.html">	Freie Universitat Berlin</a> </p>
          <p class="nameuni"> <a href="https://www.rwth-aachen.de/cms/~a/root/?lidx=1">Rheinisch-Westfalische Technische Hochschule Aachen (RWTH Aachen)</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="Switzerland" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Switzerland</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://ethz.ch/en.html">ETH Zurich</a> </p>
          <p class="nameuni"> <a href="https://www.epfl.ch/en/">Ecole Polytechnique Federale de Lausanne (EPFL)</a> </p>
          <p class="nameuni"> <a href="https://www.uzh.ch/en.html">University of Zurich</a> </p>
          <p class="nameuni"> <a href="https://www.unige.ch/en/university/presentation/">University of Geneva</a> </p>
          <p class="nameuni"> <a href="https://www.unibe.ch/index_eng.html">University of Bern</a> </p>
          <p class="nameuni"> <a href="https://www.unibas.ch/en">University of Basel</a> </p>
          <p class="nameuni"> <a href="https://www.unil.ch/central/en/home.html">University of Lausanne</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="cr" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Czech Republic</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://cuni.cz/uken-1.html">Charles University</a> </p>
          <p class="nameuni"> <a href="https://www.cvut.cz/en">Czech Technical University in Prague</a> </p>
          <p class="nameuni"> <a href="https://www.muni.cz/en">Masaryk University</a> </p>
          <p class="nameuni"> <a href="https://www.vutbr.cz/en/">Brno University of Technology</a> </p>
          <p class="nameuni"> <a href="https://www.vse.cz/english/">University of Economics, Prague</a> </p>
          <p class="nameuni"> <a href="https://www.upol.cz/en/">Palacky University, Olomouc</a> </p>
          <p class="nameuni"> <a href="https://www.zcu.cz/en/index.html">University of West Bohemia</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="Spain" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Spain</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://www.ub.edu/web/portal/en/">University of Barcelona</a> </p>
          <p class="nameuni"> <a href="https://www.uam.es/">Autonomous University of Madrid</a> </p>
          <p class="nameuni"> <a href="https://www.uab.cat/web/universitat-autonoma-de-barcelona-1345467954774.html">	Autonomous University of Barcelona</a> </p>
          <p class="nameuni"> <a href="https://www.ucm.es/english">Complutense University of Madrid</a> </p>
          <p class="nameuni"> <a href="https://www.upf.edu/en/">Pompeu Fabra University</a> </p>
          <p class="nameuni"> <a href="https://www.upc.edu/en">Polytechnic University of Catalonia</a> </p>
          <p class="nameuni"> <a href="https://www.upv.es/">Polytechnic University of Valencia</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="Egypt" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Egypt</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://www.aucegypt.edu/">The American University in Cairo</a> </p>
          <p class="nameuni"> <a href="https://cu.edu.eg/Home">	Cairo University</a> </p>
          <p class="nameuni"> <a href="https://www.mans.edu.eg/en/">Mansoura University</a> </p>
          <p class="nameuni"> <a href="https://www.aast.edu/">Arab Academy for Science, Technology and Maritime Transport</a> </p>
          <p class="nameuni"> <a href="https://asu.edu.eg/">Ain Shams University</a> </p>
          <p class="nameuni"> <a href="https://www.alexu.edu.eg/index.php/en/">Alexandria University</a> </p>
          <p class="nameuni"> <a href="http://www.azhar.edu.eg/en/">Al-Azhar University</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="southafrica" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">South Africa</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://www.uct.ac.za/">University of Cape Town</a> </p>
          <p class="nameuni"> <a href="https://www.up.ac.za/">University of Pretoria</a> </p>
          <p class="nameuni"> <a href="https://www.wits.ac.za/">	University of the Witwatersrand</a> </p>
          <p class="nameuni"> <a href="http://www.sun.ac.za/english">Universiteit Stellenbosch</a> </p>
          <p class="nameuni"> <a href="http://www.nwu.ac.za/">	North-West University</a> </p>
          <p class="nameuni"> <a href="https://www.uj.ac.za/">	University of Johannesburg</a> </p>
          <p class="nameuni"> <a href="https://www.uwc.ac.za/">University of the Western Cape</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="Canada" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Canada</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://www.utoronto.ca/">University of Toronto</a> </p>
          <p class="nameuni"> <a href="https://www.mcgill.ca/">McGill University</a> </p>
          <p class="nameuni"> <a href="https://www.ubc.ca/">University of British Columbia</a> </p>
          <p class="nameuni"> <a href="https://www.umontreal.ca/">Université de Montréal</a> </p>
          <p class="nameuni"> <a href="https://www.ualberta.ca/">University of Alberta</a> </p>
          <p class="nameuni"> <a href="https://www.mcmaster.ca/">McMaster University</a> </p>
          <p class="nameuni"> <a href="https://uwaterloo.ca/">University of Waterloo</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="Mexico" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Mexico</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://www.uam.mx/lang/eng/index.html">Metropolitan Autonomous University</a> </p>
          <p class="nameuni"> <a href="https://www.unam.mx/">National Autonomous University of Mexico</a> </p>
          <p class="nameuni"> <a href="https://www.udg.mx/en/welcome-university-guadalajara">University of Guadalajara</a> </p>
          <p class="nameuni"> <a href="https://www.ipn.mx/ingles/">National Polytechnic Institute</a> </p>
          <p class="nameuni"> <a href="https://www.uv.mx/en/">University of Veracruz</a> </p>
          <p class="nameuni"> <a href="https://www.uanl.mx/">Autonomous University of Nuevo Leon</a> </p>
          <p class="nameuni"> <a href="https://buap.mx/">Autonomous University of Puebla</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="usa" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">USA</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://www.harvard.edu/">Harvard University</a> </p>
          <p class="nameuni"> <a href="https://www.stanford.edu/">Stanford University</a> </p>
          <p class="nameuni"> <a href="https://web.mit.edu/">Massachusetts Institute of Technology (MIT)</a> </p>
          <p class="nameuni"> <a href="https://www.berkeley.edu/">University of California Berkeley (UCB)</a> </p>
          <p class="nameuni"> <a href="https://www.ucla.edu/">University of California, Los Angeles (UCLA)</a> </p>
          <p class="nameuni"> <a href="https://www.yale.edu/">Yale University</a> </p>
          <p class="nameuni"> <a href="https://www.columbia.edu/">Columbia University</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="chile" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Chile</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://www.uchile.cl/">	Universidad de Chile</a> </p>
          <p class="nameuni"> <a href="https://www.uc.cl/">Pontificia Universidad Catolica de Chile</a> </p>
          <p class="nameuni"> <a href="https://www.udec.cl/">Universidad de Concepcion</a> </p>
          <p class="nameuni"> <a href="https://www.usach.cl/">Universidad de Santiago de Chile</a> </p>
          <p class="nameuni"> <a href="https://www.uach.cl/">Universidad Austral de Chile</a> </p>
          <p class="nameuni"> <a href="https://www.usm.cl/">Universidad Tecnica Federico Santa Maria</a> </p>
          <p class="nameuni"> <a href="https://www.pucv.cl/">Pontificia Universidad Catolica de Valparaiso</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="Brazil" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Brazil</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://www5.usp.br/">Universidade de Sao Paulo</a> </p>
          <p class="nameuni"> <a href="https://ufsc.br/">Universidade Federal de Santa Catarina</a> </p>
          <p class="nameuni"> <a href="http://www.ufrgs.br/">Universidade Federal do Rio Grande do Sul</a> </p>
          <p class="nameuni"> <a href="https://www.unicamp.br/">	Universidade Estadual de Campinas</a> </p>
          <p class="nameuni"> <a href="https://www2.unesp.br/">Universidade Estadual Paulista</a> </p>
          <p class="nameuni"> <a href="https://ufmg.br/">Universidade Federal de Minas Gerais</a> </p>
          <p class="nameuni"> <a href="https://unb.br/">Universidade de Brasilia</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="Colombia" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Colombia</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://unal.edu.co/">Universidad Nacional de Colombia</a> </p>
          <p class="nameuni"> <a href="https://uniandes.edu.co/">Universidad de los Andes, Colombia</a> </p>
          <p class="nameuni"> <a href="http://www.udea.edu.co/">Universidad de Antioquia</a> </p>
          <p class="nameuni"> <a href="https://www.icesi.edu.co/">	Universidad ICESI</a> </p>
          <p class="nameuni"> <a href="https://www.eafit.edu.co/">Universidad EAFIT</a> </p>
          <p class="nameuni"> <a href="https://www.uninorte.edu.co/">Universidad del Norte</a> </p>
          <p class="nameuni"> <a href="https://www.urosario.edu.co/">Universidad del Rosario</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="Argentina" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Argentina</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://uba.ar/">Universidad de Buenos Aires</a> </p>
          <p class="nameuni"> <a href="https://unlp.edu.ar/unlp">	Universidad Nacional de La Plata</a> </p>
          <p class="nameuni"> <a href="https://www.unc.edu.ar/">Universidad Nacional de Cordoba</a> </p>
          <p class="nameuni"> <a href="https://utn.edu.ar/">Universidad Tecnologica Nacional</a> </p>
          <p class="nameuni"> <a href="http://www.uncuyo.edu.ar/ingles">Universidad Nacional de Cuyo</a> </p>
          <p class="nameuni"> <a href="https://www.palermo.edu/">	Universidad de Palermo</a> </p>
          <p class="nameuni"> <a href="https://unr.edu.ar/">Universidad Nacional de Rosario</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="peru" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Peru</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://www.pucp.edu.pe/">	Pontificia Universidad Catolica del Peru</a> </p>
          <p class="nameuni"> <a href="https://unmsm.edu.pe/">Universidad Nacional Mayor de San Marcos</a> </p>
          <p class="nameuni"> <a href="https://www.upc.edu.pe/">Universidad Peruana de Ciencias Aplicadas</a> </p>
          <p class="nameuni"> <a href="https://udep.edu.pe/">	Universidad de Piura</a> </p>
          <p class="nameuni"> <a href="https://www.ulima.edu.pe/">Universidad de Lima</a> </p>
          <p class="nameuni"> <a href="https://www.unsa.edu.pe/">Universidad Nacional de San Agustin de Arequipa</a> </p>
          <p class="nameuni"> <a href="https://www.up.edu.pe/">	Universidad del Pacifico</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="Australia" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Australia</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://www.anu.edu.au/">Australian National University (ANU)</a> </p>
          <p class="nameuni"> <a href="https://www.sydney.edu.au/">University of Sydney</a> </p>
          <p class="nameuni"> <a href="https://www.unimelb.edu.au/">University of Melbourne</a> </p>
          <p class="nameuni"> <a href="https://www.unsw.edu.au/">University of New South Wales (UNSW)</a> </p>
          <p class="nameuni"> <a href="https://uq.edu.au/">University of Queensland (UQ)</a> </p>
          <p class="nameuni"> <a href="https://www.monash.edu/">Monash University</a> </p>
          <p class="nameuni"> <a href="https://www.uwa.edu.au/">University of Western Australia (UWA)</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div id="newzealand" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Zealand</h4>
        </div>
        <div class="modal-body">
          <p class="nameuni"> <a href="https://www.auckland.ac.nz/">University of Auckland</a> </p>
          <p class="nameuni"> <a href="https://www.otago.ac.nz/">University of Otago</a> </p>
          <p class="nameuni"> <a href="https://universityofwellington.com/">Victoria University of Wellington</a> </p>
          <p class="nameuni"> <a href="https://www.canterbury.ac.nz/">University of Canterbury</a> </p>
          <p class="nameuni"> <a href="https://www.waikato.ac.nz/">	University of Waikato</a> </p>
          <p class="nameuni"> <a href="https://www.massey.ac.nz/">Massey University</a> </p>
          <p class="nameuni"> <a href="https://www.lincoln.ac.nz/">Lincoln University</a> </p>
        </div>
      </div>
    </div>
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
