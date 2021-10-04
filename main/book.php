<?php include("../include/header.php"); ?>

<form class="booking">
    <h3>Reservation</h3>
    <br>
     <div class="res">
         First Name <input type="text" name="firstname" id="firstname">
         Last Name <input type="text" name="lastname" id="lastname">
     </div>
     <br>
     <div>
         Phone <input type="number" name="number" id="number">
     </div>
     <br>
     <div>
         Email <input type="email" name="email" id="email">
     </div>
     <br>
     <div>
         Arrival Date <input type="date" name="date" id="date">
     </div>
     <br>
     <div>
         Departure Date <input type="date" name="date" id="date">
     </div>
     <br>
     <div>
     Number of Adults <input type="number" name="number" id="number">
     </div>
     <br>
     <div>
         Questions and Comment <input type="text" name="text" id="text">
     </div>
</form>

<?php include("../include/footer.php"); ?>