<?php
// $to      = 'nobody@example.com';
// $subject = 'the subject';
// $message = 'hello';
// $headers = 'From: webmaster@example.com' . "\r\n" .
//     'Reply-To: webmaster@example.com' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();

// mail($to, $subject, $message, $headers);
if(isset($_POST['send-mail'])){
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // $emailErr = $subjectErr = $messageErr = "";

  if($email == ""){
    $emailErr = "Please enter your email address";
  }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  }else{
    $emailValue = $email;
  }
  if($subject == ""){
    $subjectErr = "Please enter your name";
  }else{
    $subjectValue = $subject;
  }
  if($message == ""){
    $messageErr = "Please enter your message";
  }else{
    $messageValue = $message;
  }

  if(isset($emailErr) or isset($subjectErr) or isset($messageErr)){
    $errorOccur = 1;
  }else{
    $to      = 'mamun.weber@gmail.com';
    $subjects = $subject;
    $messages = $message;
    $headers = 'From: '.$email . "\r\n" .
        'Reply-To: '.$email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subjects, $messages, $headers);

    $to      = $email;
    $subjects = 'Developer mamun portfolio';
    $messages = 'We will contact you soon.';
    $headers = 'From: mamun.weber@gmail.com' . "\r\n" .
        'Reply-To: mamun.weber@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subjects, $messages, $headers);
    ?>
    <span class="alert alert-success" >Thank you for your message</span>
    
    <?php

  }
  
}
?>


<!-- subject, email, message -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Portfolio </title>

    <!-- Bootstrap -->
    <link rel="icon" type="image/png" href="img/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animated.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="row no-gutters clearfix">
      <div class="col-lg-2 ">
        <div class="d-lg-none header">
          <nav class="row no-gutters nav fixed-top">
            <div class="col-10 col-sm-7  col-md-5">
              <h3 class="text-light top-name  mt-2 mt-sm-0">Developer <span class="display-block display-md-block">Mamun</span></h3>
            </div>
            <div class="offset-0 d-none offset-4 offset-sm-0 d-sm-inline-block offset-sm-1 col-sm-3 offset-md-2 col-md-3 ">
              <ul class="list-inline float-right mt-2 " >
                <li class="list-inline-item "> <a data-toggle="tooltip" data-placement="bottom" title="Facebook" href="#"> <i class="fab fa-facebook-f fa-1x mr-2"></i> </a> </li>
                <li class="list-inline-item "> <a data-toggle="tooltip" data-placement="bottom" title="Twitter" href="#"> <i class="fab fa-twitter fa-1x mr-2"></i> </a> </li>
                <li class="list-inline-item "> <a data-toggle="tooltip" data-placement="bottom" title="Linkedin" href="#"> <i class="fab fa-linkedin-in fa-1x mr-2"></i> </a> </li>
                <li class="list-inline-item "> <a data-toggle="tooltip" data-placement="bottom" title="GitHub" href="#"> <i class="fab fa-github fa-1x mr-2"></i> </a> </li>
              </ul>
            </div>
            <div class="col-1">
              <div class="text-light text-right  button">
                <span>____</span>
                <span>____</span>
                <span>____</span>
              </div>
            </div>
            <div class="menu">
              <ul id="nav2">
                <li class="active2"> <a href="#home">Home</a> </li>
                <li> <a href="#about-me">About Me</a> </li>
                <li> <a href="#what-i-do">What I Do</a> </li>
                <li> <a href="#resume">Resume</a> </li>
                <li> <a href="#portfolio">Portfolio</a> </li>
                <!-- <li> <a href="#testimonial">Testimonial</a> </li> -->
                <li> <a href="#contact">Contact</a> </li>
              </ul>
            </div>
          </nav>

        </div>
        <div class="container left-section profile d-none d-lg-block pt-3">
          <center>
            <img src="img/my.jpg" alt="">
            <h4>Developer Mamun</h4>
            <ul id="nav">
              <li class="active"> <a href="#home">Home</a> </li>
              <li> <a href="#about-me">About Me</a> </li>
              <li> <a href="#what-i-do">What I Do</a> </li>
              <li> <a href="#resume">Resume</a> </li>
              <li> <a href="#portfolio">Portfolio</a> </li>
              <!-- <li> <a href="#testimonial">Testimonial</a> </li> -->
              <li> <a href="#contact">Contact</a> </li>
            </ul>
            <ul class="list-inline mt-2 " >
              <li class="list-inline-item "> <a data-toggle="tooltip" data-placement="top" title="Facebook" href="#"> <i class="fab fa-facebook-f fa-1x mr-2"></i> </a> </li>
              <li class="list-inline-item "> <a data-toggle="tooltip" data-placement="top" title="Twitter" href="#"> <i class="fab fa-twitter fa-1x mr-2"></i> </a> </li>
              <li class="list-inline-item "> <a data-toggle="tooltip" data-placement="top" title="Linkedin" href="#"> <i class="fab fa-linkedin-in fa-1x mr-2"></i> </a> </li>
              <li class="list-inline-item "> <a data-toggle="tooltip" data-placement="top" title="GitHub" href="#"> <i class="fab fa-github fa-1x mr-2"></i> </a> </li>
            </ul>
          </center>
        </div>
      </div>
      <div class="col-lg-10 offset-lg-2">
        <div id="home" class="welcome">
          <div class="wrap">
            <h3 class="wow animate__animated  animate__bounceInDown">Welcome</h3>
            <h2 class="display-4"><span class="typed"></span> </h2>
            <p>based in Dhaka, Bangladesh</p>
            <a class="wow animate__animated  animate__slideInUp" href="#contact">Hire Me</a> <br><br><br>
            <a class="wow animate__animated  animate__slideInUp "  href="resume\Al-Mamun-Resume-Web-Developer.pdf" download>Download Resume</a>
          </div>

        </div>
        <div id="about-me" class="about title wow animate__animated  animate__slideInUp">
          <h1>ABOUT ME</h1>
          <h2>Know Me More<span></span></h2>

        </div>
        <div class="container px-5  ">
          <div class="row no-gutters">
            <div class="col-lg-7 about-me mb-5 wow animate__animated  animate__slideInUp">
              <h2>I'm <span>Al Mamun,</span> a Web Developer</h2>
              <p>I help you build brand for your business at an affordable price. Thousands of clients have procured exceptional results while working with our dedicated team. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              <p>Delivering work within time and budget which meets client’s requirements is our moto. Lorem Ipsum has been the industry's standard dummy text ever when an unknown printer took a galley.</p>
            </div>
            <div class="col-lg-5 mb-5  wow animate__animated  animate__slideInUp">
              <table class="table">
                <tr>
                  <th style="border-top:none">Name:</th>
                  <td style="border-top:none">Al Mamun</td>
                </tr>
                <tr>
                  <th>Email:</th>
                  <td class="email">mamun.weber@gmail.com</td>
                </tr>
                <tr>
                  <th>Age:</th>
                  <td>23</td>
                </tr>
                <tr>
                  <th>From:</th>
                  <td>Dhaka, Bangladesh</td>
                </tr>
              </table>
            </div>
          </div>
          <div class="row no-gutters experiance">
            <div class="col-sm-6 col-lg-3 experiance-child">
              <h2> <span class="counter">2</span>+</h2>
              <p>Working of years</p>
            </div>
            <div class="col-sm-6 col-lg-3 experiance-child">
              <h2><span class="counter">6</span></h2>
              <p>Training of months</p>
            </div>
            <div class="col-sm-6 col-lg-3 experiance-child">
              <h2><span class="counter">3</span>+</h2>
              <p>Education experiance</p>
            </div>
            <div class="col-sm-6 col-lg-3 experiance-child">
              <h2><span class="counter">10</span></h2>
              <p>Project Complete</p>
            </div>
          </div>
        </div>

        <div id="what-i-do" class="row no-gutters service ">
          <div class="col-12 title">
            <h1>SERVICE</h1>
            <h2>What I do<span></span></h2>
          </div>
          <div class="row no-gutters container px-5 pb-4 web  wow animate__animated  animate__slideInUp">
            <div class="col-lg-6">
              <div class="row no-gutters">
                <div class="offset-sm-2 offset-lg-0 col-2">
                  <i class="web-img fas fa-desktop fa-2x"></i>
                </div>
                <div class="col-10 col-sm-8 col-lg-9 offset-lg-1 col-xl-10 offset-xl-0 mb-3 mb-lg-1">

                  <div class="ml-5 ml-sm-3 ml-lg-0">
                    <h3>Web Design</h3>
                    <p>Web design involves everything related to the design and functioning of websites. It encompasses a wide range of elements, from the graphic design and interface to the user experience to technical elements on the back-end.</p>
                  </div>
                </div>
              </div>


            </div>
            <div class="col-lg-6">
              <div class="row no-gutters ml-lg-4">
                <div class="offset-sm-2 offset-lg-0 col-2">
                  <i class="web-img fas fa-pencil-ruler fa-2x"></i>
                </div>
                <div class="col-10 col-sm-8 col-lg-9 offset-lg-1 col-xl-10 offset-xl-0">
                  <div class="ml-5 ml-sm-3 ml-lg-0">
                    <h3>Web Development</h3>
                    <p>Web development is the building and maintenance of websites; it's the work that happens behind the scenes to make a website look great, work fast and perform well with a seamless user experience. Web developers, or 'devs', do this by using a variety of coding languages.</p>
                  </div>
                </div>
              </div>
          </div>


          </div>
        </div>

        <div id="resume" class="row no-gutters ">
          <div class="col-12 title">
            <h1>SUMMARY</h1>
            <h2>Resume<span></span></h2>
          </div>

          <div class="row container px-5">
            <div class="offset-sm-3 offset-lg-0   education-main">
              <h2 class="text-center">My Education</h2>
              <div class="d-flex flex-wrap">
                <div class="education col-11 col-lg-5 offset-1  wow animate__animated  animate__slideInUp">
                  <span>2012 - 2013</span>
                  <h2>Science</h2>
                  <p class="p1">Jasai high school</p>
                  <p class="p2">
                    Completed SSC <br>
                    Result : GPA 4.00/5.00 <br>
                    Session : 2012/13 <br>
                    Board : Dinajpur <br><br>
                  </p>
                </div>
                <div class="education col-11 col-lg-5 ml-lg-4 offset-1 offset-lg-0  wow animate__animated  animate__slideInUp">
                  <span>2013 - 2017</span>
                  <h2>Diploma in Computer</h2>
                  <p class="p1">BIIT,(Bogra)</p>
                  <p class="p2">
                    Completed Diploma in Computer <br>
                    Result : CGPA 3.79/4.00 <br>
                    Session : 2013/14 <br>
                    Board : Technical <br><br>
                  </p>
                </div>
                <div class="education col-11 col-lg-5 offset-1  wow animate__animated  animate__slideInUp">
                  <span>2018 - 2021</span>
                  <h2>CSE</h2>
                  <p class="p1">Daffodil International University</p>
                  <p class="p2">
                    Completed BSC in CSE <br>
                    Result : 3.90/4.00 <br><br><br><br>
                  </p>
                </div>
              </div>
              </div>

            <!-- <div class="offset-sm-3 offset-lg-0 col-sm-10 col-lg-6 education-main">
              <h2>My Experiance</h2>
              <div class="education  wow animate__animated  animate__slideInUp">
                <span>2013 - 2014</span>
                <h2>Jr. Web Designer</h2>
                <p class="p1">Themeforest</p>
                <p class="p2">I am responsible for the design, layout and coding of a website. They are involved with the technical and graphical aspects of a website - how the site works and how it looks. I can also be involved with the maintenance and update of an existing site.</p>
              </div>
              <div class="education  wow animate__animated  animate__slideInUp">
                <span>2015 - 2018</span>
                <h2>Jr. Web Developer</h2>
                <p class="p1">Dribbble</p>
                <p class="p2">I works with a team of developers to create new websites and applications. Generally I work under the supervision of senior developers in my department, but I also involved in all stages of the project, from brainstorming to final testing.</p>
              </div>
              <div class="education  wow animate__animated  animate__slideInUp">
                <span>2019 - running</span>
                <h2>Web Developer</h2>
                <p class="p1">Upwork</p>
                <p class="p2">I have design and create websites. I am responsible for the look of the site. I am also responsible for the site's technical aspects, such as its performance and capacity, which are measures of a website's speed and how much traffic the site can handle.</p>
              </div>
            </div> -->
          </div>


        </div>
        <div class="row container px-5 no-gutters ">
          <div class="offset-sm-3 col-sm-9 offset-lg-0 col-lg-12">
            <h3 class="font-weight-bold my-4">My Skills</h3>
          </div>
          <div class="col-sm-9 offset-sm-3 offset-lg-0 col-lg-5 ">
            <div class="skill">
              <p>HTML <span class="float-right">80%</span> </p>
              <div class="progress progress-sm mb-4">
                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><div class="wow animate"></div></div>
              </div>
            </div>
            <div class="skill">
              <p>CSS <span class="float-right">70%</span> </p>
              <div class="progress progress-sm mb-4">
                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><div class="wow animate"></div></div>
              </div>
            </div>
            <div class="skill">
              <p>Bootstrap <span class="float-right">65%</span> </p>
              <div class="progress progress-sm mb-4">
                <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><div class="wow animate"></div></div>
              </div>
            </div>
            <div class="skill">
              <p>JavaScript <span class="float-right">70%</span> </p>
              <div class="progress progress-sm mb-4">
                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><div class="wow animate"></div></div>
              </div>
            </div>
            <div class="skill">
              <p>jQuery <span class="float-right">60%</span> </p>
              <div class="progress progress-sm mb-4">
                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><div class="wow animate"></div></div>
              </div>
            </div>
            <div class="skill">
              <p>JSON <span class="float-right">65%</span> </p>
              <div class="progress progress-sm mb-4">
                <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><div class="wow animate"></div></div>
              </div>
            </div>
          </div>
          <div class="col-sm-9 offset-sm-3 col-lg-5 offset-lg-1">
            <div class="skill">
              <p>PHP(OOP) <span class="float-right">70%</span> </p>
              <div class="progress progress-sm mb-4">
                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><div class="wow animate"></div></div>
              </div>
            </div>
            <div class="skill">
              <p>Laravel <span class="float-right">75%</span> </p>
              <div class="progress progress-sm mb-4">
                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><div class="wow animate"></div></div>
              </div>
            </div>
            <div class="skill">
              <p>mySQL <span class="float-right">70%</span> </p>
              <div class="progress progress-sm mb-4">
                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><div class="wow animate"></div></div>
              </div>
            </div>
            <div class="skill">
              <p>AJAX <span class="float-right">75%</span> </p>
              <div class="progress progress-sm mb-4">
                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><div class="wow animate"></div></div>
              </div>
            </div>
            <div class="skill">
              <p>REST API <span class="float-right">70%</span> </p>
              <div class="progress progress-sm mb-4">
                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><div class="wow animate"></div></div>
              </div>
            </div>
            <div class="skill">
              <p>Vue<span class="float-right">65%</span> </p>
              <div class="progress progress-sm mb-4">
                <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><div class="wow animate"></div></div>
              </div>
            </div>
          </div>
        </div>

        <div id="portfolio" class="row  px-5 no-gutters service ">
          <div class="col-12 title">
            <h1>PORTFOLIO</h1>
            <h2>My Work<span></span></h2>
          </div>


          <!-- <div class="row no-gutters container px-lg-5">
            <div class="col-12 text-center">
              <ul class="list-inline pb-2 mb-3 project">
                <li class="list-inline-item mr-3"> <a href="#">All</a> </li>
                <li class="list-inline-item mr-3"> <a href="#">Design</a> </li>
                <li class="list-inline-item mr-3"> <a href="#">Brand</a> </li>
                <li class="list-inline-item mr-3"> <a href="#">Photos</a> </li>
              </ul>
            </div>
            <div class="col-sm-6 col-lg-4 mb-3 design   wow animate__animated  animate__slideInUp">
              <img width="100%" src="img\slider-img1.jpg" alt="">
              <h2 style="width:100%">Web Design</h2>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-3 design  wow animate__animated  animate__slideInUp">
              <img width="100%" src="img\slider-img2.jpg" alt="">
              <h2 style="width:90%">Graphics Design</h2>
            </div>
            <div class="col-12 col-sm-6  col-lg-4 mb-3 design  wow animate__animated  animate__slideInUp">
              <img width="100%" src="img\slider-img3.jpg" alt="">
              <h2 style="width:100%">Web Development</h2>
            </div>
          </div>
        </div> -->
        <div class="filter">
          <section class="row no-gutters">
            <ul class="col-12 d-flex  flex-wrap">
              <li class="list  active" data-filter="All">All</li>
              <li class="list " data-filter="bootstrap">Bootstrap</li>
              <li class="list " data-filter="javascript">JavaScript</li>
              <li class="list " data-filter="vue">Vue-3</li>
              <li class="list " data-filter="php">PHP</li>
              <li class="list " data-filter="laravel">Laravel</li>
            </ul>
            <div class="product col-12">
              <div class="itembox laravel">
                <div class="card" >
                  <img src="Photos/review.png" alt="image">
                  <div class="github"><a class="btn btn-primary" href="https://github.com/Mamun-diu/laravel_product_review" target="_blank">Github</a> </div>
                  <div class="live"><a class="btn btn-success" href="https://www.microdeveloperbd.com/" target="_blank">Live</a></div>
                  <div class="card-body">
                    <h5 class="card-title">Product review</h5>
                    <span class="badges ">HTML5</span>
                    <span class="badges ">CSS3</span>
                    <span class="badges ">Bootstrap 4</span>
                    <!-- <span class="badges ">Tailwind CSS</span> -->
                    <span class="badges ">JavaScript</span>
                    <span class="badges ">jQuery</span>
                    <!-- <span class="badges ">Vue3</span> -->
                    <!-- <span class="badges ">PHP</span> -->
                    <span class="badges ">Laravel</span>
                    <span class="badges ">MySQL</span>
                    <span class="badges ">AJAX</span>
                    
                  </div>
                </div>
              </div>
              <div class="itembox vue">
                <div class="card" >
                  <img src="Photos/khaasfood.png" alt="image">
                  <div class="github"><a class="btn btn-primary" href="https://github.com/Mamun-diu/clone-khaasfood-ecommerce" target="_blank">Github</a> </div>
                  <div class="live"><a class="btn btn-success" href="https://clone-khaasfood.microdeveloperbd.com/" target="_blank">Live</a></div>
                  <div class="card-body">
                    <h5 class="card-title">Khaasfood clone</h5>
                    <span class="badges ">HTML5</span>
                    <span class="badges ">CSS3</span>
                    <span class="badges ">Bootstrap 4</span>
                    <!-- <span class="badges ">Tailwind CSS</span> -->
                    <!-- <span class="badges ">JavaScript</span> -->
                    <!-- <span class="badges ">jQuery</span> -->
                    <span class="badges ">Vue3</span>
                    <!-- <span class="badges ">PHP</span> -->
                    <span class="badges ">Laravel</span>
                    <span class="badges ">MySQL</span>
                    <!-- <span class="badges ">AJAX</span> -->
                    
                  </div>
                </div>
              </div>
              <div class="itembox javascript">
                <div class="card" >
                  <img src="Photos/portfolio.png" alt="image">
                  <div class="github"><a class="btn btn-primary" href="https://github.com/Mamun-diu/portfolio" target="_blank">Github</a> </div>
                  <div class="live"><a class="btn btn-success" href="https://portfolio.microdeveloperbd.com/" target="_blank">Live</a></div>
                  <div class="card-body">
                    <h5 class="card-title">Portfolio project</h5>
                    <span class="badges ">HTML5</span>
                    <span class="badges ">CSS3</span>
                    <span class="badges ">Bootstrap 4</span>
                    <!-- <span class="badges ">Tailwind CSS</span> -->
                    <span class="badges ">JavaScript</span>
                    <span class="badges ">jQuery</span>
                    <!-- <span class="badges ">Vue3</span> -->
                    <span class="badges ">PHP</span>
                    <!-- <span class="badges ">Laravel</span> -->
                    <!-- <span class="badges ">MySQL</span> -->
                    <!-- <span class="badges ">AJAX</span> -->
                    
                  </div>
                </div>
              </div>
              <div class="itembox bootstrap">
                <div class="card" >
                  <img src="Photos/bootstrap_looplab.png" alt="image">
                  <div class="github"><a class="btn btn-primary" href="https://github.com/Mamun-diu/4.Bootstrap-Project/tree/master/01.LoopLab" target="_blank">Github</a> </div>
                  <div class="live"><a class="btn btn-success" href="https://looplab.microdeveloperbd.com/" target="_blank">Live</a></div>
                  <div class="card-body">
                    <h5 class="card-title">LoopLab Project</h5>
                    <span class="badges ">HTML5</span>
                    <span class="badges ">CSS3</span>
                    <span class="badges ">Bootstrap 4</span>
                    <span class="badges ">JavaScript</span>
                    <span class="badges ">jQuery</span>
                    
                  </div>
                </div>
              </div>
              <div class="itembox php">
                <div class="card" >
                  <img src="Photos/php_news.png" alt="image">
                  <div class="github"><a class="btn btn-primary" href="https://github.com/Mamun-diu/php-news-project" target="_blank">Github</a> </div>
                  <div class="live"><a class="btn btn-success" href="https://news.microdeveloperbd.com/" target="_blank">Live</a></div>
                  <div class="card-body">
                    <h5 class="card-title">News Project</h5>
                    <span class="badges ">HTML5</span>
                    <span class="badges ">CSS3</span>
                    <span class="badges ">Bootstrap 4</span>
                    <span class="badges ">PHP</span>
                    <span class="badges ">MySQL</span>
                    
                  </div>
                </div>
              </div>
              

              
              <!-- <div class="itembox camera"><img src="Photos/img (2).jpg" alt=""> </div>
              <div class="itembox watch"><img src="Photos/img (3).jpg" alt=""> </div>
              <div class="itembox shoe"><img src="Photos/img (4).jpg" alt=""> </div>
              <div class="itembox headphone"><img src="Photos/img (5).jpg" alt=""> </div>
              <div class="itembox mobile"><img src="Photos/img (6).jpg" alt=""> </div>
              <div class="itembox camera"><img src="Photos/img (7).jpg" alt=""> </div>
              <div class="itembox watch"><img src="Photos/img (8).jpg" alt=""> </div>
              <div class="itembox shoe"><img src="Photos/img (9).jpg" alt=""> </div>
              <div class="itembox headphone"><img src="Photos/img (10).jpg" alt=""> </div>
              <div class="itembox mobile"><img src="Photos/img (11).jpg" alt=""> </div>
              <div class="itembox camera"><img src="Photos/img (12).jpg" alt=""> </div>
              <div class="itembox watch"><img src="Photos/img (13).jpg" alt=""> </div>
              <div class="itembox shoe"><img src="Photos/img (14).jpg" alt=""> </div>
              <div class="itembox headphone"><img src="Photos/img (15).jpg" alt=""> </div>
              <div class="itembox mobile"><img src="Photos/img (16).jpg" alt=""> </div>
              <div class="itembox camera"><img src="Photos/img (17).jpg" alt=""> </div>
              <div class="itembox watch"><img src="Photos/img (18).jpg" alt=""> </div>
              <div class="itembox shoe"><img src="Photos/img (19).jpg" alt=""> </div>
              <div class="itembox headphone"><img src="Photos/img (20).jpg" alt=""> </div>
              <div class="itembox mobile"><img src="Photos/img (21).jpg" alt=""> </div>
              <div class="itembox camera"><img src="Photos/img (22).jpg" alt=""> </div>
              <div class="itembox watch"><img src="Photos/img (23).jpg" alt=""> </div>
              <div class="itembox shoe"><img src="Photos/img (24).jpg" alt=""> </div>
              <div class="itembox headphone"><img src="Photos/img (25).jpg" alt=""> </div>
            </div> -->
          </section>
        </div>


        <!-- <div id="testimonial" class="row no-gutters ">
          <div class="col-12 title">
            <h1>TESTMONIAL</h1>
            <h2>Client Speak<span></span></h2>
          </div>
          <div class="row no-gutters container mx-5   wow animate__animated  animate__slideInUp">
            <div class="col-md-6 ">
              <div class="client mr-md-2 mb-2  ">
                <div class="row no-gutters">
                  <div class="col-12 col-sm-3 ">
                    <center>
                      <img src="img/client-sm-3.jpg" alt="image">
                    </center>
                  </div>
                  <div class="col-12 col-sm-9 text-center text-sm-left">
                    <div class="ml-lg-3 ml-xl-1 ml-md-3 ">
                      <h4>Dennis Jacques</h4>
                      <h5>User from USA</h5>
                    </div>
                  </div>
                  <div class="col-12">
                    <p>Only trying it out since a few days. But up to now excenllent. Seems to work flawlessly. Priced simply dummy text of the printing and typesetting industry.</p><br>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 ">
              <div class="client ml-md-2 mb-2">
                <div class="row no-gutters">
                  <div class="col-12 col-sm-3 ">
                    <center>
                      <img src="img/client-sm-4.jpg" alt="image">
                    </center>
                  </div>
                  <div class="col-12 col-sm-9 text-center text-sm-left">
                    <div class="ml-lg-3 ml-xl-1 ml-md-3">
                      <h4>Chris Asha</h4>
                      <h5>User from UK</h5>
                    </div>
                  </div>
                  <div class="col-12">
                    <p>I have used them twice now. Good rates, very efficient service and priced simply dummy text of the printing and typesetting industry quidam interesset his et. Excellent..</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->

        <div id="contact" class="row no-gutters mt-5 contact ">
          <div class="col-12 title">
            <h1>CONTACT</h1>
            <h2>Get in Touch<span></span></h2>
          </div>
          <div class="row no-gutters container px-5">
            <div class=" offset-md-0 col-md-4 ">
              <div class="row no-gutters   wow animate__animated  animate__slideInUp">
                <div class="col-12 col-sm-5 col-md-12">
                  <h3>ADDRESS</h3>
                  <!-- <p class="mb-1"><i style="color : #20C997;" class="far fa-building mr-2"></i>55/1 Kha</p> -->
                  <p class="mb-1"><i style="color : #20C997;" class="fas fa-map-marker-alt mr-2"></i>Shah ali bagh</p>
                  <p class="mb-1"><i style="color : #20C997;" class="fas fa-city mr-2"></i>Mirpur, Dhaka 1216</p>
                  <p class="mb-4"></p>
                  <p class="mb-2"><i style="color : #20C997;" class="fas fa-phone mr-2"></i> +880 175 115 1078</p>
                  <p class="mb-4"><i style="color : #20C997;" class="fas fa-envelope mr-2"></i> mamun.weber<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@gmail.com</p>
                </div>
                <div class="col-12 col-sm-5 offset-sm-1 col-md-12 offset-md-0 mb-lg-5 mt-md-5 mt-lg-2">
                  <h3 class=" ">FOLLOW ME</h3>
                  <p class="mb-5 mb-md-0">
                    <a class="fab" data-toggle="tooltip" data-placement="top" title="Facebook" href="#"><i class="fab fa-facebook-f mr-3 "></i></a>
                    <a class="fab" data-toggle="tooltip" data-placement="top" title="Twitter" href="#"><i class="fab fa-twitter mr-3 "></i></a>
                    <a class="fab" data-toggle="tooltip" data-placement="top" title="Linkedin" href="#"><i class="fab fa-linkedin-in mr-3 "></i></a>
                    <a class="fab"  data-toggle="tooltip" data-placement="top" title="GitHub" href="#"><i class="fab fa-github "></i></a>
                  </p>
                </div>

              </div>
            </div>
            <div class="col-12 col-md-8 mt-4 mt-md-1 mb-5 mb-lg-1">
              <h3>SEND US A NOTE</h3>
              
                <form id="contact-form" class="<?= isset($errorOccur)?'form-error':'' ?>" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="row no-gutters  wow animate__animated  animate__slideInUp">
                <div class="form-group col-lg-6 ">
                  <input class="form-control name <?= isset($subjectErr)?'is-invalid':'' ?>" type="text" name="subject" value="<?= isset($subjectValue)?$subjectValue:'' ?>" placeholder="Name">
                  <span class="invalid-feedback"><?= $subjectErr ?></span>
                </div>
                <div class="form-group col-lg-6  ">
                  <input class="form-control <?= isset($emailErr)?'is-invalid':'' ?> mail2" type="text" name="email" value="<?= isset($emailValue)?$emailValue:'' ?>" placeholder="Email">
                  <span class="invalid-feedback"><?= $emailErr ?></span>
                </div>
                <div class="form-group col-lg-12">
                  <textarea class="form-control <?= isset($messageErr)?'is-invalid':'' ?>" name="message" rows="5" placeholder="Tell us more about your needs...."><?= isset($messageValue)?$messageValue:'' ?></textarea>
                  <span class="invalid-feedback"><?= $messageErr ?></span>
                </div>
                <input id="send-mails" class="btn buttons col-lg-4 offset-lg-4 mt-3" type="submit" name="send-mail" value="Send Message">
                </div>
                </form>
              
            </div>
          </div>
        </div>

        <div class="row no-gutters container p-5   wow animate__animated  animate__slideInUp">
          <div class="col-lg-6 mb-4 mb-lg-1">
            <p class="m-0">Copyright &copy; 2021 <span class="text-success">Developer Mamun</span>. All Right Reserved</p>
          </div>
          <div class="col-md-5 col-lg-5 offset-lg-1 col-xl-4 offset-xl-2 ">
            <p class="m-0"> <span> <a href="#">Terms & Policy</a> </span> | <span> <a href="#">Disclaimer</a> </span> </p>
          </div>
        </div>

      </div>
    </div>

    <div class="loader text-center">
      <div class="loader-inner">

          <!-- Animated Spinner -->
        <div class="lds-roller mb-3">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

        <!-- Spinner Description Text [For Demo Purpose]-->
        <h4 style="letter-spacing:2px" class="animate__animated animate__shakeX text-uppercase font-weight-bold load">Loading</h4>
        <div style="width : 100%;height : 10px; border-radius:5px;background:#ddd;" class="mb-2 mt-3">
          <div class="animates">

          </div>
        </div>

    </div>
  </div>
  <div id="toTop" data-toggle="tooltip" data-placement="top" title="Back to Top">
    <i class="fas fa-arrow-up"></i>
  </div>
  <div class="color d-none d-lg-block">
    <i class="fas fa-cog"></i>
    <div class="color-box">
      <h4>Choose Color</h4>
      <div class="ml-3 mt-2">
        <span id="indigo"  data-toggle="tooltip" data-placement="top" title="Indigo"></span>
        <span id="blue"  data-toggle="tooltip" data-placement="top" title="Blue"></span>
        <span id="purple"  data-toggle="tooltip" data-placement="top" title="Purple"></span>
        <span id="cyan"  data-toggle="tooltip" data-placement="top" title="Cyan"></span>
        <span id="red"  data-toggle="tooltip" data-placement="top" title="Red"></span>
        <span id="pink"  data-toggle="tooltip" data-placement="top" title="Pink"></span>
        <span id="green"  data-toggle="tooltip" data-placement="top" title="Green"></span>
        <span id="yellow"  data-toggle="tooltip" data-placement="top" title="Yellow"></span>
        <span id="orange"  data-toggle="tooltip" data-placement="top" title="Orange"></span>
        <span id="brown"  data-toggle="tooltip" data-placement="top" title="Brown"></span>
      </div>
    </div>
  </div>


  <div class="mail">
    <div class="mail-inner">
      <h3>This feature will availabe soon...</h3>
      <div class="cancel">
        <span>X</span>
      </div>
    </div>

  </div>


    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="js/wow.min.js" charset="utf-8"></script>
    <script src="js/popper.min.js" charset="utf-8"></script>
    <script src="js/slim.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.bundle.min.js" charset="utf-8"></script>

    <script src="js/typed.js" charset="utf-8"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="js/nav.js" charset="utf-8"></script>


    <!-- Counter -->
    <script src="js/jquery.waypoints.js" charset="utf-8"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/main.js"></script>
    <script>
      //code for wow js
      new WOW().init();

      //Code for typed js
      var typed = new Typed('.typed', {
      strings: ["I'm Al Mamun.", "I'm a Web Designer.","I'm a Web Developer."],
      typeSpeed: 30,
      backSpeed: 30,
      loop: true
      });


    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $(".button").click(function(){
          $(".menu").slideToggle();
        });

        if($('#contact-form').hasClass('form-error')){
          $("html, body").animate({ scrollTop: $(document).height() }, 1000);
          
        }
        setTimeout(() => {
          $('.alert').fadeOut();
        }, 3000);


        //one page nav
        $('#nav').onePageNav({
        currentClass: 'active',
        changeHash: false,
        scrollSpeed: 750,
        scrollThreshold: 0.5,
        filter: '',
        easing: 'swing'
        });
        $('#nav2').onePageNav({
        currentClass: 'active2',
        changeHash: false,
        scrollSpeed: 750,
        scrollThreshold: 0.5,
        filter: '',
        easing: 'swing'
        });

        //counterup
        $('.counter').counterUp({
            delay: 20,
            time: 2000
        });



        // HIDE LOADING SPINNER WHEN PAGE IS LOADED [7000msec after the page is loaded]
        // $(window).on('load', function () {
            setTimeout(function () {
                $('.loader').hide(300);
            }, 500);
        // });




        // $('#reload').on('click', function (e) {
        //     e.preventDefault();
        //     location.reload();
        // });


        // Scroll to top
        $('#toTop').hide();
        $(window).scroll(function() {

          if ($(this).scrollTop()) {
              $('#toTop').fadeIn();
          } else {
              $('#toTop').fadeOut();
          }
      });

      $("#toTop").click(function() {
          $("html, body").animate({scrollTop: 0}, 1000);
       });

       // Tool Tips
       $('[data-toggle="tooltip"]').tooltip();



       //color selector
       var count = 0;
       $(".color").click(function(){

         if(count==0){
           $(".color").animate({right : "200px"},1000);
           $(".color-box").animate({left: "40px"},1000);
           count = 1;
         }else{
           $(".color").animate({right : "0px"},1000);
           $(".color-box").animate({left: "240px"},1000);
           count = 0;
         }
       });
       function myColor(color) {
         $(".welcome a").css({"color" : color+"","border" : "2px solid "+color,"font-weight":"bold"});
         $(".welcome a").mouseover(function(){
           $(this).css({"color" : "#fff","background":color+"","border":"2px solid "+color});
         });
         $(".welcome a").mouseout(function(){
           $(this).css({"color" : color+"","background":"none","border" : "2px solid "+color});
         });
         $(".title span").css({"background":color+""});
         $(".about-me h2 span").css({"color":color+""});
         $(".email").css({"color":color+""});
         $(".web-img").css({"color":color+""});
         $(".education span").css({"background":color+""});
         $("ul.project li").mouseover(function(){
           $(this).css({"border-bottom":"2px solid "+color});
         });
         $("ul.project li").mouseout(function(){
           $(this).css({"border-bottom":"none"});
         });
         $("ul.project li a").mouseover(function(){
           $(this).css({"color":""+color});
         });
         $("ul.project li a").mouseout(function(){
           $(this).css({"color":"#000"});
         });
         $(".buttons").css({"background":color+""});
         $("#nav li a").css({"color":"#eee"});
         $("#nav li.active a").css({"color":color+""});
         $(window).scroll(function(){
           $("#nav li a").css({"color":"#eee"});
           $("#nav li.active a").css({"color":color+""});
         });
         $(".animate").css({"background":color+""});
         $(".animates").css({"background":color+""});
         $(".profile ul li a").mouseover(function(){
           $(this).css({"color":""+color});
         });
         $(".profile ul li a").mouseout(function(){
           $(".profile ul li a").css({"color":"#eee"});
         });
         $(".menu ul li a").mouseover(function(){
           $(this).css({"color":""+color});
         });
         $(".menu ul li a").mouseout(function(){
           $(this).css({"color":"#eee"});
         });
         $(".mail-inner").css({"color":color+"","box-shadow": "0px 0px 10px 5px"+color});

         $(".mail-inner .cancel span").css({"background":color+""});
         $(".color-box h4").css({"color":color+""});
        }





       var color = "#20c997";
       $("#indigo").click(function(){
         color = "#6610f2";
         myColor(color);
       });
       $("#blue").click(function(){
         color = "#007bff";
         myColor(color);
       });
       $("#purple").click(function(){
         color = "#6f42c1";
         myColor(color);
       });
       $("#cyan").click(function(){
         color = "#17a2b8";
         myColor(color);
       });
       $("#red").click(function(){
         color = "#dc3545";
         myColor(color);
       });
       $("#pink").click(function(){
         color = "#e83e8c";
         myColor(color);
       });
       $("#green").click(function(){
         color = "#28A745";
         myColor(color);
       });
       $("#yellow").click(function(){
         color = "#FFC107";
         myColor(color);
       });
       $("#orange").click(function(){
         color = "#FD7E14";
         myColor(color);
       });
       $("#brown").click(function(){
         color = "#795548";
         myColor(color);
       });



       $("#send-mail").click(function(){
         $(".mail").show();
       });
       $(".mail-inner .cancel span").click(function(){
         $(".mail").hide();
       });


      //  website filter
      $('.list').click(function(){
        const value = $(this).attr('data-filter');
        if(value == 'All'){
          $('.itembox').show('1000');
        }else{
          $('.itembox').not('.'+value).hide('1000');
          $('.itembox').filter('.'+value).show('1000');
        }
      })
      $('.list').click(function(){
        $(this).addClass('active');
        $(this).siblings().removeClass('active')
      })


      });


    </script>

  </body>
  </html>
