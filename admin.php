<?php
   session_start();
   include("connection.php");
   include("functions.php");
   $user_data = check_login($con);
   $result = mysqli_query($con, "SELECT * FROM message");
   $data = mysqli_fetch_all($result);
?>
   
<!DOCTYPE html>
<html>
   <?php require("head.php");?>

    <body>
    <header>
            <nav>
                <ul>
                    <li id="logo"><img src="images/hotel_booking.jpg"><a href="index.php" class="color-black">Booking Hotel</a></li>
                    <li><a href="logout.php" class="color-black">log out</a></li>
                    <li><a href="gallerie.php" class="color-black"> Gallerie </a></li>
                    <li><a href="contact.php" class="color-black"> Nous contacter </a></li>
                    <li><a href="#reserver" class="color-black"> Réserver </a></li>
                </ul>
            </nav>
    </header>
    <div id="messages">
        <h1 style="margin-top:4rem; color:yellow;"> messages </h1>
        <table id="customers">
      <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Message</th>
      </tr>
      <?php 
            foreach($data as $elem){
                echo "<tr>";
                echo "<td>$elem[1]</td>";
                echo "<td>$elem[2]</td>";
                echo "<td>$elem[3]</td>";
                echo "</tr>";
            }
        ?>
        
        </table>
    </div>


    
        <?php require("footer.php");?>
        <script src="script.js"></script>
    </body>
</html>