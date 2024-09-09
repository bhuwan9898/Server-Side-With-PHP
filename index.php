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

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Our amazing team</title>
    
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
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<h1 class="py-4 text-center">OUR AMAZING TEAM</h1>

			<?php foreach($teamMembers as $key => $member) { ?>
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src=<?= $member['headshot'] ?> alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= $member['name'] ?></h1>
							    <div class="title mb-3"><?= $member['role'] ?></div>
								<a href="detail.php?key=<?= $key ?>" class="btn btn-secondary">See full profile</a>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>

			<?php } ?>
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your names</small>
    </footer>

    

</body>
</html> 

