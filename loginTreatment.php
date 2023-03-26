<?php
 session_start();

 require('config/database.php') ;
 require('includes/functions.php');

    if(isset($_POST['login'])){

    	if(not_empty(['password','email'])){
        
          extract($_POST); 

          $email = $_POST['email'];
          $password = $_POST['password'];
        
          $requete = $db->prepare("SELECT * FROM users WHERE email =:email ");
          $requete->bindParam('email' , $email);
          $requete->execute();
          $resultat = $requete->fetch();
          //Vérifie si Email existe
          if(empty($resultat)){
            $login_error = "Email incorrect !";
            echo $login_error;
          }else{
              if(password_verify($password,$resultat['password'])){
                  $_SESSION['email']=$email;
                  $_SESSION['password']=$password;
                  header('Location:consumer/persoPpage.php');
              }else{
                $login_error = "Mauvais mot de passe";
                echo $login_error; 
              }
          }

      }
       
   }
?>
