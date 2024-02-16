
<head>
  <title>input_new</title>
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
<link rel="stylesheet" href="login_css.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<center>
<?php
 //  $path=  "1/ahmed/";
 // echo require "$path";
//session_start(); 
/*
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "testgateau";  
$conn = mysqli_connect($host, $user, $password, $db_name);  
*/

$servername = "sql301.infinityfree.com";
$username = "if0_34526240";
$password = "zlMUCOZJ97";
$dbname = "if0_34526240_test";
$conn = new mysqli($servername, $username, $password, $dbname);


       if($_SERVER['REQUEST_METHOD']=="POST")
       {      
           
     
       //$nom= $_SESSION["nomm"]; 
       $nom=$_COOKIE["user"];
           $myfile= $_FILES['p'];
           move_uploaded_file( $_FILES["p"]["tmp_name"], 'photos/'.$nom.'/'.$myfile["name"]);
          
  
           $nomproduit=$_POST["nomproduit"];
           $adresse=$_POST["adresse"];
           $telephone=$_POST["telephone"];
           $prix=$_POST["prix"];
             $cake=$_POST["cake"];
           $img=$myfile["name"];
           $sql = "INSERT INTO  produit (nom, nomproduit, adresse,telephone,img,prix,cake)
           VALUES ( '$nom', '$nomproduit', ' $adresse','$telephone','$img','$prix','$cake')";
           if ($conn->query($sql) === TRUE) {
            echo "<center>New record created successfully</center>";
          } else {
            echo "<center>Error: " . $sql . "<br>" . $conn->error."</center>";
          }
          $conn->close();

        
   
   
                
       }
  
   ?>
<br>
    <form  method="POST" id="card1"  enctype="multipart/form-data">
 <div>
      <h5> <?php  echo $_COOKIE["user"]; ?></h5> <br>
    
      <label for="lname">nom de produit</label><br>
      <input type="text" id="lname" name="nomproduit"><br>

      <label for="fname">adresse</label> <br>
      <input type="text" id="fname" name="adresse"><br>
      <label for="lname">telephone</label><br>
      <input type="text" id="lname" name="telephone"><br>
      <label for="lname">prix</label><br>
      <input type="text" id="lname" name="prix"><br>
      <label for="lname">img</label><br>
      <input type="checkbox" id="vehicle1" name="cake" value="TRUE">
<label for="vehicle1">cake design</label><br>
       
    <input type="file" name="p"  style="  width: 130px;" />
 <br>
 <br>
      <button id="btn_login2" name="w"style="background-color: #2d545e;" >valider</button>
      
    </div>
    
    </form>
    </center>
    <center>
    <a href="index.php" id="btn_Home"  style="background-color: #2d545e;"> Home </a>  
    </center>
     <style>
      #btn_Home {
        background-color:#0562ec;
        color: white;
        padding: 20px 27px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 40px;
        margin-top: 70px;
     
     }

    #card1 {
      
    background-color:#dd5a44; /* Green */
    border: none;
    color: white;
   width: 80%;
    text-align: center;
    text-decoration: none;
   border-radius: 20px;
  
  }
  </style>
