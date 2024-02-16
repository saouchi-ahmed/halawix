

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
        $nommagasin=$_GET['nommagasin'];
    $nomproduit=$_GET['nomproduit'];


       //$nom= $_SESSION["nomm"]; 
      



           $datereception=$_POST["datereception"];
           $adresse=$_POST["adresse"];
           $numero=$_POST["numero"];
           $prenomclient=$_POST["prenomclient"];
           $nomclient=$_POST["nomclient"];
  
           $nombredepiece=$_POST["nombredepiece"];
     


      


           

        $datedecommande=date('d-m-y');



           $sql = "INSERT INTO `commandeparspiece`(`nommagasin`, `datedecommande`, `nombredepiece`, `nomclient`, `prenomclient`, `adresse`, `datedereception`, `num`, `nomproduit`) VALUES ( '$nommagasin', '$datedecommande','$nombredepiece','$nomclient','$prenomclient','$adresse','$datereception','$numero','$nomproduit')";
           if ($conn->query($sql) === TRUE) {
            echo "<center>New commande created successfully</center>";
          } else {
            echo "<center>Error: " . $sql . "<br>" . $conn->error."</center>";
          }
          $conn->close();

        
   
   
                
       }
  
   ?>

<br>

<form  method="POST" id="card1"  enctype="multipart/form-data">




<label for="cars">Choisissez le nombre de piece:</label> <br>
  <input type="number" id="quantity" name="nombredepiece" min="1" max="1000" placeholder="1" value='1';>
  
       <br><label for="quantity">Nom :</label><br>
  <input  id="quantity" name="nomclient">
  <br><label for="quantity">Prenom :</label><br>
  <input id="quantity" name="prenomclient">
  <br><label for="quantity">Numero de telephone :</label><br>
  <input  type="number" id="quantity" name="numero" >
  <br><label for="quantity">Adresse :</label><br>
  <input id="quantity" name="adresse">
  <br><label for="quantity">date de reception : </label><br>
  <input type="text" id="quantity" name="datereception" placeholder="MM/DD/YYYY"  onfocus="(this.type='date')">

       
  <br><br><br>
        <button id="btn_login2" name="w"style="background-color: #2d545e; font-size: 13px;" >commander</button>
</form>
<a href="index.php" id="btn_Home"  style="background-color: #2d545e;"> Home </a> 
</center>

<br>  <br>
<br>  <br>
<br>  <br>
<style>   
 #card1 {
      
      background-color:#e1b382; /* Green */
      border: none;
      color: white;
     width: 80%;
      text-align: center;
      text-decoration: none;
     border-radius: 20px;
     font-style:normal;
     font-weight: ;
     font: size 27px;
    
    }
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
     #quantity{
    width:63%;
     }
    </style>

  
    <script>
    /*
    var t=0;
    function change(){
   
      var h = document.getElementById("etage").value;
     var divi ="";
      for(t=1;t<=h;t++)
      {
       divi += ` <label for="quantity">Hauteur (cm) de etage `+t+`</label><br>
  <input type="number" id="quantity" name="hauteuretage`+t+`" min="1" max="200">
  
  <br> 
  <label for="quantity">Diameter (cm) de etage `+t+`</label> <br>
  <input type="number" id="quantity" name="diameteretage`+t+`" min="1" max="200">
  
  <br>  `;
      }
      document.getElementById("divv").innerHTML=divi;
    }
 
 */

</script>
