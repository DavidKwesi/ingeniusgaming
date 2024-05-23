<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="../css/indexstyle.css"/>
<title>
MindSync Register
</title>
</head>

<body>
<div class="Registercontainer">
    <div class="curve-shape"></div>
    <div class="form-box Register">
        <h2>REGISTER</h2>
        <form action="sendinfo.php" method="post">
           <div class="input-box">
            <input type="text" pattern="[A-Za-z ]+"  id="firstName" name="firstName" title="Only letters please!" required>
            <label for="">First name</label>
            <i class="fa-solid fa-user"></i>
           </div>
           
           <div class="input-box">
            <input type="text" pattern="[A-Za-z ]+" id="lastName" name="lastName" title="Only letters please!" required>
            <label for="">Last name</label>
            <i class="fa-solid fa-user"></i>
           </div>
           

           <div class="input-box">
            <input type="email"  id="registeremail" name="registeremail"required>
            <label for="">Email</label>
            <i class="fa-solid fa-envelope"></i>
           </div>

           <div class="input-box">
            <input type="password"  id="password" name="password" pattern="(?=.*\d)(?=.*[a-zA-Z]).{8,}" title="Password must contain at least 1 letter, 1 number, and be at least 8 characters long" required>
            <label for="">Password</label>
            <i class="fa-solid fa-lock"></i>
           </div>
              
           <div class="input-box">
            <input type="password"  id="retypepassword" name="retypepassword" pattern="(?=.*\d)(?=.*[a-zA-Z]).{8,}" title="Password must contain at least 1 letter, 1 number, and be at least 8 characters long" required>
            <label for="">Re-type Password</label>
            <i class="fa-solid fa-lock"></i>
           </div>

           <div class="input-box">
            <button class="loginbtn" type="submit" name="registerinfo">REGISTER</button>
           </div>
           <div class="regi-link">
            <p>Already have an account?<a href="Login Page.php" class="SignUpLink"> Login!</a></p>
           </div>
        </form>
    </div>
      <div class="info-content Login">
       <h2>WELCOME TO MINDSYNC!</h2>
       <p> Play, Learn and Improve</p>
      </div>
</div>
<script src= indexscript.js></script>
















</body>
</html>