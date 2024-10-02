<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize skills data here if needed
    $skills = htmlspecialchars($_POST['skills']);

    // Save or process the skills (e.g., store in a database or file)
    
    // Redirect to a thank-you page
    header("Location: thank_you.html");
    exit();
}
?>
