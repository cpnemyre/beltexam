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
     <div id= "add">
     <h2>Add a Trip</h2>
     <?php if($this->session->flashdata("registration_errors"))
     {
       echo $this->session->flashdata("registration_errors");
     }
     ?>
     <?php echo validation_errors(); ?>
     <form id="place" action="travels/process_destination" method="POST">
       <label>Destination:</label> <input class="dest1" type="text" name="destination"></br>
       <label>Description:</label> <input class="dest1" type="text" name="description"><br>
       <label>Travel Date From:</label> <input class="dest1" type="date" name="date_from"><br>
       <label>Travel Date To:</label> <input class="dest1" type="date" name="date_to"><br>
       <input class="button3" type="submit" name="add_button" value="Add">
     </form>
   </div>
   </body>
 </html>
