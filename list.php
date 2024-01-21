<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>List View</title>

    <script>
        function displayItem(item) {
            // console.log("clicked item: " + item);
            $selecteItem = item;
            console.log("clicked item: " + $selecteItem);
        }
    </script>
</head>
<body>
    
    <h1 class="title">To-Do List View</h1>
    
    <?php
    include 'vars.php';

    function displayItem($item) {
        // echo "<li> $item <button onclick='displayItem(\"$item\")' > edit </button></li>";
        $id = $item['id'];
        $value = $item['value'];
        echo "<p>$id - $value </p>";
    }

    try {
        $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);

        // echo "<ul class='buttonText'>"; 
        foreach($db -> query("SELECT * FROM $table") as $row) {
            // $item = $row['value'];
            displayItem($row);
        }
        // echo "</ul>";

    } catch (PDOException $e) {
        print "Error!: " . $e -> getMessage() . "<br/>";
        die();
    }
    ?>

    <a class="button" href="index.php">Home</a>
    <a class="button" href="item.php">Item</a>
    
</body>
</html>