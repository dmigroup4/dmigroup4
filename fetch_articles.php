<?php
include 'db_connect.php';

$sql = "SELECT articles.title, articles.content, users.username, categories.name 
        FROM articles 
        JOIN users ON articles.author_id = users.user_id
        JOIN categories ON articles.category_id = categories.category_id
        ORDER BY articles.article_id DESC";
$result = $conn->query($sql);

$output = '';
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $output .= "<article>";
        $output .= "<h2>" . htmlspecialchars($row['title']) . "</h2>";
        $output .= "<p>By " . htmlspecialchars($row['username']) . " in " . htmlspecialchars($row['name']) . "</p>";
        $output .= "<p>" . htmlspecialchars($row['content']) . "</p>";
        $output .= "</article>";
    }
} else {
    $output = "<p>No articles found.</p>";
}

echo $output;
