<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css2.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<?php
 $nom=$_COOKIE["user"];
echo'
<center>
<br><br><br>
<div id ="cadr" class="class_div_cadr" >
<br><br>
<a href="acount_setting.php" style=" width:80%;  background-color:#2d545e; color:white; padding: 10px 50px;"   >account setting</a ><br><br>
<a  href="orders.php"style=" width:80%;  background-color:#2d545e; color:white;padding: 10px 27px;"   >your customer s order</a ><br><br>
<a href="input_new.php" style="   background-color:#2d545e; color:white;padding: 10px; width:80%;"   >Introducing a new product</a ><br>
<br>
  <h5 id="id_telephone">lien de votre magasin : <br> <input type="text" id="input_telephone" name="input_telephone" value="7mama.great-site.net/magasin.php?nommagasin='.$nom .'&&v=1" size="19" /> </h5><br>

 </div>
 </center>
';
 ?>
 <style>


    #label_prix {
      
    border: none;
    color:   #12343b;
   
padding-bottom: 10px
  
  
  }
     #label_produit {
       font-style: oblique;
     font-size: 18px;
    color:   #12343b;
    

  
  
  }
     #cadr {
      
    background-color:#dd5a44; /* Green */
    border: none;
     color:   white;
   width: 80%;
    text-align: center;
    text-decoration: none;
  
  
  }


  </style>