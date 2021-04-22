<!DOCTYPE html>
<html>
  <head>
    <style>
    body {
     background-image: url("back.jpg");
     background-color: #cccccc;
   }
      #img{
        display: inline-block;
        width: 50%;
        color: white;
      }
      #img h1{
        background-color: silver;
        display: inline-block;
        margin-left: 20%;
      }

      #login{
        width: 20%;
        float: right;
        margin-right: 10%;
        padding: 4em 2em;
        display: inline-block;
        border-radius: 25px;
      }
      #login:hover {
        background-color: silver;
      }
      #img,#login{
        height: 200px;
        margin-top: 5%;
      }

      input {
        width: 100%;
        padding:auto;
        margin: 8px 0px;
        height: 40px;
        text-align: center;
        border-radius: 12px;
        font-size: 16px;
      }
      #reg-btn{
        width:auto;
        margin: 0 auto;
      }

    </style>
    <title></title>
  </head>
  <body>

    <div id="img">
      <h1 style="text-align:center">BOOKER</h1>
    </div>
    <div id="login">
      <form action="varification.php" method="POST">
        <input type="text" placeholder="Username" name="uname"/><br>
        <input type="password" placeholder="Password" name="pass"/><br>
        <input type="submit" value="Log In">
        <hr>
        <center>
        <input type="button" onclick="window.location.href='register.php'"  id="reg-btn" value="Create New Account">
        </center>
      </form>
    </div>
  </body>
</html>
