<?php
$activePage = "services";
include_once 'head.php';?>
<style>
    .tit
    {
        color:#00CCFF;
        font-weight:700;
        margin-top:100px;
    }
    .par 
    {
        color:black;
        font-weight:bold;
    }
    .d 
    {
        text-align:center;
        color:black;
    }
    .l 
    {
        color:white;
        text-align:center;
    }
    .cercles
    {
        position: relative;
        left:-17px;
    }
    .card:hover
    {
        cursor: zoom-out;
    }
    .cercles .item1
    {
        width:200px;
        opacity: 0.6;
        border-radius:100%;
        height: 200px;
        background-color:rgba(250, 85, 2, 0.6);
    }
    .cercles .item2
    {
        width:200px;
        border-radius:100%;
        height: 200px;
        position: relative;
        top:-70px;
        opacity: 0.6;
        left:70px;
        background-color:rgba(250, 85, 2, 0.6);
    }
    .connaitre
    {
        position: relative;
        top:-275px;
        left:70px;
        font-size:19px;
        color:black;
    }
    
    .securite
    {
       background: #01054d;
       background: -webkit-linear-gradient(to right, rgb(7, 4, 94), rgb(7, 40, 96));
       background: linear-gradient(to right,  rgb(6, 4, 105), rgb(7, 43, 106)); 
       padding:40px;
       color: white;
    }
    .s 
    {
        font-weight:bolder;
    }
    .realisations
    {
        padding-top:80px;
       
    }
    .realisations h6
    {
        font-weight:bolder;
        color:orangered;
    }
    .realisations .image img 
    {
        border:5px solid rgb(215, 215, 215);
        border-radius:4px;
    }
    .realisations .bas
    {
        background-color:orangered;
        padding:4px;
        border-bottom-left-radius:5px;
        border-bottom-right-radius:5px;
    
    }
    .realisations .bas h4
    {
        border-bottom:2px solid white;
    }
    .realisations .bas p 
    {
        font-size:12px;
        color:white;
        text-align:center;
    }
    @media (min-width: 1024px )
    {
      .gg 
      {
        padding:40px;
      }
      .ee 
      {
        padding:40px;
      }
      .realisations
      {
        margin-left:80px !important;
        margin-right:80px !important;
      }
      
    }
    /* @media  (min-width: 769px){
           
        .padd
    {
        padding:0px !important
    }
        }
     */
    .realisations  .z:hover
    {
    transform: skewX(2);
    -webkit-transform: skewX(2);
    -moz-transform: skewX(2);
    -ms-transform: skewX(2);
    -o-transform: skewX(2);
    transition:all 0.5s ease;
    }
      
    .padd
    {
        padding-left: 50px;
        padding-right: 50px;
    }
    
</style>



<section>
    <div class="d-flex justify-content-center">
        <h2 class="tit">SITE VITRINE SUR-MESURE</h2> 
    </div>
    <p class="text-center par">Par new way Agency</p>
</section>
<br> <br> <br> <br>
<section >
  <div class="container">
    <div class="container">
        <div class="row d-flex justify-content-center padd">
            <div class="col-lg-5">
                <div class="cercles">
                   <div class="item1"></div>
                   <div class="item2"></div>
                </div>
                
               <p class="connaitre">
                  Connaître vos  <br>
                  besoins et établir <br>
                  une offre adaptée <br>
               </p>
            </div>
            <div class="col-lg-5 ">
                <p class="d">
                   Le premier rendez-vous  servira à collecter et échanger 
                   sur vos envies, vos besoins. Nous pourrons alors discuter 
                   avec vous de ce qu’il est possible de faire ou non. 
                </p>
                <p class="d">
                   Le premier rendez-vous  servira à collecter et échanger 
                   sur vos envies, vos besoins. Nous pourrons alors discuter 
                   avec vous de ce qu’il est possible de faire ou non. 
                </p>
                <p class="d">
                  Ensuite, un cahier des charges qui jouera un rôle clé lors 
                  de la seconde étape sera établie avec votre concours. À 
                  la suite de ce rendez-vous, nous vous fournirons alors un 
                  devis qu'il est possible de modifier
                </p>
            </div>
        </div>
    </div>
  </div>
</section>

<section class="securite">
    <div class="container">
        <div class="row ee">
            <div class="col-lg-5">
                <h4 style="font-weight:bolder;" class="text-center">Étape de création de votre site vitrine</h4> <br>
            <p class="l">
                  Durant cette phase, notre équipe se chargera de 
                  la création de votre site grâce aux différentes 
                  indications fournies par vos soins. 
                </p>
                <p class="l">
                   Notre agence NWA se chargera de vous fournir 
                   le nom de domaine souhaité ainsi qu’un 
                   hébergement Premium.
                </p>
                <p style="font-style:italic;" class="l">
                  *La sécurité avant tout., C'est pourquoi nous 
                   faisons le nécessaire de notre côté pour réduire 
                   au maximum les risques d'intrusions.
                </p>
            </div>
            <div style="padding-top:50px;" class="col-lg-7">
                  <img src="Images/e commerce completed order.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <br> <br>

    <div class="container">
        <div class="row gg">
            <div class="col-lg-5">
              <h4 class="text-center s">Livraison du site <br> Internet  + modifications</h4>
            </div>
            <div class="col-lg-5">
            <p class="l" style="font-style:italic;">
            Après la création de votre site vitrine, vous aurez 
          7 jours pour relever les différents problèmes ou 
            changements à effectuer. 
                </p>
                <p class="l" style="font-style:italic;">
                Notre agence  se chargera de faire les 
                modifications souhaitées (vous ne payer pas 
                cette modification)
                </p>
            </div>
        </div>
    </div>
</section>


<section class="realisations">
    <h6 class="text-center">Nos réalisations</h6>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 z mb-4">
                <div class="card">
                    <div class="image">
                        <img src="Images/web-mockup-2.png" alt="" class="img-fluid">
                    </div>
                    <div class="bas">
                        <h4 class="text-center text-white">Un Flyer</h4>
                        <p class="text-center">Une belle création pour une startup de cosmétiques</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 z mb-4">
                <div class="card">
                    <div class="image">
                        <img src="Images/Plan de travail 3.png" alt="" class="img-fluid">
                    </div>
                    <div class="bas">
                        <h4 class="text-center text-white">Un Flyer</h4>
                        <p class="text-center">Une belle création pour une startup de cosmétiques</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 z mb-4">
                <div class="card">
                    <div class="image">
                        <img src="Images/entree-du-siege3.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="bas">
                        <h4 class="text-center text-white">Un Flyer</h4>
                        <p class="text-center">Une belle création pour une startup de cosmétiques</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 z mb-4">
                <div class="card">
                    <div class="image">
                        <img src="Images/design_graphique.png" alt="" class="img-fluid">
                    </div>
                    <div class="bas">
                        <h4 class="text-center text-white">Un Flyer</h4>
                        <p class="text-center">Une belle création pour une startup de cosmétiques</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<br> <br>  <br>


<?php include_once 'footer.php';?>