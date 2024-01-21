<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>Item View</title>
</head>
<body>
    <h1 class='title'>To-Do Item View</h1>

    <form id="form1" name="form1" method="post" action="">
    <input name="txtUsername" type="text" id="txtUsername" size="30" maxlength="100" />
    <input name="txtPassword" type="password" id="txtPassword" size="30" maxlength="100" />
    <input type="submit" name="btnLogin" id="btnLogin" value="Log In" />
    </form>
    
    <?php 
    if(isset($_POST['btnLogin']) ) {
        authenticateUser($_POST['txtUsername'], $_POST['txtPassword']);
    }
    function authenticateUser($username,$password)
    {
        echo "<p>$username - $password</p>";
    }
    ?>


    <!-- <?php
    include 'vars.php';

    try {
        // $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);

        if (isset($_POST['button_name'])) {
            // Call your PHP function here
            yourFunction();
        }
        
        function yourFunction() {
            // Your PHP function code here
            echo "<p>Button clicked!</p>";
        }

    } catch (PDOException $e) {
        print "Error!: " . $e -> getMessage() . "<br/>";
        die();
    }
    ?>
        
    <form action="item.php" method="post">
        <input type="submit" name="button_name" value="Click Me">
    </form>
    <p>helo</p>
    <a class="button" href="index.php">Home</a> -->
    
</body>
</html>