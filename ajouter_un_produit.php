
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

    <button id="btn_ajouter" type="submit" name="btn-ajouter">  <a href="plus.php" > <img src="photos/ajout.png" width="103" height="103"  style=" margin-left: -18px;margin-top: -14px;;"></a></button>
    <button id="btn_home" type="submit" style="background-color: #2d545e;">  <a href="index.php" style=" color:white;" > Home </a>  </button>

    <br> <br> <br>
   
<style>
  #btn_ajouter {
     
     background-color:white; /* Green */
     border: none;
     color: white;
    
     text-align: center;
     text-decoration: none;
   
     font-size: 16px;
     width: 80px;
     height: 80px;
     border-radius: 50px;
     margin-left:79% ;
     padding-top: 0px;
      
     position: fixed; 
     z-index: 100;
   
   }
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

function afiche($j,$database)
{
  
 
  $SEARCH = $database->prepare("select * from produit where nom ='$j' ");
  $SEARCH->execute();
  
  foreach($SEARCH AS $data)
  {
   
  
    echo '
    <form method="POST"  enctype="multipart/form-data" >
  <center>
  <div id="card1">
  <div id="id_nomproduit"  ><h4>Nom de produit :</h4><input type="text" id="input_nomproduit" name="name_nomproduit" value="' .$data['nomproduit'] .'"/></div>

  
  
  <div >
  
  <h5  id="id_adresse" > Adresse : <br> <input type="text" id="input_adresse" name="input_adresse" value="' .$data['adresse'] .'" size="15" /> </h5>
  <h5 id="id_telephone">Telephone : <br> <input type="text" id="input_telephone" name="input_telephone" value="' .$data['telephone'] .'" size="15" /> </h5>
  <h5   id="id_prix">prix : <br><input type="text" id="input_prix" name="input_prix" value="' .$data['prix'] .'" size="15" /></h5>
  <h5  id="id_img"><img src="photos/'.$_COOKIE["user"].'/'.$data['img'].'" style="  width: 200px; height: 100px;" id="input_img"> </h5>
  <input type="file" name="p"  style="  width: 130px;" />
  <br><br>
  
  <button style="background-color: #2d545e;" type="submit" name="btn_modifies" id="btn_modifies">   Modifies </button>
  <button style="background-color: #2d545e;" type="submit" name="btn_delete" id="btn_delette" onclick="h()">   Supprimer</button>
   
  </div>
  
  </div>
  </center>
  </form >
  ';
  
  }
}

afiche($j,$database);
////////////////////////////////////////////////////////////////////////////////
if(isset($_GET['btn-ajouter']))
{ ob_end_clean();
  header('Location: input_new.php');
}

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
  b
  
  }
  </style>


