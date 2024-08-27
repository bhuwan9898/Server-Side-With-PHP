<?php
$name = "Bhuwan Bhandari";
$jobTitle = "Web Developer";
$summary = "An international student at Northern Kentucky University doing bachelors in Computere Science. Motivated and detail-oriented web developer with a strong foundation in HTML, CSS, JavaScript, and Node.js. Adept at building responsive and user-friendly web applications, with a recent focus on mastering React. Actively engaged in a research project for the past four months, demonstrating a commitment to continuous learning and practical application of new technologies. Eager to leverage technical skills and collaborative experience to contribute effectively to innovative web development projects.";
$contacts = array(
  "bhandarib1@nku.edu",
  8597863719,
  "linkedin.com/in/bhuwan9898",
  "github.com/bhuwan9898"
);
$research = array(
  "researchTitle" => "Research Assistant",
  "company" => "College of Informatics, NKU",
  "date" => "May 2024 - Present",
  "description" => "Developed and implemented dynamic heatmaps and fixation-maps using HTML Canvas and JavaScript, overlaying these visualizations over manuscript images. Designed and built the front-end UI for a web application, employing HTML, CSS, and JavaScript to create a user-friendly interface for eye specialists.",
  "achievements" => "Gained experience in collaborating with domain experts to translate their requirements into effective technical solutions, improving both efficiency and user experience."
);
$tourismWebsite = array(
  "projectTitle" => "Co-Founder and Developer",
  "project" => "Tourism Website",
  "date" => "Jan 2024 - Present",
  "description" => "Developed a full-stack web application with HTML, CSS, JavaScript, Node.js, and MongoDB, enabling users to choose travel destinations based on peer reviews. Created a comprehensive rating system for popular places, helping users make informed decisions. Implemented secure user authentication using JSON Web Tokens, managing login/signup processes and safeguarding sensitive data",
  "achievements" => "Helped the users to navigate the places 13% faster by implementing the review system."
);
$budgetBuddyApp = array(
  "projectTitle" => "Co-Founder and Developer",
  "project" => "NKU Fidelity Hackathon",
  "date" => "April 2024 ",
  "description" => "Developed Budget Buddy app, a dynamic financial education platform, during a 24-hour hackathon by Fidelity Investments, securing third place. The platform features randomized quizzes on financial topics and real-time feedback using GPT-4 integration. This project showcased expertise in web application development and prompt engineering, enhancing users' financial literacy through interactive learning",
  "achievements" => "Helped the users to understand the concepts of finance and economy ."
);
$skills = array("React", "HTML", "CSS", "JavaScript", "Node JS", "Bootstrap", "Tailwind CSS", "Git", "Unit Testing");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bhuwan's Resume</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Your name's resume" />
    <meta name="author" content="Your name" />
    <link rel="shortcut icon" href="favicon.ico" />

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900"
      rel="stylesheet"
    />
    <!-- FontAwesome JS-->
    <script defer src="assets/fontawesome/js/all.min.js"></script>
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css" />
  </head>

  <body>
    <article class="resume-wrapper text-center position-relative">
      <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
        <header class="resume-header pt-4 pt-md-0">
          <div class="row">
            <div
              class="col-block col-md-auto resume-picture-holder text-center text-md-start"
            >
              <img class="picture" src="assets/images/profile.jpeg" alt="" />
            </div>
            <!--//col-->
            <div class="col">
              <div
                class="row p-4 justify-content-center justify-content-md-between"
              >
                <div class="primary-info col-auto">
                  <h1
                    class="name mt-0 mb-1 text-white text-uppercase text-uppercase"
                  >
                    <?php
                  echo $name
                    ?>
                  </h1>
                  <div class="title mb-3">
                    <?php
                  echo $jobTitle
                    ?>
                  </div>
                  <ul class="list-unstyled">
                    <li class="mb-2">
                      <a class="text-link" href="#"
                        ><i
                          class="far fa-envelope fa-fw me-2"
                          data-fa-transform="grow-3"
                        ></i>
                        <?php
                      echo $contacts[0]
                        ?>
                      </a>
                    </li>
                    <li>
                      <a class="text-link" href="#"
                        ><i
                          class="fas fa-mobile-alt fa-fw me-2"
                          data-fa-transform="grow-6"
                        ></i
                        ><?php
                        echo $contacts[1]
                          ?>
                      </a>
                    </li>
                  </ul>
                </div>
                <!--//primary-info-->
                <div class="secondary-info col-auto mt-2">
                  <ul class="resume-social list-unstyled">
                    <li class="mb-3">
                      <a class="text-link" href="#"
                        ><span class="fa-container text-center me-2"
                          ><i class="fab fa-linkedin-in fa-fw"></i
                        ></span>
                        <?php
                      echo $contacts[2]
                        ?>
                      </a>
                    </li>
                    <li class="mb-3">
                      <a class="text-link" href="#"
                        ><span class="fa-container text-center me-2"
                          ><i class="fab fa-github-alt fa-fw"></i></span
                        ><?php
                          echo $contacts[3]
                            ?>
                      </a>
                    </li>
                    <li>
                      <a class="text-link" href="#"
                        ><span class="fa-container text-center me-2"
                          ><i class="fas fa-globe"></i></span
                        >yourwebsite.com</a
                      >
                    </li>
                  </ul>
                </div>
                <!--//secondary-info-->
              </div>
              <!--//row-->
            </div>
            <!--//col-->
          </div>
          <!--//row-->
        </header>
        <div class="resume-body p-5">
          <section class="resume-section summary-section mb-5">
            <h2
              class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"
            >
              Summary
            </h2>
            <div class="resume-section-content">
              <p class="mb-0">
                <?php
              echo $summary
                ?>
              </p>
            </div>
          </section>
          <!--//summary-section-->
          <div class="row">
            <div class="col-lg-9">
              <section class="resume-section experience-section mb-5">
                <h2
                  class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"
                >
                  Work Experience
                </h2>
                <div class="resume-section-content">
                  <div class="resume-timeline position-relative">
                    <article
                      class="resume-timeline-item position-relative pb-5"
                    >
                      <div class="resume-timeline-item-header mb-2">
                        <div class="d-flex flex-column flex-md-row">
                          <h3
                            class="resume-position-title font-weight-bold mb-1"
                          >
                            <?php
                          echo $research["researchTitle"]
                            ?>
                          </h3>
                          <div class="resume-company-name ms-auto">
                            <?php
                          echo $research["company"]
                            ?>
                          </div>
                        </div>
                        <!--//row-->
                        <div class="resume-position-time">
                          <?php
                        echo $research["date"]
                          ?>
                        </div>
                      </div>
                      <!--//resume-timeline-item-header-->
                      <div class="resume-timeline-item-desc">
                        <p>
                          <?php
                        echo $research["description"]
                          ?>
                        </p>
                        <h4
                          class="resume-timeline-item-desc-heading font-weight-bold"
                        >
                          Achievements:
                        </h4>
                        <p>
                          <?php
                        echo $research["achievements"]
                          ?>
                        </p>
                        <ul>
                          <li>
                            This innovation improved the accuracy of visual
                            analysis of subject focus areas by 30%,
                            significantly enhancing the study of eye behavior.
                          </li>
                          <li>
                            The application facilitated the visual analysis of
                            eye movement data collected from Tobii eye trackers,
                            resulting in a 40% increase in data analysis
                            efficiency.
                          </li>
                        </ul>
                        <h4
                          class="resume-timeline-item-desc-heading font-weight-bold"
                        >
                          Technologies used:
                        </h4>
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <span class="badge bg-secondary badge-pill"
                              >HTML</span
                            >
                          </li>
                          <li class="list-inline-item">
                            <span class="badge bg-secondary badge-pill"
                              >CSS</span
                            >
                          </li>
                          <li class="list-inline-item">
                            <span class="badge bg-secondary badge-pill"
                              >JavaScript</span
                            >
                          </li>
                          <li class="list-inline-item">
                            <span class="badge bg-secondary badge-pill"
                              >HTML Canvas</span
                            >
                          </li>
                        </ul>
                      </div>
                      <!--//resume-timeline-item-desc-->
                    </article>
                    <!--//resume-timeline-item-->

                    <article
                      class="resume-timeline-item position-relative pb-5"
                    >
                      <div class="resume-timeline-item-header mb-2">
                        <div class="d-flex flex-column flex-md-row">
                          <h3
                            class="resume-position-title font-weight-bold mb-1"
                          >
                            <?php
                          echo $tourismWebsite["projectTitle"]
                            ?>
                          </h3>
                          <div class="resume-company-name ms-auto">
                            <?php
                          echo $tourismWebsite["project"]
                            ?>
                          </div>
                        </div>
                        <!--//row-->
                        <div class="resume-position-time">
                          <?php
                        echo $tourismWebsite["date"]
                          ?>
                        </div>
                      </div>
                      <!--//resume-timeline-item-header-->
                      <div class="resume-timeline-item-desc">
                        <p>
                          <?php
                        echo $tourismWebsite["description"]
                          ?>
                        </p>

                        <h4
                          class="resume-timeline-item-desc-heading font-weight-bold"
                        >
                          Achievements
                        </h4>
                        <p>
                          <?php
                        echo $tourismWebsite["achievements"]
                          ?>
                        </p>
                        <h4
                          class="resume-timeline-item-desc-heading font-weight-bold"
                        >
                          Technologies used:
                        </h4>
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <span class="badge bg-secondary badge-pill"
                              >HTML</span
                            >
                          </li>
                          <li class="list-inline-item">
                            <span class="badge bg-secondary badge-pill"
                              >CSS</span
                            >
                          </li>
                          <li class="list-inline-item">
                            <span class="badge bg-secondary badge-pill"
                              >Java Script</span
                            >
                          </li>
                          <li class="list-inline-item">
                            <span class="badge bg-secondary badge-pill"
                              >Node JS</span
                            >
                          </li>
                          <li class="list-inline-item">
                            <span class="badge bg-secondary badge-pill"
                              >Express JS</span
                            >
                          </li>
                          <li class="list-inline-item">
                            <span class="badge bg-secondary badge-pill"
                              >MongoDB</span
                            >
                          </li>
                        </ul>
                      </div>
                      <!--//resume-timeline-item-desc-->
                    </article>
                    <!--//resume-timeline-item-->

                    <article
                      class="resume-timeline-item position-relative pb-5"
                    >
                      <div class="resume-timeline-item-header mb-2">
                        <div class="d-flex flex-column flex-md-row">
                          <h3
                            class="resume-position-title font-weight-bold mb-1"
                          >
                            <?php
                          echo $budgetBuddyApp["projectTitle"]
                            ?>
                          </h3>
                          <div class="resume-company-name ms-auto">
                            <?php
                          echo $budgetBuddyApp["project"]
                            ?>
                          </div>
                        </div>
                        <!--//row-->
                        <div class="resume-position-time">
                          <?php
                        echo $budgetBuddyApp["date"]
                          ?>
                        </div>
                      </div>
                      <!--//resume-timeline-item-header-->
                      <div class="resume-timeline-item-desc">
                        <p>
                          <?php
                        echo $budgetBuddyApp["description"]
                          ?>
                        </p>
                        <p>
                          <?php
                        echo $budgetBuddyApp["achievements"]
                          ?>
                        </p>
                        <h4
                          class="resume-timeline-item-desc-heading font-weight-bold"
                        >
                          Technologies used:
                        </h4>
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <span class="badge bg-secondary badge-pill"
                              >HTML</span
                            >
                          </li>
                          <li class="list-inline-item">
                            <span class="badge bg-secondary badge-pill"
                              >JavaScript</span
                            >
                          </li>
                          <li class="list-inline-item">
                            <span class="badge bg-secondary badge-pill"
                              >Node.js</span
                            >
                          </li>
                          <li class="list-inline-item">
                            <span class="badge bg-secondary badge-pill"
                              >Prompt Engineering</span
                            >
                          </li>
                          <li class="list-inline-item">
                            <span class="badge bg-secondary badge-pill"
                              >Bootstrap</span
                            >
                          </li>
                        </ul>
                      </div>
                      <!--//resume-timeline-item-desc-->
                    </article>
                    <!--//resume-timeline-item-->
                  </div>
                  <!--//resume-timeline-->
                </div>
              </section>
              <!--//projects-section-->
            </div>
            <div class="col-lg-3">
              <section class="resume-section skills-section mb-5">
                <h2
                  class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"
                >
                  Skills &amp; Tools
                </h2>
                <div class="resume-section-content">
                  <div class="resume-skill-item">
                    <ul class="list-unstyled mb-4">
                      <li class="mb-2">
                        <div class="resume-skill-name">
                          <?php
                        echo $skills[0]
                          ?>
                        </div>
                        <div class="progress resume-progress">
                          <div
                            class="progress-bar theme-progress-bar-dark"
                            role="progressbar"
                            style="width: 80%"
                            aria-valuenow="25"
                            aria-valuemin="0"
                            aria-valuemax="100"
                          ></div>
                        </div>
                      </li>
                      <li class="mb-2">
                        <div class="resume-skill-name">
                          <?php
                        echo $skills[1]
                          ?>
                        </div>
                        <div class="progress resume-progress">
                          <div
                            class="progress-bar theme-progress-bar-dark"
                            role="progressbar"
                            style="width: 94%"
                            aria-valuenow="25"
                            aria-valuemin="0"
                            aria-valuemax="100"
                          ></div>
                        </div>
                      </li>
                      <li class="mb-2">
                        <div class="resume-skill-name">
                          <?php
                        echo $skills[2]
                          ?>
                        </div>
                        <div class="progress resume-progress">
                          <div
                            class="progress-bar theme-progress-bar-dark"
                            role="progressbar"
                            style="width: 96%"
                            aria-valuenow="25"
                            aria-valuemin="0"
                            aria-valuemax="100"
                          ></div>
                        </div>
                      </li>

                      <li class="mb-2">
                        <div class="resume-skill-name">
                          <?php
                        echo $skills[3]
                          ?>
                        </div>
                        <div class="progress resume-progress">
                          <div
                            class="progress-bar theme-progress-bar-dark"
                            role="progressbar"
                            style="width: 92%"
                            aria-valuenow="25"
                            aria-valuemin="0"
                            aria-valuemax="100"
                          ></div>
                        </div>
                      </li>
                      <li class="mb-2">
                        <div class="resume-skill-name">
                          <?php
                        echo $skills[4]
                          ?>
                        </div>
                        <div class="progress resume-progress">
                          <div
                            class="progress-bar theme-progress-bar-dark"
                            role="progressbar"
                            style="width: 96%"
                            aria-valuenow="25"
                            aria-valuemin="0"
                            aria-valuemax="100"
                          ></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!--//resume-skill-item-->
                  <div class="resume-skill-item">
                    <h4 class="resume-skills-cat font-weight-bold">Others</h4>
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <span class="badge badge-light"
                          ><?php
                      echo $skills[5]
                        ?></span
                        >
                      </li>
                      <li class="list-inline-item">
                        <span class="badge badge-light"
                          ><?php
                      echo $skills[6]
                        ?></span
                        >
                      </li>
                      <li class="list-inline-item">
                        <span class="badge badge-light">
                          <?php
                        echo $skills[7]
                          ?>
                        </span>
                      </li>
                    </ul>
                  </div>
                  <!--//resume-skill-item-->
                </div>
                <!--resume-section-content-->
              </section>
              <!--//skills-section-->
              <section class="resume-section education-section mb-5">
                <h2
                  class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"
                >
                  Education
                </h2>
                <div class="resume-section-content">
                  <ul class="list-unstyled">
                    <li class="mb-2">
                      <div class="resume-degree font-weight-bold">
                        <?php
                      echo "BSC in Computer Science"
                        ?>
                      </div>
                      <div class="resume-degree-org">
                        <?php
                      echo "Northern Kentucky University"
                        ?>
                      </div>
                      <div class="resume-degree-time">
                        <?php
                      echo "Jan 2022- Present"
                        ?>
                      </div>
                    </li>
                  </ul>
                </div>
              </section>
              <!--//education-section-->
              <section class="resume-section reference-section mb-5">
                <h2
                  class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"
                >
                  Awards
                </h2>
                <div class="resume-section-content">
                  <ul class="list-unstyled resume-awards-list">
                    <li class="mb-2 ps-4 position-relative">
                      <i
                        class="resume-award-icon fas fa-trophy position-absolute"
                        data-fa-transform="shrink-2"
                      ></i>
                      <div class="resume-award-name">Award Name Lorem</div>
                      <div class="resume-award-desc">
                        Award desc goes here, ultricies nec, pellentesque eu,
                        pretium quis, sem. Nulla consequat massa quis enim.
                        Donec pede justo.
                      </div>
                    </li>
                    <li class="mb-0 ps-4 position-relative">
                      <i
                        class="resume-award-icon fas fa-trophy position-absolute"
                        data-fa-transform="shrink-2"
                      ></i>
                      <div class="resume-award-name">Award Name Ipsum</div>
                      <div class="resume-award-desc">
                        Award desc goes here, ultricies nec, pellentesque.
                      </div>
                    </li>
                  </ul>
                </div>
              </section>
              <!--//interests-section-->
              <section class="resume-section language-section mb-5">
                <h2
                  class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"
                >
                  Languages
                </h2>
                <div class="resume-section-content">
                  <ul class="list-unstyled resume-lang-list">
                    <li class="mb-2">
                      <span class="resume-lang-name font-weight-bold"
                        >English</span
                      >
                      <small class="text-muted font-weight-normal"
                        >(Native)</small
                      >
                    </li>
                    <li class="mb-2 align-middle">
                      <span class="resume-lang-name font-weight-bold"
                        >French</span
                      >
                      <small class="text-muted font-weight-normal"
                        >(Professional)</small
                      >
                    </li>
                    <li>
                      <span class="resume-lang-name font-weight-bold"
                        >Spanish</span
                      >
                      <small class="text-muted font-weight-normal"
                        >(Professional)</small
                      >
                    </li>
                  </ul>
                </div>
              </section>
              <!--//language-section-->
              <section class="resume-section interests-section mb-5">
                <h2
                  class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"
                >
                  Interests
                </h2>
                <div class="resume-section-content">
                  <ul class="list-unstyled">
                    <li class="mb-1">Climbing</li>
                    <li class="mb-1">Snowboarding</li>
                    <li class="mb-1">Cooking</li>
                  </ul>
                </div>
              </section>
              <!--//interests-section-->
            </div>
          </div>
          <!--//row-->
          <section class="resume-section experience-section mb-5">
            <h2
              class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"
            >
              Projects
            </h2>
            <div class="row mt-4">
              <div class="col-md-4">
                <div class="card">
                  <img
                    src="path-to-project-image1.jpg"
                    alt="Project 1"
                    class="card-img-top"
                  />
                  <div class="card-body">
                    <h5 class="card-title">Project 1</h5>
                    <p class="card-text">Brief description of Project 1.</p>
                    <a href="btn btn-outline-primary" href="#">Go to link</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img
                    src="path-to-project-image2.jpg"
                    alt="Project 2"
                    class="card-img-top"
                  />
                  <div class="card-body">
                    <h5 class="card-title">Project 2</h5>
                    <p class="card-text">Brief description of Project 2.</p>
                    <a href="btn btn-outline-primary" href="#">Go to link</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img
                    src="path-to-project-image3.jpg"
                    alt="Project 3"
                    class="card-img-top"
                  />
                  <div class="card-body">
                    <h5 class="card-title">Project 3</h5>
                    <p class="card-text">Brief description of Project 3.</p>
                    <a href="btn btn-outline-primary" href="#">Go to link</a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--//projects-section-->
        </div>
        <!--//resume-body-->
      </div>
    </article>

    <footer class="footer text-center pt-2 pb-5">
      <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
      <small class="copyright"
        >Designed with <span class="sr-only">love</span
        ><i class="fas fa-heart"></i> by Your name</small
      >
    </footer>
  </body>
</html>
