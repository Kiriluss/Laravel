<!DOCTYPE html>
<html lang="en">
<head>
        <title>Luigi's</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" href="/public/fonts/beyond_the_mountains-webfont.css" type="text/css"/>

        <!-- Stylesheets -->
        <link href="/public/plugin-frameworks/bootstrap.min.css" rel="stylesheet">
        <link href="/public/plugin-frameworks/swiper.css" rel="stylesheet">
        <link href="/public/fonts/ionicons.css" rel="stylesheet">
        <link href="/public/common/styles.css" rel="stylesheet">
</head>
<body>


<header>
        <div class="container">
                <a class="logo" href="#"><img src="images/logo-white.png" alt="Logo"></a>

                <div class="right-area">
                        <h6><a class="plr-20 color-white btn-fill-primary" href="#">ORDER: +34 685 778 8892</a></h6>
                </div><!-- right-area -->

                <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>

                <ul class="main-menu font-mountainsre" id="main-menu">
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="02_about_us.html">ABOUT US</a></li>
                        <li><a href="03_menu.html">SERVICES</a></li>
                        <li><a href="04_blog.html">NEWS</a></li>
                        <li><a href="05_contact.html">CONTACT</a></li>
                </ul>

                <div class="clearfix"></div>
        </div><!-- container -->
</header>


<section class="bg-4 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h5><b>THE BEST IN TOWN</b></h5>
                                <h2 class="mt-30 mb-15">{{($basa['name'])}}</h2>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>
    <section class="bg-lite-blue">
        <div class="container">
                <div class="row">
                    
                        <div class="col-md-6">
                                <div class="sided-90x mb-30 ">
                                        <div class="s-left"><img class="br-3" src="images/menu-1-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b><p>{{$basa['name']}}</p></b><b class="color-primary float-right">{{$basa['cost']}}</b></h5>
                                                <p class="pr-70">{{$basa['desc']}} </p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->
                 

        </div>
    </div>
</section>
<section class="story-area left-text center-sm-text">
        <div class="container">

                <div class="row">
                        <div class="col-md-6"><img class="mb-30" src="images/about-1-600x400.jpg" alt=""></div>
                        <div class="col-md-6"><img class="mb-30" src="images/about-2-600x400.jpg" alt=""></div>
                        <div class="col-md-12">
                                <div class="mt-50 mt-sm-30 mb-50 mb-sm-30 center-text"> <h2></h2> </div>

                                <h5 class="center-text mb-50 mb-sm-30 plr-25"></h5>
                        </div>
                        <div class="col-md-6">
                                <p class="mb-15">Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst.  Morbi maximus
                                        lobortis ipsum, ut blandit augue ullamcorper vitae. Nulla dignissim leo felis, eget cursus elit aliquet ut. Curabitur vel convallis
                                        massa. Morbi tellus ortor, luctus et lacinia non, tincidunt in lacus.
                                        Vivamus sed ligula imperdiet, feugiat magna vitae, blandit ex. Vestibulum id dapibus dolor, ac cursus nulla. </p>
                        </div><!-- col-md-6 -->

                        <div class="col-md-6">
                                <p class="mb-15">Maecenas fermentum tortor id fringilla molestie. In hac habitasse
                                        platea
                                        dictumst.Morbi maximus lobortis ipsum, ut blandit augue ullamcorper vitae.
                                        Nulla dignissim leo felis, eget cursus elit aliquet ut. Curabitur vel
                                        convallismassa. Morbi tellus tortor, luctus et lacinia non, tincidunt in lacus.
                                        Vivamus sed ligula imperdiet, feugiat magna vitae, blandit ex. Vestibulumidda
                                        pibus dolor, accursus nulla. </p>
                        </div><!-- col-md-6 -->
                </div><!-- row -->

                <h6 class="center-text mt-40 mt-sm-30 mb-20">
                        <a href="#" class="btn-primaryc plr-25 mb-10 mlr-5"><b>SEE TODAYS MENU</b></a>
                        <a href="#" class="btn-primaryc secondary plr-50 mlr-5 mb-10"><b>ORDER NOW</b></a>
                </h6>

        </div><!-- container -->
</section>


<section class="story-area bg-seller color-white pos-relative">
        <div class="pos-bottom triangle-up"></div>
        <div class="pos-top triangle-bottom"></div>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="images/heading_logo.png" alt="">
                        <h2>What Clients Say</h2>
                </div>

                <div class="swiper-container" data-slide-effect="slide" data-autoheight="false" data-swiper-speed="500" data-swiper-margin="25" data-swiper-slides-per-view="3"
                     data-swiper-breakpoints="true" data-scrollbar="true" data-swiper-loop="true" data-swpr-responsive="[1, 2, 2, 2]">

                        <div class="swiper-wrapper pb-90 pb-sm-60 left-text center-sm-text">
                                <div class="swiper-slide">
                                        <h4>Amazing Pizza</h4>
                                        <p class="color-ash mb-50 mb-sm-30 mt-20">Etiam nec odio vestibulum est mattis
                                                efficiturut magna.Pellentesquesit amet tellus blandit. Etiam nec odio
                                                vestibulum est mattis
                                                effic iturut magna. Pellentesque sit am et tellus blandit. Etiamnec odio
                                                vestibul. </p>
                                        <img class="circle-60 mb-20 " src="images/quoto-1-200x200.jpg" alt="">
                                        <h6><b class="color-primary">Daiane Smith</b>,<b class="color-ash">Customer</b>
                                        </h6>
                                </div><!-- swiper-slide -->

                                <div class="swiper-slide">
                                        <h4>Amazing Pizza</h4>
                                        <p class="color-ash mb-50 mb-sm-30 mt-20">Etiam nec odio vestibulum est mattis
                                                efficiturut magna.Pellentesquesit amet tellus blandit. Etiam nec
                                                odio vestibulum est mattis
                                                effic iturut magna. Pellentesque sit am et tellus blandit.
                                                Etiamnec odio vestibul. </p>
                                        <img class="circle-60 mb-20" src="images/quoto-2-200x200.jpg" alt="">
                                        <h6><b class="color-primary">Daiane Smith</b>,<b class="color-ash">Customer</b>
                                        </h6>
                                </div><!-- swiper-slide -->

                                <div class="swiper-slide">
                                        <h4>The best pastas in town</h4>
                                        <p class="color-ash mb-50 mb-sm-30 mt-20">Nec odio vestibulum est mattis
                                                effic iturut
                                                magna. Pellentesque sit am et tellus blandit.
                                                Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic
                                                iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio. </p>
                                        <img class="circle-60 mb-20" src="images/quoto-3-200x200.jpg"
                                             alt="">
                                        <h6><b class="color-primary">Michael Williams</b>,<b
                                                class="color-ash">Customer</b></h6>
                                </div><!-- swiper-slide -->

                                <div class="swiper-slide">
                                        <h4>We love it there</h4>
                                        <p class="color-ash mb-50 mb-sm-30 mt-20">Retiam nec odio vestibulum est
                                                mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est
                                                mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. </p>
                                        <img class="circle-60 mb-20"
                                             src="images/quoto-1-200x200.jpg" alt="">
                                        <h6><b class="color-primary">Shawn Gaines</b>,<b class="color-ash">Customer</b>
                                        </h6>
                                </div><!-- swiper-slide -->
                        </div><!-- swiper-wrapper -->

                        <div class="swiper-pagination"></div>
                </div><!-- swiper-container -->
        </div><!-- container -->
</section>

<section class="counter-section section center-text" id="counter">
        <div class="container">
                <div class="row">
                        <div class="col-sm-6 col-md-3">
                                <div class="mb-30 ">
                                        <i class="mlr-auto mb-30  icon-gradient icon-pizza"></i>
                                        <h2><b><span class="counter-value" data-duration="400" data-count="574">0</span></b>
                                        </h2>
                                        <h5 class="semi-black"><b>Pizza per day</b></h5>
                                </div><!-- margin-b-30 -->
                        </div><!-- col-md-3-->

                        <div class="col-sm-6 col-md-3">
                                <div class="mb-30">
                                        <i class="mlr-auto mb-30 icon-gradient icon-sea-food"></i>
                                        <h2><b><span class="counter-value" data-duration="1400" data-count="14">0</span></b>
                                        </h2>
                                        <h5 class="semi-black"><b>Sea Food Dshes</b></h5>
                                </div><!-- margin-b-30 -->
                        </div><!-- col-md-3-->

                        <div class="col-sm-6 col-md-3">
                                <div class="mb-30">
                                        <i class="mlr-auto mb-30 icon-gradient icon-pasta"></i>
                                        <h2><b><span class="counter-value" data-duration="300"
                                                     data-count="3">0</span></b></h2>
                                        <h5 class="semi-black"><b>Pasta Chefs</b></h5>
                                </div><!-- margin-b-30 -->
                        </div><!-- col-md-3-->

                        <div class="col-sm-6 col-md-3">
                                <div class="mb-30">
                                        <i class="mlr-auto mb-30 icon-gradient icon-salad"></i>
                                        <h2><b><span class="counter-value" data-duration="1000" data-count="52">0</span></b>
                                        </h2>
                                        <h5 class="semi-black"><b>Salads per day</b></h5>
                                </div><!-- margin-b-30 -->
                        </div><!-- col-md-3-->

                </div><!-- row-->
        </div><!-- container-->
</section><!-- counter-section-->


<footer class="pb-50  pt-70 pos-relative">
        <div class="pos-top triangle-bottom"></div>
        <div class="container-fluid">
                <a href="index.html"><img src="images/logo-white.png" alt="Logo"></a>

                <div class="pt-30">
                        <p class="underline-secondary"><b>Address:</b></p>
                        <p>481 Creekside Lane Avila Beach, CA 93424 </p>
                </div>

                <div class="pt-30">
                        <p class="underline-secondary mb-10"><b>Phone:</b></p>
                        <a href="tel:+53 345 7953 32453 ">+53 345 7953 32453 </a>
                </div>

                <div class="pt-30">
                        <p class="underline-secondary mb-10"><b>Email:</b></p>
                        <a href="mailto:yourmail@gmail.com"> yourmail@gmail.com</a>
                </div>

                <ul class="icon mt-30">
                        <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                        <li><a href="#"><i class="ion-social-vimeo"></i></a></li>
                </ul>

                <p class="color-light font-9 mt-50 mt-sm-30"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div><!-- container -->
</footer>

<!-- SCIPTS -->
<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
<script src="plugin-frameworks/bootstrap.min.js"></script>
<script src="plugin-frameworks/swiper.js"></script>
<script src="common/scripts.js"></script>
</body>
</html>