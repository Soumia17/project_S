
<?php 
session_start();
include_once 'includes/database-linck.php';

/* le code php de formulair entre au compte*/ 

//$conn= mysqli_connect('localhost','root','','forminscription') or die(mysqli_error());
$conn;
//if(isset($_POST['pseudo'])){
    $uname=$_POST['pseudo'];
    $passwo=$_POST['passW'];
    $email=$_POST['pseudo']; 

    $hashd_password= md5($_POST['passW']);
    $sql="SELECT * from userinformation WHERE psudo ='".$uname."'AND passwor='".$hashd_password."'
    limit 1";
    $sql1="SELECT * from userinformation where email ='".$email."'AND passwor='".$hashd_password."'
    limit 1";
     // mysqli_num_rows($result1)==1

    $result=mysqli_query($conn,$sql);
    $result1=mysqli_query($conn,$sql1);

    if(mysqli_num_rows($result)==1 || mysqli_num_rows($result1)==1){
        
        $_SESSION['pseudo'] = $_POST['pseudo'];
        $_SESSION['passW'] = $passwo;
        header('location: http://localhost/PFFE/login_System/p.php');
        echo"yesssss";
        exit();
    }
    else{

        echo "nooo";
      //  header('location: http://localhost/PFE/Formulaire.html');
    }
    /*
    $raw =mysqli_fetch_array($result);
    

    if(is_array($raw)){
        $_SESSION["uname"]= $raw ['userName'];
        $_SESSION["passwo"]= $raw ['passwor'];

    }

    if(isset($_SESSION["uname"])){
        header('location: http://localhost/PFE/profil.php');
        echo"yesssss";
        
    }*/

//}

?>