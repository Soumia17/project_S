<?php
session_start();
include_once '../includes/database-linck.php';
$conn;


if(isset($_POST['up'])){
    $psudo_suery="SELECT * FROM userinformation WHERE psudo ='".$_POST['newPseudo']."'";
    $psudo_suery_run=mysqli_query($conn,$psudo_suery);
    if(mysqli_num_rows($psudo_suery_run)>0){?>
        <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
     </head>
     <body>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script  >
 //alert("email existe deja");
 swal("pseudo existe deja!");
</script>
     </body>
     </html>
       <?php
       }
       else{

    $re="UPDATE userinformation
    SET  psudo= '".$_POST['newPseudo']."'
    WHERE email='".$_SESSION['pseudo']."'";
    $res = mysqli_query($conn,$re);
    $_SESSION['user']=$_POST['newPseudo'];
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../admin/Style_AccuiAdmin.css">
   <!-- <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="style_profil.css">
    <link rel="stylesheet" href="../admin/StyleService.css">
    <title>Document</title>
   
</head>
<body >

    <header class="header">
  
        <div class="wrapper">
            <div class="navbar">
                <div class="logo">
                    <a href="#">seobiseu</a>
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
                       
    
                        <?php
                    
                    if($_SESSION['admin']==1){
                    ?>
                   

                    <li class="nr_li">
                      <a href="Administration.php">  <i class="fas fa-user-shield"></i></a>
                    </li>
                    <?php
                    }

                    ?>
                        
                       
                        <li class="nr_li">
                            <i class="fas fa-envelope-open-text"></i>
                        </li>
                        
                        <li class="nr_li dd_main">
                  
    
                            <img class="image_profil"  src="<?php echo ($_SESSION['img']);?>" alt="profile_img">
                            
                            <div class="dd_menu">
                                <div class="dd_left">
                                    <ul>
                                        <li><i class="far fa-user"></i></li>
                                       <!-- <li><i class="fas fa-user-shield"></i></li>-->
                                        <li><i class="fas fa-bookmark"></i></li>
                                        
                                        <li><i class="fas fa-cog"></i></li>
                                        
                                        <li><i class="fas fa-sign-out-alt"></i></li>
                                    </ul>
                                </div>
                                <div class="dd_right">
                                    <ul>
                                       <a href=""> <li>Profil</li></a>   
                                      <!-- <a href="Administration.php"> <li>Administration</li></a>-->
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

    <div class="cont">
        <div class="roww profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    
                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                   
                    <!-- END MENU -->

                    
                           
                            <div class="card-block">
                                <div class="user-image">
                                    <img src="<?php echo ($_SESSION['img']);?>" id="photo">
                                    <input type="file" id="file">
                                    <label for="file" id="uploadBtn">Choisir une Photo</label>
                                </div>
                                <h6 class="f-w-600 m-t-25 m-b-10"><?php echo ($_SESSION['user']); ?></h6>
                               <center> <button id="icon_change_pseudo" onclick="document.getElementById('btn_new_pseudo').style.display='block'; document.getElementById('new_pseudo').style.display='block';document.getElementById('icon_change_pseudo').style.display='none';" > <img src="https://img.icons8.com/ios-glyphs/30/000000/pencil--v1.png"/></button></center>
                               <div id="anulle">
                                   <form action="userProfil.php" method="POST">
                               <center> <input name="newPseudo" style="display: none;" type="text" id="new_pseudo" placeholder="entre le neveu pseudo" ></center><br>
                                <div class="btn_new_pseudo" id="btn_new_pseudo" style="display: none;">
                                <button  id="cancel" onclick="document.getElementById('btn_new_pseudo').style.display='none'; document.getElementById('new_pseudo').style.display='none';document.getElementById('icon_change_pseudo').style.display='block';">cancel</button>
                                <button name="up" id="update">update</button>
                                </form>
                            </div>
                            </div>
                               
                                <p class="text-muted">Membre depuis : <?php  echo $_SESSION['dat'] ;?></p>
                                <hr>
                                <p class="text-muted m-t-15">Utile de communication :</p>
                                <div class="email details">
                                    <i class="fas fa-envelope"></i>
                                    <div class="topic">Email</div>
                                    <div class="text-one"><?php echo $_SESSION['pseudo']?></div>
                                   
                                  </div>
                                   
                                    <div class="phone details">
                                      <i class="fas fa-phone-alt"></i>
                                      <div class="topic">Phone</div>
                                      <div class="text-one"><?php echo $_SESSION['phone']?></div>
                                      
                                    </div>

                                   
                                   
                                  
                                <p class="text-muted m-t-15">nombre de offeres :</p>
                               <!-- <div class="bg-c-blue counter-block m-t-10 p-20">
                                    <div class="row">
                                        <div class="col-4">
                                            <i class="fa fa-comment"></i>
                                            <p>1256</p>
                                        </div>
                                        <div class="col-4">
                                            <i class="fa fa-user"></i>
                                            <p>8562</p>
                                        </div>
                                        <div class="col-4">
                                            <i class="fa fa-suitcase"></i>
                                            <p>189</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="m-t-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <hr>
                                <div class="row justify-content-center user-social-link">
                                    <div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
                                    <div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
                                    <div class="col-auto"><a href="#!"><i class="fa fa-dribbble text-dribbble"></i></a></div>
                                </div>-->
                            </div>
                        </div>
                  
            </div>

            <?php
            $Offer="SELECT * FROM offers WHERE OfferPoster ='".$_SESSION['pseudo']."'";
            $Offer_run=mysqli_query($conn,$Offer);
            if(mysqli_num_rows($Offer_run)==0){
            ?>
           <div class="col-md-9">
                <div class="profile-content">
                   <p> Il semble que vous n'ayez aucune vue active. Mettez-vous en vente !</p>
                  <a href="addOffer.php"> <button >commencez maintenant</button></a>


                 



                  
                </div>

                <?php
            }
            else{

                while($g=mysqli_fetch_assoc($Offer_run)){
                ?>

                                        
                <div class="main">

                    <!--cards -->
                   
                   <div class="card">
                   
                   <div class="image">
                      <img src="<?php echo "../admin/images_Admin/".$g['OfferImage'] ?>">
                   </div>
                   <div class="des">
                    <span class="spn">Description :</span>
                    <p><?php echo $g['OfferDescription']?></p>
                   
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
                    <span class="spn">Le type: <?php echo $g['OfferCategore']?></span>
                   
 
                   </div>
                   <div class="des">
                    <span class="spn">prix: <?php echo $g['OfferPrix']?> DZ</span>
                   
 
                   </div>
                   
                   
                  <a href="modifierOffer.php"> <button class="des_btn">Modifier</button></a>
                   </div>
                   <!--cards -->
                   
                   
                  <?php
                  $_SESSION['off']=$g['idOffer'];
                  }}
                  
                  ?>

                
   
            </div>
            
        </div>

        
    </div>

    
    <br>
    <br>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<script src="Control-Administration.js"></script>
<!--<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>-->
<script src="../admin/Control-Administration.js"></script>
<script src="Control_profil.js"></script>
<script src="https://kit.fontawesome.com/6f2f9c8fbf.js" ></script>
</body>
</html>