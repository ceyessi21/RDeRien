<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Un R de rien</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
    <style>
        *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    
}
body{
    background-image: url("IMAGE_URL"), linear-gradient(rgb(rgb(125, 38, 38)),rgb(rgb(58, 55, 55)));
}
.tous{
    margin-top: 50px;
    width: 70%;
    height: 80vh;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items:center ;
    box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;    margin-left: 200px;
    margin-bottom: 20px;
}

.maps img{
    width: 300px;
    height: 250px;
    border-radius: 20px;
}
.infos{
    width: 250px;
    height: 300px;
   display: flex;
   flex-direction: column;
   justify-content: space-around;
   align-items: center;
   font-size: 14px;
}
.infos  input[type="text"]{
    width: 100%;
    margin-bottom: 7px;
    height: 40px;
    margin-bottom: 10px;
    border: none;
    border-radius: 16px;
    background-color: rgba(172, 172, 172, 0.4);
}
.infos  input[type="submit"]{
    border: none;
   
    background-color: #a2c11c;
    color: white;
    font-size: 20px;
    padding: 6px 20px;
    border-radius:14px ;
    box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;
}
.infos  input[type="submit"]:hover{
    cursor: pointer;
}
.resultats{
    height: 300px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
 
}
.resultat{
    border: 1px solid #a2c11c;
    border-radius: 23px;
    font-size: 14px;
   
    padding: 10px 15px;
}
.infos h2{
    font-size: 30px;
    
    margin-bottom: 16px;
    color:#a2c11c;
}

    </style>
    </head>
    <?php include_once('includes/functions.php'); ?> 
    <?php include_once('partials/_flash.php');?>
  
    <body id="page-top">
    <?php include_once('partials/nav.php');?>
        <section class="tous">
   <div class="infos">
<input type="text" placeholder="MetroBoulotDodo">
<h2>Association : Metro Boulot Dodo</h2>
<h3>Pas de lieu de collecte pour cette recherche</h3>
<input type="submit" value="Mes RDVs" >
   </div>

   
    <div class="maps">
        <img src="../RDeRien/assets/img/maps.jpg" />
    </div>

    <div class="resultats">
        <div class="resultat">
        <h3>2 rue biquette</h3>
<h4>31000,Toulouse</h4>
<h3>Association: MetroBoulotDodo</h3>
        </div>
        <div class="resultat">
        <h3>2 rue biquette</h3>
<h4>31000,Toulouse</h4>
<h3>Association: MetroBoulotDodo</h3>
        </div>
        <div class="resultat">
        <h3>2 rue biquette</h3>
<h4>31000,Toulouse</h4>
<h3>Association: MetroBoulotDodo</h3>
        </div>

    </div>
    </section>

</body>
    </body>
</html>
