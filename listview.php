<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>List View</title>
</head>
<body>
    <h1 class="title">List View</h1>
    
    <?php
    include 'vars.php';

    function displayItem($item) {
        $id = $item['id'];
        $value = $item['value'];
        echo "<p>$id - $value </p>";
    }

    try {
        $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        foreach($db -> query("SELECT * FROM $table") as $row) {
            // $item = $row['value'];
            displayItem($row);
        }
    } catch (PDOException $e) {
        print "Error!: " . $e -> getMessage() . "<br/>";
        die();
    }

    if(isset($_POST['btn_delete_all']) ) {
        deleteAll();
    }
    function deleteAll()
    {
        include 'vars.php';
        try {
            $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    
            $db -> query("DELETE FROM $table");
            echo "<p>sucesscully deleted all items from db.</p>";
    
        } catch (PDOException $e) {
            print "Error!: " . $e -> getMessage() . "<br/>";
            die();
        }
    }
    ?>

    <form id="item_form" name="form1" method="post" action="">
        <input type="submit" name="btn_delete_all" value="Delete All Items" />
    </form>

    <div class="space">
        <a class="button" href="index.php">Home</a>
        <a class="button" href="createitem.php">Create Item</a>
    </div>
    
</body>
</html>