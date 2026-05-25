<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylx.css">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>
    <?php include("navbar.php");
          include("functions.php");
          showCarInfo($_GET['id']);
    ?>

    
        <section style="clear: both; margin-top: 50px;">
            <div class="saimilaire">
            <h2>Meilleures Offresaimilaire</h2>
              <?php displaySimilarCars($_GET['id']); ?>
            </div>
        </section>

           <footer style="background-color: rgb(1, 11, 61);">
    <form  >
      <h3 style="color: rgb(77, 133, 182);">Envoyez-nous un message  </h3>
      <input type="text" placeholder="Votre nom">
      <input type="email" placeholder="Votre email">
      <input type="text" placeholder="Votre message">
      <input type="submit" value="Envoyer">
    </form>
    <div class="contact" style="color: aliceblue;">
      <h3>Contactez-Nous</h3>
      <p> Adresse : Alger, Algérie</p>
      <p> Téléphone : +213 55 12 34 56</p>
      <p> Email : contact@goldenauto.dz</p>
      <p> Horaires :  09h00 – 18h00</p>
    </div>
    
    <div style="color: aliceblue; text-align: center; background-color: darkgrey;">
      &copy; 2026 Golden Auto — Tous droits réservés
    </div>
  </footer>

                   
                       
        

        
       
                



        














</body>
</html>
