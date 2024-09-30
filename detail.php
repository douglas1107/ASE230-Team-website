<?php
// Function to calculate age from date of birth
function calculateAge($dob) {
    $dob = new DateTime($dob); // Create a DateTime object from date of birth
    $today = new DateTime('today'); // Get today's date
    $age = $dob->diff($today)->y; // Calculate the difference in years
    return $age; // Return the calculated age
}

// Function to display work experience
function displayExperience($experience) {
    ?>
    <div class="resume-timeline">
        <div class="resume-timeline-item card mb-4">
            <div class="card-body">
                <h4 class="resume-position d-flex align-items-center">
                    <i class="fas fa-briefcase me-2"></i> <!-- Briefcase icon -->
                    <?= htmlspecialchars($experience['position']); ?>
                </h4>
                <div class="resume-company"><strong><?= htmlspecialchars($experience['company']); ?></strong></div>
                <div class="resume-time text-muted"><?= htmlspecialchars($experience['time']); ?></div>
                <p class="mt-2"><?= htmlspecialchars($experience['description']); ?></p>
                <p><strong>Technologies: </strong><?= htmlspecialchars(implode(', ', $experience['technologies'])); ?></p>
            </div>
        </div>
    </div>
    <style>
        .resume-timeline-item {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .resume-timeline-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .resume-position {
            font-size: 1.25rem;
            color: #007bff; /* Blue color for job titles */
        }
    </style>
    <?php
}

$team = [
    [
        'id' => 1,
        'name' => 'Douglas Broughton',
        'image' => 'assets/images/profile.jpg',
        'title' => 'Software Engineer',
        'dob' => '2002-05-27',
        'email' => 'broughtond1@nku.edu',
        'phone' => '812 209 0264',
        'linkedin' => 'linkedin.com',
        'github' => 'github.com/doug1107',
        'website' => 'db.com',
        'summary' => 'As a Software Engineering student at NKU, I am passionate about leveraging my technical skills...',
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
            'Dean’s List',
            'Scholarship Winner'
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
    [
        'id' => 2,
        'name' => 'Mithlesh Sah',
        'image' => 'assets/images/profile.jpg',
        'title' => 'Software Developer',
        'dob' => '1997-05-27',
        'email' => 'sahm1@nku.edu',
        'phone' => '859-628-1803',
        'linkedin' => 'https://www.linkedin.com/in/mithsah/',
        'github' => 'https://github.com/Mithsah1325',
        'website' => 'http://mithleshsah.tech/',
        'summary' => 'As a Software Engineering student at NKU, I am passionate about leveraging my technical skills and academic knowledge to develop innovative and effective software solutions. With a strong foundation in programming languages, software development methodologies, and system design, I am adept at analyzing user requirements, designing applications, and implementing efficient code.',
        'experience' => [
            [
                'position' => 'CIS Web Developer',
                'company' => 'NKU',
                'time' => '2022 - Present',
                'description' => 'Developed web applications and improved site performance',
                'technologies' => ['PHP', 'JavaScript', 'HTML/CSS']
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
            'International Merit Scholarship',
            'Dean’s List'
        ],
        'languages' => [
            'English' => 'Intermediate',
        ],
        'interests' => ['Sports', 'Hiking', 'Movies'],
        'projects' => [
            [
                'title' => 'Project 1',
                'description' => 'Brief description of Project 1',
                'link' => 'project1-link'
            ],
        ]
    ],
    [
        'id' => 3,
        'name' => 'Camden Bohanan',
        'image' => 'assets/images/profile.jpg',
        'title' => 'UI/UX Designer',
        'dob' => '2002-07-10',
        'email' => 'bohananco@gmail.com',
        'phone' => '555-123-4567',
        'linkedin' => 'https://linkedin.com/in/camdenbohanan',
        'github' => 'https://github.com/camdenbohanan',
        'website' => 'https://camdenbohanan.dev',
        'summary' => 'Graduated from Northern Kentucky University, majoring in Software Engineering and Digital Effects...',
        'experience' => [
            [
                'position' => 'Production Assistant',
                'company' => 'Oak & Moore',
                'time' => '2020 - 2021',
                'description' => 'Assisted with the production and UX design of digital products',
                'technologies' => ['Blender', 'Photoshop', 'Adobe Illustrator']
            ],
        ],
        'skills' => [
            'UX Design' => 92,
            'Photoshop' => 90,
            'Blender' => 85,
        ],
        'education' => [
            [
                'degree' => 'BS in Software Engineering',
                'institution' => 'Northern Kentucky University',
                'time' => '2017 - 2021'
            ],
        ],
        'awards' => [
            'Best UX Design Award',
            'Dean’s List'
        ],
        'languages' => [
            'English' => 'Native',
        ],
        'interests' => ['Digital Art', 'Photography', 'Movies'],
        'projects' => [
            [
                'title' => 'UX Revamp Project',
                'description' => 'Revamped the UX design of a high-traffic e-commerce platform',
                'link' => 'uxrevamp-link'
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
    <title><?= htmlspecialchars($member['name']); ?></title>
    
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
    <style>
        /* Custom styles for better interaction */
        .resume-timeline-item {
            transition: transform 0.3s;
        }

        .resume-timeline-item:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .resume-section-title {
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="text-center mb-4">
        <h1><?= htmlspecialchars($member['name']); ?></h1>
        <h4><?= htmlspecialchars($member['title']); ?></h4>
        <p><strong>Email: </strong><?= htmlspecialchars($member['email']); ?></p>
        <p><strong>Phone: </strong><?= htmlspecialchars($member['phone']); ?></p>
        <p><strong>Age: </strong><?= calculateAge($member['dob']); ?></p>
        <p>
            <a href="<?= htmlspecialchars($member['linkedin']); ?>" target="_blank">LinkedIn</a> |
            <a href="<?= htmlspecialchars($member['github']); ?>" target="_blank">GitHub</a> |
            <a href="<?= htmlspecialchars($member['website']); ?>" target="_blank">Website</a>
        </p>
    </div>
    <img src="<?= htmlspecialchars($member['image']); ?>" alt="<?= htmlspecialchars($member['name']); ?>" class="img-fluid mb-4" style="border-radius: 50%; width: 150px; height: 150px;">

    <h3 class="resume-section-title">Summary</h3>
    <p><?= htmlspecialchars($member['summary']); ?></p>

    <h3 class="resume-section-title">Experience</h3>
    <?php foreach ($member['experience'] as $experience) {
        displayExperience($experience);
    } ?>

    <h3 class="resume-section-title">Education</h3>
    <ul>
        <?php foreach ($member['education'] as $edu) { ?>
            <li>
                <strong><?= htmlspecialchars($edu['degree']); ?></strong> - <?= htmlspecialchars($edu['institution']); ?> (<?= htmlspecialchars($edu['time']); ?>)
            </li>
        <?php } ?>
    </ul>

    <h3 class="resume-section-title">Skills</h3>
    <ul>
        <?php foreach ($member['skills'] as $skill => $level) { ?>
            <li><?= htmlspecialchars($skill); ?> (<?= htmlspecialchars($level); ?>%)</li>
        <?php } ?>
    </ul>

    <h3 class="resume-section-title">Awards</h3>
    <ul>
        <?php foreach ($member['awards'] as $award) { ?>
            <li><?= htmlspecialchars($award); ?></li>
        <?php } ?>
    </ul>

    <h3 class="resume-section-title">Languages</h3>
    <ul>
        <?php foreach ($member['languages'] as $language => $level) { ?>
            <li><?= htmlspecialchars($language); ?> - <?= htmlspecialchars($level); ?></li>
        <?php } ?>
    </ul>

    <h3 class="resume-section-title">Interests</h3>
    <ul>
        <?php foreach ($member['interests'] as $interest) { ?>
            <li><?= htmlspecialchars($interest); ?></li>
        <?php } ?>
    </ul>

    <h3 class="resume-section-title">Projects</h3>
    <ul>
        <?php foreach ($member['projects'] as $project) { ?>
            <li>
                <strong><?= htmlspecialchars($project['title']); ?></strong> - <?= htmlspecialchars($project['description']); ?> 
                <a href="<?= htmlspecialchars($project['link']); ?>" target="_blank">View Project</a>
            </li>
        <?php } ?>
    </ul>
	<footer class="footer text-center pt-2 pb-5">
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <a class="text-link" href="https://www.website.com" target="_blank">Your Name</a></small>
    </footer>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
