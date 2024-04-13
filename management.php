<?php
    $activePage = "services";
    include 'head.php';
?>


<style>
    .creatif
{
    color: #00CCFF;
    font-weight: 700;
}
.maliste
{
    display:flex;
    flex-direction:column;
}
.maliste li 
{
    list-style: none;
    color:rgb(4, 4, 52);
    margin: 4px;
    /* border:2px double rgb(5, 5, 92); */
    border-radius: 10px;
    padding: 10px;
    background-color: rgba(229, 227, 227, 0.5);
}
.maliste li i 
{
    font-size:23px;
    margin-right:10px;
}
.maliste li:hover 
{
    transform:scale(1.09);
    cursor: zoom-in;
    background-color: rgb(225, 60, 0);
    color: white;
    transition:ease 0.6s;
}
.maliste li:hover i 
{
    color: white !important;
}
.content
{
    
    background: #01054d;
    background: -webkit-linear-gradient(to right, rgb(7, 4, 94), rgb(7, 40, 96));
    background: linear-gradient(to right,  rgb(6, 4, 105), rgb(7, 43, 106)); 
    
    color: white;
}
.v 
{
    padding-top: 70px;
    
}
.rect 
{
    border:2px solid white;
    padding:7px;
    border-radius:20px;
}
.rect h6
{
    font-weight:bolder;
}

.commu{
    background: #01054d;
    background: -webkit-linear-gradient(to right, rgb(7, 4, 94), rgb(7, 40, 96));
    background: linear-gradient(to right,  rgb(6, 4, 105), rgb(7, 43, 106)); 
    color: white;
}

.media{
    padding-top: 170px;
}

.button{
    border-radius: 50px;
    padding: 7px;
}

.button1{
    border-radius: 50px;
    padding: 10px;
    background-color: orangered;
    color: white;
    font-size: 20px;
    border:none;
    
    font-weight: bolder;
}

p{
    font-weight: normal;
}


h6{
    /* font-weight: lighter;
    font-size: 30px; */
}

.text{
    color: orangered;
    font-weight: bolder;
}
.text1{
    color: orangered;
    font-weight: bolder;
    font-size: 18px;
}
.text2{
    color: orangered;
    font-weight: bold;
}

.u{
    font-size: 16px;
    font-weight: 200;
}
.simple
{
    color:#00CCFF;
    font-weight:bold;
}
.list-group .list-group-item
{
   background-color:#e7e7e7 !important;
   border:none !important;
   margin:2px;
}
.hh
{
    color:black !important;
}

@media only screen and (min-width: 768px) and (max-width: 1023px) {
    .reseau
    {
        display: none;
    }
  }
  .parlons
  {
    width: 210px;
    padding:12px;
    background-color:orangered;
    color:white;
    font-weight:bolder;
    border-radius:60px;
    font-size:20px;
  }
  .parlons:hover 
  {
    background-color:blue;
    color:white;
    transition:linear 0.6s;
    /* border-bottom:3px solid orangered */
  }

</style>
    <div class="content">
        <div class="d-flex justify-content-center">
            <b> <br>  <br> <br> <br>
            <h2 class="creatif">COMMUNITY MANAGEMENT</h2> 
        </div>
        <div class="d-flex justify-content-center">
            <h5>par <strong>New way Agency</strong> </h5>
        </div><br><br> <br> <br>
    </div>

<section class="">
  <div class="container">
    <div class="row v d-flex justify-content-center">
        <div class="col-lg-3 my-5  mb-4">
            <img class="img-fluid" src="Images//Social.png" alt="">
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-6  mb-4">
           <h4 class="text">QUEL EST NOTRE RÔLE ?</h4>
           <h6 class="simple">Le rôle de notre agence est simple :</h6>
           <ul class="list-group">
            <li class="list-group-item mx-3"><p class="hh"> <span class="text1"> <img src="SVG/LOGO GRAND.svg" height="19" alt="">  Augmenter</span> significativement votre visibilté</p></li>
            <li class="list-group-item"><p class="hh"> <span class="text1"> <img src="SVG/LOGO GRAND.svg" height="19" alt="">  Générer</span>  du trafic vers vos pages et votre site web</p></li>
            <li class="list-group-item mx-3"><p class="hh"> <span class="text1"><img src="SVG/LOGO GRAND.svg" height="19" alt="">   Développer  </span>et fidéliser votre communauté</p></li>
            <li class="list-group-item"><p class="hh"> <span class="text1"><img src="SVG/LOGO GRAND.svg" height="19" alt="">   Renforcer  </span>votre notoriété</p></li>
            <li class="list-group-item mx-3"><p class="hh"> <span class="text1"> <img src="SVG/LOGO GRAND.svg" height="19" alt="">   Prospecter  </span>à moindre cout</p></li>
           </ul> <br>
           <button class="button1 parlons">Contactez-Nous!</button>
        </div>
    </div> <br>
    <div class="row ">
        <div class="col-lg-7 mb-4">
            <h5 class="text2">CONCRÈTEMENT VOICI CE QU'ON PEUT FAIRE POUR VOUS.</h3> <br>
            <ul class="maliste">
                <li> <i class="fa-solid fa-circle-check" style="color: #2ea403;"></i>  Créer des pages professionnelles pour votre communication sur les réseaux sociaux.</li>
                <li> <i class="fa-solid fa-circle-check" style="color: #2ea403;"></i>  Paramétrer et habiller les pages.</li>
                <li> <i class="fa-solid fa-circle-check" style="color: #2ea403;"></i>  Réécrire votre description de manière accrocheuse.</li>
                <li> <i class="fa-solid fa-circle-check" style="color: #2ea403;"></i>  Créer du contenu pour vos pages.</li>
                <li> <i class="fa-solid fa-circle-check" style="color: #2ea403;"></i>  Programmer des postes attractifs.</li>
                <li> <i class="fa-solid fa-circle-check" style="color: #2ea403;"></i>  Publié en suivant les tendances du moment (les buzz).</li>
                <li> <i class="fa-solid fa-circle-check" style="color: #2ea403;"></i>  Auditer votre audience.</li>
            </ul>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-3 py-5 my-5  ">
            <img class="img-fluid" src="Images//promoting.png" alt="">
        </div>
    </div>
  </div> <br> <br>

<section class="commu">
    <div class="container">
    <div class="row d-flex justify-content-center V">
        <div class="col-lg-3 ">
            <img class="img-fluid"src="Images/Outlook-bnoyqeil.png" alt="">
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5  py-5 ">
            <p> 
                Les réseaux sociaux sont plus que jamais vecteurs 
                de gains de compétitivité pour votre entreprise.</p><br>
            <p> 
                Aujourd hui, avec une stratégie de communication 
                efficiente, vous pouvez vendre à moindre coût et 
                renforcer votre image de marque.
            </p>
        </div>
    </div>
    </div>
   
</section>

<br><br><br><br>
<section class="container">
<div class="row V">
        <div class="col-lg-7 ml-2">
           <h4 class="text">DES PAGES DE RÉSEAUX SOCIAUX ADAPTÉS À VOTRE ENTREPRISE ET VOS CIBLES.</h4><br>
           <p>Lors de notre premier rendez-vous, nous échangerons sur 
            les différents objectifs que vous souhaitez atteindre à 
            travers les réseaux. <br><br>
            Nous pourrons alors établir un diagnostic global afin de 
            définir les réseaux sociaux les plus intéressants à utiliser 
            et les grands axes de communication à développer. <br><br>
            Si vous êtes déjà présent sur les réseaux sociaux, nous 
            établirons ensemble un état des lieux complet qui servira 
            de point de départ avant la mise en place de mesures 
            correctives adaptées à votre activité et vos besoins. <br>
            </p><br>
        </div>
        <div class="col-lg-3 ml-2 mb-2">
            <img class="img-fluid" src="Images//youg people discussing the project.png" alt="">
            <h5 style="font-weight:bolder;color:orangered">VOUS VOULEZ MIEUX RENFORCER VOTRE NOTORIÉTÉ EN LIGNE ?</h5>
            <button class="btn parlons">Parlons-en!</button>
        </div>
    </div>
</section>
<br><br>
</div>

<?php
    include 'footer.php';
    ?>