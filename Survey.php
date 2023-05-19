<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Surveystyle.css">
    <title>Blue Lock Survey</title>
</head>
<body>
    <h1>Blue Lock Survey</h1>
    
    <nav>
    <a href= "home.php" class=link3>Homepage</a>
    </nav>


    <form action="process_survey.php" method="POST">
        <!-- Question 1 -->
        <label for="q1">Question 1: Who is the best striker?</label><br>
        <input type="radio" name="answer" value="Isagi Yoichi"> Isagi Yoichi<br>
        <input type="radio" name="answer" value="Nagi Seishiro"> Nagi Seishiro<br>
        <input type="radio" name="answer" value="Itoshi Rin"> Itoshi Rin<br>
        <input type="radio" name="answer" value="Chigiri Hyoma"> Chigiri Hyoma<br>
        <input type="radio" name="answer" value="Kunigami Rensuke"> Kunigami Rensuke<br>
        <input type="radio" name="answer" value="Niko Ikki"> Niko Ikki<br>
        <input type="radio" name="answer" value="Baro Shoei"> Baro Shoei<br>
        <input type="radio" name="answer" value="Mikage Reo"> Mikage Reo<br>
        <input type="radio" name="answer" value="Zantetsu Tsurugi"> Zantetsu Tsurugi <br>
        <input type="radio" name="answer" value="Tokimitsu Aoshi "> Tokimitsu Aoshi<br>
        <input type="radio" name="answer" value="Aryu Jyubei"> Aryu Jyubei<br>
        <input type="radio" name="answer" value="Kurona Ranze"> Kurona Ranze<br>
        <input type="radio" name="answer" value="Shido Ryusei"> Shido Ryusei<br>
        <input type="radio" name="answer" value="Hiori Yo"> Hiori Yo<br>
        <input type="radio" name="answer" value="Yukimiya Kenyu"> Yukimiya Kenyu<br>
        <input type="radio" name="answer" value="Nanase Nijiro"> Nanase Nijiro<br>


        <!-- Submit Button -->
        <input type="submit" value="Submit" onclick="showNotification()">
        
    </form>
<script>
function showNotification() {
    alert("Thank you for submitting your response!");
}
</script>
</body>
</html>




