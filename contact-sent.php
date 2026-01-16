<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sent</title>
</head>
<body>
    <h1>Information you wrote</h1>
    <?php
    echo "your name:" ,$_POST["name"];
    ?>
    <p></p>
    <?php
    echo "your email:",$_POST["email"];
    ?>
    <p></p>r
    <?php
    echo "your written feedback:",$_POST["feedback"]
    ?>
    <p></p>
    <a href="/contact.html"> go back to contact</a>
</body>
</html>