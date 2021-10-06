<!DOCTYPE html>
<html>
   <?php require("head.php");?>

    <body>
        <?php require("header.php");?>
        <form method="POST" target="_self">

            <div class="class1">
                <legend style="text-align:center"><h2><b>Contactez Nous</b></h2></legend>
                <p>
                    <input type="text" name="name" id="name" placeholder="Nom et Prenom *" required>
                </p>
                <p>
                    <input type="text" name="number" id="number" placeholder="Telephone *" required>
                </p>
                <p>
                    <input type="text" name="email" id="email" placeholder="Adresse de messagerie *" required>
                </p>
                <p>
                    <textarea name="message" id="message" placeholder="Message " required style="width: 856px; height: 145px; margin: 0px;"></textarea>
                </p>
                    <button>Envoyer</button> 
            </div>  
        </form>
    </body>
</html>