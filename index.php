<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylx.css?v=1"> 
   <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Climate+Crisis:YEAR@1979&display=swap" rel="stylesheet">
</head>

<body>
  <?php 
    include("functions.php");
    include("navbar.php")
  ?>

  <div class="sifou">
       <h3>Ready for a ride</h3>
    </div>  

  <section>
    <?php showTopCars()?>
  </section>
  
  <section>
    <?php showBrands()?>
  </section>

  <section>
    <?php showCategories()?>
  </section>

  <section>
    <div id="about_us">
      <div id="ab.head">
        <h2> about us </h2>
      </div>
      <div>
        <p class="ab-txt">  Auto est votre partenaire de confiance pour l'achat de véhicules neufs et d'occasion en Algérie.
          Depuis notre création, nous mettons tout en œuvre pour offrir à nos clients une expérience d'achat simple,
          transparente et satisfaisante. Notre équipe de professionnels est à votre service pour vous conseiller
          et vous accompagner dans le choix du véhicule qui correspond à vos besoins et à votre budget.
          Qualité, confiance et service client sont les valeurs qui nous définissent..</p><br>
      </div>
    </div>
  </section>
 
</body>

<footer>
  <form>
    <h3 style="color: rgb(77, 133, 182);">Envoyez-nous un message  </h3>
    <input type="text" placeholder="Votre nom">
    <input type="email" placeholder="Votre email">
    <input type="text" placeholder="Votre message">
    <input type="submit" value="Envoyer">
  </form>
  <div class="contact">
    <h3>Contactez-Nous</h3>
    <p> Adresse : Alger, Algérie</p>
    <p> Téléphone : +213 55 12 34 56</p>
    <p> Email : contact@goldenauto.dz</p>
    <p> Horaires :  09h00 – 18h00</p>
  </div>
  
  <div style="color: aliceblue; text-align: center">
    &copy; 2026  Auto luxe project 
  </div>
</footer>