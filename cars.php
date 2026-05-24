<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylx.css">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php 
    include("functions.php");
    include("navbar.php")?>

  <div class="container" style="margin-top: 70px; display: flex; align-items: center; flex-direction: row; background-color: #f0f0f0; padding: 20px; border-radius: 10px;">
    <h1>Cars</h1><br><br>
    <form action="cars.php" method="post">
        <label style="margin: 5 px;">choise your filter</label> <br>
        
        <select name="filter_type" id="filter_type" placeholder="none">
          <?php
            if(isset($_POST['filter_type']))
              displayFilterTypes($_POST['filter_type']);
            else{
              displayFilterTypes("brand");
            }
          ?>
        </select> 
      
        <?php 
          if(!empty($_POST['filter_type'])){
              echo"<label style='margin-right: 10px;'>filter value</label> <br>
              <select name='filter_value' id='filter_value'>";
              filter_value($_POST['filter_type']);
              
              echo"</select> ";
          }
      ?>    
      <input type="submit" name="submit" id="show-cars-btn">
      </form>
        <div id="cars-list"></div>      
</div>
  <section>
        <div class="DEALS">
          <h2>our cars</h2>
          <?php 
            if(isset($_POST['filter_type']) && isset($_POST['filter_value'])){
              displayCarsWithFilter($_POST['filter_type'], $_POST['filter_value'], isset($_POST['submit']));
            }else{
              displayCarsWithFilter("", "", 0);
            }
            
            ?>
  </section>
</body>
   <footer style="background-color: rgb(1, 11, 61);">
    <form  >
      <h3 style="color: rgb(77, 133, 182);">Envoyez-nous un message  </h3>
      <input type="text" placeholder="Votre nom">
      <input type="email" placeholder="Votre email">
      <input type="text" placeholder="Votre message">
      <input type="submit" value="Envoyer">
    </form>