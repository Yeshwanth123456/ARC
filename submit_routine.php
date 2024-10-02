<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $wake_time = htmlspecialchars($_POST['wake_time']);
    $tasks = [
        htmlspecialchars($_POST['task1']),
        htmlspecialchars($_POST['task2']),
        htmlspecialchars($_POST['task3']),
        htmlspecialchars($_POST['task4']),
        htmlspecialchars($_POST['task5']),
    ];
    $thoughts = htmlspecialchars($_POST['thoughts']);
    $tomorrow_goals = htmlspecialchars($_POST['tomorrow_goals']);

    // Save or process the daily routine (e.g., store in a database or file)
    
    // Redirect to a thank-you page
    header("Location: thank_you.html");
    exit();
}
?>
