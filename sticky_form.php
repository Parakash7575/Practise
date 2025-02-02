<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Form</title>
</head>
<body>
    <?php
        $name = "";
        $surname = "";

        if (isset($_POST['submit'])) {
            // Fetch and sanitize user inputs
            $name = htmlspecialchars($_POST['name']);
            $surname = htmlspecialchars($_POST['surname']);

            echo "<p>Name: $name<br>Surname: $surname</p>";
        }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="name">Enter Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>"><br>

        <label for="surname">Enter Surname:</label>
        <input type="text" name="surname" value="<?php echo $surname; ?>" required><br>

        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
