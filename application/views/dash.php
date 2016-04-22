<?php
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Travelbuddy Login and Registration</title>
   </head>
   <body>
     <h2>Welcome, <?php echo($this->session->userdata("user_session")["user_name"]) ?>!</h2>
     <div id="yourtrips">
       <p>Your Trip Schedules:</p>
     <table id=user_trips>
       <thead>
         <tr>
           <th>Destination</th>
           <th>Travel Start Date</th>
           <th>Travel End Date</th>
           <th>Plan</th>
        </tr>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

   </div>
   <div id="others">
     <p>Other User's Travel Plans:</p>
     <table id="others_trips">
       <thead>
         <tr>
           <th>Name</th>
           <th>Destination</th>
           <th>Travel Start Date</th>
           <th>Travel End Date</th>
           <th>Do You Want To Join?</th>
         </tr>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <div id="addtravel">
       <a href="add">Add Travel Plan</a>

    </div>
   </body>
 </html>
