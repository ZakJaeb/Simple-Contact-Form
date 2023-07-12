<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Contact Form</title>
</head>
<body>

    <form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    <br>
    E-mail: <input type="text" name="email"><br>
    <br>
    What is your Issue?:
        <select name="formIssue">
        <option value="Q">Query</option>
        <option value="F">Feedback</option>
        <option value="C">Complaint</option>
        <option value="O">Other</option>
        </select>
    <br>
    <br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <input type="submit">
</form>
</body>
</html>