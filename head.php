<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
     <!-- Style css -->
    <link rel="stylesheet" href="assets//style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <!-- Police google fonts -->
     <!-- Bootsrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
     <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
     <!-- Wow animation js -->
    <script src="lib/wow/wow.js"></script>
    
     <!-- animate css -->
    <link rel="stylesheet" href="lib/animate/animate.css">
    <script src="jquery3.js"></script>
    <title>New way Agency</title>
</head>
<body>
      
      
      <!-- Spinner Start--> 
      <div class="loading-container">
        <div class="loading-curtain">
            <span class="loader"></span>
        </div>
    </div> 
    <style>
       .dropdown-item:hover {
    
    
    animation: backgroundSlide 2s ease infinite;
    transition:0.6s;
    color: white; 
}
.dropdown-menu ul li 
    {
       
    }
    
    @keyframes backgroundSlide {
        0% {
            background-color: #FF5000;
            left:0;
           
        }
        100% {
            background-color: #FF5000;
            right:100%;
            
        }
    }
    .navbar-toggler span 
    {
        color:white !important;
    }
    .navbar
    {
    background: #010430;
    background: -webkit-linear-gradient(to right, rgb(7, 4, 94), rgb(10, 27, 151));
    background: linear-gradient(to right,  rgb(7, 4, 94), rgb(10, 27, 151)); 
    color: white;
    }
    .navbar
            {
                padding:4px !important;
            }
    .cacher
    {
        display:none;
    }
    .haut
    {
        padding-left:15px;
    }
    .navbar-nav .nav-link 
    {
        margin:0.5px !important;
    }
    </style>
    <a title="Aller au début de la page" id="back-to-top" class="btn text-white btn-lg btn-floating" style="background-color: #FF5000;" href="#!" role="button">
        <i class="fas fa-arrow-up-long"></i>
      </a>
    <!-- Spinner End -->
    
    <!-- topbar  --> 
     <section class="reseau">
        <div class="container-fluid">
            <div class="row d-flex ">
                <div class="col-lg-6">
                    <a style="font-size: 12px ;" title="Cliquez pour nous appeller" href="tel:+22654940980" class="text-white"><i style="background-color: rgba(255, 255, 255, 0.1);padding: 5px; border-radius: 5px;" class="fab fa-whatsapp text-white"></i> +22654940980</a>
                    <a style="font-size: 12px ;" title="Cliquez pour nous écrire" href="mailto:infosnewway@gmail.com" class="text-white"><i  style="background-color: rgba(255, 255, 255, 0.1);padding: 5px; border-radius: 5px;" class="far fa-envelope text-white"></i>infosnewway@gmail.com</a>
                </div>  
                <div class="col-lg-6">
                <h5 style="font-size: 12px ;" class="haut">Designé et développé par nous même! ainsi que les conceptions graphiques.</h5>
                </div>
        </div>
        </div>
    </section>
    <!-- fintopbar  -->

   <!-- navbar -->
<section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a title="New Way Agency" class="navbar-brand" href="index.php"><img src="SVG/LOGO GRAND.svg" height="30" alt=""> <span class="text-white"> New Way Agency</span></a>
          
            <button style="color:white !important;" class="navbar-toggler bg-white custom-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <div class="qq">
                 <span class="bar "></span>
                <span class="bar"></span>
                <span class="bar "></span>
            </div>
                
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($activePage == "home") ? 'actived' : ''; ?>" aria-current="page" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link <?php echo ($activePage == "services") ? 'actived' : ''; ?>  dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nos Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item background-animation" href="graphisme.php">Graphisme</a></li>
                            <li><a class="dropdown-item" href="conception_3D.php">Maquettage UI/UX design et 3D</a></li>
                            <li><a class="dropdown-item" href="dev_web.php">Developpement Web</a></li>
                            <li><a class="dropdown-item" href="management.php">Community management</a></li>
                        </ul>
                    </li>
                    <li class="  nav-item">
                        <a class="nav-link <?php echo ($activePage == "apropos") ? 'actived' : ''; ?>" href="apropos.php">À propos de NWA</a>
                    </li>
                    <li class=" <?php echo ($activePage == "home") ? '' : 'cacher'; ?>" class="nav-item">
                        <a class="nav-link" href="#projets_recents">Nos Projets Récents</a>
                    </li>
                    <li  class="nav-item">
                        <a class="nav-link" href="#pieds">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<!-- finnavbar -->

