<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Stories</title>
    <style>
        /* Inline CSS for Success Stories page */
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f4f4f9;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: #ff5722;
        }
        .story-item {
            background-color: #fff;
            padding: 20px;
            margin: 20px auto;
            width: 80%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
        }
        .story-item h3 {
            color: #333;
            cursor: pointer;
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
    <h1>Success Stories in ICT</h1>
    
    <!-- Example of a success story -->
    <div class="story-item">
        <h3 onclick="toggleContent('story1')">Youth Empowerment through Coding</h3>
        <div id="story1" style="display: none;">
            <p>Learn how coding bootcamps are empowering youth in Africa to gain valuable tech skills and start their careers...</p>
        </div>
    </div>

    <div class="story-item">
        <h3 onclick="toggleContent('story2')">Remote Work in Africa</h3>
        <div id="story2" style="display: none;">
            <p>The rise of remote work is creating job opportunities for talented African professionals worldwide...</p>
        </div>
    </div>
</body>
</html>
