<?php
session_start();

include_once '../includes/database-linck.php';
$conn;
//$id=$_GET['off'];
$id=$_SESSION['off'];

$Offer="SELECT * FROM offers WHERE idOffer ='".$id."'";
            $Offer_run=mysqli_query($conn,$Offer);

            while($g=mysqli_fetch_assoc($Offer_run)){
             $OfferCategore= $g['OfferCategore'];
             $OfferDescription=$g['OfferDescription'];
             $OfferImage=$g['OfferImage'];
             $OfferPrix=$g['OfferPrix'];


            }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin/Style_AccuiAdmin.css">
    <link rel="stylesheet" href="style_profil.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
  
        <div class="wrapper">
            <div class="navbar">
                <div class="logo">
                    <a href="#">getWork</a>
                </div>
                <div>
                <form action="">
                    <div class="box-recherch">
                  <i class="fa fa-search" aria-hidden="true"></i>
                    <input placeholder="trouver des services" id="input-Rechercher" type="text">
                    <button id="button-Rechercher">Rechercher</button>
                  </div>
                    
                </form>
            </div>
                <div class="nav_right">
                    <ul>
                        <li class="nr_li">
                            <i class="fas fa-plus"></i>
                        </li>
                       
    
                        <li class="nr_li">
                            <i class="fas fa-user-shield"></i>
                        </li>
                        
                       
                        <li class="nr_li">
                            <i class="fas fa-envelope-open-text"></i>
                        </li>
                        
                        <li class="nr_li dd_main">
                  
    
                            <img class="image_profil"  src="../admin/images_Admin/admin-avec-roues-dentees.png" alt="profile_img">
                            
                            <div class="dd_menu">
                                <div class="dd_left">
                                    <ul>
                                        <li><i class="far fa-user"></i></li>
                                        <li><i class="fas fa-user-shield"></i></li>
                                        <li><i class="fas fa-bookmark"></i></li>
                                        
                                        <li><i class="fas fa-cog"></i></li>
                                        
                                        <li><i class="fas fa-sign-out-alt"></i></li>
                                    </ul>
                                </div>
                                <div class="dd_right">
                                    <ul>
                                       <a href=""> <li>Profil</li></a>   
                                       <a href="Administration.php"> <li>Administration</li></a>
                                       <a href=""> <li>Favorites</li> </a>               
                                       <a href=""> <li>Settings</li> </a>
                                       <a href=" http://localhost/PFFE/admin/deconnextion.php"><li>Deconnextion</li></a>      
                                        
                                    </ul>
                                </div>
                            </div>
                        </li>
                      
                    </ul>
                </div>
            </div>
        </div>	   
      </header>
     
<div class="offe" >
        <div class="mainD">

            <!--cards -->
          
           <div class="cardd">
           
           <div class="image">
              <img src="<?php echo "../admin/images_Admin/".$OfferImage ?>">
           </div>
           <div class="des">
            <span class="spn">Description :</span>
            <p><?php echo $OfferDescription ?></p>
           
           </div>

           
           <div class="des">
            <span class="spn">Le type:<?php echo $OfferCategore ?></span>
           

           </div>
           <div class="des">
            <span class="spn">prix:<?php echo $OfferPrix ?> DZ</span>
           

           </div>
           
          <form action="updOfer.php" method="POST">
          <button name="dellet" class="des_btn">Supprimer</button>
          </form>
           </div>
        </div>
        <div class="offe" >
        
      <section id="newService_Formulair" class="newService_Formulair">
            
              
              <div class="but_Hors_Service">
              <form action="">
               <button>Metre Hors service</button>
               </form>
      </div>
              
        <form id="enviar" action="updOfer.php" method="POST" >

         
         
          <h2>Modifier l Offre</h2>

         <center> <div class="alert" id="alert" >
<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<span id="echoAlertt"></span>
</div></center>
              
              
                  <label for=""> Description du service</label>
                  <input name="OfferDescription" id="customx" type="text" class="field"  value="<?php echo $OfferDescription ?>">
                  <span>Entrez une description clair qui d??crit l offre. N'entrez pas de symboles ou de mots tels que ?? exclusivement ??, ?? pour la premi??re fois ??, ?? pour un temps limit?? ??, etc.</span>
                  <span>Vous devriez utiliser des phrases comme , je vais concevoir, je vais d??velopper...</span>
                  <br><br>
                 
                  <label >Selectionne le type de services</label>
                  <div class="boxx">
            
                    <select id="test" name="OfferCategore" >
                      <option value="<?php echo $OfferCategore ?> "><?php echo $OfferCategore ?></option>
                      <?php 
                      $req="SELECT serviceName  FROM services";
                      $res = mysqli_query($conn,$req);
                      while($resul=mysqli_fetch_assoc($res)){
                          if($resul['serviceName']!=$OfferCategore){

                      ?>
                      <option value="<?php echo ($resul['serviceName'])?>"><?php echo ($resul['serviceName'])?></option>
                      <?php
                      }}
                      ?>
                    </select>  
                    
                    
                  </div>
                  
                    <label >Le prix:</label><br>
                    <div id="prix">
                    <input type="text" class="inpPrix" placeholder="donne un prix" name="OfferPrix" value="<?php echo$OfferPrix ?>" ><span>DZ</span>
                </div>
                 

                 
                  
              

               
                <br>
                  <label for="">Ajoute une image </label>
                  <div class="drop-zone">
                      <span class="drop-zone__prompt">cliquez pour t??l??charger</span>
                      <input name="OfferImage" id="fileUpload" type="file" name="myFile" class="drop-zone__input">
                    </div>

                    <button type="submit"  name="save">sauver</button>
    
        </form>

     



    </section>

</div>

</body>
<script src="../admin/Control-Administration.js"></script>

<script src="https://kit.fontawesome.com/6f2f9c8fbf.js" ></script>
<script src="ControlAddOfer.js"></script>
<script src="../admin/controlService.js"></script>


</html>