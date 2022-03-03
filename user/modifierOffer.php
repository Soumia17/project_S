<?php

include_once '../includes/database-linck.php';
$conn;

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
     
<div class="offe">
        <div class="main">

            <!--cards -->
           
           <div class="cardd">
           
           <div class="image">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg/1199px-Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg">
           </div>
           <div class="des">
            <span class="spn">Description :</span>
            <p>You can Add Desccription Here...</p>
           
           </div>

           <div class="title">
               
            <span class="spn">Evaluation :</span>
            <div class="center">
                
                <fieldset class="rating">
                    <input type="radio" id="star5" name="rating" value="5"/><label for="star5" class="full" title="Awesome"></label>
                    <input type="radio" id="star4.5" name="rating" value="4.5"/><label for="star4.5" class="half"></label>
                    <input type="radio" id="star4" name="rating" value="4"/><label for="star4" class="full"></label>
                    <input type="radio" id="star3.5" name="rating" value="3.5"/><label for="star3.5" class="half"></label>
                    <input type="radio" id="star3" name="rating" value="3"/><label for="star3" class="full"></label>
                    <input type="radio" id="star2.5" name="rating" value="2.5"/><label for="star2.5" class="half"></label>
                    <input type="radio" id="star2" name="rating" value="2"/><label for="star2" class="full"></label>
                    <input type="radio" id="star1.5" name="rating" value="1.5"/><label for="star1.5" class="half"></label>
                    <input type="radio" id="star1" name="rating" value="1"/><label for="star1" class="full"></label>
                    <input type="radio" id="star0.5" name="rating" value="0.5"/><label for="star0.5" class="half"></label>
                </fieldset>

                
            </div>

           </div>
           <div class="des">
            <span class="spn">Le type:</span>
           

           </div>
           <div class="des">
            <span class="spn">prix:</span>
           

           </div>
           
           
          <a href="modifierOffer.php"> <button class="des_btn">Supprimer</button></a>
           </div>
        </div>
        <div class="offe">
        
      <section id="newService_Formulair" class="newService_Formulair">
            
              
        <form id="enviar" action="isertOffre.php" method="POST" >

         
         
          <h2>Ajouter un nouveau Offre</h2>

         <center> <div class="alert" id="alert" >
<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<span id="echoAlertt"></span>
</div></center>
              
              
                  <label for=""> Description du service</label>
                  <input name="OfferDescription" id="customx" type="text" class="field" >
                  <span>Entrez une description clair qui décrit l offre. N'entrez pas de symboles ou de mots tels que « exclusivement », « pour la première fois », « pour un temps limité », etc.</span>
                  <span>Vous devriez utiliser des phrases comme , je vais concevoir, je vais développer...</span>
                  <br><br>
                 
                  <label >Selectionne le type de services</label>
                  <div class="boxx">
            
                    <select id="test" name="OfferCategore" >
                      <option value=" ">Selectionne le type</option>
                     
                    </select>  
                    
                    
                  </div>
                  
                    <label >Le prix:</label><br>
                    <div id="prix">
                    <input type="text" class="inpPrix" placeholder="donne un prix" name="OfferPrix"  ><span>DZ</span>
                </div>
                 

                 
                  
              

               
                <br>
                  <label for="">Ajoute une image </label>
                  <div class="drop-zone">
                      <span class="drop-zone__prompt">cliquez pour télécharger</span>
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