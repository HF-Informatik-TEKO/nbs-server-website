<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>List</title>
</head>
<body>
    
    <h1 class="title">To-Do List</h1>

    <?php
    $host = "192.168.1.200";
    $user = "dbuser";
    $password = "password";
    $database = "mydb";
    $table = "mytable";

    try {
        $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        // $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
        echo "<ul class='buttonText'>"; 
        foreach($db->query("SELECT value FROM $table") as $row) {
            echo "<li class='buttonText'>" . $row['value'] . "</li>";
        }
        echo "</ul>";
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    ?>

</body>
</html>