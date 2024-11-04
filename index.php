<?php 
// Include the database connection
include 'db_connect.php';

// Fetch articles from the database
$sql = "SELECT articles.title, articles.content, users.username, categories.name 
        FROM articles 
        JOIN users ON articles.author_id = users.user_id
        JOIN categories ON articles.category_id = categories.category_id
        ORDER BY articles.article_id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promoting ICT in Africa</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Background image for the entire page */
        body {
            background-image: url('images/1.png');
            background-size: cover;
            background-repeat: no-repeat;
            color: #fff;
        }

        /* Header styling */
        header h1 {
            text-align: center;
            margin: 20px 0;
            font-size: 2.5em;
        }

        /* Navigation menu styling */
        nav {
            text-align: center;
            margin-bottom: 20px;
        }

        nav ul {
            list-style: none;
            display: inline-flex;
            padding: 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 1.2em;
            transition: color 0.3s ease, transform 0.3s ease; /* Smooth color and scale change on hover */
        }

        nav ul li a:hover {
            color: #ffa500;
            transform: scale(1.1);
        }

        /* Center content and table */
        #video-links, #cybercrime-dangers {
            text-align: center;
            margin: 40px 0;
        }

        table {
            margin: 0 auto;
            width: 80%;
            text-align: center;
            border-collapse: collapse;
            background-color: rgba(255, 255, 255, 0.9);
            color: #333;
        }

        table, th, td {
            border: 1px solid #333;
            padding: 8px;
        }

        /* Footer styling */
        footer {
            text-align: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.6);
            color: #fff;
            width: 100%;
        }

        /* Fade-in effect for sections */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease-out, transform 0.5s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Promoting ICT in Africa</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="trending.php">Trending ICT</a></li>
                    <li><a href="cybersecurity.php">Cybersecurity</a></li>
                    <li><a href="emerging_tech.php">Emerging Tech</a></li>
                    <li><a href="success_stories.php">Success Stories</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Video Links Section with embedded videos -->
    <section id="video-links" class="fade-in">
        <h2>Cybersecurity Awareness Videos</h2>
        <div class="video-list">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/1hHMwLxN6EM" title="What is Cybersecurity?" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>

    <!-- Cybercrime Dangers Table -->
    <section id="cybercrime-dangers" class="fade-in">
        <h2>Dangers of Cybercrime</h2>
        <table>
            <thead>
                <tr>
                    <th>Cybercrime Danger</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Identity Theft</td>
                    <td>Stealing personal information to impersonate someone.</td>
                </tr>
                <tr>
                    <td>Phishing</td>
                    <td>Tricking individuals to reveal sensitive information.</td>
                </tr>
                <tr>
                    <td>Ransomware</td>
                    <td>Malware that locks data until a ransom is paid.</td>
                </tr>
                <tr>
                    <td>Financial Fraud</td>
                    <td>Accessing financial data for unauthorized transactions.</td>
                </tr>
            </tbody>
        </table>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Promoting ICT in Africa. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Fade in elements on scroll
        window.addEventListener('scroll', function() {
            const elements = document.querySelectorAll('.fade-in');
            const windowHeight = window.innerHeight;
            elements.forEach(el => {
                const position = el.getBoundingClientRect().top;
                if (position < windowHeight - 100) {
                    el.classList.add('visible');
                }
            });
        });
    </script>
</body>
</html>
