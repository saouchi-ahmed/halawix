
<head>
  <title>ajout_page</title>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-W3EXWSC6KG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-W3EXWSC6KG');
</script>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="ajouter_un_produit.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <br> <br> 
   
<style>

    #btn_modifies{
     
      background-color:0562ec; /* Green */     border: none;
     color: white;
    
     text-align: center;
     text-decoration: none;
   
     font-size: 16px;
     width: 100px;
     height: 50px;
     border-radius: 10px;
     margin-right:40px ;
     margin-top:0px ;
     padding-top: 0px;
      
     position: static;
   
   
   }
   #btn_delette{
     
     background-color:0562ec; /* Green */     border: none;
     color:rgb(250, 188, 129);
    text-align: center;
    text-decoration: none;
  
    font-size: 16px;
    width: 100px;
    height: 50px;
    border-radius: 10px;
    margin-left:0px ;
    margin-top:0px ;
    padding-top: 0px;
     
    position: static;
  
  
  }
  </style>
<?php 
/*
$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost; dbname=testgateau;",$username,$password);
*/

$username = "if0_34526240";
$password = "zlMUCOZJ97";
$database = new PDO("mysql:host=sql301.infinityfree.com; dbname=if0_34526240_test;",$username,$password);

ob_start();
//session_start();

$j=$_COOKIE["user"];

function afichecmdspecial($j,$database)
{
  
 
  $SEARCH = $database->prepare("SELECT * FROM `commandesper` WHERE nommagasin='$j'");
  $SEARCH->execute();
  
  foreach($SEARCH AS $data)
  { 
      $dossienomclient=strtolower( $data['nomclient'].$data['prenomclient'].$data['num']);

/*
   <form  method="POST" id="card1"  enctype="multipart/form-data">
<br>

<h4 for="cars">Choisissez la taille:</h4> 
<br>


  <label for="cars" >nombre des étage</label> <br>
<select name="nombredeetage" id="etage" onchange="change()">
  <option value="1">1 étage</option>
  <option value="2">2 étage</option>
  <option value="3">3 étage</option>
  <option value="4">4 étage</option>
</select>
<div id="divv" >
<label for="quantity">Hauteur (cm)</label><br>
  <input type="number" id="quantity" name="hauteuretage1" min="1" max="200">
  
  <br> 
  <label for="quantity">Diameter (cm)</label> <br>
  <input type="number" id="quantity" name="diameteretage1" min="1" max="200">
  
  
  </div>


  <label for="cars">pour:</label> <br>

<select name="pour" id="cars">
  <option value="anniversaire">anniversaire</option>
  <option value="couple">couple</option>
  <option value="mariage">mariage</option>
  <option value="fêtes">fêtes</option>
</select>
<br>
<label for="cars">Choisissez le nombre de personne:</label> <br>
  <input type="number" id="quantity" name="nombredeperson" min="1" max="200" placeholder="1">
  
</select>
<br>
<label for="cars">Choisissez le goût:</label> <br>
<select name="gout" id="cars">
  <option value="banana">banana </option>
  <option value="Fraise">Fraise</option>
  <option value="pêche">pêche</option>
  <option value="Citron">Citron</option> 
  
</select>
<br>
<label for="lname">suggérer un modèle</label><br>
       
       <input type="file" name="photomodele"  style="  width: 130px;" />
       <br>
       <label for="lname" style="font-size:15px;">La phrase que tu veux écrire sur un gâteau</label><br>
       
  <input id="quantity" name="ecrire">
  <br><label for="quantity">ou suggérer un photo :</label><br>
       <input type="file" name="photoecrire"  style="  width: 130px;" />
      
       <br><label for="quantity">Nom :</label><br>
  <input  id="quantity" name="nomclient">
  <br><label for="quantity">Prenom :</label><br>
  <input id="quantity" name="prenomclient">
  <br><label for="quantity">Numero de telephone :</label><br>
  <input  type="number" id="quantity" name="numero" >
  <br><label for="quantity">Adresse :</label><br>
  <input id="quantity" name="adresse">
  <br><label for="quantity">date de reception : </label><br>
  <input type="text" id="quantity" name="datereception" placeholder="MM/DD/YYYY"  onfocus="(this.type='date')"><br>

       */


  
    echo '
     <center>
    <div id="card1" class="class_div_cadr"> <h6>cmd_special</h6> <br> <label> ' .$data['nomclient'] .' ,</label><label>' .$data['prenomclient'] .' |</label><label>' .$data['datedecommande'] .' ,</label><label>' .$data['datedereception'] .' </label> 
    
    </center>
    <form method="POST"  enctype="multipart/form-data" >
  <center>
  <div class="class_div_animation" id="card1">

  
  
  <div >
  
  <h5  id="id_adresse" > Nom : <br> <input type="text" id="input_adresse" name="input_adresse" value="' .$data['nomclient'] .'" size="15" /> </h5>
  <h5 id="id_telephone">Prenom : <br> <input type="text" id="input_telephone" name="input_telephone" value="' .$data['prenomclient'] .'" size="15" /> </h5>
    <h5  id="id_adresse" > Numero de telephone : <br> <input type="text" id="input_adresse" name="input_adresse" value="' .$data['num'] .'" size="15" /> </h5>
  <h5 id="id_telephone">Adresse : <br> <input type="text" id="input_telephone" name="input_telephone" value="' .$data['adresse'] .'" size="15" /> </h5>
    <h5  id="id_adresse" > pour : <br> <input type="text" id="input_adresse" name="input_adresse" value="' .$data['pour'] .'" size="15" /> </h5>
  <h5 id="id_telephone">le nombre de personne: <br> <input type="text" id="input_telephone" name="input_telephone" value="' .$data['nombredeperson'] .'" size="15" /> </h5>
    <h5  id="id_adresse" > gout : <br> <input type="text" id="input_adresse" name="input_adresse" value="' .$data['gout'] .'" size="15" /> </h5>
  <h5 id="id_telephone">photo de modèle:<h5  id="id_img"><a href="photos/'.$_COOKIE["user"].'/'. $dossienomclient.'/'.$data['photodemodel'].'" download ><img src="photos/'.$_COOKIE["user"].'/'. $dossienomclient.'/'.$data['photodemodel'].'" style="  width: 200px; height: 100px;" id="input_img"></a> </h5></h5>
      <h5  id="id_adresse" > La phrase que vous écris sur un gâteau : <br> <input type="text" id="input_adresse" name="input_adresse" value="' .$data['ecrire'] .'" size="15" /> </h5>
        <h5 id="id_telephone">photo de la phrase:<h5  id="id_img"><a href="photos/'.$_COOKIE["user"].'/'. $dossienomclient.'/'.$data['photodeecrire'].'" download ><img src="photos/'.$_COOKIE["user"].'/'. $dossienomclient.'/'.$data['photodeecrire'].'" style="  width: 200px; height: 100px;" id="input_img"></a> </h5></h5>
      <h5  id="id_adresse" > nombre du etages: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['nombreetage'] .'" size="15" /> </h5>
      <div id="divv">';  testetage($data); echo'</div>
       <h5  id="id_adresse" > date de commande: <br> <input type="text" id="input_adresse" name="input_adresse" value="' .$data['datedecommande'] .'" size="15" /> </h5>
        <h5  id="id_adresse" > date de reception: <br> <input type="text" id="input_adresse" name="input_adresse" value="' .$data['datedereception'] .'" size="15" /> </h5>

  

   
  </div>
  
  </div>
  </center>
  </form >
   </div>
   ';
  

  }
}
function afichecmdnrml($j,$database)
{
  
 
  $SEARCH = $database->prepare("SELECT * FROM `commandesnrml` WHERE nommagasin='$j'");
  $SEARCH->execute();
  
  foreach($SEARCH AS $data)
  { 
      $dossienomclient=strtolower( $data['nomclient'].$data['prenomclient'].$data['num']);

  
    echo '
     <center>
    <div id="card1" class="class_div_cadr"> <h6>cmd_normale</h6> <br> <label> ' .$data['nomclient'] .' ,</label><label>' .$data['prenomclient'] .' |</label><label>' .$data['datedecommande'] .' ,</label><label>' .$data['datedereception'] .' </label> 
    
    </center>
    <form method="POST"  enctype="multipart/form-data" >
  <center>
  <div class="class_div_animation" id="card1">

  
  
  <div >
  
  <h5  id="id_adresse" > Nom : <br> <input type="text" id="input_adresse" name="input_adresse" value="' .$data['nomclient'] .'" size="15" /> </h5>
  <h5 id="id_telephone">Prenom : <br> <input type="text" id="input_telephone" name="input_telephone" value="' .$data['prenomclient'] .'" size="15" /> </h5>
    <h5  id="id_adresse" > Numero de telephone : <br> <input type="text" id="input_adresse" name="input_adresse" value="' .$data['num'] .'" size="15" /> </h5>
  <h5 id="id_telephone">Adresse : <br> <input type="text" id="input_telephone" name="input_telephone" value="' .$data['adresse'] .'" size="15" /> </h5>
   <h5  id="id_adresse" > Nom de produit : <br> <input type="text" id="input_adresse" name="input_adresse" value="' .$data['nomproduit'] .'" size="15" /> </h5>
    <h5  id="id_adresse" > pour : <br> <input type="text" id="input_adresse" name="input_adresse" value="' .$data['pour'] .'" size="15" /> </h5>
  <h5 id="id_telephone">le nombre de personne: <br> <input type="text" id="input_telephone" name="input_telephone" value="' .$data['nombredeperson'] .'" size="15" /> </h5>
    <h5  id="id_adresse" > gout : <br> <input type="text" id="input_adresse" name="input_adresse" value="' .$data['gout'] .'" size="15" /> </h5>
          <h5  id="id_adresse" > La phrase que vous écris sur un gâteau : <br> <input type="text" id="input_adresse" name="input_adresse" value="' .$data['ecrire'] .'" size="15" /> </h5>
  <h5 id="id_telephone">photo de la phrase :<h5  id="id_img"><a href="photos/'.$_COOKIE["user"].'/'. $dossienomclient.'/'.$data['photodeecrire'].'" download ><img src="photos/'.$_COOKIE["user"].'/'. $dossienomclient.'/'.$data['photodeecrire'].'" style="  width: 200px; height: 100px;" id="input_img"></a> </h5></h5>
   <h5  id="id_adresse" > Hauteur etage 1: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['hauteuretage1'] .'" size="15" /> </h5>
  <h5  id="id_adresse" > Diameter etage 1: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['diameteretage1'] .'" size="15" /> </h5>
         <h5  id="id_adresse" > date de commande: <br> <input type="text" id="input_adresse" name="input_adresse" value="' .$data['datedecommande'] .'" size="15" /> </h5>
        <h5  id="id_adresse" > date de reception: <br> <input type="text" id="input_adresse" name="input_adresse" value="' .$data['datedereception'] .'" size="15" /> </h5>

  

   
  </div>
  
  </div>
  </center>
  </form >
   </div>
   ';
  
  }
}
function testetage($data){
    if($data['nombreetage']==1){echo '<div id="cadr1">
 <h5  id="id_adresse" > Hauteur etage 1: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['hauteuretage1'] .'" size="15" /> </h5>
  <h5  id="id_adresse" > Diameter etage 1: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['diameteretage1'] .'" size="15" /> </h5>
  </div>';
}
 
    if($data['nombreetage']==2){echo '<div id="cadr1">
 <h5  id="id_adresse" > Hauteur etage 1: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['hauteuretage1'] .'" size="15" /> </h5>
  <h5  id="id_adresse" > Diameter etage 1: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['diameteretage1'] .'" size="15" /> </h5>
   <h5  id="id_adresse" > Hauteur etage 2: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['hauteuretage2'] .'" size="15" /> </h5>
  <h5  id="id_adresse" > Diameter etage 2: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['diameteretage2'] .'" size="15" /> </h5>
  </div>';
} 
    if($data['nombreetage']==3){echo '<div id="cadr1">
 <h5  id="id_adresse" > Hauteur etage 1: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['hauteuretage1'] .'" size="15" /> </h5>
  <h5  id="id_adresse" > Diameter etage 1: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['diameteretage1'] .'" size="15" /> </h5>
   <h5  id="id_adresse" > Hauteur etage 2: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['hauteuretage2'] .'" size="15" /> </h5>
  <h5  id="id_adresse" > Diameter etage 2: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['diameteretage2'] .'" size="15" /> </h5>
     <h5  id="id_adresse" > Hauteur etage 3: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['hauteuretage3'] .'" size="15" /> </h5>
  <h5  id="id_adresse" > Diameter etage 3: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['diameteretage3'] .'" size="15" /> </h5>
  </div>';
}
    if($data['nombreetage']==4){echo '<div id="cadr1">
 <h5  id="id_adresse" > Hauteur etage 1: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['hauteuretage1'] .'" size="15" /> </h5>
  <h5  id="id_adresse" > Diameter etage 1: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['diameteretage1'] .'" size="15" /> </h5>
   <h5  id="id_adresse" > Hauteur etage 2: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['hauteuretage2'] .'" size="15" /> </h5>
  <h5  id="id_adresse" > Diameter etage 2: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['diameteretage2'] .'" size="15" /> </h5>
     <h5  id="id_adresse" > Hauteur etage 3: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['hauteuretage3'] .'" size="15" /> </h5>
  <h5  id="id_adresse" > Diameter etage 3: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['diameteretage3'] .'" size="15" /> </h5>
       <h5  id="id_adresse" > Hauteur etage 4: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['hauteuretage4'] .'" size="15" /> </h5>
  <h5  id="id_adresse" > Diameter etage 4: <br> <input type="text" id="etage" name="input_adresse" value="' .$data['diameteretage4'] .'" size="15" /> </h5>
  </div>';
}
}
function afichecmparpiece($j,$database)
{
  
 
  $SEARCH = $database->prepare("SELECT * FROM `commandeparspiece` WHERE nommagasin='$j'");
  $SEARCH->execute();
  
  foreach($SEARCH AS $data)
  { 
      $dossienomclient=strtolower( $data['nomclient'].$data['prenomclient'].$data['num']);

  
    echo '
     <center>
    <div id="card1" class="class_div_cadr"> <h6>cmd_par_piece</h6> <br> <label> ' .$data['nomclient'] .' ,</label><label>' .$data['prenomclient'] .' |</label><label>' .$data['datedecommande'] .' ,</label><label>' .$data['datedereception'] .' </label> 
    
    </center>
    <form method="POST"  enctype="multipart/form-data" >
  <center>
  <div class="class_div_animation" id="card1">

  
  
  <div >
  
  <h5  id="id_adresse" > Nom : <br> <input type="text" id="input_adresse" name="input_adresse" value="' .$data['nomclient'] .'" size="15" /> </h5>
  <h5 id="id_telephone">Prenom : <br> <input type="text" id="input_telephone" name="input_telephone" value="' .$data['prenomclient'] .'" size="15" /> </h5>
    <h5  id="id_adresse" > Numero de telephone : <br> <input type="text" id="input_adresse" name="input_adresse" value="' .$data['num'] .'" size="15" /> </h5>
  <h5 id="id_telephone">Adresse : <br> <input type="text" id="input_telephone" name="input_telephone" value="' .$data['adresse'] .'" size="15" /> </h5>
   <h5  id="id_adresse" > Nom de produit : <br> <input type="text" id="input_adresse" name="input_adresse" value="' .$data['nomproduit'] .'" size="15" /> </h5>
   
  <h5 id="id_telephone">le nombre de piece: <br> <input type="text" id="input_telephone" name="input_telephone" value="' .$data['nombredepiece'] .'" size="15" /> </h5>
         <h5  id="id_adresse" > date de commande: <br> <input type="text" id="input_adresse" name="input_adresse" value="' .$data['datedecommande'] .'" size="15" /> </h5>
        <h5  id="id_adresse" > date de reception: <br> <input type="text" id="input_adresse" name="input_adresse" value="' .$data['datedereception'] .'" size="15" /> </h5>

  

   
  </div>
  
  </div>
  </center>
  </form >
   </div>
   ';
  
  }
}
afichecmdspecial($j,$database);
afichecmdnrml($j,$database);
afichecmparpiece($j,$database);
////////////////////////////////////////////////////////////////////////////////


if(isset($_POST['btn_delete'])){
 

  $SEARCH = $database->prepare("DELETE FROM `produit` WHERE nomproduit = ?");
  $SEARCH->execute([$_POST['name_nomproduit']]);
  ob_end_clean();
  header('Location: ajouter_un_produit.php');
}

if(isset($_POST['btn_modifies'])){
  $myfile= $_FILES['p'];
  move_uploaded_file( $_FILES["p"]["tmp_name"], 'photos/'.$_COOKIE["user"].'/'.$myfile["name"]);
  $img=$myfile["name"];
  $np = $_POST['name_nomproduit'];
  $adresse =$_POST['input_adresse'];
  $telephone =$_POST['input_telephone'];
  $prix =$_POST['input_prix'];
 
  if($img!=""){

  
   
    $SEARCH = $database->prepare("UPDATE `produit` SET `adresse`='$adresse',`telephone`='$telephone',`prix`='$prix' , `img`='$img' WHERE `nomproduit`= '$np'");
    $SEARCH->execute();
    ob_end_clean();
  header('Location: ajouter_un_produit.php');
}
else
{

  $SEARCH = $database->prepare("UPDATE `produit` SET `adresse`='$adresse',`telephone`='$telephone',`prix`='$prix'  WHERE `nomproduit`= '$np'");
  $SEARCH->execute();
  ob_end_clean();
header('Location: ajouter_un_produit.php');
}
         
  
  }

?>
<style>
    #card1 {
      
    background-color:#dd5a44; /* Green */
    border: none;
    color: white;
   width: 80%;
    text-align: center;
    text-decoration: none;
  
  
  }
.class_div_animation{


display: none;
}
  </style>
      <script>
      
          var class_div_cadr = document.querySelectorAll('.class_div_cadr');
      var class_div_animation = document.querySelectorAll('.class_div_animation');

    
      class_div_cadr.forEach((element, index) => {
      element.addEventListener('click', function(){
          if(class_div_animation[index].style.display!="block")
          {
       
        class_div_animation[index].style.display = "block";}
        else{
          class_div_animation[index].style.display = "none";
        }
      });
    })





</script>

