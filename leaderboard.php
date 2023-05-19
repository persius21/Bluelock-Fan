<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="leaderboardstyle.css">
    <title>Leaderboard</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            background-color: #011a42;
            opacity: 90%;
            color: white;
        }

        th {
            background-color: #0042ab;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <?php
    $servername = "localhost";
    $port = "3307";
    $dbname = "bluelockdb";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        ?>

        <h2>Blue Lock Rankings</h2>
        <nav>
        <a href= "home.php" class="link2">Homepage</a>
        </nav>

        <table>
            <tr>
                <th>Player</th>
                <th>Votes</th>
            </tr>

            <?php
            // Retrieve the count of each player's selection and sort by count in descending order
            $query = "SELECT question1, COUNT(*) as count FROM survey_response GROUP BY question1 ORDER BY count DESC";
            $statement = $conn->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);

            foreach ($results as $row) {
                ?>
                <tr>
                    <td><?php echo $row['question1']; ?></td>
                    <td><?php echo $row['count']; ?></td>
                </tr>
                <?php
            }
            ?>

        </table>

    <?php
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    ?>
</body>
</html>
