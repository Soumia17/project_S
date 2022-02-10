<?php
include_once 'includes/database-linck.php';
$conn;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style-AccueiAdmin.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
  
    <div class="wrapper">
        <div class="navbar">
            <div class="logo">
                <a href="#">LOGO</a>
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
                        <img class="image_profil"  src="images_Admin/images.jpg" alt="profile_img">
                        
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
                                   <a href="Administration.html"> <li>Administration</li></a>
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
  <section class="Bien_venu">
      <div class="service_i_bien">
      <div class="bien">

         <center> <h2>Bien venu <span></span></h2>
          <span>hhhhhhhhhhkhjfgjhgfjtgdj,gggg,tft,jhg</span></center>
      </div>
      <div class="services_bien">
      <?php
      $sql="SELECT * FROM services";
      $res = mysqli_query($conn,$sql);
      while($g=mysqli_fetch_assoc($res)){
      ?>
      
          <a href=""><div class="service_i">
              <img src="<?php echo ($g['serviceIcon'])?>" alt="">
    
       
        <hr>
        <span><?php echo ($g['serviceName'])?></span>
    </div></a>
    <?php
      }
    ?>
    

    </dive>

  </section>


  <section class="etoile" id="etoile">
            <div class="box-etoile">

        <div class="box">
            <div class="image-etoile">
                <img src="images_Admin/images.jpg"alt="">
            </div>
            <div>
                <ul class="image_info">
                    <li> <img class="image_profil_etoile"  src="images_Admin/images.jpg" alt="profile_img"></li>
               <li>  <h3>je suis</h3></li>
     
             </ul>
            <p>blabla blablablaaaaaaaaabllllllaaa</p>

            
                
                    
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
  <hr>

                <div class="etoil-favorit">
                    <ul>
                        <li><i class="fas fa-bookmark" ></i></li>
                        <li>
                            le prix <label for="">1000 DZ</label>
                        </li>
                    </ul>
                </div>



                </div>

               


                
            
        

               

   </div>
</section>

</body>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<script src="Control-Administration.js"></script>
</html>