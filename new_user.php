
<head>
  <title>new_user</title>
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
           
     
    try{
      $nom= strtolower($_POST['nom']);
      $motpass= strtolower($_POST['motpass']);
      $sql = "INSERT INTO  users (nom, motpass)
      VALUES ( '$nom', '$motpass')";
      if ($conn->query($sql) === TRUE) {
       echo '<center><h4  style="color:#5605ec;" >New record created successfully</h4></center>';
         mkdir("photos/$nom",0777);
       //  $_SESSION['nomm']=$_POST['nom'];
       $cookie_name = "user";
       $cookie_value = strtolower($_POST['nom']);
       setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
      header( "refresh:2;url=ajouter_un_produit.php" );
     }
    }
    catch(Exception $e) {  echo '<center><h4  style="color:#5605ec;" ><label style="color:black;">Message:</label><br>  the name you entered already exists</h4></center>';
    }     

        
          $conn->close();

        
   
   
                
       }
  
   ?>
<br>
 <br>
 <br>
    <form  method="POST" id="card1"  >
 <div>
 <br>
 
      <label for="fname">Nom :</label> <br>
      <input type="text" id="fname" name="nom"><br><br>
      <label for="lname">Mot de passe :</label><br>
      <input type="text" id="lname" name="motpass"><br><br>


       
   

      <button id="btn_login2" name="w" style="background-color: #2d545e;">valider</button>
      
    </div>
    
    </form>
    </center>
    <center>
    <a href="index.php" id="btn_Home" style="background-color: #2d545e;" > Home </a>  
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
 </style>
 <style>
    #card1 {
      
    background-color:#e1b382; /* Green */
    border: none;
    color: white;
   width: 80%;
    text-align: center;
    text-decoration: none;
   border-radius: 20px;
  
  }
  </style>