<?php
$team = [
    [
        'id' => 1,
        'name' => 'Douglas Broughton',
        'image' => 'assets/images/profile.jpg',
        'title' => 'Software Engineer',
        'email' => 'broughtond1@nku.edu',
        'phone' => '812 209 0264',
        'linkedin' => 'linkedin.com',
        'github' => 'github.com/doug1107',
        'website' => 'db.com',
        'summary' => 'As a Software Engineering student at NKU, I am passionate about leveraging my technical skills and academic knowledge to develop innovative and effective software solutions. With a strong foundation in programming languages, software development methodologies, and system design, I am adept at analyzing user requirements, designing applications, and implementing efficient code.',
        'experience' => [
            [
                'position' => 'Associate',
                'company' => 'Amazon',
                'time' => '2021 - Present',
                'description' => 'Transport packages',
                'technologies' => ['Python', 'PHP', 'Java']
            ],
        ],
        'skills' => [
            'Python' => 98,
            'PHP' => 94,
            'Java' => 96,
        ],
        'education' => [
            [
                'degree' => 'BS in Applied Software Engineering',
                'institution' => 'Northern Kentucky University',
                'time' => '2021 - 2025'
            ],
        ],
        'awards' => [
            'Award 1' => '',
            'Award 2' => ''
        ],
        'languages' => [
            'English' => 'Native',
        ],
        'interests' => ['Sports', 'Chess', 'Watching movies'],
        'projects' => [
            [
                'title' => 'Project 1',
                'description' => 'Brief description of Project 1',
                'link' => 'project1-link'
            ],
        ]
    ],
	// fill out the info as you did in your resume, change the id number to a number not taken yet
	[
        'id' => 0,
        'name' => 'Mith Sah',
        'image' => 'assets/images/profile.jpg',
        'title' => 'Software Developer',
        'email' => 'sahm1@nku.edu',
        'phone' => '859-628-1803',
        'linkedin' => 'https://www.linkedin.com/in/mithsah/',
        'github' => 'https://github.com/Mithsah1325',
        'website' => 'http://mithleshsah.tech/',
        'summary' => 'Northern Kentucky University, Highland Heights, Kentucky: Aug. 2022 to present. Undergraduate in Cyber Security and minoring in Computer Science, GPA 3.34/4.0. Courses: Database Design, Object Oriented Programming, Data Structure & Algorithm, Unix System, Server-Side Programming, Software Design & Architecture. Awards/Honors: International Merit Scholarship, Dean’s List, EDGE award.',
        'experience' => [
            [
                'position' => 'CIS Web Developer',
                'company' => 'NKU',
                'time' => 'Sep 2024 - Present',
                'description' => 'Enhanced and optimized the CIS web application by designing and testing new features, boosting student engagement by 30%.',
                'technologies' => ['HTML', 'JavaScript', 'Nodejs', 'Python', 'React']
            ],
            [
                'position' => 'Software Engineering Internship',
                'company' => 'Headstarter AI',
                'time' => 'May 2024 - Sep 2024',
                'description' => 'Developed 5 AI projects, leveraging technologies such as [Firebase, Vector Database, React, NextJs, TypeScript, Vercel, Python, AWS, demonstrating practical expertise in AI development.',
                'technologies' => ['Next.js', 'JavaScript', 'Nodejs', 'Python', 'React', 'Pinecone', 'RAG']
            ],
        ],
        'skills' => [
            'Python' => 98,
            'PHP' => 94,
            'Java' => 96,
        ],
        'education' => [
            [
                'degree' => 'BS in Cybersecurity',
                'institution' => 'Northern Kentucky University',
                'time' => '2022 - 2026'
            ],
        ],
        'awards' => [
            'Award 1' => 'NKU Presendential Award',
            'Award 2' => 'Merit Award'
        ],
        'languages' => [
            'English' => 'Intermediate',
        ],
        'interests' => ['Sports', 'Hiking', 'Watching movies'],
        'projects' => [
            [
                'title' => 'Rate My Professor AI Assistant ',
                'description' => 'Utilized OpenAI GPT-4 personalized financial advice, learning and evolving from user interactions',
                'link' => 'project1-link'
            ],
            
        ]
    ],
	[
        'id' => 0,
        'name' => 'Camden Bohanan',
        'image' => 'assets/images/profile.jpg',
        'title' => 'UI/UX',
        'name' => 'Camden Bohanan',
        'email' => 'bohananco@gmail.com',
        'phone' => '',
        'linkedin' => 'https://linkedin.com/in/',
        'github' => 'https://github.com/',
        'website' => 'https://github.com/',
        'summary' => 'I graduated as part of the class of 2021 from Woodford County High School. I have attended Northern Kentucky University for four years, where I pursued a double major in Software Engineering and Digital Effects. I am experienced in programming languages such as Python and Java. Additionally, I have expertise in digital modeling software, including Blender and Maya, as well as proficiency with Adobe Photoshop and Adobe Illustrator.I have been a proud member of Theta Chi fraternity and the national Alpha-beta club in highschool.',
        'experience' => [
            [
                'position' => 'Production Assistant',
                'company' => 'Oak & Moore',
                'time' => '',
                'description' => '',
                'technologies' => ['', '', '']
            ],
        ],
        'skills' => [
            ' ' => 98,
        ],
        'education' => [
            [
                'degree' => 'Software Engineer Major',
                'institution' => 'NKU',
                'time' => ''
            ],
        ],
        'awards' => [
            'Award 1' => '',
            'Award 2' => ''
        ],
        'languages' => [
            'English' => '',
        ],
        'interests' => ['', '', ''],
        'projects' => [
            [
                'title' => '',
                'description' => '',
                'link' => ''
            ],
        ]
    ],

];


$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$member = isset($team[$id]) ? $team[$id] : null;
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?= $member['name']; ?></title>
    
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
				        <img class="picture" src="<?= $member['image']; ?>" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= $member['name']; ?></h1>
							    <div class="title mb-3"><?= $member['title']; ?>e</div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="mailto:<?= $member['email']; ?>"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?= $member['email']; ?></a></li>
								    <li><a class="text-link" href=""tel:<?= $member['phone']; ?>><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?= $member['phone']; ?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="<?= $member['linkedin']; ?>"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?= $member['linkedin']; ?></a></li>
					                <li class="mb-3"><a class="text-link" href="<?= $member['github']; ?>"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?= $member['github']; ?></a></li>
					                <li><a class="text-link" href="</span><?= $member['website']; ?>"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?= $member['website']; ?></a></li>
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
					    <p class="mb-0"><?= $member['summary']; ?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								<?php foreach ($member['experience'] as $exp): ?>
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?= htmlspecialchars($exp['position']); ?></h3>
										        <div class="resume-company-name ms-auto"><?= htmlspecialchars($exp['company']); ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?= htmlspecialchars($exp['time']); ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?= htmlspecialchars($exp['description']); ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
												<?php foreach ($exp['technologies'] as $tech): ?>
                                                    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= htmlspecialchars($tech); ?></span></li>
                                                <?php endforeach; ?>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article>
									<?php endforeach; ?>
							    
							    
							    
							    
							    
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name">Angular</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">React</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">JavaScript</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        
								        <li class="mb-2">
								            <div class="resume-skill-name">Node.js</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name">HTML/CSS/SASS/LESS</div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light">DevOps</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Code Review</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Git</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Unit Testing</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Wireframing</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Sketch</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Balsamiq</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">WordPress</span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Shopify</span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold">MSc in Computer Science</div>
								        <div class="resume-degree-org">University College London</div>
								        <div class="resume-degree-time">2013 - 2014</div>
								    </li>
								    <li>
								        <div class="resume-degree font-weight-bold">BSc Maths and Physics</div>
								        <div class="resume-degree-org">Imperial College London</div>
								        <div class="resume-degree-time">2010 - 2013</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">Award Name Lorem</div>
								        <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</div>
								    </li>
								    <li class="mb-0 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name">Award Name Ipsum</div>
								        <div class="resume-award-desc">Award desc goes here, ultricies nec, pellentesque.</div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal">(Native)</small></li>
								    <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold">French</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
								    <li><span class="resume-lang-name font-weight-bold">Spanish</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1">Climbing</li>
								    <li class="mb-1">Snowboarding</li>
								    <li class="mb-1">Cooking</li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="https://miro.medium.com/v2/resize:fit:1200/1*I38bSeX_4x-SzW0IY-aZPQ.png" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 1</h5>
									<p class="card-text">This project uses OpenAI's GPT-4 for personalized financial advice, recommends relevant YouTube videos for enhanced user experience, and visualizes key financial metrics through interactive graphs.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="data:image/png;base64,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" alt="Project 2" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 2</h5>
									<p class="card-text">Developed an AI-driven customer support system using RAG to provide accurate and relevant responses to user queries.
                                    </p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQyaam8phVnNOeYCu6NmLM_tLa5VZa75MuTg&s" alt="Project 3" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 3</h5>
									<p class="card-text">Developed an AI-powered assistant that scrapes and analyzes data from Rate My Professors for Northern Kentucky University (NKU) to provide students with personalized professor recommendations.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your names</small>
    </footer>

    

</body>
</html> 
