<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"] ?? "");

    if ($username === "") {
        echo "<h1>Hello!</h1>";
        echo "<p>Please enter your name.</p>";
    } else {
        $safeName = htmlspecialchars($username, ENT_QUOTES, "UTF-8");
        echo "<h1>Hello, " . $safeName . "!</h1>";
    }
} else {
    echo "<p>Please submit your name using the contact form.</p>";
}
?>