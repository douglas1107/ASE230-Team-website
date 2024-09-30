<?php
// Function to calculate age from date of birth
function calculateAge($dob) {
    $dob = new DateTime($dob); // Create a DateTime object from date of birth
    $today = new DateTime('today'); // Get today's date
    $age = $dob->diff($today)->y; // Calculate the difference in years
    return $age; // Return the calculated age
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
        'summary' => 'Undergraduate in Cybersecurity and minoring in Computer Science...',
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

// Function to display the member card
function displayMemberCard($member, $index) {
    $age = calculateAge($member['dob']);
    
    echo '
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="' . $member['image'] . '" class="img-fluid rounded-start" alt="' . htmlspecialchars($member['name']) . '">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">' . htmlspecialchars($member['name']) . '</h5>
                    <p class="card-text">Title: ' . htmlspecialchars($member['title']) . '</p>
                    <p class="card-text">Email: <a href="mailto:' . htmlspecialchars($member['email']) . '">' . htmlspecialchars($member['email']) . '</a></p>
                    <p class="card-text">Phone: ' . htmlspecialchars($member['phone']) . '</p>
                    <p class="card-text">Age: ' . $age . ' years</p>
                    <a href="detail.php?id=' . $member['id'] . '" class="btn btn-primary">See Full Profile</a>
                </div>
            </div>
        </div>
    </div>
    ';
}

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Our Amazing Team</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Team members' profile">
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
        <div class="container mt-5">
            <h1 class="mb-4">Our Team</h1>
            <?php
            // Loop through each team member and display their card
            foreach ($team as $index => $member) {
                displayMemberCard($member, $index);
            }
            ?>
        </div>
        <footer class="footer text-center pt-2 pb-5">
            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <a class="text-link" href="https://www.website.com" target="_blank">Your Name</a></small>
        </footer>
    </article>
</body>
</html>
