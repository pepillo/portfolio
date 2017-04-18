<?php
    $mail_sent = false;

    if(isset($_POST['contact_email'])){
        $to      = 'delgado.jose.pr@gmail.com';
        $subject = "JOSE-DELGADO.COM CONTACT FORM";
        $body    = "You have received a new message from your website contact form.\n\n
                    Here are the details:\n\n
                    Email: {$_POST['contact_email']}\n\n
                    Message:\n {$_POST['contact_message']}";
        $headers = "From: noreply@jose-delgado.com\n";
        $headers .= "Reply-To: {$_POST['contact_email']}";

        mail($to, $subject, $body);

        $mail_sent = true;
    }

    $birth_date = explode("/", "06/26/1992");
    $age = (date("md", date("U", mktime(0, 0, 0, $birth_date[0], $birth_date[1], $birth_date[2]))) > date("md")
        ? ((date("Y") - $birth_date[2]) - 1)
        : (date("Y") - $birth_date[2]));
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.js"></script>
</head>

<body>
    <!--
    <div id="mobile-menu-open" class="shadow-large">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    -->
    <!-- End #mobile-menu-toggle -->
    <header>
        <!--
        <div id="mobile-menu-close">
            <span>Close</span> <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        -->
        <ul id="menu___" class="shadow">
            <li>
                <a href="#about">About</a>
            </li>
            <li>
                <a href="#experience">Experience</a>
            </li>
            <li>
                <a href="#education">Education</a>
            </li>
            <li>
                <a href="#projects">Projects</a>
            </li>
            <li>
                <a href="#skills">Skills</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </header>
    <!-- End header -->

    <div id="lead">
        <div id="lead-content">
            <?php
                if($mail_sent){
                    echo '<div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Success!</strong> Email has been sent.
                          </div>';
                }
            ?>

            <h1>Jose L. Delgado Ruiz</h1>
            <h2>
                Computer Science Graduate
                <br>
                Software Developer
            </h2>
            <a href="files/resume_jose_delgado.pdf" class="btn-rounded-white" download>Download Resume</a>
            <a href="images/cards.png" class="btn-rounded-white" download>Business Card</a>
        </div>
        <!-- End #lead-content -->

        <div id="lead-overlay"></div>

        <div id="lead-down">
            <span>
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </span>
        </div>
        <!-- End #lead-down -->
    </div>
    <!-- End #lead -->

    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="heading">About Me</h2>
                    <img class="img-responsive" src="images/profile.png" alt="">
                    <div class="social" style='text-align: right;'>
                        <ul>
                            <li>
                                <p style="font-size: 15px;">DELGADO.JOSE.PR@GMAIL.COM</p>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/jose-delgado-ruiz-01422541" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="https://github.com/pepillo" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/JoseDelgadoPR" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <p>
                        Well you want to know more about me huh, sure thing. Well I am a <?php echo $age;?> year old
                        computer science graduate from Puerto Rico. I obtained my degree at the University
                        of Puerto Rico at Arecibo. During the last 2 years of my bachelor’s degree I
                        worked for the university’s center of technology information department as a
                        software developer together with other students and professional’s where we worked
                        on projects for the university. Upon graduation, I got hired by the university's central
                        administration team ('NEXT').
                    </p>
                    <br>
                    <p>
                        I love to use my skills to developed entire application components as well as individual
                        applications, working on the entire process of web development, including planning,
                        designing/developing, troubleshooting, debugging and implementing software code for
                        website components.
                    </p>
                    <br>
                    <p>
                        I also love to learn, I often take online seminars or video courses to further my
                        knowledge and skill within my technical area.
                    </p>
                    <p>
                        <ul>
                            <li>
                                <a href="https://www.udemy.com/u/joseldelgadoruiz/">Udemy</a>
                            </li>
                            <li>
                                <a href="https://courses.edx.org/u/JoseDelgadoRuiz">edX</a>
                            </li>
                            <li>
                                <a href="https://www.coursera.org/user/i/330126c004f64f415563a0873e8f84ac">Coursera</a>
                            </li>
                            <li>
                                <a href="http://www.codecademy.com/JoseDelgadoRuiz">Codecademy</a>
                            </li>
                            <li>
                                Udacity
                            </li>
                            <li>
                                Youtube
                            </li>
                        </ul>
                    </p>
                    <h3>Seld Description:</h3>
                    <p>
                        Software Developer: Yii lover,
                        JQuery eater, PHPeer, MySQL Gymnastics, CSS stylist, and New Tech-fan
                    </p>
                    <h3>Favorite quote:</h3>
                    <p>
                        “Any fool can write code that a computer can understand. Good programmers write code that humans can understand.”
                        <br><br>
                        ―Martin Fowler
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End #about -->

    <div id="experience" class="background-alt">
        <h2 class="heading">Experience</h2>
        <div id="experience-timeline">
            <div data-date="July 2015 – Present">
                <h3>University of Puerto Rico - Central Administration (San Juan)</h3>
                <h4>Computer Programmer II</h4>
                <p>Work alongside 15+ Programmer's, DBA, Systems Manager within project NEXT (Student Information System) developing software for the University of Puerto Rico and it's 11 branches.</p>
            </div>

            <div data-date="December 2014">
                <h3>Rubric Solution</h3>
                <h4>Web Consultant</h4>
            </div>

            <div data-date="August 2013 – May 2015">
                <h3>University of Puerto Rico - Arecibo</h3>
                <h4>Part time - Web Developer</h4>
                <p>
                    Develop web-base software with a small team of students for the university.
                </p>
            </div>
        </div>
    </div>
    <!-- End #experience -->

    <div id="education">
        <h2 class="heading">Education</h2>
        <div class="education-block">
            <h3>Laico San Pablo</h3>
            <span class="education-date">August 2007 - May 2010</span>
            <h4>Highschool</h4>
            <p>
                 I graduated highschool, where I enjoyed doing science, math, biology and arts. I realized in my third year of school that I wanted to focus on something related to tech.
            </p>
        </div>
        <!-- End .education-block -->

        <div class="education-block">
            <h3>University of Puerto Rico - Arecibo</h3>
            <span class="education-date">August 2010 - May 2015</span>
            <h4>Bachelor of Science in Computer Science</h4>
            <p>
                The education was mainly C++ programming, but I also learned about SQL (Relational Database), PHP, Java, Python, MVC and more.
            </p>
        </div>
        <!-- End .education-block -->

        <div class="education-block">
            <h3>Inter American University of Puerto Rico - Fajardo</h3>
            <span class="education-date">February 2017 - Present</span>
            <h4>Masters Degree in Computer Science</h4>
            <p></p>
        </div>
        <!-- End .education-block -->
    </div>
    <!-- End #education -->

    <div id="projects" class="background-alt">
        <h2 class="heading">Projects</h2>
        <div class="container">
            <div class="row">

                <div class="project shadow-large">
                    <div class="project-image">
                        <img style='padding-left:50px;' width='230px'src="images/upra.png" />
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>PDF Repository</h3>
                        <p>
                            Document (PDF) repository system, users that belong to a branch (department) are able to upload documents
                            within this system and define the branches that could access this document. Each user can view all the documents
                            that are defined within their branch.
                        </p>
                    </div>
                    <!-- End .project-info -->
                </div>

                <div class="project shadow-large">
                    <div class="project-image">
                        <img style='padding-left:50px;' width='230px'src="images/upra.png" />
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>Emergency Text</h3>
                        <p>
                            Emergency text system, students can register their information (cell phone) within the application to
                            be able to receive notifications from the university admin team, in case of emergency. In case of
                            emergency the admin team could create a message that would be sent to all users registered (this
                            process is executed by the system).
                        </p>
                    </div>
                    <!-- End .project-info -->
                </div>

                <!-- Button trigger modal -->
                <a type="button" style="text-align: right;" data-toggle="modal" data-target="#myModal">
                    View Additional Details
                </a>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Student/Employee Vehicle Registry</h4>
                      </div>
                      <div class="modal-body">
                          <div class="modal-body">
                              <div id="carousel-example-generic3" class="carousel slide" data-ride="carouse2">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                  <li data-target="#carousel-example-generic3" data-slide-to="0" class=""></li>
                                  <li data-target="#carousel-example-generic3" data-slide-to="1" class=""></li>
                                  <li data-target="#carousel-example-generic3" data-slide-to="2" class=""></li>
                                  <li data-target="#carousel-example-generic3" data-slide-to="3" class=""></li>
                                  <li data-target="#carousel-example-generic3" data-slide-to="4" class=""></li>
                                  <li data-target="#carousel-example-generic3" data-slide-to="5" class=""></li>
                                  <li data-target="#carousel-example-generic3" data-slide-to="6" class="active"></li>
                                  <li data-target="#carousel-example-generic3" data-slide-to="7" class=""></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                  <div class="item">
                                    <img class="img-responsive center-block" src="images/sello/sello1.png" alt="...">
                                    <div class="carousel-caption">
                                        <!--<h3>Caption Text</h3>-->
                                    </div>
                                  </div>
                                  <div class="item">
                                    <img class="img-responsive center-block" src="images/sello/sello2.png" alt="...">
                                    <div class="carousel-caption">
                                        <!--<h3>Caption Text</h3>-->
                                    </div>
                                  </div>
                                  <div class="item">
                                    <img class="img-responsive center-block" src="images/sello/sello3.png" alt="...">
                                    <div class="carousel-caption">
                                        <!--<h3>Caption Text</h3>-->
                                    </div>
                                  </div>
                                  <div class="item">
                                    <img class="img-responsive center-block" src="images/sello/sello4.png" alt="...">
                                    <div class="carousel-caption">
                                        <!--<h3>Caption Text</h3>-->
                                    </div>
                                  </div>
                                  <div class="item">
                                    <img class="img-responsive center-block" src="images/sello/sello5.png" alt="...">
                                    <div class="carousel-caption">
                                        <!--<h3>Caption Text</h3>-->
                                    </div>
                                  </div>
                                  <div class="item">
                                    <img class="img-responsive center-block" src="images/sello/sello6.png" alt="...">
                                    <div class="carousel-caption">
                                        <!--<h3>Caption Text</h3>-->
                                    </div>
                                  </div>
                                  <div class="item active">
                                    <img class="img-responsive center-block" src="images/sello/sello7.png" alt="...">
                                    <div class="carousel-caption">
                                        <!--<h3>Caption Text</h3>-->
                                    </div>
                                  </div>
                                  <div class="item">
                                    <img class="img-responsive center-block" src="images/sello/sello8.png" alt="...">
                                    <div class="carousel-caption">
                                        <!--<h3>Caption Text</h3>-->
                                    </div>
                                  </div>
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic3" role="button" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic3" role="button" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                              </div> <!-- Carousel -->
                              <!--
                              <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                              -->
                              <h3>Description</h3>
                              <p>
                                  Student/Employee vehicle registry was implemented so that students and professors
                                  could register their vehicle online. It was also necessary to speed up the security
                                  officer’s search of vehicle information. This inventory has an audit script running
                                  in the background for security purposes. An image of the student license is saved in
                                  the database with the car registration paperwork.
                              </p>

                              <h3>Platform</h3>
                              <p>
                                  </p><ul class="list-unstyled">
                                      <li>Linux Server</li>
                                      <li>Yii Framework</li>
                                      <li>Sublime Text 3</li>
                                      <li>SqlYog</li>
                                  </ul>
                              <p></p>

                              <h3>Responsibility’s</h3>
                              <p>
                                  </p><ul class="list-unstyled">
                                      <li>Database ERD (mysql)</li>
                                      <li>Software Developer</li>
                                      <li>Documentation</li>
                                      <li>Manual</li>
                                      <li>Production Installation</li>
                                      <li>How to use workshop</li>
                                  </ul>
                              <p></p>
                              <ul class="list-inline item-details">
                                  <li>Client:
                                      <strong><a href="#">UPRA-CTI</a>
                                      </strong>
                                  </li>
                                  <li>Date:
                                      <strong><a href="#">Augost 2014</a>
                                      </strong>
                                  </li>
                                  <li>Service:
                                      <strong><a href="#">Web Development</a>
                                      </strong>
                                  </li>
                              </ul>
                              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="project shadow-large">
                    <div class="project-image">
                        <img width='300px'src="images/sello/sello1.png" />
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>Student/Employee vehicle Registry</h3>
                        <p>
                            Student/Employee vehicle registry was implemented so that students and professors could
                            register their vehicle online. It was also necessary to speed up the security officer’s
                            search of vehicle information. This inventory has an audit script running in the background
                            for security purposes. An image of the student license is saved in the database with the
                            car registration paperwork.
                        </p>
                    </div>
                    <!-- End .project-info -->
                </div>
                <!-- End .project -->

                <!-- Button trigger modal -->
                <a type="button" style="text-align: right;" data-toggle="modal" data-target="#modalInventory">
                    View Additional Details
                </a>

                <!-- Modal -->
                <div class="modal fade" id="modalInventory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Inventory Management System</h4>
                      </div>
                      <div class="modal-body">
                          <div id="carousel-example-generic2" class="carousel slide" data-ride="carouse2">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                              <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
                              <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
                              <li data-target="#carousel-example-generic2" data-slide-to="3"></li>
                              <li data-target="#carousel-example-generic2" data-slide-to="4"></li>
                              <li data-target="#carousel-example-generic2" data-slide-to="5"></li>
                              <li data-target="#carousel-example-generic2" data-slide-to="6"></li>
                              <li data-target="#carousel-example-generic2" data-slide-to="7"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                              <div class="item active">
                                <img class="img-responsive center-block" src="images/inventory/inventario1.png" alt="...">
                                <div class="carousel-caption">
                                    <!--<h3>Caption Text</h3>-->
                                </div>
                              </div>
                              <div class="item">
                                <img class="img-responsive center-block" src="images/inventory/inventario2.png" alt="...">
                                <div class="carousel-caption">
                                    <!--<h3>Caption Text</h3>-->
                                </div>
                              </div>
                              <div class="item">
                                <img class="img-responsive center-block" src="images/inventory/inventario3.png" alt="...">
                                <div class="carousel-caption">
                                    <!--<h3>Caption Text</h3>-->
                                </div>
                              </div>
                              <div class="item">
                                <img class="img-responsive center-block" src="images/inventory/inventario4.png" alt="...">
                                <div class="carousel-caption">
                                    <!--<h3>Caption Text</h3>-->
                                </div>
                              </div>
                              <div class="item">
                                <img class="img-responsive center-block" src="images/inventory/inventario5.png" alt="...">
                                <div class="carousel-caption">
                                    <!--<h3>Caption Text</h3>-->
                                </div>
                              </div>
                              <div class="item">
                                <img class="img-responsive center-block" src="images/inventory/inventario6.png" alt="...">
                                <div class="carousel-caption">
                                    <!--<h3>Caption Text</h3>-->
                                </div>
                              </div>
                              <div class="item">
                                <img class="img-responsive center-block" src="images/inventory/inventario7.png" alt="...">
                                <div class="carousel-caption">
                                    <!--<h3>Caption Text</h3>-->
                                </div>
                              </div>
                              <div class="item">
                                <img class="img-responsive center-block" src="images/inventory/inventario8.png" alt="...">
                                <div class="carousel-caption">
                                    <!--<h3>Caption Text</h3>-->
                                </div>
                              </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                          </div> <!-- Carousel -->
                          <!--
                          <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                          -->
                          <h3>Description</h3>
                          <p>
                              Custom inventory manage system, manages equipment or
                              electronic component so that their location and who is managing
                              the inventory. You can print out a PDF of all the equipment
                              in a specific location or all the equipment that one user.
                          </p>

                          <h3>Platform</h3>
                          <p>
                              <ul class="list-unstyled">
                                  <li>Linux Server</li>
                                  <li>Yii Framework</li>
                                  <li>Sublime Text 3</li>
                                  <li>SqlYog</li>
                              </ul>
                          </p>

                          <h3>Responsibility’s</h3>
                          <p>
                              <ul class="list-unstyled">
                                  <li>Database ERD (mysql)</li>
                                  <li>Software Developer</li>
                                  <li>Documentation</li>
                                  <li>Manual</li>
                                  <li>Production Installation</li>
                                  <li>How to use workshop</li>
                              </ul>
                          </p>
                          <ul class="list-inline item-details">
                              <li>Client:
                                  <strong><a href="#">UPRA-CTI</a>
                                  </strong>
                              </li>
                              <li>Date:
                                  <strong><a href="#">January 2015</a>
                                  </strong>
                              </li>
                              <li>Service:
                                  <strong><a href="#">Web Development</a>
                                  </strong>
                              </li>
                          </ul>
                          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="project shadow-large">
                    <div class="project-image">
                        <img width='300px'src="images/inventory/inventario1.png" />
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>Invenroty Management System</h3>
                        <p>
                            Custom inventory manage system, manages equipment or electronic component their location and who
                            is managing the inventory. You can print out a PDF of all the equipment in a specific location
                            or all the equipment that one user.
                        </p>
                    </div>
                    <!-- End .project-info -->
                </div>
                <!-- End .project -->

                <!-- Button trigger modal -->
                <a type="button" style="text-align: right;" data-toggle="modal" data-target="#modalInvestigation">
                    View Additional Details
                </a>

                <!-- Modal -->
                <div class="modal fade" id="modalInvestigation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Investigation Registry System</h4>
                      </div>
                      <div class="modal-body">
                          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                              <div class="item active">
                                <img class="img-responsive center-block" src="images/cic/cic1.png" alt="...">
                                <div class="carousel-caption">
                                    <!--<h3>Caption Text</h3>-->
                                </div>
                              </div>
                              <div class="item">
                                <img class="img-responsive center-block" src="images/cic/cic2.png" alt="...">
                                <div class="carousel-caption">
                                    <!--<h3>Caption Text</h3>-->
                                </div>
                              </div>
                              <div class="item">
                                <img class="img-responsive center-block" src="images/cic/cic3.png" alt="...">
                                <div class="carousel-caption">
                                    <!--<h3>Caption Text</h3>-->
                                </div>
                              </div>
                              <div class="item">
                                <img class="img-responsive center-block" src="images/cic/cic4.png" alt="...">
                                <div class="carousel-caption">
                                    <!--<h3>Caption Text</h3>-->
                                </div>
                              </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                          </div> <!-- Carousel -->
                          <!--
                          <img src="images/cic/cic1.png" class="img-responsive img-centered" alt="">
                          -->
                          <h3>Description</h3>
                          <p>
                              Student/Professor investigation registry, Student would submit an investigation
                              topic with other data related to their investigation proposal and these credentials
                              were sent to their mentors as an email where they were prompted 2 buttons so they
                              could accept the student’s proposal or deny them.
                          </p>

                          <h3>Platform</h3>
                          <p>
                              <ul class="list-unstyled">
                                  <li>Linux Server</li>
                                  <li>Yii Framework</li>
                                  <li>Sublime Text 3</li>
                                  <li>SqlYog</li>
                              </ul>
                          </p>

                          <h3>Responsibility’s</h3>
                          <p>
                              <ul class="list-unstyled">
                                  <li>Database ERD (mysql)</li>
                                  <li>Software Developer</li>
                                  <li>Documentation</li>
                                  <li>Manual</li>
                                  <li>Production Installation</li>
                              </ul>
                          </p>

                          <ul class="list-inline item-details">
                              <li>Client:
                                  <strong><a href="#">UPRA-CIC</a>
                                  </strong>
                              </li>
                              <li>Date:
                                  <strong><a href="#">April 2015</a>
                                  </strong>
                              </li>
                              <li>Service:
                                  <strong><a href="#">Web Development</a>
                                  </strong>
                              </li>
                          </ul>
                          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="project shadow-large">
                    <div class="project-image">
                        <img width='300px'src="images/cic/cic1.png" />
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>Investigation Registry System</h3>
                        <p>
                            Student/Professor investigation registry, Student would submit an investigation
                            topic with other data related to their investigation proposal and these credentials
                            were sent to their mentors as an email where they were prompted 2 buttons so they
                            could accept the student’s proposal or deny them.
                        </p>
                    </div>
                    <!-- End .project-info -->
                </div>

                <div class="project shadow-large">
                    <div class="project-image">
                        <img style='padding-left:50px;' width='250px'src="images/next.png" />
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>UPR Student Finance System</h3>
                        <p>
                            University of Puerto Rico student finance system, manages all transactions
                            issued to a student (Credit, Debit). Upon processing the batch that contains
                            ll transactions for a given purpose a corresponding NACHA (National Automated
                            Clearinghouse Association) will be generated.
                        </p>
                    </div>
                    <!-- End .project-info -->
                </div>

                <div class="project shadow-large">
                    <div class="project-image">
                        <img style='padding-left:50px;' width='250px'src="images/next.png" />
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>IRS Form 1098T Generator</h3>
                        <p>
                            Generates IRS form 1098T, gathers students financial data (using student finance API)
                            to compute and generate the form 1098T.
                        </p>
                    </div>
                    <!-- End .project-info -->
                </div>
            </div>
        </div>
    </div>
    <!-- End #projects -->

    <div id="skills">
        <h2 class="heading">Skills</h2>
        <ul>
            <li>PHP</li>
            <li>JavaScript</li>
            <li>Python</li>
            <li>Java</li>
            <li>C++</li>
            <li>JQuery</li>
            <li>SQL</li>
            <li>MVC Pattern</li>
            <li>CSS</li>
            <li>Database Design (ERD)</li>
            <li>OOP</li>
            <li>Yii Framework</li>
            <li>AJAX</li>
            <li>Linux</li>
            <li>Github</li>
            <li>Docker</li>
            <li>Terminal</li>
            <li>SVN</li>
            <li>Version Control Repository</li>
            <li>Bootstrap</li>
            <li>Teamwork</li>
            <li>Leadership</li>
            <li>Spanish</li>
            <li>Windows</li>
            <li>Programming</li>
            <li>Computer Science</li>
        </ul>

        <div style='width:45%;margin:0 auto;'>
            <canvas id="myChart" width="200" height="200"></canvas>
        </div>

        <script>
        var data = {
            labels: ["Motivation", "GitHub", "PHP", "MVC Pattern", "OOP", "JQuery", "Javascript", "Python", "Java", "SQL", "Docker", "HTML", "C++"],
            datasets: [
                {
                    label: "My Second dataset",
                    backgroundColor: "rgba(255,99,132,0.2)",
                    borderColor: "rgba(255,99,132,1)",
                    pointBackgroundColor: "rgba(255,99,132,1)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(255,99,132,1)",
                    data: [100, 65, 90, 75, 85, 70, 75, 65, 65, 80, 60, 85, 70]
                }
            ]
            };

            var ctx = document.getElementById("myChart");

            var myRadarChart = new Chart(ctx, {
                type: 'radar',
                data: data,
                options: {
                    scale: {
                        responsive: true,
                        ticks: {min: 0, max: 100},
                        lineArc: false,
                        pointLabels: {fontSize: 14},
                    },
                    legend: {display: false},
                }
            });
        </script>
    </div>
    <!-- End #skills -->


    <div id="contact">
        <h2>Get in Touch</h2>
        <div id="contact-form">
            <form method="POST" action="https://formspree.io/delgado.jose.pr@gmail.com">
                <input type="hidden" name="_subject" value="Contact JOSE-DELGADO.COM" />
                <input type="email" name="_replyto" placeholder="Your email" required>
                <textarea name="message" placeholder="Your message" required></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
        <!-- End #contact-form -->
    </div>
    <!-- End #contact -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 copyright">
                    <p>
                        Copyright &copy; <?php echo date('Y'); ?> JOSE-DELGADO.COM
                    </p>
                </div>
                <div class="col-sm-2 top">
                    <span id="to-top">
                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="col-sm-5 social">
                    <ul>
                        <li>
                            <a href="https://www.linkedin.com/in/jose-delgado-ruiz-01422541" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://github.com/pepillo" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/JoseDelgadoPR" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/scripts.min.js"></script>
</body>

</html>
