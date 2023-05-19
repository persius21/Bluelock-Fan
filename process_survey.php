<?php
$servername = "localhost";
$port = "3307";
$dbname = "bluelockdb";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the chosen answer from the form
        $chosenAnswer = $_POST["answer"];

        // Insert the survey response into the database
        $query = "INSERT INTO survey_response (question1) VALUES (:chosenAnswer)";
        $statement = $conn->prepare($query);
        $statement->bindParam(":chosenAnswer", $chosenAnswer);
        $statement->execute();
        // Store the chosen answer in a session variable
        session_start();
        $_SESSION['chosenAnswer'] = $chosenAnswer;


        header("Location: home.php");
        echo '<script>alert("Thank you for your submission")</script>';
        exit;
        
    }
    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
