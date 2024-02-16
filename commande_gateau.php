

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
        $dossienomclient=strtolower($_POST["nomclient"].$_POST["prenomclient"].$_POST["numero"]);

        mkdir("photos/$nommagasin/$dossienomclient",0777);

       //$nom= $_SESSION["nomm"]; 
      

           $myfile2= $_FILES['photoecrire'];
           move_uploaded_file( $_FILES["photoecrire"]["tmp_name"], 'photos/'.$nommagasin.'/'.$dossienomclient.'/'.$myfile2["name"]);

            $photoecrire=$myfile2["name"];
           $datereception=$_POST["datereception"];
           $adresse=$_POST["adresse"];
           $numero=$_POST["numero"];
           $prenomclient=$_POST["prenomclient"];
           $nomclient=$_POST["nomclient"];
           $ecrire=$_POST["ecrire"];
           $gout=$_POST["gout"];
           $nombredeperson=$_POST["nombredeperson"];
           $pour=$_POST["pour"];


           $hauteuretage1=0;

           $diameteretage1=0;


           

        $datedecommande=date('d-m-y');



           $sql = "INSERT INTO `commandesnrml`(`nommagasin`, `datedecommande`, `hauteuretage1`, `diameteretage1`, `pour`, `nombredeperson`, `gout`, `ecrire`, `photodeecrire`, `nomclient`, `prenomclient`, `adresse`, `datedereception`, `num`, `nomproduit`)VALUES ( '$nommagasin', '$datedecommande','$hauteuretage1','$diameteretage1','$pour','$nombredeperson','$gout','$ecrire','$photoecrire','$nomclient','$prenomclient','$adresse','$datereception','$numero','$nomproduit')";
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
<br>

<h4 for="cars">Choisissez la taille:</h4> 
<br>



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
