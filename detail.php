<?php
// INSERT DATA HERE.
$teamMembers = [
'Joey' => [
		'name' => 'Joey Ampfer',
		'role' => 'Full-Stack Developer',
		'email' => 'joseph.ampfer@gmail.com',
		'phone' => '+1 (859)-638-7358',
		'linkedin' => 'linkedin.com/in/joseph-ampfer',
		'github' => 'github.com/joseph-ampfer',
		'website' => 'joseph-ampfer.github.io',
		'headshot' => 'assets/images/joey.jpg',
		'summary' => "I graduated with a Bachelor’s degree in Cellular Molecular Biology from Northern Kentucky University and briefly attended medical school at UK College of Medicine, where I founded the AI in Medicine Interest Group. I'm currently pursuing an Applied Software Engineering degree at NKU. My professional experience spans research labs, medical technology, and education, along with developing mobile apps like Touch Grass Royale—a tool to reduce screen time using React Native, Docker, and Cloud technologies. Additionally, I authored a children's book on bacteria and antibiotic resistance.",
		'workExperience' => [
			[
				'title' => 'Founder, AI in Medicine Interest Group',
				'location' => 'UK College of Medicine',
				'time' => '2023 - 2024',
				'description' => 'Initiated and lead a professional group aimed at exploring the integration of artificial intelligence in medical practices and research, organized events for medical professionals to discuss and explore the implications of AI in healthcare.',
				'achievements' => null,
			],
			[
				'title' => 'Laboratory Technologist',
				'location' => 'Cincinnati Children\'s Hospital',
				'time' => '2021 - 2022',
				'description' => 'As a Laboratory Technologist, I specialized in conducting complex laboratory tests and analyses across a variety of medical disciplines, utilizing advanced equipment and rigorous methodologies. I maintained a strong commitment to precision and operational efficiency in a fast-paced, high-stakes environment.',
				'achievements' => [
					'description' => '',
					'bullets' => [
						'Enhanced Lab Efficiency: Increased testing turnaround by 15% through process optimizations, enhancing department throughput.',
						'Advanced Diagnostic Testing: Executed intricate diagnostic procedures to support critical clinical decisions.',
						'Quality and Accuracy: Upheld high standards of test accuracy and detail, ensuring reliable patient diagnostics.'
					],
					'technologies' => null
				],
			],
			[
				'title' => 'Standardized Patient',
				'location' => 'UK College of Medicine',
				'time' => '2019 - 2022',
				'description' => 'Performed in simulated clinical encounters, memorizing and presenting detailed case scripts that included various emotions, behaviors, and symptoms to enhance the learning experiences of medical students. Delivered case information consistently and provided standardized, constructive feedback to assess and improve student diagnostic skills.',
				'achievements' => null
			],
			[
				'title' => 'Research Assistant',
				'location' => 'Northern Kentucky University',
				'time' => '2020 - 2021',
				'description' => 'Engaged in pioneering research, focusing on the genetic responses of S. cerevisiae (yeast) to the breast cancer drug Tamoxifen. Analyzed the interaction of Tamoxifen with S-Adenosylmethionine (SAM), crucial for understanding drug mechanisms and efficacy.',
				'achievements' => [
					'description' => 'Praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.',
					'bullets' => [
						'Publication: Co-authored a study published in a peer-reviewed journal, which is recognized for advancing knowledge in molecular genetics.',
						'Scientific Contribution: Enhanced the scientific community\'s understanding of drug interactions, potentially impacting cancer treatment protocols.',
						'Innovative Research: Led experiments on gene behavior in yeast, contributing to the understanding of pharmacogenomics and drug efficacy.'
					],
					'technologies' => null
				],
			],
			[
				'title' => 'Supplemental Instruction Leader',
				'location' => 'Northern Kentucky University',
				'time' => '2020 - 2021',
				'description' => 'Directed supplemental instruction sessions for a diverse group of fifty students, adapting lessons and curriculum to enhance understanding and engagement. Employed peer-assisted learning and collaborative strategies to optimize academic outcomes. Led and mentored other SI leaders in executing effective exam reviews.',
				'achievements' => null
			]
		],
		'skills' => [
			[
				'title' => 'React Native',
				'percentage' => 90,
			],
			[
				'title' => 'JavaScript',
				'percentage' => 90
			],
			[
				'title' => 'Python',
				'percentage' => 92
			],
			[
				'title' => 'SQL',
				'percentage' => '95'
			],
			[
				'title' => 'PHP',
				'percentage' => 84
			]
		],
		'others' => ['Google Cloud Run, Git, Firebase, Docker, Flask, HTML & CSS, Bootstrap, TailwindCSS, Expo, Google Cloud SQL, Java'],
		'education' => [
			[
				'title' => 'BSc in Applied Software Engineering',
				'location' => 'Northern Kentucky University',
				'time' => '2024 - 2026'
			],
			[
				'title' => 'BSc in Cellular Molecular Biology',
				'location' => 'Northern Kentucky University',
				'time' => '2017 - 2021'
			]
		],
		'awards' => [
			[
				'title' => 'First-Year Achievement Award',
				'description' => 'UK College of Medicine distinguishing award goes to the top 1% of students during the first year of medical school.'
			],
			[
				'title' => 'Summa Cum Laude',
				'description' => 'Northern Kentucky University honors.'
			]
		],
		'languages' => [
			'English' => 'Native'
		],
		'interests' => ['Golf', 'Snowboarding', 'Tennis', 'Volleyball'],
		'projects' => [
			[
				'title' => 'Mobile Finance App',
				'description' => 'Developed a cross-platform mobile app for virtual stock trading, using React Native/Expo for broad compatibility and Flask for backend services.',
				'picture' => 'assets/images/AMPFERFinanceScreenshot.png',
				'link' => 'https://github.com/joseph-ampfer/AmpferFinance'
			],
			[
				'title' => 'Personal Website',
				'description' => 'Engineered a responsive portfolio website highlighting my professional journey and technical skills, using HTML, CSS, Bootstrap, and JavaScript.',
				'picture' => 'assets/images/websiteSnip.JPG',
				'link' => 'https://joseph-ampfer.github.io/'
			],
			[
				'title' => 'Touch Grass Royale',
				'description' => 'Designed and implemented a mobile app to challenge friends to reduce screen time, featuring a Dockerized API and integration with Google Cloud and Firebase.',
				'picture' => 'assets/images/instagramTGR.png',
				'link' => 'https://play.google.com/apps/testing/com.jampfer.touch_grass'
			]
		]
	],
	'Bhuwan' => [
		'name' => 'Bhuwan Bhandari',
		'role' => 'Web Developer',
		'email' => 'bhandarib1@nku.edu',
		'phone' => '+1 (859)-786-3719',
		'linkedin' => 'linkedin.com/in/bhuwan9898',
		'github' => 'github.com/bhuwan9898',
		'website' => '',
		'headshot' => 'assets/images/bhuwan.jpeg',
		'summary' => "An international student at Northern Kentucky University doing bachelors in Computere Science. Motivated and detail-oriented web developer with a strong foundation in HTML, CSS, JavaScript, and Node.js. Adept at building responsive and user-friendly web applications, with a recent focus on mastering React. Actively engaged in a research project for the past four months, demonstrating a commitment to continuous learning and practical application of new technologies. Eager to leverage technical skills and collaborative experience to contribute effectively to innovative web development projects.",
		'workExperience' => [
			[
				'title' => 'Research Assistant',
				'location' => 'Northern Kentucly University',
				'time' => 'May 2024 - Present',
				'description' => "Developed sophisticated heatmaps using HTML Canvas and JavaScript to visualize eye-tracking data from 26 subjects, enabling clear identification of focus areas in manuscript reading patterns and enhancing the research team's ability to analyze user behavior.",
				'achievements' => null,
			],
			[
				'title' => 'MERN Stack Developer ',
				'location' => 'ACAD Link (University Collaboration Platform)',
				'time' => 'May 2024- Present',
				'description' => 'Developed a web app for students around campus who can collab with other students.',
				'achievements' => [
					'description' => '',
					'bullets' => [
						'Spearheaded the development of key user interfaces using React and Tailwind CSS, including the home page, sign-in page, user profiles, and an infinite scrolling feed. ',
						'Implemented ReactRouter v6.4 for seamless navigation, demonstrating proficiency in modern front-end technologies and user experience design',
						'Engineered robust user authentication systems by integrating Google, Microsoft, and LinkedIn OAuth protocols, enhancing security and user accessibility while showcasing skills in third-party API integration and secure login flows.'
					],
					'technologies' => null
				],
			],
			[
				'title' => 'Full Stack Developer',
				'location' => 'Tourism Recommendation Website',
				'time' => 'Spring 2024',
				'description' => 'Developed a web app for tourists that would recommend places to tourists based on the reviews given by the previous visitors.',
				'achievements' => null
			],
			
		],
		'skills' => [
			[
				'title' => 'React',
				'percentage' => 90,
			],
			[
				'title' => 'JavaScript',
				'percentage' => 90
			],
			[
				'title' => 'Java',
				'percentage' => 87
			],
			[
				'title' => 'SQL',
				'percentage' => '90'
			],
			[
				'title' => 'PHP',
				'percentage' => 84
			],
			[
				'title' => 'NodeJS',
				'percentage' => 95
			]
		],
		'others' => ['Google Cloud, Git, Github, Express, HTML & CSS, Bootstrap, TailwindCSS, Expo, MongoDB'],
		'education' => [
			[
				'title' => 'BSc in Computer Science',
				'location' => 'Northern Kentucky University',
				'time' => '2022 - 2025'
			]
		],
		'awards' => [
			[
				'title' => 'Presidential Honor List',
				'description' => 'College of Informatics-NKU'
			],
			[
				'title' => 'National Physics Olympiad Champiom',
				'description' => '49th Nepal Physics Olympiad state champion.'
			]
		],
		'languages' => [
			'Nepali' => 'Native'
		],
		'interests' => ['Swimming', 'Stencil Art', 'Cricket', 'Volleyball', 'Traveling'],
		'projects' => [
			[
				'title' => 'Budget Buddy App',
				'description' => 'o	Developed “Budget Buddy”, a dynamic financial education platform as part of the 24hr Hackathon conducted by Fidelity Investments; earned third place demonstrating proficiency in web application development with the integration of Large Language Models and prompt engineering.',
				'picture' => '',
				'link' => ''
			]
		]
	],
];

$key = $_GET['key'];

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?= $teamMembers[$key]['name']?> Resume</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src=<?= $teamMembers[$key]['headshot'] ?> alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= $teamMembers[$key]['name'] ?></h1>
							    <div class="title mb-3"><?= $teamMembers[$key]['role'] ?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?= $teamMembers[$key]['email'] ?></a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?= $teamMembers[$key]['phone'] ?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?= $teamMembers[$key]['linkedin'] ?></a></li>
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?= $teamMembers[$key]['github'] ?></a></li>
					                <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?= $teamMembers[$key]['website'] ?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?= $teamMembers[$key]['summary'] ?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">

									<?php foreach($teamMembers[$key]['workExperience'] as $experience) { ?>

								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?= $experience['title']?></h3>
										        <div class="resume-company-name ms-auto"><?= $experience['location']?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?= $experience['time']?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?= $experience['description']?></p>

												<?php if ($experience['achievements']) { ?>
													<h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>

													<p><?= $experience['achievements']['description']?></p>

													<ul>
														<?php for ($i = 0; $i < count($experience['achievements']['bullets']); $i++ ) { ?>
															<li><?= $experience['achievements']['bullets'][$i]  ?></li>
														<?php } ?>
													</ul>

													<?php if ($experience['achievements']['technologies']) { ?>
														<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
														<ul class="list-inline">
															<?php for ($i = 0; $i < count($experience['achievements']['technologies']); $i++) { ?>
															<li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= $experience['achievements']['technologies'][$i] ?></span></li>
															<?php } ?>
														</ul>
													<?php } ?>

												<?php } ?>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->

									<?php } ?>
								    
							    </div><!--//resume-timeline-->
							    

						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
												<?php foreach($teamMembers[$key]['skills'] as $skill) { ?>
													<li class="mb-2">
															<div class="resume-skill-name"><?= $skill['title'] ?></div>
														<div class="progress resume-progress">
															<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?= $skill['percentage'] ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</li>
												<?php } ?>

								        
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">

													<?php foreach($teamMembers[$key]['others'] as $other) { ?>
														<li class="list-inline-item"><span class="badge badge-light"><?= $other ?></span></li>
													<?php } ?>
			
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
										<?php foreach($teamMembers[$key]['education'] as $education) { ?>
											<li class="mb-2">
													<div class="resume-degree font-weight-bold"><?= $education['title'] ?></div>
													<div class="resume-degree-org"><?= $education['location'] ?></div>
													<div class="resume-degree-time"><?= $education['time'] ?></div>
											</li>
										<?php } ?>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">

									<?php foreach($teamMembers[$key]['awards'] as $award) { ?>
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?= $award['title'] ?></div>
								        <div class="resume-award-desc"><?= $award['description'] ?></div>
								    </li>
									<?php } ?>

							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
										<?php foreach($teamMembers[$key]['languages'] as $language => $proficiency) { ?>
								    	<li class="mb-2"><span class="resume-lang-name font-weight-bold"><?= $language ?> </span> <small class="text-muted font-weight-normal">(<?= $proficiency ?>)</small></li>
								    <?php } ?>
									</ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
										<?php foreach($teamMembers[$key]['interests'] as $interest) { ?>
								    	<li class="mb-1"><?= $interest ?></li>
										<?php } ?>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<?php foreach($teamMembers[$key]['projects'] as $project) { ?>
							<div class="col-md-4">
								<div class="card">
									<img src=<?= $project['picture'] ?> alt="Project 1" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title"><?= $project['title'] ?></h5>
										<p class="card-text"><?= $project['description'] ?></p>
										<a class="btn btn-outline-primary" href=<?= $project['link'] ?>>Go to link</a>
									</div>
								</div>
							</div>
						<?php } ?>

					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by 
				<?php 
					$firstnames = array_keys($teamMembers); 
					echo $firstnames[0]." & ".$firstnames[1]
				?>
				</small>
    </footer>

    

</body>
</html> 

