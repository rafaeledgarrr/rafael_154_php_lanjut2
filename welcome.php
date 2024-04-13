<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h2>Welcome, <?php echo isset($_GET['name']) ? $_GET['name'] : 'User'; ?>!</h2>
    <p>Email: <?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?></p>
    <p>Login Time: <?php echo isset($_GET['time']) ? $_GET['time'] : ''; ?></p>
    <p>Login Day: <?php echo isset($_GET['day']) ? $_GET['day'] : ''; ?></p>
    <p>Login Date: <?php echo isset($_GET['date']) ? $_GET['date'] : ''; ?></p>
</div>
</body>
</html>
