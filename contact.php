<?php
session_start();
    include("connection.php");
    include("functions.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        if(!empty($nom) && !empty($email) && !empty($message))
        {
            //save to db
            $query = "insert into message (nom,email,message) values('$nom','$email','$message')";

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
        <section class="contact form-temp" id="contact">
        <h2>Pour nous <span>contacter</span></h2>
            <form action="#" method="POST" target="_self">
                <input name="nom" type="text" placeholder="Nom">
                <input name="email" type="email" placeholder="Email">
                <input name="message" type="text" placeholder="Votre message...">
                <button class="btn">Soumettre</button>
            </form>
        </section>
        <?php require("footer.php");?>
    </body>
</html>