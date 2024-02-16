
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css2.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


<?php
/*
$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost; dbname=testgateau;",$username,$password);
*/
$username = "if0_34526240";
$password = "zlMUCOZJ97";
$database = new PDO("mysql:host=sql301.infinityfree.com; dbname=if0_34526240_test;",$username,$password);


$SEARCH = $database->prepare("SELECT * FROM users WHERE nom LIKE :value " );
$SEARCH_VALUE = $_GET['nommagasin'];

$SEARCH->bindParam("value",$SEARCH_VALUE);
$SEARCH->execute();
foreach($SEARCH AS $data){
    $inst=$data['inst'];
     $fb=$data['fb'];
}
echo '<center>
  
<br>
<div id="q3" style="background-color: #c89666;">
<form method="GET" >
  <br>
 <h3 style="color:#2d545e;">' .$_GET['nommagasin'].'</h3>
   <img id="btn_ajouter" src="photos/' .$_GET['nommagasin'].'/'.$data['logo'].'" width="103" height="103"  style=" margin-left: -30px;margin-top: 0px;position: fixed;">
    <a href=" '.$inst.'"> <img src="photos/inst.png" height="30px" width="30px" style="  position: fixed;margin-left: -120px;margin-top: 0px;    ">  </a>
     <a href=" '.$fb.'" style="margin-left:10px;"> <img src="photos/fbb.png" height="25px" width="25px" style="  position: fixed;margin-left: 100px;">  </a>

<br>
<!-- <button class="btn btn-outline-warning"  >Search - بحث</button>-->

<!-- <button id="btn_login" type="submit" name="btn-login">login</button>-->


</form>
</div >
</center>
<br><br><br>';
$SEARCH = $database->prepare("SELECT * FROM produit WHERE nom LIKE :value " );
$SEARCH_VALUE = $_GET['nommagasin'];

$SEARCH->bindParam("value",$SEARCH_VALUE);
$SEARCH->execute();
foreach($SEARCH AS $data){

  echo '
  <center>
  <div id ="cadr" class="class_div_cadr" >
  
 
 <br>
 <picture>

 <img  src="photos/'.$data['nom'].'/'.$data['img'].'"  style="width:95%;   ;">
</picture><br>
  <label id="label_produit">' .$data['nomproduit'] .' </label><br>
  
  <div class ="class_div_animation">
    <label >Nom: ' .$data['nom'] .' |</label>
    <label >Adresse: ' .$data['adresse'] .' |</label>
    <label >Tel: ' .$data['telephone'] .'</label><br>


</div>
    <h5 id ="label_prix" >prix :  ' .$data['prix'] .' DA</h5>
    

    
   
 

</div>
</center>
<br>
';

}

?>


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
  border-radius: 60px;

  padding-top: 0px;
   
  position: fixed; 
  z-index: 100;

}
  .class_div_animation{


display: none;
}
    #btn_login {
    background-color:#0562ec; /* Green */
    border: none;
    color: white;
   
    text-align: center;
    text-decoration: none;
  
    font-size: 16px;
    width: 50px;
    height: 31px;
  

    margin-top: 15px;
    left: 10px;
    position: absolute;
  
  }
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
      
    background-color:#e1b382; /* Green */
    border: none;
     color:   white;
   width: 80%;
    text-align: center;
    text-decoration: none;
  
  
  }
  #btn_cmd{
     

     
    position: static;
  
    background-color: #2d545e;   /* Green */
    border: none;
    color: white;
   
    text-align: center;
    text-decoration: none;
  
    font-size: 16px;

    padding: 5px;
    height: 100px;
    margin-left:px;

 
  
  
  }
  #btn_cmd_per
  {
    position:static;
  
    background-color: #2d545e;    /* Green */
    border: none;
    color: white;
   
    text-align: center;
    text-decoration: none;
    padding: 5px;
    font-size: 16px;

  
    margin-left:50px;
  }
  </style>
  <br><br><br>
    <form     >
    <div class="q2" style="background-color: #c89666;" >
   
    <center>
    <a href="index.php" id=""  style="font-size: 19px; color:#2d545e ; " ><ins>Home</ins></a>
   
    </center>
        
 
    </div>
    
    </form>
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