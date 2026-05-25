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
    <section>
    <div id="reg-btn">
        <a href="index.php">  ← ACCUIL </a>
    </div>
        
        <h3 id="log-sec"> join us </h3>

        <form action="" id="reg-form">
            <div class="">
        <label>Enter your username :</label>
        <input type="text" name="username" id="reg-input" placeholder="username" required> <br><br>
        
        <label>Enter your firstname :</label>
        <input type="text" name="firstname" id="reg-input" placeholder="firstname" required> <br><br>
        
        <label>Enter your lastname :</label>
        <input type="text" name="lastname" id="reg-input" placeholder="lastname" required> <br><br>
        <label>Enter your email :</label>
        <input type="email" name="email" id="reg-input" placeholder="fake@gmail.com" required> <br><br>

        
        <label>birtheday</label> 
        <input type="date" name="birtheday" id="birtheday-input" required> <br><br>

        <label>Enter your country</label> 
        <select name="country" id="country-select" required>
            <option value="other">  other</option>
            <option value="alg">    algeria</option>
            <option value="sa">     saudi arabia</option>
            <option value="usa">    usa</option>
        </select> <br><br>

        
        <label>Enter your password :</label> 
        <input type="password" name="password" id="reg-input" placeholder="********"> <br><br>
        
        <label>confirm password</label> 
        <input type="password" name="confirm-password" id="reg-input" placeholder="********" required> <br><br>

        <input type="submit" value="submit">

    </form>
    <div id= 'register-link'>
            Already have an account? <a href="login_page.php">Login here</a>
        </div>
    </section>
</body>
</html>