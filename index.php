        
        
        
<?php
   // session_start();
   // include("connection.php");
   // include("functions.php");
   // $user_data = check_login($con);
?>
        
<!DOCTYPE html>
<html>
    <?php require("head.php");?>
    <body>
        <?php require("header.php");?>
        
        <div class="vp">
           <h2>Une <span>chambre</span> d'exception pour des clients d'exception
           </h2>
           <p>Toutes nos équipes sont mobilisées pour vous accueillir en toute sécurité.</p>
        </div>
        <section class="vp-1" id="offre">
        <h3>Nos denières acquisitions</h3>
        <div class="container">
            <div class="item">
                <img src="./images/Chambre1.jpg" alt="maison-1">
                <p>chambre 1</p>
                <div class="separator"></div>
                <p>390 &#8364; - 420&#36;</p>
            </div>
            <div class="item">
                <img src="./images/Chambre2.jpg" alt="maison-2">
                <p>chambre 2</p>
                <div class="separator"></div>
                <p>390 &#8364; - 420&#36;</p>
            </div>
            <div class="item">
                <img src="./images/Chambre3.jpg" alt="maison-3">
                <p>chambre 3</p>
                <div class="separator"></div>
                <p>390 &#8364; - 420&#36;</p>
            </div>
        </div>
    </section>
    <section>
        <p class="title">Services</p>
        <div class="services" id="services">
            <img src="./images/service1.jpg" alt="service1">
            <div>
                <h2>le meilleur <span>home</span> service</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae adipisci blanditiis laudantium aliquam aspernatur nostrum nihil, laborum nam asperiores eaque est, vel id rerum! Illum maiores sapiente expedita eligendi qui!</p>
            </div>
        </div>
        <div class="services" id="services" style="margin-top:2rem;">
            <img src="./images/service2.jpg" alt="service1">
            <div>
                <h2>Visiter les <span>environs</span>  est notre responsabilité </h2>
                <p>Voire un chauffeur qui vous suit tout au long de votre séjour.</p>
            </div>
        </div>
        <div class="services" id="services" style="margin-top:2rem ">
            <img src="./images/service3.jpg" alt="service1">
            <div>
                <h2>Bien Être et <span>spa</span></h2>
                <p>Quoi de mieux que de se détendre dans un bon jacuzzi, se rafraichir dans la piscine et terminer par une petite session de sport pour se revitaliser ?</p>
            </div>
        </div>
    </section>
            <?php require("footer.php");?>
            <script src="script.js">
                
            </script>

    </body>
</html>