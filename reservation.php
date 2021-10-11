<?php 
session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $nom=$_POST['nom'];
    $phone=$_POST['phone'];
    $date_arrive=$_POST['date_arrive'];
    $date_deppart=$_POST['date_deppart'];
    $price=$_POST['price'];
    $chambres=$_POST['chambres'];
    if(!empty($nom) && !empty($phone) && !empty($date_arrive)&&!empty($date_deppart) && !empty($price) && !empty($chambres))
    {
        //save to db
        $query = "insert into reservation (nom,phone,date_arrive,date_deppart,price,chambres) values('$nom','$phone','$date_arrive','$date_deppart','$price','$chambres')";

        mysqli_query($con, $query);
        header("Location: index.php");
        die;
    }else
    {
        echo"<p class='alert'>Please enter valid informarion!</p>";
    }
}
  
  

?>
        
<!DOCTYPE html>
<html>
    <?php require("head.php");?>
    <body>
        <?php require("header.php");?>
        <section class="reservation form-temp" id="reservation">
            <h2>Réserver dés <span>maintenant</span></h2>
            <form action="reservation.php" method="POST" target="_self">
                <input name="nom" type="text" placeholder="Nom">
                <input name="phone" type="text" placeholder="numéro de téléphone">
                <label for="date_arrive">Date d'arrivé :</label>
                <input type="date" class="date" name="date_arrive" id="date_arrive" />
                <label for="date_deppart">Date de départ :</label>
                <input type="date" class="date" name="date_deppart" id="date_deppart" />
                <h2>choisir votre chambre </h2>
                <label for="price">price</label>
                <input type="text" name="price" id="price" placeholder="prix par nuit" readonly >
                <div class="chambresContainer">
                    <input onclick='setPrice("300€")'  type="radio" name="chambres" id="chambre1" value="1" class="input-hidden" />
                    <label for="chambre1">
                        <img src="images/Chambre1.jpg" alt="chambre 1" />
                    </label>
    
                    <input onclick='setPrice("320€")'  type="radio" name="chambres" id="chambre2"  value="2" class="input-hidden" />
                    <label for="chambre2" >
                        <img src="images/Chambre2.jpg" alt="chambre 2" />
                    </label>

                    <input onclick='setPrice("310€")' type="radio" name="chambres" id="chambre3"  value="3" class="input-hidden" />
                    <label for="chambre3">
                        <img src="images/Chambre3.jpg" alt="chambre 3" />
                    </label>
    
                    <input onclick='setPrice("370€")' type="radio" name="chambres" id="chambre4"  value="4" class="input-hidden" />
                    <label for="chambre4" >
                        <img src="images/Chambre4.jpg" alt="chambre 4" />
                    </label>
                    <input onclick='setPrice("240€")' type="radio" name="chambres" id="chambre5"  value="5" class="input-hidden" />
                    <label for="chambre5">
                        <img src="images/Chambre5.jpg" alt="chambre 5" />
                    </label>
    
                    <input onclick='setPrice("280€")' type="radio" name="chambres" id="chambre6"  value="6" class="input-hidden" />
                    <label for="chambre6" >
                        <img src="images/Chambre6.jpg" alt="chambre 6" />
                    </label>

                    <input onclick='setPrice("390€")' type="radio" name="chambres" id="chambre7"  value="7" class="input-hidden" />
                    <label for="chambre7">
                        <img src="images/Chambre7.jpg" alt="chambre 7" />
                    </label>
    
                    <input onclick='setPrice("400€")' type="radio" name="chambres" id="chambre8"  value="8" class="input-hidden" />
                    <label for="chambre8" >
                        <img src="images/Chambre8.jpg" alt="chambre 8" />
                    </label>
                </div>

                <button class="btn">Réserver</button>
            </form>
        </section>
        
            <?php require("footer.php");?>
            <script>
                function setPrice(price){
                    inputPrice=document.getElementById('price');
                    console.log(inputPrice.value);
                    inputPrice.value=price;
                }
            </script>
            <script src="script.js"></script>

    </body>
</html>