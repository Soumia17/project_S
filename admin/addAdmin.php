 <?php
session_start();
include_once 'includes/database-linck.php';
$conn;
                 
                 $newAd=$_GET['newAD'];
                 $date=date("j, n, Y");
                 $addby=$_SESSION['user'];
             
                 $req="SELECT pseudoo from admin WHERE pseudoo='".$newAd."' ";
                 $res = mysqli_query($conn,$req);

if(mysqli_num_rows($res)==0){
                $req="INSERT INTO  admin(pseudoo,adminDate,addBy)values('$newAd','$date','$addby')";
               $res = mysqli_query($conn,$req);
               $req="UPDATE userinformation
               SET Theadmin =1
               WHERE psudo= '$newAd'";
               $res = mysqli_query($conn,$req);
            }

            
                 
                 
               header('location: http://localhost/PFFE/admin/lesAdmin.php#con');         





               
