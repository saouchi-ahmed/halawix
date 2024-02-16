

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
   $nom=$_COOKIE["user"];

       if($_SERVER['REQUEST_METHOD']=="POST")
       {      
           
     
       //$nom= $_SESSION["nomm"]; 
        
           $myfile= $_FILES['p'];
           move_uploaded_file( $_FILES["p"]["tmp_name"], 'photos/'.$nom.'/'.$myfile["name"]);
          
  
        
           $motpass=$_POST["motpass"];
           $inst=$_POST["inst"];
           $fb=$_POST["fb"];
           $logo=$myfile["name"];
           $sql = "UPDATE `users` SET `motpass`='$motpass',`inst`='$inst',`fb`='$fb',`logo`='$logo' WHERE nom='$nom'";
           if ($conn->query($sql) === TRUE) {
            echo "<center>New record created successfully</center>";
          } else {
            echo "<center>Error: " . $sql . "<br>" . $conn->error."</center>";
          }
          $conn->close();

        
   
   
                
       }
  
   ?>
<br><br>


<form  method="POST" id="card1"  enctype="multipart/form-data">
<br>

<label for="quantity">Account setting</label>

<?php echo '<h4>'.$nom.'</h4>' ;?>

  <br> 
  <label for="quantity">Mots de pass </label><br>
  <input  id="quantity" name="motpass">
  <br><br>
  <label for="quantity">Url of instagram</label><br>
  <input  id="quantity" name="inst">
  <br><br>
  <label for="quantity">Url of faceboock </label><br>
  <input  id="quantity" name="fb">
  <br><br>


<label for="lname">Input your logo</label><br>
       
       <input type="file" name="p"  style="  width: 130px;" />
       <br>
       <br>
       <button id="btn_login2" style="background-color: #2d545e;" type="submit" name="w">modify</button>
</form>
<a href="index.php" id="btn_Home" style="background-color: #2d545e;" > Home </a>  
</center>

<br>  <br>


<center>


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
