<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>Creat Item</title>
</head>
<body>
    <h1 class='title'>Create Item</h1>

    <form id="item_form" name="form1" method="post" action="">
        <input type="text" name="item_name" size="30" maxlength="100" placeholder="Item Name Here" />
        <input type="submit" name="btn_create_item" value="Create" />
    </form>
    
    <?php 

    if(isset($_POST['btn_create_item']) ) {
        deleteAll($_POST['item_name']);
    }
    function deleteAll($username)
    {
        include 'vars.php';
        try {
            $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    
            $db -> query("INSERT INTO $table (value) VALUES('$username')");
            echo "<p>sucesscully added '$username' to db.</p>";
    
        } catch (PDOException $e) {
            print "Error!: " . $e -> getMessage() . "<br/>";
            die();
        }
    }
    ?>

    <div class="space">
        <a class="button" href="listview.php">List View</a> 
        <a class="button" href="index.php">Home</a> 
    </div>
    
</body>
</html>