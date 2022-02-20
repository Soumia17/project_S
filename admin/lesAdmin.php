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
        <link type="text/css" rel="stylesheet" href="Style_Administration.css">
        <link rel="stylesheet" href="Style_Administrateur.css">
       
        
        

        
        <title>Document</title>
    </head>
    <body onload="document.getElementById('new_admin').style.display='block';">   
            <header class="page-header">
              <nav>
                
                <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
                  <i class="fas fa-bars"></i>
                </button>
                <ul class="admin-menu">
                  <a href="">LOGO</a>
                  <li class="menu-heading">
    
                    <h3>Admin</h3>
                  </li>
                  
                    <li>
                      <a href="http://localhost/PFFE/admin/Administration.html">
                        
                        <i class="fas fa-home"></i>
                        
                        <span>Accueil</span>
                      </a>
                    </li>
                    <li>
                    <a href="http://localhost/PFFE/admin/Administrateurs.html">
                      
                      <i class="fas fa-user-shield"></i>
                      
                      <span>Administrateurs</span>
                    </a>
                  </li>
                  <li>
                    <a href="http://localhost/PFFE/admin/utilisateurs.html">
                      <i class="fas fa-users"></i>
                      <span>utilisateurs</span>
                    </a>
                  </li>
                  <li>
                    <a href="http://localhost/PFFE/admin/Message.html">
                      <i class="far fa-comments"></i>
                      <span>Message</span>
                    </a>
                  </li>
                  <li>
                    <a href="http://localhost/PFFE/admin/services.php">
                      <i class="fas fa-briefcase"></i>
                      <span>Services</span>
                    </a>
                  </li>
                 
                 
                  <li>
                    <div class="switch">
                      <input type="checkbox" id="mode" checked>
                      <label for="mode">
                        <span></span>
                        <span>Dark</span>
                      </label>
                    </div>
                    <a href="http://localhost/PFFE/admin/Acceui_Admin.php">
                      
                      <i class="fas fa-sign-out-alt"></i>
                      <span>sortir de l'dministration</span>
                    </a>
                    <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu">
                      <i class="fas fa-chevron-left"></i>
                      <span>Effondrer</span>
                    </button>
                  </li>
                </ul>
              </nav>
            </header>
            <section class="page-content">
              <section class="search-and-user">
                <form action="GET">
                  <input type="search" placeholder="Chercher...">
                  <button type="submit" aria-label="submit form">
                    <i class="fas fa-search"></i>
                  </button>
                </form>
                <div class="admin-profile">
                  <span class="greeting">Bonjour  admin</span>
                  <img class="image_profil"  src="images_Admin/images.jpg" alt="profile_img">
                  
                  <div class="notifications">
                   <!-- <span class="badge">1</span>-->
                    <svg>
                      <use xlink:href="#users"></use>
                    </svg>
                  </div>
                </div>
              </section>
              <section class="grid">
           
                <article>
                    <div class="admin_num">
                        <div class="admin_num_1"> 
                            <span>10</span><br>

                            <label for="">Admin</label>
                        </div>
                        <div class="admin_num_2">
                           <img src="images_Admin/admin-avec-roues-dentees.png" alt="">
                        </div>

                    </div>
                </article>
                <article>
                    <div class="admin_num">
                        <div class="admin_num_1"> 
                            <span>10</span><br>
                            
                            <label for="">en ligne</label>
                        </div>
                        <div class="admin_num_2">
                           <img src="images_Admin//cochez-le-cercle-interieur.png" alt="">
                        </div>

                    </div>
                </article>
                </section>
                <section class="Add_Service">
                    <div class="but_Add_Service">
                        <a href="#new_admin" onclick="document.getElementById('new_admin').style.display='block';document.getElementById('con').style.display='block'"><i class="fas fa-plus"></i>ajoute un admin</a>
              </div>
                  </section>

                <section class="etoile" id="etoile">
                    <div class="box-etoile">
                  <?php  
                  $searsh="SELECT * FROM userinformation WHERE Theadmin=1";
    $admin = mysqli_query($conn,$searsh);
   
    
   
   
   while($infoAdmin=mysqli_fetch_assoc($admin)){?>
                    <div class="card">
                        <img src="images_Admin/téléchargement.jpg" alt="Avatar" style="width:100%">
                        <div class="card-container">
                         <a href=""> <h4><b><?php echo ($infoAdmin["psudo"]);?></b></h4> </a>
                          <p> Admin de puis: <br>   <?php /*echo date("j, n, Y");*/ echo ($infoAdmin["userDate"]);?> </p>
                          
                        </div>
                        <button id="but_admin"  class="openModal2">envoye un message</button>

                        </div>
                        <?php
   }
?>
                    </div>
                </section>
                

                <div id="con" class="modal_condition">

                  
                  
                   
                    <div class="display_condition">
                      <span onclick="document.getElementById('con').style.display='none';document.getElementById('new_admin').style.display='none'" class="close" title="Close Modal">×</span> 
                      <h3>Attention</h3>
                    <div class="condition" onscroll="myFunction()" id="myDIV">
                      
                     <p> L'ajout d'un nouvel administrateur peut entraîner des dangers !</p>
                      <ul>
                       <p> Le nouvel administrateur peut:</p>
                        <li>. Ajoute un nouvel admin .</li>
                        <li>. blocke un contacte .</li>
                        <li>. sepprime et ajoute un service .</li>
                        <li>. sepprime un offer .</li>
                        <li>. repondre aux message .</li>
                        Tout cela peut arriver sans votre consentement.
                      </ul>
                        <hr>
                        
    
                        <input onchange="document.getElementById('block').disabled = !this.checked;" type="checkbox" id="scales" name="scales"
              value="Scales">
      <label for="scales">J'accepte et continuer.</label> <br>
      
    </div>
     
      <button id="block" onclick="block()" disabled class="but_condition"> J'accepte</button>
                      </div>
                    
                     
                    
                </div>

                

               

             
       
                  
                    

               <section id="new_admin" >
               <label for="">Rechercher un utilisateur :</label>
<form  action="lesAdmin.php" method="GET">
<div class="search-box">
       
         <button name="onSub"  class="btn-search"><i class="fas fa-search"></i></button>
         
       <input type="search"  name="search" class="input-search" placeholder="Type to Search...">
       
         
     </div>
     </form>

     <div class="box-etoile">
       <?php
      if(isset($_GET['search'])){
        $resu=$_GET['search'];
        $searsh="SELECT * FROM userinformation WHERE psudo LIKE '%$resu%'";
        $res = mysqli_query($conn,$searsh);
      
      


        while($infoAdmin=mysqli_fetch_assoc($res)){?>
                 
                    <div class="card">
                        <img src="images_Admin/téléchargement.jpg" alt="Avatar" style="width:100%">
                        <div class="card-container">
                         <a href=""> <h4><b><?php echo($infoAdmin["psudo"]) ?> </b></h4> </a>
                          <p> Admin de puis: <br>   <?php /*echo date("j, n, Y");*/ ?> </p>
                          
                        </div>
                        <button id="but_admin" class="openModal2">envoye un message</button>

                        </div>
                        <?php
       }}
                        ?>
 
                    </div>
    
                            <hr>

                            <label for="">cree un copmte administrateur :</label>


                             
                            <form action="http://localhost/PFFE/admin/newAdmin.php" method="POST">
                                <div class="user-details">
                                  <div class="input-box">
                                    <span class="details">Nom</span>
                                    <input type="text" name="nom"  required>
                                  </div>
                                  <div class="input-box">
                                    <span class="details"> Prenom</span>
                                    <input type="text" name="prenom" required>
                                  </div>
                                  <div class="input-box">
                                    <span class="details">pseudo</span>
                                    <input type="text" name="userName" required>
                                  </div>
                                  <div class="input-box">
                                    <span class="details">email</span>
                                    <input type="email" name="email"  required>
                                  </div>
                                  <div class="input-box">
                                    <span class="details">mote de passe</span>
                                   
                                    <input type="password" name="password" id="password"  required>
                                    <i class="password-toggle far fa-eye-slash" id="password-toggle" onclick="passwordToggle()"></i>
                                  </div>
                                  <div class="input-box">
                                    <span class="details"> confirme le mote de passe</span>
                                    <input type="password" id="Cpassword"  required>
                                    <i class="password-toggle far fa-eye-slash" id="Cpassword-toggle" onclick="CpasswordToggle()"></i>
                                    
                                  </div>
                                </div>
                               
                                <div class="button">
                                  <input type="submit" value="Register">
                                </div>
                              </form>

           

                


                

            

                


                
                
               
             
               </section>
                    
                
              </section>
              
    
    </body>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="Control-Administration.js"></script>
    <script src="Control_Admin.js"></script>
    <script src="/login_System/testRegester.js"></script>
    <script src="contol_lesAdmin.js"></script>
   
    </html>
</body>
</html>