<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <h1>HTML Form By POST Method</h1>
    <form action="post.php" method="POST">
        <label>User Name<label>:<input type="text" name="txtUserName" placeholder="Please Enter UserName" required />
        <br />
        <label>Password</label>:<input type="password" name="txtPassword" placeholder="Please Enter Password" required />
        <br />
        <input type="reset" value="Clear" />
        <br />
        <input type="submit" name="Submit" value="Submit" />
    </form>

    <h1>HTML Form By GET Method</h1>
    <form action="get.php" method="GET">
        <label>User Name<label>:<input type="text" name="txtUserName" placeholder="Please Enter UserName" required />
        <br />
        <label>Password</label>:<input type="password" name="txtPassword" placeholder="Please Enter Password" required />
        <br />
        <input type="reset" value="Clear" />
        <br />
        <input type="submit" name="Submit" value="Submit" />
    </form>
</body>
</html>