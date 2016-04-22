<?php
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Travelbuddy Login and Registration</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   </head>
   <body>
     <h2>Welcome!</h2>
     <div id= "form1">
     <?php if($this->session->flashdata("registration_errors"))
     {
       echo $this->session->flashdata("registration_errors");
     }
     ?>
     <?php echo validation_errors(); ?>
     <p>Register:</p>
     <form id="register" action="/travels/process_register" method="POST">
       <label>Name:</label> <input class="reg1" type="text" name="name"></br>
       <label>Username:</label> <input class="reg1" type="text" name="user_name"><br>
       <label>Password:</label> <input class="reg1" type="password" name="password"><br>
       <label>Confirm PW:</label> <input class="reg1" type="password" name="confirm_password"><br>
       <input class="button1" type="submit" name="Submit" value="Register">
     </form>
   </div>
      <p>Login:</p>
      <form id="login" action="/travels/process_login" method="POST">
        <label>Username:</label> <input class="reg2" type="text" name="user_name"><br>
        <label>Password:</label> <input class="reg2" type="password" name="password"><br>
        <input class="button2" type="submit" name="Submit" value="Login"/>
      </form>
   </body>
 </html>
