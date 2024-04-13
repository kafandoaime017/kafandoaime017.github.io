<?php
        $activePage = 'services';
        include_once 'head.php';
        ?>
    <style>
        .content {
            background: #01054d;
            background: -webkit-linear-gradient(to right, rgb(7, 4, 94), rgb(7, 40, 96));
            background: linear-gradient(to right, rgb(6, 4, 105), rgb(7, 43, 106));
            color: white;
            padding: 2rem;
        }

        .div1 {
            display: flex;
            flex-direction: column-reverse;
            align-items: center;
        }
        .coleur .titre 
        {
            color:#FF5000 !important;
        }

        .p1 {
            text-align: center;
            padding-top: 7rem;
        }

        .bor_orange {
            border: 1px solid orangered;
            border-radius: 20px;
            background-color: orangered;
            width: 500px;
            text-align: center;
            height: 300px;
            padding-top: 6rem;
        }

        .span1 {
            padding-top: 7rem;
            justify-content: space-around;
            color: white;
        }

        .cl {
            position: relative;
            left: -125px;
        }

        .span2 {
            padding-left: 27rem;
        }

        .div3 {
            background-color: orangered;
            color: white;
            text-align: center;
            /* padding: 2rem; */

        }


        .p3 {
            background-color: black;

        }
        .nb .votreProjet
        {
            padding:17px !important;
            background-color:rgb(237, 237, 237);
            color:blue;
            border-radius:67px;
            font-size:16px;
            text-transform:capitalize;
            font-weight:bolder;
        }
        .nb .votreProjet:hover
        {
            background-color:orangered;
            transition:0.5s ease;
            color:white;
            
        }

        .num {
            color: orangered;
            font-size: 2rem;
            text-align: center;
            padding-left: 4rem;
        }

        

        @media (max-width: 768px) {
            .cl {
                display: none;
            }

            .discut {
                display: none;
            }

        }

        @media (max-width: 1007px) {
            .cl {
                display: none;

            }

            .nb {
                padding-top: 20px;
            }

            .j {
                color: white !important;
            }

            .l {
                position: relative;
                top: -60px;
            }


        }

        @media (min-width: 1024px) {
            .nb {
                padding-top: 250Px;
                position: relative;
                left: 100px;
            }

            .groupe {
                position: relative !important;
                right: 200px;
            }

        }

        .d {
            background: linear-gradient(to right, rgb(4, 4, 102), rgb(12, 121, 246));
        }

        .div4 {

            background: linear-gradient(20deg, white 0%, white 50%, #040447 50%, #080888 100%);
            background-size: 100% 100%;
            background-repeat: no-repeat;
            height: 36rem;
            padding: 20px;
            color: white;
        }

        .f {
            padding: 100px !important;
            border-radius: 30px !important;
            background-color: #f5501e !important;
            color: white;
        }

        .ff {
            padding: 50px !important;
            border-radius: 30px !important;
            background-color: #f5501e !important;
            color: white;
        }

        .vvv {
            padding-left: 90px;
        }

        .ff p {
            padding-left: 90px;
        }

        .coleur {
            background-color: rgba(232, 73, 0, 0.1) !important;
            padding-top: 0px;
            display: flex;
            justify-content:center !important;
        }

        .l {
            display: flex;

            justify-content: space-around;
        }

        .vision {
            padding-top: 50px;
            font-weight: bolder;
            color: orangered;
        }

        .vision span {
            color: rgb(18, 206, 244);
        }

        .discut {
            position: relative;
            left: 270px;
        }

       


        .raisons {
            background-color: rgb(196, 205, 219);
        }

        .raisons .col-lg-2 p small {
            color: black;
            text-align:center !important;
        }
        .coleur .container .row .titre {
            size: 27px !important;

        }
        .iconnne
        {
            background-color:rgb(3, 3, 92);
            width: 50px;
            height:50px;
            padding-top:6px;
          font-size:35px;
            border-radius:100%;
            color:white;
           
        }
        .num svg 
        {
            color:rgb(3, 3, 92);
        }
        .coleur p 
        {
            color:black !important;
        }


        .rond {
    height: 100px;
    color: white !important;
    padding: 15px;
    border-radius: 50% !important;
    background-color: white;
    width: 100px;
    border: 2px solid blue;
    /* border-image: linear-gradient(45deg, rgb(9, 9, 144), rgb(5, 157, 234));
    border-image-slice: 1;  */
}

    .phoe
    {
        background: linear-gradient(45deg, rgb(11, 11, 189), rgb(183, 231, 255));s
    }

    </style>

<body>
       

    <section class="content">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3 py-2 my-2 text-center">
                    <img src="Images/colorful abstract composition with geometric shapes.png" width="400" height="400"
                        alt="iiiiiii" class="img-fluid">
                </div>
                <div class="col-lg-6 ">
                    <p class="p1">
                        Découvrez un univers de design captivant <br>
                        avec notre service de maquettage UI/UX et <br>
                        Conception 3D. Transformez vos idées en <br>
                        expériences visuelles époustouflantes, <br>
                        fusionnant l'art du design d'interface avec la <br>
                        puissance immersive de la 3D.<br>
                    </p>
                </div>
            </div>
        </div>
        <br> <br>
    </section>

    <!-- <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 span1">
                    <span  >
                        <p class="bor_orange">
                        Laissez-nous donner vie à vos concepts, en <br>
                        créant des maquettes qui captivent et des <br>
                        designs 3D qui impressionnent <br>
                        </p>
                    </span>
                </div>
                <div class="col-md-6 span2">
                    <img src="Images/image1.png" width="200" height="200" alt="">
                </div>
            </div>
        </div>
    </section> -->
    <br> <br> <br>
    <section>
        <div class="container d-flex justify-content-center">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="card f">
                            Laissez-nous donner vie à vos concepts, en
                            créant des maquettes qui captivent et des
                            designs 3D qui impressionnent.
                        </div>
                    </div>
                    <div class="col-lg-4 cl">
                        <img height="300" src="Images/abstract composition with loudspeaker.png" alt="">
                    </div>
                </div>
        </div>

    </section>

    <section>
        <div class="container p-5">
            <div class="row d-flex justify-content-center p-5">
                <div class="col-lg-5 py-5">
                    <h3 class="vision">Votre vision,
                        Notre expertise,
                        
                        <span> " Une réalité visuelle
                            sensationnelle. "</span>
                    </h3>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 my-5">
                    <img class="img-fluid" src="Images/Startup idea.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <br> <br>
    <section>
        <div class="div3 p-3">
            Pourquoi faire une maquette de votre site ou <br>
            votre application avant de le développer ? <br>
        </div>
        <div class="p-2 d"></div>
    </section>
    
    <section class="coleur ">
        <div class="container   p-5">
            <div class="row d-flex justify-content-center  p-5">
                <div class="col-lg-6 ">
                <span class="num "><h2 class="r"> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-1-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002H7.971L6.072 5.385v1.271l1.834-1.318h.065V12h1.312V4.002Z"/>
                        </svg></h2></span>
                    <h5 class="titre">Visualisation préalable :</h5>
                    <p class="text-center">
                        Voir à quoi ressemblera votre projet avant <br> de lancer son développement
                    </p>
                </div>
                <div class="col-lg-6 ">
                    <span class="num "><h2 class="r">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-2-circle-fill" viewBox="0 0 16 16">
                         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z"/>
                    </svg>
                    </h2></span>
                    <h5 class="titre">Meilleure communication :</h5>
                    <p class="text-center">
                    Cela va faciliter votre compréhension <br> entre membres d'équipe. 
                    </p>
                </div>
                <div class="col-lg-6 ">
                    <span class="num "><h2 class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-3-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z"/>
                    </svg>
                    </h2></span>
                    <h5 class="titre">Économie de temps et d'argent :</h5>
                    <p class="text-center">
                        Éviter les fonctionnalités inutiles.
                    </p>
                </div>
                <div class="col-lg-6 ">
                    <span class="num "><h2 class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-4-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM7.519 5.057c-.886 1.418-1.772 2.838-2.542 4.265v1.12H8.85V12h1.26v-1.559h1.007V9.334H10.11V4.002H8.176c-.218.352-.438.703-.657 1.055ZM6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z"/>
</svg></h2></span>
                    <h5 class="titre">Tests préliminaires :</h5>
                    <p class="text-center">
                         Repérer les problèmes d'utilisabilité en amont.
                    </p>
                </div>
                <div class="col-lg-6 ">
                    <span class="num "><h2 class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-5-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.006 4.158c1.74 0 2.924-1.119 2.924-2.806 0-1.641-1.178-2.584-2.56-2.584-.897 0-1.442.421-1.612.68h-.064l.193-2.344h3.621V4.002H5.791L5.445 8.63h1.149c.193-.358.668-.809 1.435-.809.85 0 1.582.604 1.582 1.57 0 1.085-.779 1.682-1.57 1.682-.697 0-1.389-.31-1.53-1.031H5.276c.065 1.213 1.149 2.115 2.72 2.115Z"/>
</svg></h2></span>
                    <h5 class="titre">Guider le développement :</h5>
                    <p class="text-center">
                    vous assurez la conformité à la vision du concepteur.
                    </p>
                </div>
                <div class="col-lg-6 ">
                    <span class="num "><h2 class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-6-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.21 3.855c-1.868 0-3.116 1.395-3.116 4.407 0 1.183.228 2.039.597 2.642.569.926 1.477 1.254 2.409 1.254 1.629 0 2.847-1.013 2.847-2.783 0-1.676-1.254-2.555-2.508-2.555-1.125 0-1.752.61-1.98 1.155h-.082c-.012-1.946.727-3.036 1.805-3.036.802 0 1.213.457 1.312.815h1.29c-.06-.908-.962-1.899-2.573-1.899Zm-.099 4.008c-.92 0-1.564.65-1.564 1.576 0 1.032.703 1.635 1.558 1.635.868 0 1.553-.533 1.553-1.629 0-1.06-.744-1.582-1.547-1.582Z"/>
</svg></h2></span>
                    <h5 class="titre">Planification de l'expérience utilisateur :</h5>
                    <p class="text-center">
                      Vous pouvez définir la disposition et l'interaction des éléments.
                    </p>
                </div>
                <div class="col-lg-6 ">
                    <span class="num "><h2 class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-7-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM5.37 5.11h3.972v.07L6.025 12H7.42l3.258-6.85V4.002H5.369v1.107Z"/>
</svg></h2></span>
                    <h5 class="titre">Réduction des risques :</h5>
                    <p class="text-center">
                    vous identifier les problèmes dès le départ pour éviter <br> des corrections coûteuses.
                    </p>
                </div>
                <div class="col-lg-6 ">
                    <span class="num "><h2 class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-8-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-5.03 1.803c0-1.248-.943-1.84-1.646-1.992v-.065c.598-.187 1.336-.72 1.336-1.781 0-1.225-1.084-2.121-2.654-2.121-1.57 0-2.66.896-2.66 2.12 0 1.044.709 1.589 1.33 1.782v.065c-.697.152-1.647.732-1.647 2.003 0 1.39 1.19 2.344 2.953 2.344 1.77 0 2.989-.96 2.989-2.355Zm-4.347-3.71c0 .739.586 1.255 1.383 1.255s1.377-.516 1.377-1.254c0-.733-.58-1.23-1.377-1.23s-1.383.497-1.383 1.23Zm-.281 3.645c0 .838.72 1.412 1.664 1.412.943 0 1.658-.574 1.658-1.412 0-.843-.715-1.424-1.658-1.424-.944 0-1.664.58-1.664 1.424Z"/>
</svg></h2></span>
                    <h5 class="titre">Support marketing :</h5>
                    <p class="text-center">
                         Présenter le concept à des investisseurs ou des clients.
                    </p>
                </div>
                <div class="col-lg-6 ">
                    <span class="num "><h2 class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-9-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.223 4.146c2.104 0 3.123-1.464 3.123-4.3 0-3.147-1.459-4.014-2.97-4.014-1.63 0-2.871 1.02-2.871 2.73 0 1.706 1.171 2.667 2.566 2.667 1.06 0 1.7-.557 1.934-1.184h.076c.047 1.67-.475 3.023-1.834 3.023-.71 0-1.149-.363-1.248-.72H5.258c.094.908.926 1.798 2.52 1.798Zm.118-3.972c.808 0 1.535-.528 1.535-1.594s-.668-1.676-1.56-1.676c-.838 0-1.517.616-1.517 1.659 0 1.072.708 1.61 1.54 1.61Z"/>
</svg></h2></span>
                    <h5 class="titre">Feedback préliminaire :</h5>
                    <p class="text-center">
                    Vous pouvez recevoir des retours avant le développement complet.
                    </p>
                </div>
                <div class="col-lg-6 ">
                    <span class="num "><h2 class="text-center"><label class="iconnne">10</label></h2></span>
                    <h5 class="titre">Faciliter les modifications :</h5>
                    <p class="text-center">
                    Permettre des ajustements plus simples qu'une application développée.
                    </p>
                </div> 
            </div>

    </section>

    <section>
        <div class="div4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="nb">
                            <h5 class="j" style="font-weight:bolder; color:black;">Convaincu?</h5>
                            <a href="https://wa.me/22654940980"><button class="btn votreProjet btn-primary">Parlons de votre projet</button></a>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 py-5">
                        <div class="l">
                            <img src="SVG/tactic_FILL0_wght400_GRAD0_opsz24 (1).svg" alt="">
                            <h5 class="py-5" style="font-weight:bolder;">Planifier efficacement <br> <span
                                    style="color:orangered;">la reussite de votre projet</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container groupe">
            <div class="row">
                <div class="col-lg-6 p-4">
                    <img class="discut" src="Images/colleagues discussing team project.png" height="300"
                        alt="">
                </div>
                <div class="col-lg-6 p-4">
                    <div class="ff">
                        <h4 class="vvv">Nous nous basons
                            sur l'expérience
                            utilisateur pour
                            concevoir des
                            interfaces agréables
                            et intuitives.
                        </h4>
                        <p>
                            Une maquette 3D vous évite les erreurs
                            irréparables en vous permettant de modifier la
                            disposition de vos informations clés sur
                            l'étiquette à temps, de changer la forme ou le
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <br> <br>
    <section class="raisons">
        <div class="container p-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-2 rondele">
                    <div class="rond">
                        <div class="image">
                            <img src="SVG/trending.svg" alt="">
                        </div>
                    </div>
                    <p class="text-center"><small>Ainsi, vous réduisez
                            les risques</small></p>
                </div>
                <div class="col-lg-2">
                    <div class="rond">
                        <div class="image">
                            <img src="SVG/pivot.svg" alt="">
                        </div>
                    </div>
                    <p class="text-center"><small>Vous pouvez faire un
                            teste préliminaires</small></p>
                </div>
                <div class="col-lg-2">
                    <div class="rond">
                        <div class="image">
                            <img src="SVG/troubles.svg" alt="">
                        </div>

                    </div>
                    <p class="text-center"><small>Vous recevoir du
                            feedback des vos clients
                            ou investisseurs,</small></p>
                </div>
                <div class="col-lg-2">
                    <div class="rond phoe">
                        <div class="image">
                            <img src="SVG/phon.svg" alt="">
                        </div>

                    </div>
                    <p class="text-center"><small>Vous pouvez l'utiliser
                            en tant que support
                            marketing</small></p>
                </div>
                <div class="col-lg-2">
                    <div class="rond">
                        <div class="image">
                            <img src="SVG/liquor.svg" alt="">
                        </div>

                    </div>
                    <p style="padding-left:-17px" class="text-center "><small> Bien-sûr, ce n'est pas
                            que les bouteilles</small></p>
                </div>
                <!-- <div class="col-lg-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae ratione mollitia quidem, numquam quia deleniti ea a velit sit aliquid tenetur explicabo odio iure ex, ut rem eum id illo.
                </div> -->
            </div>
        </div>
    </section>



    <?php
    include_once 'footer.php';
    ?>
