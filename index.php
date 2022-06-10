<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="description" content="Web Design">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Sinan">
        <meta name="viewport" content="width=device-width, initial-scale=1,  maximum-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="content-script-type" content="text/javascript">
        <meta http-equiv="x-dns-prefetch-control" content="on">
        <!--<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <!-- Font awsome style -->

        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet" />
        <link href="https://kenwheeler.github.io/slick/slick/slick-theme.css" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Custom css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive videa css -->
        <link rel="stylesheet" href="css/media.css">
        <title>Gamers Paradise | The most trusted game review site</title>
    </head>
    <body>

        <!-- header start -->
        <header class="fixed-top">
            <div class="container">
                <nav class="navbar navbar-expand-lg p-0">


                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fff" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#s1">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#s2">Higest Rated</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#s3">Special Offers</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#s4">Leave a Review</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#s5">Contact</a>
                            </li>

                        </ul>

                    </div>
                </nav>
            </div>
        </header>
        <!-- header end -->
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade text-dark" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <p class="modal-title" id="exampleModalLabel">Thanks for the review!</p>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Your submission will help our users choose the game that best suits them. The review has been sent to the admins for approval.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade text-dark" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Top Action Ratings</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
               <ul>
                 <li>1. Valorant (96%)</li>
                 <li>2. Mortal Kombat X (94%) </li>
                 <li>3. Batman: Arkham City (92%) </li>
                 <li>4. Devil May Cry 5  (92%) </li>
                 <li>5. Dark Souls II (88%) </li>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade text-dark" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Top Adventure Ratings</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <ul>
         <li>1. Red Dead Redemption 2 (96%)</li>
         <li>2. God of War (94%) </li>
         <li>3. Uncharted 4 (92%) </li>
         <li>4. Death Stranding (88%) </li>
         <li>5. The Elder Scrolls V: Skyrim (88%) </li>
      </div>
    </div>
  </div>
</div>

<div class="modal fade text-dark" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Top Puzzle Ratings</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <ul>
         <li>1. Portal 2 (98%)</li>
         <li>2. Little Nightmares (96%) </li>
         <li>3. Limbo (92%) </li>
         <li>4. Unravel (90%) </li>
         <li>5. The Ghost Dogs of Moon Lake (88%) </li>
      </div>
    </div>
  </div>
</div>

<div class="modal fade text-dark" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Top Sports Ratings</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <ul>
         <li>1. Dirt Rally 2.0 (96%)</li>
         <li>2. FIFA 2022 (96%) </li>
         <li>3. Madden 21 (90%) </li>
         <li>4. NBA2K22  (90%) </li>
         <li>5. Tony Hawk's Pro Skater 2 (88%) </li>
      </div>
    </div>
  </div>
</div>

<div class="modal fade text-dark" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Top Strategy Ratings</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <ul>
         <li>1. Evil Genius 2 (98%)</li>
         <li>2. Crusader Kings III (96%) </li>
         <li>3. Command & Con: Red Alert 3 (94%) </li>
         <li>4. Sid Meier's Civilization V (94%) </li>
         <li>5. Rome: Total War II (90%) </li>
      </div>
    </div>
  </div>
</div>

<div class="modal fade text-dark" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Top Simulation Ratings</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <ul>
         <li>1. Stellaris (96%)</li>
         <li>2. Europa Universalis IV  (92%) </li>
         <li>3. Universe Sandbox 2 (90%) </li>
         <li>4. Farming Simulator (90%) </li>
         <li>5. Surgeon Simulator (90%) </li>
      </div>
    </div>
  </div>
</div>


        <!-- banner start -->
        <div class="banner text-center">
            <div class="container">
                <div class="box">

                  <a class="navbar-brand" href="index.html">
                      <img src="img/logo.png" alt="img" class="img-fluid">

                  </a>

                    <p>The best place to find your next favourite title</p>
                    <div class="btn-group">
                        <button type="button" class=" dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Choose category
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#exampleModal1">Action</a></li>
                            <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#exampleModal2">Adventure</a></li>
                            <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#exampleModal3">Puzzle</a></li>
                            <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#exampleModal4">Sports</a></li>
                            <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#exampleModal5">Strategy</a></li>
                            <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#exampleModal6">Simulation</a></li>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner end -->
            <!-- about us start -->
            <div class="about-us" id="s1">
                <div class="container">

                    <!-- row start -->
                    <div class="row">
                        <div class="col-lg-6 d-lg-none d-block  align-self-center">
                            <div class="item-right">
                                <img src="img/au00.jpg" alt="img" class="img-fluid">
                            </div>
                        </div>

                        <div class="col-lg-6 mt-lg-0 mt-4 align-self-center">
                            <div class="item">
                                <div class="common-text mb-0 pb-0">
                                    <h2 >About Us</h2>
                                </div>
                                <p>Gamer's paradise is an online community made for game lovers where users can write about their experiences playing their favorite titles and explore multiple categories to find something that suits them. This system simplify game concepts so players can choose the right title for them.</p>
                                <p>Choosing a game that matches user's desires and abilities is solved in a few clicks. The system works on the principle of community ratings and recommendations, in terms of exchanging experiences between players. </p>
                            </div>
                        </div>
                        <div class="col-lg-6 d-lg-block d-none  align-self-center">
                            <div class="item-right">
                                <div class="slider-img">
                                    <div class="slider-item">
                                        <img src="img/au00.jpg" alt="img" class="img-fluid">
                                    </div>
                                    <div class="slider-item">
                                        <img src="img/au11.jpg" alt="img" class="img-fluid">
                                    </div>
                                    <div class="slider-item">
                                        <img src="img/au22.jpg" alt="img" class="img-fluid">
                                    </div>
                                    <div class="slider-item">
                                        <img src="img/au33.jpg" alt="img" class="img-fluid">
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- row end -->
                </div>
            </div>
            <!-- about us end -->
            <!-- most popular start -->
            <div class="most-popular" id="s2">
                <div class="container-fluid">
                    <div class="common-text text-center">
                        <h2>Highest Rated Games</h2>
                        <!-- <img src="img/landing-rev-slider-img-13.png" alt="img" class="img-fluid"> -->
                    </div>
                    <!-- most body start  -->
                    <div class="most-body text-center">
                        <!-- row start -->
                        <div class="row">
                            <!-- single item start -->
                            <div class="col-lg-4">
                                <div class="box text-start shadow">
                                    <h4 class="text-center">Top action</h4>
                                    <div class="img-box">
                                        <img src="img/video-5.jpg" alt="img" class="img-fluid">
                                        <div class="start">
                                            <div class="star_inner">
                                                <img src="img/star.png" alt="img" class="img-fluid">
                                                <span class="d-inline-block">88%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Gameplay</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9" >
                                            <div class="item-line Lw-90"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Performance</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-90"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Graphics</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-70"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Audio</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-100"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Satisfaction</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-90"></div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- single item end -->
                            <!-- single item start -->
                            <div class="col-lg-4 mt-lg-0 mt-4">
                                <div class="box text-start shadow">
                                    <h4 class="text-center">Top adventure</h4>
                                    <div class="img-box">
                                        <img src="img/video-1.jpg" alt="img" class="img-fluid">
                                        <div class="start">
                                            <div class="star_inner">
                                                <img src="img/star.png" alt="img" class="img-fluid">
                                                <span class="d-inline-block">96%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Gameplay</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9" >
                                            <div class="item-line Lw-90"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Performance</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-90"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Graphics</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-100"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Audio</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-100"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Satisfaction</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-100"></div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- single item end -->
                            <!-- single item start -->
                            <div class="col-lg-4 mt-lg-0 mt-4">
                                <div class="box text-start shadow">
                                    <h4 class="text-center">Top puzzle</h4>
                                    <div class="img-box">
                                        <img src="img/video-3.jpg" alt="img" class="img-fluid">
                                        <div class="start">
                                            <div class="star_inner">
                                                <img src="img/star.png" alt="img" class="img-fluid">
                                                <span class="d-inline-block">90%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Gameplay</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9" >
                                            <div class="item-line Lw-90"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Performance</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-100"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Graphics</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-80"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Audio</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-90"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Satisfaction</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-90"></div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- single item end -->
                            <!-- single item start -->
                            <div class="col-lg-4 mt-4">
                                <div class="box text-start shadow">
                                    <h4 class="text-center">Top sports</h4>
                                    <div class="img-box">
                                        <img src="img/video-4.jpg" alt="img" class="img-fluid">
                                        <div class="start">
                                            <div class="star_inner">
                                                <img src="img/star.png" alt="img" class="img-fluid">
                                                <span class="d-inline-block">89%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Gameplay</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9" >
                                            <div class="item-line Lw-90"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Performance</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-80"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Graphics</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-70"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Audio</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-100"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Satisfaction</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-70"></div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- single item end -->
                            <!-- single item start -->
                            <div class="col-lg-4 mt-4">
                                <div class="box text-start shadow">
                                    <h4 class="text-center">Top strategy</h4>
                                    <div class="img-box">
                                        <img src="img/video-2.jpg" alt="img" class="img-fluid">
                                        <div class="start">
                                            <div class="star_inner">
                                                <img src="img/star.png" alt="img" class="img-fluid">
                                                <span class="d-inline-block">90%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Gameplay</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9" >
                                            <div class="item-line Lw-90"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Performance</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-100"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Graphics</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-80"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Audio</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-90"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Satisfaction</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-70"></div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- single item end -->
                            <!-- single item start -->
                            <div class="col-lg-4 mt-4">
                                <div class="box text-start shadow">
                                    <h4 class="text-center">Top simulation</h4>
                                    <div class="img-box">
                                        <img src="img/video-6.jpg" alt="img" class="img-fluid">
                                        <div class="start">
                                            <div class="star_inner">
                                                <img src="img/star.png" alt="img" class="img-fluid">
                                                <span class="d-inline-block">82%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Gameplay</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9" >
                                            <div class="item-line Lw-90"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Performance</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-80"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Graphics</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-60"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Audio</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-100"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="item-text">
                                                <p class="mb-0">Satisfaction</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="item-line Lw-90"></div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- single item end -->
                        </div>
                        <!-- row end -->
                    </div>
                    <!-- most body end  -->
                </div>
            </div>
            <!-- most popular end -->
            <!-- hot this start -->
            <div class="hot-this" id="s3">
                <div class="container">
                    <div class="common-text text-center">
                        <h2>Special Offers From Our Partners</h2>
                    </div>
                    <div class="row">
                        <!-- single item start -->
                        <div class="col-lg-4">
                            <div class="item">
                                <h4>Fifa 2022</h4>
                                <p>For our members only $16.99</p>
                                <a href="">Buy on Amazon.com</a>
                            </div>
                        </div>
                        <!-- single item end -->
                        <!-- single item start -->
                        <div class="col-lg-4 mt-lg-0 mt-4">
                            <div class="item">
                                <h4>Grand Theft Auto 5</h4>
                                <p>For our members only $12</p>
                                <a href="">Buy on G2A.com</a>
                            </div>
                        </div>
                        <!-- single item end -->
                        <!-- single item start -->
                        <div class="col-lg-4  mt-lg-0 mt-4">
                            <div class="item">
                                <h4>The Legend of Zelda</h4>
                                <p>For our members only $19.99</p>
                                <a href="">Buy on CloudGamers.com</a>
                            </div>
                        </div>
                        <!-- single item end -->


                    </div>
                </div>
            </div>
            <!-- hot this end -->
            <!-- leave start -->
            <div class="leave" id="s4">
                <div class="container">
                    <div class="common-text text-center">
                        <h2>Leave a Review</h2>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <label>Game Title</label>
                                <input type="text" class="form-control" placeholder ="Enter game title" id="wizards" name="wizards" list="wizards-list">
                                <datalist id="wizards-list">
                                	<option>Valorant</option>
                                	<option>Mortal Kombat X</option>
                                	<option>Batman: Arkham City</option>
                                	<option>Devil May Cry 5</option>
                                	<option>Dark Souls II</option>
                                	<option>Harry Potter</option>
                                	<option>God of War</option>
                                	<option>Uncharted 4</option>
                                	<option>Death Stranding</option>
                                	<option>Portal 2</option>
                                	<option>Little Nightmares</option>
                                	<option>Limbo</option>
                                	<option>FIFA 2022</option>
                                	<option>Evil Genius 2</option>
                                	<option>Rome: Total War II</option>
                                	<option>Farming Simulator</option>
                                	<option>Universe Sandbox 2</option>
                                	<option>Sid Meier's Civilization V</option>
                                	<option>Dirt Rally 2.0</option>
                                </datalist>

                            </div>

                            <div class="col-lg-6 mt-lg-0 mt-4">
                                <label>Game Played On</label>
                                <input type="date" class="form-control" placeholder="game played" value="Game Played" title="Game Played">

                            </div>

                            <div class="col-lg-6 mt-4">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="customRange3" class="form-label"><img src="img/001-sad.png" alt=""> Gameplay</label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="range" class="form-range" min="0" max="100" step="10" id="customRange3" oninput="num1.value = this.value">
                                        </div>
                                        <div class="col-sm-2">
                                          <div class="rating-value">
                                          <output id="num1">50</output> %
                                          </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="customRange3" class="form-label"><img src="img/002-growth.png" alt=""> Performance</label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="range" class="form-range" min="0" max="100" step="10" id="customRange3" oninput="num2.value = this.value">
                                        </div>
                                        <div class="col-sm-2">
                                          <div class="rating-value">
                                          <output id="num2">50</output> %
                                          </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="customRange3" class="form-label"><img src="img/003-graphic-design.png" alt=""> Graphics</label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="range" class="form-range" min="0" max="100" step="10" id="customRange3" oninput="num3.value = this.value">
                                        </div>
                                        <div class="col-sm-2">
                                          <div class="rating-value">
                                          <output id="num3">50</output> %
                                          </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="customRange3" class="form-label"><img src="img/004-headphone.png" alt=""> Audio</label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="range" class="form-range" min="0" max="100" step="10" id="customRange3" oninput="num4.value = this.value">
                                        </div>
                                        <div class="col-sm-2">
                                          <div class="rating-value">
                                          <output id="num4">50</output> %
                                          </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="customRange3" class="form-label"><img src="img/005-satisfaction.png" alt=""> Satisfaction</label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="range" class="form-range" min="0" max="100" step="10" id="customRange3" oninput="num5.value = this.value">
                                        </div>
                                        <div class="col-sm-2">
                                          <div class="rating-value">
                                          <output id="num5">50</output> %
                                          </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-6 mt-4">
                                <label>Comments (Optional)</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Write a comment"></textarea>
                            </div>


                        </div>
                        <div class="text-center">


<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button></div>

                    </form>
                </div>
            </div>
            <!-- leave end -->
            <div class="contact" id="s5">
                <div class="container">

                  <div class="common-text text-center">
                      <h2>Other Information</h2>
                  </div>

                    <div class="row">

                      <!-- single item start -->
                      <div class="col-lg-3">
                          <div class="item-left">
                              <a href=""><img src="img/logo.png" alt="img" class="img-fluid"> </a>
                          </div>
                      </div>
                      <!-- single item end -->




                        <!-- single item start -->
                        <div class="col-lg-9">
                            <div class="item-right">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Contact Info</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Privacy Policy</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Terms and Conditions</button>
                                    </li>
                                    <!--<li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Disclaimer</button>
                                    </li>-->


                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                        <div class="contact-body">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="item-left-text">
                                                        <h4>Gamers Paradise</h4>
                                                        <p>Email: <a href="mailto: info@gamersparadise.com">info@gamersparadise.com</a></p>
                                                        <p>Phone: <a href="tel: +38761225883">+38761225883</a></p>
                                                        <p>Address: Francuske revolucije bb<br>
                                                        71000 Sarajevo</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                      At Gamers Paradise, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Gamers Paradise and how we use it.
                                      If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.
                                      This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Gamers Paradise. This policy is not applicable to any information collected offline or via channels other than this website.
                                    </div>
                                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                      Welcome to Gamers Paradise!
                                      These terms and conditions outline the rules and regulations for the use of Gamers Paradise's Website.
                                      By accessing this website we assume you accept these terms and conditions. Do not continue to use Gamers Paradise if you do not agree to take all of the terms and conditions stated on this page. Gamers Paradise reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single item end -->

                    </div>
                </div>
            </div>
            <!-- footer start -->
            <footer>
                <div class="container text-center">
                    <p class="mb-0">Gamers Paradise © 2022. All rights reserved</p>
                </div>
            </footer>
            <!-- footer end -->
            <!-- JS, Popper.js, and jQuery -->
            <script src="js/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <script src="js/script.js"></script>
            <script type="text/javascript">
                $('.slider-img').slick({
  dots: true,
  infinite: false,
  speed: 500,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  autoplay: true
});
</script>
        </body>
    </html>
