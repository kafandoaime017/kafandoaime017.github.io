<?php
  $activePage = "apropos"; 
  include 'head.php'; 
?>
<link href="csss/style.css" rel="stylesheet">

<style>
.acc {
    background: #010430;
    background: -webkit-linear-gradient(to right, rgb(7, 4, 94), rgb(10, 27, 151));
    background: linear-gradient(to right,  rgb(7, 4, 94), rgb(10, 27, 151)); 
    color: white;
    /* padding: 25px; */
}

.carousel-inner .mb-3 {
    color: #00CCFF;
    font-weight: bolder;
}

.f {
    color: orangered;
    font-weight: bolder;
}

.text-muted {
    color: black;
}



/* section acousel */

/* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

.wrapper {
  max-width: 1100px;
  width: 100%;
  z-index: 9999;
  position: relative;
}
.wrapper i {
  top: 50%;
  height: 50px;
  width: 50px;
  cursor: pointer;
  font-size: 1.25rem;
  position: absolute;
  text-align: center;
  line-height: 50px;
  background: #fff;
  border-radius: 50%;
  box-shadow: 0 3px 6px rgba(0,0,0,0.23);
  transform: translateY(-50%);
  transition: transform 0.1s linear;
}
.wrapper i:active{
  transform: translateY(-50%) scale(0.85);
}
.wrapper i
{
  background:rgb(4, 4, 78);
  color: white !important;
}
.wrapper i:first-child{
  left: -22px;
}
.wrapper i:last-child{
  right: -22px;
}
.wrapper .carousel{
  display: grid;
  grid-auto-flow: column;
  grid-auto-columns: calc((100% / 3) - 12px);
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  gap: 16px;
  border-radius: 8px;
  scroll-behavior: smooth;
  scrollbar-width: none;
}
.carousel::-webkit-scrollbar {
  display: none;
}
.carousel.no-transition {
  scroll-behavior: auto;
}
.carousel.dragging {
  scroll-snap-type: none;
  scroll-behavior: auto;
}
.carousel.dragging .card {
  cursor: grab;
  user-select: none;
}
.carousel :where(.card, .img) {
  display: flex;
  justify-content: center;
  align-items: center;
}
.carousel .card {
  scroll-snap-align: start;
  height: 342px;
  list-style: none;
  background: #fff;
  
  box-shadow:0px 0px 10px 1px #FF5000;
  cursor:pointer;
  padding-bottom: 15px;
  flex-direction: column;
  border-radius: 8px;
}
.carousel .card:hover 
{
  transform:scale(1.05);
}
.carousel .card .img {
  background:rgb(5, 119, 196);
  height: 140px;
  width: 140px;
  border-radius: 50%;
}
.card .img img {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  /* object-fit: cover; */
  /* border: 4px solid  #00CCFF; */
}
.carousel .card h2 {
  font-weight: 500;
  font-size: 18px;
  text-shadow:0px 1px 3px black;
  color:black;
  margin: 30px 0 5px;
}
.carousel .card span {
  color: #6A6D78;
  font-size: 15px;
}

@media screen and (max-width: 900px) {
  .wrapper .carousel {
    grid-auto-columns: calc((100% / 2) - 9px);
    width: 100%;
  }
}

@media screen and (max-width: 600px) {
  .wrapper .carousel {
    grid-auto-columns: 100%;
    
  }
  .cout
  {
    display: none;
  }
}
@media screen and (max-width: 995px) {
  .cout
  {
    display: none;
  }
}
#left 
{
  z-index: 999 !important;
}
.xxx 
{
  padding:0px;
  margin:0px;
  display:flex;
}
.xxx .gauche
{
  transform:rotate(180deg);
}
.xxx .droite
{

}
.ttxt
{
  margin-top:160Px;
}
.ttxt h1
{
  font-weight:bolder;
}
.ttxt h1 span 
{
  color:orangered;
}
.ttxt button 
{
  padding:15px;
  font-size:26px;
  border:none;
  border-radius:70px;
  font-weight:bolder;
  color:rgb(7, 7, 135);
  width:230px;

}
.ttxt button:hover 
{
  background-color:orangered;
  color:white;
  transition:0.2s ease;
}
.vt span 
{
  color:#FF5000;
  font-weight:bolder;
}
.cout
{
  position: relative;
  left:-270px !important;
  top:-40px !important;
}
/* team design */



/**********************************/
/********* Team #10 Style *********/
/**********************************/
.team-10 {
    text-align: center;
    margin-bottom: 30px;
    border-radius: 5px;
}

.team-10 .team-img {
    border-radius: 5px;
    overflow: hidden;
}

.team-10 .team-img img {
    width: 100%;
    height: 330px;
    border-radius: 5px;
}
.team-10 .team-img .aime 
{
    width: 100%;
    height: 330px !important;
    border-radius: 5px;
}

.team-10 .team-content {
    position: relative;
    width: 90%;
    padding: 20px;
    margin: -60px auto 0 auto;
    background: #ffffff;
    box-shadow: 0 4px 8px 0 rgba(197, 197, 197, 0.7);
    transition: transform 0.6s;
    transform-style: preserve-3d;
    border-radius: 5px;
}

.team-10:hover .team-content {
    transform: rotateY(180deg);
}

.team-10 .team-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    background: #ffffff;
    border-radius: 5px;
    transform: rotateY(180deg);
}

.team-10 .team-content h2 {
    font-size: 25px;
    font-weight: 400;
    letter-spacing: 2px;
}

.team-10 .team-content h3 {
    font-size: 16px;
    font-weight: 300;
}

.team-10 .team-content p {
    font-size: 16px;
    font-weight: 400;
    line-height: 22px;
}

.team-10 .team-social {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0;
}

.team-10 .team-social a {
    display: inline-block;
    width: 40px;
    height: 40px;
    margin-right: 5px;
    padding: 11px 0 10px 0;
    font-size: 16px;
    line-height: 16px;
    text-align: center;
    color: #ffffff;
    border-radius: 5px;
    transition: all .3s;
}

.team-10 .team-social a.social-tw {
    background: #00acee;
}

.team-10 .team-social a.social-fb {
    background: #3b5998;
}

.team-10 .team-social a.social-li {
    background: #0e76a8;
}

.team-10 .team-social a.social-in {
    background: #3f729b;
}

.team-10 .team-social a.social-yt {
    background: #c4302b;
}

.team-10 .team-social a:last-child {
    margin-right: 0;
}

.team-10 .team-social a:hover {
    background: orangered;
}
</style>

<section class="acc">
    <div class="container-fluid">
        <div class="row">
            <div  class="col-lg-6 ">
                   <img class="mb-5 cout" src="SVG/logo_coup.svg" width="600" height="600" alt=""> 
            </div> <br>
            <div class="col-lg-6 animate_animated animate__fadeInRight p-5">
                <div class="image d-flex justify-content-center"> 
                    <img src="SVG/LOGO BLANC 1.svg" alt="" class="img-fluid">
                </div>
                <div class="vt p-4">
                  <p class="text-center">
                    <span style="font-weight:bold;">New Way Agency</span> est une agence novatrice axée sur les
                    nou velles nouvelles tendances créatives, qui offre des services à
                    haute valeur ajoutée aux aux jeunes startupeurs.
                  </p>
                  <p class="text-center">
                       Nos offres de services comprend le <span>design graphique</span> , le <span>développement web</span>, 
                      et <span>mobile</span> , la <span>conception de maquettes 3D</span>
                      ainsi que l'impression de documents et bâches de haute qualité.
                  </p>
                  <p class="text-center">
                       Nous offrons également des services de marketing digital pour aider
                      nos clients à numériser leurs produits et services. NWA est porté par
                      une jeunesse engagée qui souhaite révolutionner la technologie
                      marketing et événementielle au Burkina Faso et créer un graphisme
                      de haut niveau pour les événements locaux et les entreprises.
                  </p>
                </div>
            </div>
        </div>
       
    </div>
    <div class="container-fluid xxx">
            <div class="col-lg-2">
                 <img src="SVG/LES TRIANGLES.svg" alt="" class="img-fluid gauche">
            </div>
            <div class="col-lg-8">
                 <div class="ttxt mb-3">
                 <h2 class="text-center wow bounceIn slower pre" style="font-weight: bolder;">Vous avez   <span style="color: #FF5000; font-weight:bolder; margin-left: 3px;"></span></h2> <br>
                   <div class="d-flex justify-content-center">
                      <a href="https://wa.me/22654940980"> <button >Parlons en !</button></a>
                   </div>
                 </div>
            </div>
            <div class="col-lg-2">
                 <img src="SVG/LES TRIANGLES.svg" alt="" class="img-fluid droite">
            </div>
      </div>
</section>

<section class="p-5">
    <div class="container ">
        <div class="section-title">
            <h5 style="color:orangered;font-weight:bolder" class="text-center">Notre équipe</h5>
        </div> <br> <br>
        <div class="row">
            <div class="col-md-3 wow animate__fadeInUp  slower">
                <div class="team-10">
                    <div class="team-img">
                    <img src="Images/Salifou.png" alt="Team Image">
                    </div>
                    <div class="team-content">
                        <h3 style="font-weight:bolder;color:black;">Salifou SORGHO</h3>
                        <h3 style="color:black;">Graphiste professionnel et CEO de New Way Agency</h3>
                        <div class="team-social">
                            <a class="social-tw" href="https://x.com/NewwayAgency23?t=DgxHmmH7UbSuKj03mGA_NA&s=09" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href="https://www.facebook.com/foulisadesign?mibextid=PzaGJu" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href="https://www.linkedin.com/company/new-way-agency23/" target="_blank"><i class="fab fa-linkedin-in" ></i></a>
                            <a class="social-in" href="https://instagram.com/newwayagency23?igshid=aXBsY3Q4NmNtd2o0" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="team-overlay">
                            <p>Graphiste professionnel et CEO de New Way Agency</p>
                            <div class="team-social">
                                <a class="social-tw" href="https://x.com/NewwayAgency23?t=DgxHmmH7UbSuKj03mGA_NA&s=09" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href="https://www.facebook.com/foulisadesign?mibextid=PzaGJu" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href="https://www.linkedin.com/company/new-way-agency23/" target="_blank"><i class="fab fa-linkedin-in" ></i></a>
                                <a class="social-in" href="https://instagram.com/newwayagency23?igshid=aXBsY3Q4NmNtd2o0" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow animate__fadeInUp  slower">
                <div class="team-10">
                    <div class="team-img">
                        <img src="Images/adama.jpg" alt="Team Image">
                    </div>
                    <div class="team-content">
                    <h3 style="font-weight:bolder;color:black;">Adama GAGRE</h3>
                        <h3 style="color:black;">Developpeur web full stack</h3>
                        <div class="team-social">
                            <a class="social-tw" href="" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href="" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href="" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="team-overlay">
                        <p>Developpeur web full stack chez New Way Agency</p>
                            <div class="team-social">
                                <a class="social-tw" href="" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href="" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href="" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 wow animate__fadeInUp  slower">
                <div class="team-10">
                    <div class="team-img">
                    <img class="aime" src="Images/Aimé.png"  alt="Team Image">
                    </div>
                    <div class="team-content">
                    <h3 style="font-weight:bolder;color:black;">Aimé KAFANDO</h3>
                        <h3 style="color:black;">Developpeur web full stack</h3>
                        <div class="team-social">
                            <a class="social-tw" href="https://twitter.com/RelwendeAime" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href="https://www.facebook.com/aime.kafando.338s" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href="https://www.linkedin.com/in/relwend%C3%A9-aim%C3%A9-kafando-2a3917294/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href="https://www.instagram.com/kafandowebscriptor/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="team-overlay">
                        <p>Developpeur web full stack chez New Way Agency</p>
                            <div class="team-social">
                                <a class="social-tw" href="https://twitter.com/RelwendeAime" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href="https://www.facebook.com/aime.kafando.338s" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href="https://www.linkedin.com/in/relwend%C3%A9-aim%C3%A9-kafando-2a3917294/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href="https://www.instagram.com/kafandowebscriptor/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 wow animate__fadeInUp  slower">
                <div class="team-10">
                    <div class="team-img">
                    <img src="Images/ben.jpg" alt="Team Image">
                    </div>
                    <div class="team-content">
                    <h3 style="font-weight:bolder;color:black;">Ben Idrissa SAWADOGO</h3>
                        <h3 style="color:black;">Developpeur web full stack</h3>
                        <div class="team-social">
                            <a class="social-tw" href="" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href="" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href="" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="team-overlay">
                            <p>Developpeur web full stack chez New Way Agency</p>
                            <div class="team-social">
                                <a class="social-tw" href="" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href="" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href="" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 wow animate__fadeInUp  slower">
                <div class="team-10">
                    <div class="team-img">
                    <img src="Images/Félix.png" alt="Team Image">
                    </div>
                    <div class="team-content">
                    <h3 style="font-weight:bolder;color:black;">Félix KIENDREBEOGO</h3>
                        <h3 style="color:black;">Graphiste et web designer</h3>
                        <div class="team-social">
                            <a class="social-tw" href="" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href="" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href="" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="team-overlay">
                            <p>Graphiste et web designer Chez New Way Agency</p>
                            <div class="team-social">
                                <a class="social-tw" href="" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href="" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href="" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
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


   


<?php include_once 'footer.php'; ?>
