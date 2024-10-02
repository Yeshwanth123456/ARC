<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure required fields are set and not empty
    if (!empty($_POST['problem_description'])) {
        $problem = htmlspecialchars($_POST['problem_description']);
        
        // Process the problem, e.g., save to a file or database
        // Here we just save to a file for simplicity
        $file = 'problems.txt';
        $current = file_get_contents($file);
        $current .= $problem . "\n";
        file_put_contents($file, $current);
        
        // Redirect to a thank-you page
        header("Location: thank_you.html");
        exit();
    } else {
        // Handle the error when required fields are not filled
        echo 'Please describe your problem.';
    }
}
?>