
<center>
<?php
//session_start();

function print_true( $f){
    echo '
    <center>
    <br>
 <a href="new_user.php"  style="color:red;"><h5> Creer un compte </h5> </a>  
</center>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="login_css.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<center>
  
<br>
    <form  method="GET" id="card1" >
    <label for="fname">'.$f.'</label> <br>
      <label for="fname">Nom</label> <br>
      <input type="text" id="fname" name="nom"><br><br>
      <label for="lname">Mot de passe</label><br>
      <input type="text" id="lname" name="motpass"><br><br>
      <button id="btn_login2" style="background-color: #2d545e;" type="submit" name="w">Login</button>
      
      
    
    </form>
    </center>
    <center>
    <a href="index.php" id="btn_Home" style="background-color: #2d545e;" > Home </a>  
    <br>    <br> 

    <a href="contact_us.php" style="color: #2d545e;" ><h2> Contact <br> Us </h2> </a>  
    </center>
    ';
}
function print_false( $f){
   
    echo '
    <center>
    <br>
 <a href="new_user.php"  style="color:red;"><h5> Creer un compte </h5> </a>  
</center>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="login_css.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<center>
  
<br>
    <form  method="GET" id="card1" >
    <label for="fname"><h3 style="color:#2d545e;">'.$f.'</h3></label> <br>
      <label for="fname">Nom</label> <br>
      <input type="text" id="fname" name="nom"><br><br>
      <label for="lname">Mot de passe</label><br>
      <input type="text" id="lname" name="motpass"><br><br>
      <button id="btn_login2" style="background-color: #2d545e;" type="submit" name="w">Login</button>
      
      
    
    </form>
    </center>
    <center>
    <a href="index.php" id="btn_Home" style="background-color: #2d545e;" > Home </a>  
    <br>    <br> 

    <a href="contact_us.php" style="color: #2d545e;" ><h2> Contact <br> Us </h2> </a>  
    </center>
    ';
}
print_true("");




/*
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "testgateau";  
$con = mysqli_connect($host, $user, $password, $db_name);  

*/
$host = "sql301.infinityfree.com";  
$user = "if0_34526240";  
$password = 'zlMUCOZJ97';  
$db_name = "if0_34526240_test";  
$con = mysqli_connect($host, $user, $password, $db_name); 

if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
} 
if(isset($_GET['w']))
{

  

    $username =  $_GET['nom'];
    $password =  $_GET['motpass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from users where nom = '$username' and motpass = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            
           // $_SESSION['nomm']=$_GET['nom'];
           $cookie_name = "user";
           $cookie_value =strtolower($_GET['nom']); 
           setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
            header('Location: ajouter_un_produit.php');
        }  
        else{  
            ob_end_clean();
            print_false("Ereurr");
        }     
    }
 
?>
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