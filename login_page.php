<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylx.css?v=1"> 
   <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Climate+Crisis:YEAR@1979&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body id="log-body"> 
    <section  >
        <div id="reg-btn">
        <a href="index.php">  ← ACCUIL </a>
    </div>
        <h3 id="log-sec"> login</h3>
    <form action="index.php" method="get" id="log-form">
        <div class="log-user">
            <label>Username:</label>
        <input type="text" name="username" id="required" required>
        </div>
       <div class="log-user">
        <label>Password:</label>
        <input type="password" name="password" id="required" required>
        </div>
        <input type="submit" value="Login">
    </form>
    <div id= 'register-link'>

            Don't have an account? <a href="register.php">Register here</a>.
        </div>
</section>
</body>
</html>
