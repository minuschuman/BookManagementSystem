<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    #user{
      width: 40%;
      margin:auto 30%;
      padding: 4em 2em;
      display: inline-block;
      border-radius: 25px;
      height: 200px;
      margin-top: 5%;
    }
    </style>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
    <div id="user">
      <form method="POST" action="user-entry.php">
        <lable>Firstname</lable><br/>
          <input type="text" name="fname" required><br/>
        <lable>Lastname</lable><br/>
          <input type="text" name="lname" required><br/>
        <lable>Email</lable><br/>
          <input type="email" name="mail" required><br/>
        <lable>Mobile</lable><br/>
          <input type="number" name="mob" required><br
        <lable>Username</lable><br/>
          <input type="text" name="uname" required><br/>
        <lable>Password</lable><br/>
           <input type="password" id="pass1" name="pass1" required><br/>
         <lable>Conform Password</laqble><br/>
           <input type="Password" id="pass2" name="pass2" required><br/>
       <input type="submit" value = "add">
     </form>
    </div>
  </body>
  <script type="text/javascript">
    var password = document.getElementById("pass1")
    , confirm_password = document.getElementById("pass2");
    function validatePassword(){
    if(password.value != confirm_password.value) {
      confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
      confirm_password.setCustomValidity('');
    }
    }
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
  </script>
</html>
