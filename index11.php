
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css2.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


  
   <section class=" slider_section "style:"background-color:#dd5a44;    background-color:#0562ec;" >
      <div class="container" >
        <div class="row">
          <div class="col-md-6 ">
            <div class="detail_box">
              <h1>
                Welcome to <br>
                Our Cake Shop
              </h1>
              <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
              <a href="" class="">
                Shop Now

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->

<br><br><br>


<?php
/*
$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost; dbname=testgateau;",$username,$password);
*/
$username = "if0_34526240";
$password = "zlMUCOZJ97";
$database = new PDO("mysql:host=sql301.infinityfree.com; dbname=if0_34526240_test;",$username,$password);

if(isset($_GET['btn-search']))
{
$SEARCH = $database->prepare("SELECT * FROM produit WHERE nom LIKE :value 
OR nomproduit LIKE :value OR adresse LIKE :value  OR telephone LIKE :value" );
$SEARCH_VALUE = "%".$_GET['search']."%";

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
}
else
{
  $SEARCH = $database->prepare("SELECT * FROM produit ");
  
  
 
  $SEARCH->execute();
  
  foreach($SEARCH AS $data){
      if($data['cake']==TRUE)
  echo cake_true($data);
  else
  echo cake_false($data);


  }
}
function cake_true($data){
    echo '   <center>
  <div id ="cadr" class="class_div_cadr" >
  
 
 <br>
 <picture>

 <img  src="photos/'.$data['nom'].'/'.$data['img'].'"  style="width:95%;   ;">
</picture><br>
  <label id="label_produit">' .$data['nomproduit'] .' </label><br>
     <div class ="class_div_animation" >
        <a style="background-color: #ffeb3b; color:#2d545e;" href=magasin.php?nommagasin=' .$data['nom'] .' >Nom:<label id="j" > ' .$data['nom'] .'</label> </a>
    <label >Adresse: ' .$data['adresse'] .' |</label>
    <label >Tel: ' .$data['telephone'] .'</label><br>
    <h1  >⩓</h1>
    <a href="commande_gateau.php?nommagasin=' .$data['nom'] .'&&?nomproduit=' .$data['nomproduit'] .'" id="btn_cmd">commander</a>  <a href="commande_per_gateau.php?nommagasin=' .$data['nom'] .'"  id="btn_cmd_per">commande per</a>

</div>
    <h5 id ="label_prix" >prix :  ' .$data['prix'] .' DA</h5>
</div>
</center>
<br>';
}
function cake_false($data){
    echo '   <center>
  <div id ="cadr" class="class_div_cadr" >
  
 
 <br>
 <picture>

 <img  src="photos/'.$data['nom'].'/'.$data['img'].'"  style="width:95%;  border-radius: 400px; ;">
</picture><br>
  <label id="label_produit">' .$data['nomproduit'] .' </label><br>
     <div class ="class_div_animation" >
        <a style="background-color: #ffeb3b; color:#2d545e;" href=magasin.php?nommagasin=' .$data['nom'] .' >Nom:<label id="j" > ' .$data['nom'] .'</label> </a>
    <label >Adresse: ' .$data['adresse'] .' |</label>
    <label >Tel: ' .$data['telephone'] .'</label><br>
    <h1  >⩓</h1>
    <a href="commande_gateau_piece.php?nommagasin='.$data['nom'].'&nomproduit='.$data['nomproduit'].'" id="btn_cmd">commander</a>  

</div>
    <h5 id ="label_prix" >prix :  ' .$data['prix'] .' DA</h5>
</div>
</center>
<br>';
}
?>
<style>
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
      
    background-color:#dd5a44; /* Green */
    border: none;
     color:   white;
   width: 80%;
    text-align: center;
    text-decoration: none;
    border-radius: 20px;
  
  
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
     #q3{



    height: 80px;
     width: 100%;

    top:-2%;
   margin-bottom: 0px;
   position: fixed; 
   z-index: 100;
 
    
    
    }
  </style>
  <br><br><br>
    <form     >
    <div class="q2" style="background-color: #dd5a44;" >
   
    <center>
    <a href="contact_us.php" id=""  style="font-size: 19px; color: whitesmoke; " ><ins>Contact <br> Us  </ins></a>
   
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
         var h = document.getElementById("j").innerHTML;
    document.cookie=`nom_magasin= ${h} ;max-age=${2*60};`
        class_div_animation[index].style.display = "block";}
        else{
          class_div_animation[index].style.display = "none";
        }
      });
    })


    

</script>