<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploading</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['upfile'])) {
        $targetPath = "D:/";
        $targetPath = $targetPath . basename($_FILES['upfile']['name']);

        if (move_uploaded_file($_FILES['upfile']['tmp_name'], $targetPath)) {
            echo "<p>File uploaded successfully to <strong>$targetPath</strong>.</p>";
        } else {
            echo "<p>File upload failed. Please check folder permissions or try again.</p>";
        }
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        <label for="upfile">Upload a File:</label>
        <input type="file" name="upfile" id="upfile" required>
        <br><br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
