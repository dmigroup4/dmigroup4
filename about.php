<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            background-image: url('images/1.png'); /* Background image from the home page */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Fixes the image while scrolling */
            color: #333;
            text-align: center;
            padding: 20px;
            margin: 0;
            min-height: 100vh; /* Full height */
            display: flex;
            flex-direction: column;
        }
        h1 {
            color: #007bff;
        }
        .mission {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            margin: 20px auto;
            width: 80%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
        }
        footer {
            background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent background */
            color: #fff; /* Footer text color */
            width: 100%; /* Full width */
            padding: 20px;
            text-align: center; /* Center footer text */
            position: relative; /* Footer will stay at the bottom */
            margin-top: auto; /* Ensure footer is at the bottom */
        }
    </style>
    <script>
        function toggleContent(id) {
            const content = document.getElementById(id);
            content.style.display = content.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</head>
<body>
    <h1>About Us</h1>
    
    <div class="mission">
        <h3 onclick="toggleContent('mission')">Our Mission</h3>
        <div id="mission" style="display: none;">
            <p>Our mission is to promote the use of Information and Communication Technology (ICT) in Africa, empowering individuals and communities through access to technology and digital resources.</p>
        </div>
    </div>

    <div class="mission">
        <h3 onclick="toggleContent('vision')">Our Vision</h3>
        <div id="vision" style="display: none;">
            <p>We envision a future where technology bridges the gap between opportunities and accessibility, enhancing the quality of life for all Africans.</p>
        </div>
    </div>

    <div class="mission">
        <h3 onclick="toggleContent('values')">Our Values</h3>
        <div id="values" style="display: none;">
            <p>We believe in innovation, collaboration, and inclusivity, working together to create sustainable solutions that harness the power of ICT.</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Promoting ICT in Africa. All Rights Reserved.</p>
    </footer>
</body>
</html>
