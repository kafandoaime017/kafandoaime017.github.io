    <?php
       $activePage = "home";
       include 'head.php'; 
    ?>
    <br>
    <style>


.aimerec
{
    background-color: rgba(158, 158, 255, 0.3) !important;
    padding: 25px;
    border-radius: 10px;
    /* width: 350px; */
}
.aimerec .itm
{
    border-bottom: 2px solid rgb(91, 162, 254);
    
   
}
        .pr 
        {
          font-size: 25px !important;
          font-weight:500
        }
        .pr span 
        {
            color:orangered;
            font-weight:600;
        }
        

        @media (min-width:1024px) {
            .projets
        {
            
        }
        .realisations .pap
     {
        padding-left:80px;
        padding-right:80px;
     }
     .rectangle
     {
        width: 350px !important;
     }
     }
        @media (max-width: 1007px ){
            .domaines .premiere img
            {
                display: none !important;
            }
            .maquettes img 
            {
                display: none !important;
            }
            .vitrine .man img 
            {
                display: none !important;
            }
            .sociaux .ddd img 
            {
                display: none !important;
            }
           }

           .sociaux .ddd img 
            {
                display: block !important;
            }


            .realisations  .z:hover .bas
        {
      /* transform:scale(0.9); */
      transition: 0.5s ease !important;
      background: #01054d;
         background: -webkit-linear-gradient(to right, rgb(7, 4, 94), rgb(216, 64, 9));
            background: linear-gradient(to right,  rgb(6, 4, 105), rgb(216, 64, 9)); 
   
        }

     .realisations
        {
        padding-top:80px;
       
        }
        .realisations h3 
        {
            font-weight:bolder;
            color:black;
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
        .maquettes
        {
            background: linear-gradient(90deg, rgba(0,204,255,0.1) 50%, white 50%) !important;
        }
        /* .realisations .bas:hover
        {
            background: #01054d;
        background: -webkit-linear-gradient(to right, rgb(7, 4, 94), rgb(216, 64, 9));
        background: linear-gradient(to right,  rgb(6, 4, 105), rgb(216, 64, 9)); 
    
        color: white;
            padding:4px;
            border-bottom-left-radius:5px;
            border-bottom-right-radius:5px;
            transition:all 0.5s ease;
        
        } */
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
        @media  (min-width: 769px){
           /* .rectange
           {
            position: relative;
            left:400px !important;
           } */
        }
        /* @media only screen and (min-width: 768px){
        
        .rectangle
        {
            position: relative;
            left:180px;
        }
    
        } */
        /* @media only screen and (max-width: 767px) {
                .rectangle
                {
                    position: relative;
                left:95px;
                }
            } */


            @media (min-width:375px) 
            
        {
            .rectangle
            {
                margin-left:-26px;
                width: 350px;
            }
            .bouton_disparaitre
            {
                display: none;
            }
        }
        @media (min-width:300px) 
            
            {
                .rectangle
                {
                    margin-left:-22px;
                    width: 300px;

                }
                .bouton_disparaitre
            {
                display: none;
            }
                .monsvg 
                {
                    position: relative;
                    left:-8px !important;
                    width: 200px;
                }
                .ici 
                {
                    width: 100px;
                    padding:4px;
                    position: relative;
                    left:-3px !important;
                }
                .carre
                {
                    margin-left:-30px !important;
                }
            }
            @media (max-width:765px) 
            
            {
                #bouton_disparaitre
                {
                    display: none !important;
                }
                #button_apparaitre
                {
                    display: block !important;
                }
                .rectangle
                {
                    margin-left:-15px;
                    width: 358px;


                }
                .monsvg 
                {
                    position: relative;
                    left:-8px !important;
                    width: 200px;
                }
                .ici 
                {
                    width: 100px;
                    padding:4px;
                    position: relative;
                    left:-3px !important;
                }
                .carre
                {
                    margin-left:-40px !important;
                }
            }

            @media (min-width: 100px) and (max-width: 380px) {
  
                .rectangle
                {
                    margin-left:-15px;
                    width: 276px;


                }
                #bouton_disparaitre
                {
                    display: none !important;
                }
                #button_apparaitre
                {
                    display: block !important;
                }
                }

                @media (min-width: 100px) and (max-width: 150px) {
                    .rectangle
                {
                    margin-left:-15px;
                    width: 120px;


                }
                #bouton_disparaitre
                {
                    display: none !important;
                }

                #button_apparaitre
                {
                    display: block !important;
                }
                }



                #button_apparaitre
                {
                    display: block !important;
                }
               
               



            .monbtn button:hover 
            { transition: 0.5s ease !important;
      background: #01054d;
     
      box-shadow:0px 0px 8px 3px orangered;
         background: -webkit-linear-gradient(to right, rgb(7, 4, 94), rgb(216, 64, 9));
            background: linear-gradient(to right,  rgb(6, 4, 105), rgb(216, 64, 9));  background-color:blue;
            }

            .savoir:hover 
            {
                background: #01054d;
     transition:ease 0.6s !important;
     box-shadow:0px 0px 2px 1px orangered;
        background: -webkit-linear-gradient(to right, rgb(7, 4, 94), rgb(216, 64, 9));
           background: linear-gradient(to right,  rgb(6, 4, 105), rgb(216, 64, 9));  background-color:blue;
            }
           
            .maquettes img 
            {
                display: block !important;
            }
            .vitrine .man img 
            {
                display: block !important;
            }
            .discutons
            {
                padding:14px;
                width: 210px;
                border-radius:65px;
                background-color:white;
                color:rgb(9, 9, 147);
                font-weight:bolder;
                border:4px solid rgb(9, 9, 147);
                font-size:23px;
                text-transform:capitalize;
            }
            .avantages .card 
            {
                background-color: #f5f5f5;
                height: 400px !important;
            }
            .sous-rectangle p 
            {
                font-weight:500 !important;
                font-size:14px !important;
            }
            
        
    </style>
    <!-- Home -->
    <section class="home" >
        <div class="bg-image" style="background-image: url('Images/fond.jpg');">
            <div class="mask">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="container">
                        <div class="row">
                         
                            <div class="col-lg-12 mt-2  contenu anime_animated animate__backInLeft">
                                <h1 class="titre animate__animated  animate__lightSpeedInLeft animate__slow"><span>New Way</span> Agency</h1>
                                <p class="pr">Une nouvelle façon de <span class="animate__animated animate__fadeInRight"></span> votre business</p>
                                <div class="animate__animated animate__fadeInRight animate__slow">
                                    <p class="">NWA, L'innovation digitale qui répond  à vos besoins et régit votre notoriété.</p>
                                    <div class="but d-flex justify-content-center">
                                        <a class="monbtn" href="https://wa.me/22654940980"> <button data-mdb-toggle="tooltip" data-mdb-placement="bottom">Contactez-nous !</button></a>
                                    </div>
                                </div>
                               
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- finHome -->
     <br>
    <!-- Domaines -->
        <section class="domaines">
            <div class="container">
                <h1 class="text-center exp wow bounceIn ">Nos <span>Domaines D'expertise :</span></h1> 
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-4 sss p-4  order-lg-1 order-2  wow fadeInLeft">
                        <h1 style="font-weight:bold;font-size:22px !important;" class="creation text-center wow bounceIn slower">création graphique</h1> <br>
                       <p class="texte1">
                            Confiez-nous la réalisation de vos logos , cartes de 
                            visite, flyers et autres supports graphiques.
                       </p>
                       <p class="texte2">
                            L'équipe de NWA s'occupe de vous produire des designs 
                            et créations professionnels pour que la première chose 
                            que voient vos prospects soit une impression qui reste.
                            
                            Des designs épurés, des infographies assorties.
                        </p>
                        <div class="butt d-flex justify-content-center">
                            <a href="graphisme.php"><button class="savoir">En Savoir Plus</button></a>
                            
                        </div>
                    </div>
                    <div class="col-lg-1">

                    </div>
                    <div style="margin-top: 120px !important;" class="col-lg-4 my-5 px-4  order-lg-2 order-1   wow fadeInRight">
                        <img class="img-fluid" src="Images/design composition.png" alt="font1">
                    </div>
                </div>
            </div>
        </section>
    <!--FIN  Domaines -->
        
    <!-- Maquettes -->
        <section class="maquettes">
            <div class="container-fluid">
                <div class="row">
                    <div  class="col-lg-4 d-flex justify-content-center  py-5 wow bounceIn slower">
                        <img style="" class="img-fluid  px-2" src="Images/laptop with open article and notes.png" alt="laptop">
                    </div>
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-4   p-5  cont wow fadeInRight slower">
                        <h1 style="font-weight:bold;font-size:22px !important;" class="creation text-center wow bounceIn slower">maquettage ui/ux et 3d</h1> <br>
                        <p class="texte1">
                            Que vous ayez un site web à développer, une 
                            application mobile à concevoir ou un produit à 
                            fabriquer, une maquette prototypée ou un visuel 
                            3D vous permettra sûrement de peaufiner votre 
                            product process
                        </p>
                        <p class="texte1">
                            Le gain en temps est  assuré, et en plus vous 
                            pouvez mieux convaincre vos investisseurs avant 
                            même d'avoir conçu le produit final
                        </p>
                        <div class="butt d-flex justify-content-center">
                            <a href="conception_3D.php"> <button class="savoir">En Savoir Plus</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- fin Maquettes -->
        <br> <br> <br> 
    <!-- SIte vitrine -->
        <section class="vitrine">
            <div class="container">
                <div class="row">
                    <h1 style="font-weight:bold;font-size:22px !important;" class="creation wow text-center bounceIn slower ">création de site web vitrine</h1> <br> <br>
                    <div class="col-lg-5  order-lg-1 order-2 px-4">
                        
                        <p>
                            À L'ère du digital, il est plus que jamais primordial d'avoir 
                            une présence sur internet.
                        </p> <br>
                        
                        <p>
                            Notre agence  s'occupe de la création ou de la refonte 
                            totale de votre site vitrine, de manière professionnelle à 
                            un prix imbatable
                        </p>
                        <div class="d-flex j">
                            <h5 style="font-weight: 600; color: black;">Vous pouvez mieux <br> 
                                découvrir note offre</h5> <a href="dev_web.php"><button class="ici savoir">Ici</button></a>
                        </div>
                        <img  src="SVG/Vector 1.svg" class="img-fluid monsvg" alt=""> 
                    </div>
                    <div class="col-lg-1 ">

                    </div>
                    <div style="margin-top:100px !important;" class="col-lg-4 order-lg-2 order-1  my-3">
                        <div class="man">
                            <img src="Images/Man chatting on dating site.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--Fin SIte vitrine -->

    <!-- Sociaux -->
        <section class="sociaux">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 ddd">
                        <img class="img-fluid" src="Images/Young woman with a loudspeaker promoting products and services online.png" alt="">
                    </div>
                    <div class="col-lg-5 px-5 fff">
                        <h4 style="font-weight:bold;font-size:22px !important;" class="creation text-center wow bounceIn slower">Accompagnement réseaux sociaux</h4> <br>
                        <p class="texte1">
                            Faites vous accompagner par des professionnels 
                            dans l'élaboration de votre stratégie, l'utilisation des 
                            réseaux et la création de vos posts.
                        </p>
                        <br>
                        <p class="texte1">
                            Chez <span class="nwa">New Way Agency</span>, nous visons à vous 
                            autonomiser rapidement dans la gestion de votre 
                            communication. 

                            Notre priorité est de vous doter des compétences 
                            nécessaires pour que vous puissiez gérer votre 
                            communication en toute confiance.
                        </p>
                        <br>
                        <p class="texte1">
                            Nous sommes spécialisés sur <span class="rsx">Facebook, LinkedIn, Instagram, et WhatsApp Business.</span>
                        </p>
                        <div class="butt d-flex justify-content-center">
                            <a href="management.php"><button class="savoir">En Savoir Plus</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- finSociaux -->

    <!-- Formation -->
    
    <!-- finFormation -->
     <br> <br>
    <!-- Idée -->
        <section class="idee">
            <div class="container d-flex justify-content-center">
                <div class="bord">
                    <h3 class="text-center wow bounceIn slower pre" style="font-weight: bolder;">Vous avez   <span style="color: #FF5000; font-weight:bolder; margin-left: 3px;"></span></h3> <br>

                    <div class="container">
                        <div class="buttt d-flex justify-content-center">
                            <a href="tel:+22678787878"><button class="border-3 border-rounded" >Parlons-en !</button></a>
                        </div>
                    </div>
                   
                </div>
            </div> <br>
        </section> 
    <!-- finIdée -->
    
    <!-- Projets -->
    <section class="realisations" id="projets_recents">
    <h3 style="color:rgb(0, 179, 255)" class="text-center">Nos récentes réalisations</h3>
    <br><br>
    <div class="container ">
        <div class="row pap">
            <div class="col-lg-4 col-sm-12 col-md-6 z mb-1">
                <a href="Images/Plan de travail 3.png">
                <div class="card wow animate__fadeInUp  slower">
                    <div class="image">
                        <img src="Images/Plan de travail 3.png" alt="" class="img-fluid">
                    </div>
                    <div class="bas">
                        <h4 class="text-center text-white">Un Flyer</h4>
                        <p class="text-center">Une belle création pour une startup de cosmétiques</p>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-lg-4 col- col-sm-12 col-md-6 z mb-1">
                <a href="Images/design_graphique.png">
                <div class="card wow animate__fadeInUp  slower">
                    <div class="image">
                        <img src="Images/design_graphique.png" alt="" class="img-fluid">
                    </div>
                    <div class="bas">
                        <h4 class="text-center text-white">Un Flyer</h4>
                        <p class="text-center">Une belle création pour une startup de cosmétiques</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-12 col-md-6 z mb-1">
                <a href="Images/homme0.png">
                <div class="card wow animate__fadeInUp  slower">
                    <div class="image">
                        <img src="Images/homme0.png" alt="" class="img-fluid">
                    </div>
                    <div class="bas">
                        <h4 class="text-center text-white">Un Flyer</h4>
                        <p class="text-center">Une belle création pour une startup de cosmétiques</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-12 col-md-6 z mb-1">
                <a href="Images/proceder.png">
                <div class="card wow animate__fadeInUp  slower">
                    <div class="image">
                        <img src="Images/proceder.png" alt="" class="img-fluid">
                    </div>
                    <div class="bas">
                        <h4 class="text-center text-white">Un Flyer</h4>
                        <p class="text-center">Une belle création pour une startup de cosmétiques</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-4  col-sm-12 col-md-6 z mb-1">
                <a href="Images/genie.png">
                <div class="card  wow animate__fadeInUp  slower">
                    <div class="image">
                        <img src="Images/genie.png" alt="" class="img-fluid">
                    </div>
                    <div class="bas">
                        <h4 class="text-center text-white">Un Flyer</h4>
                        <p class="text-center">Une belle création pour une startup de cosmétiques</p>
                    </div>
                </div>
                </a> 
            </div>
            <div class="col-lg-4 col-sm-12 col-md-6 z mb-1">
                <a href="Images/Alain.png">
                <div class="card wow animate__fadeInUp  slower">
                    <div class="image">
                        <img src="Images/Alain.png" alt="" class="img-fluid">
                    </div>
                    <div class="bas">
                        <h4 class="text-center text-white">Un Flyer</h4>
                        <p class="text-center">Une belle création pour une startup de cosmétiques</p>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
</section>
     <!-- Projets -->
     <br> <br>
     <!-- section avantages -->
       <section class="avantages ">
        <h2 class="text-center b">Les avantages de travailler </h2>
        <p style="color: #00000; font-weight: 600;" class="text-center">
            avec New Way Agency ?
        </p> <br>
          <div class="container">
            <div class="row">
                    <div class="col-sm-6  mb-3 wow animate__fadeInUp  slower">
                      <div class="card ">
                        <div class="card-body">
                            <div class="icone d-flex justify-content-center">
                                <img class="wow animate__rotateIn" src="SVG/lampe.svg" alt="">
                            </div> <br>
                          <h5 class="card-title tit text-center">Une Équipe Jeune, Réactive Et Créative <br> </h5>
                          <p class="card-text text-center">
                                 L équipe de New Way Agency travaillent avec beaucoup de
                                passion et de dévouement. Nous nous sommes lancés dans
                                cette aventure entre amis, ce qui fait notre force et notre
                                complémentarité. Notre créativité et notre dynamisme sont nos

                                grands atouts.

                                Nul doute que nous saurons vous accompagner dans tous vos

                                projets de la meilleure des manières.
                        </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 mb-3 wow animate__fadeInUp  slower">
                      <div class="card">
                        <div class="card-body">
                            <div class="icone d-flex justify-content-center">
                               <img class="wow animate__rotateIn" src="SVG/carreaux.svg" alt="">
                            </div> <br>
                          <h5 class="card-title tit text-center">Une riche expérience et un processus <br> de créativité bien maîtrisé
                            </h5>
                          <p class="card-text text-center">
                                Ça fait des années que nous travaillons sur des projets similaires

                                et nos clients ont toujours été satisfaits.

                                Avec une agence pareil nous maîtrisons toute la chaîne de
                                créativité allant du draft au maquettage jusqu'au prototype et

                                produit finis.

                        </p>
                        </div>
                      </div>
                    </div>
            </div> 
            <div class="row">
                <div class="col-sm-6 mb-3 wow animate__fadeInUp  slower">
                  <div class="card ">
                    <div class="card-body">
                        <div class="icone d-flex justify-content-center">
                            <img class="wow animate__rotateIn" src="SVG/communicate.svg" alt="">
                        </div> <br>
                      <h5 class="card-title tit text-center">Une communication centralisée et <br> un gain en temps</h5>
                      <p class="card-text text-center">
                            Avec New Way Agency vous n'avez qu'un seul interlocuteur. Nul
                            besoin de courir à gauche et à droite pour chercher différents
                            prestataires qui vont au final ne pas se comprendre et mal faire

                            votre travail.

                            Après avoir défini vos besoins, nous vous livrons le service final
                            en un temps record. Nous travaillons en étroite collaboration
                            avec votre équipe pour s'assurer que le besoin est clairement

                            appréhendé.
                    </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3 wow animate__fadeInUp  slower">
                  <div class="card">
                    <div class="card-body">
                        <div class="icone d-flex justify-content-center">
                           <img class="wow animate__rotateIn" src="SVG/securite" alt="">
                        </div> <br>
                      <h5 class="card-title tit text-center">Les Données De Nos Clients Sont <br> Stockés en sécurité</h5>
                      <p class="card-text text-center">
                          Notre agence protège vos données des menaces externes.
                            Aussi, pendant au moins 18 mois après le service, vous pouvez
                            toujours nous contacter pour avoir une copie des créations que
                            nous avons faites pour vous. Votre logo par exemple..
                    </p>
                    </div>
                  </div>
                </div>
        </div>
        
        <div class="d-flex justify-content-center">
            <div class="col-sm-6 mb-2 wow animate__fadeInUp  slower">
                <div class="card">
                  <div class="card-body">
                      <div class="icone d-flex justify-content-center">
                         <img class="wow animate__rotateIn" src="SVG/forum" alt="">
                      </div> <br>
                    <h5 class="card-title tit text-center">Un Service Après Vente Remarquable</h5>
                    <p class="card-text text-center">
                        Après qu un client nous ait fait confiance pour une mission, il est
                        primordial pour nous de lui assurer un service après-vente sans
                        faille. La satisfaction de nos clients passant avant toute chose.
                  </p>
                  </div>
                </div>
              </div>
        </div>
          </div>
       </section>
     <!--Fin section avantages -->

 <!-- section confiances -->
<section class="confiances">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 cl d-flex justify-content-centers align-items-center">
                <div class="image text-center">
                    <img class="img-fluid mb-3" src="Images/Frame.png" alt="">
                    <h2 style="font-weight: bolder;">
                        VOUS PENSEZ QUE NOTRE  <br>
                        AGENCE PEUT VOUS AIDER ?
                    </h2>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-primary discutons">Discutons-en</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 d-flex justify-content-center align-items-center wow animate__fadeInUp slower">
                <div class="aimerec text-center">
                    <h3 style="font-weight: bolder; color: #FF5000;">New Way Agency</h3>
                    <div class="itm">
                        <i style="font-size: 40px; color:white;" class="fas fa-laptop"></i>
                        <h6 class="text-center">Créer des visuels attractifs</h6>
                    </div>
                    <div class="itm">
                    <i style="font-size:40px; color:white;" class="fas fa-tachograph-digital"></i>
                        <h6 class="text-center">Coder des sites web responsives</h6>
                    </div>
                    <div class="itm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="white" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                        </svg>
                        <h6 class="text-center">Regrouper une audience dynamique</h6>
                    </div><br>
                    <div class="sous-rectangle">
                        <p>
                            Nous avons l'art et le savoir. <br> Nous avons le savoir-faire <br> et surtout le savoir-être.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section confiances -->






     <section class="sponsors p-5 m-3">
        <!-- <h5 style="color: #FF5000; font-weight: bolder;" class="text-center">Ils nous font confiance</h5> -->
        <div class="container">
            <div class="row ">
              <!-- <img height="50" width="50" src="Images/logos_whatsapp-icon.png" alt="">
              <img src="Images/logos_whatsapp-icon.png" alt="">
              <img src="Images/logos_whatsapp-icon.png" alt="">
              <img src="Images/logos_whatsapp-icon.png" alt=""> -->
            </div>
        </div>
     </section>

<script>
    $(document).ready(function() {
       const mots = ["Stimuler", "Développer", "Propulser", "Régir", "Communiquer sur", "Booster"];
       let index = 0;
  
      function changerMot() {
         const spanElement = $(".pr span");
         spanElement.text(mots[index]);
         index = (index + 1) % mots.length; 
       }
       
      changerMot();
      setInterval(changerMot, 3000);
  });

  $(document).ready(function() {
       const mts = ["Une idée ?", "Un besoin ?", "Un projet ?"];
       let inde = 0;
  
      function changeMot() {
         const spanElmt = $(".pre span");
         spanElmt.text(mts[inde]);
         inde = (inde + 1) % mts.length; 
       }
       
       changeMot();
      setInterval(changeMot, 2000);
  });
</script>


<?php include 'footer.php';?>



     