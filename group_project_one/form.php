<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple PHP Form</title>
    <style>
        label { display: block; margin-top: 10px; }
        input[type="submit"] { margin-top: 20px; }
    </style>
</head>
<body>

    <h2>Contact Form</h2>

    <form action="process.php" method="POST">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>

        <input type="submit" value="Submit Form">
    </form>

</body>
</html>