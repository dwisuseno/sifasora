<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE HTML>
<html>

<head>
    <?php
    $this->load->view('include/head');
    ?>
</head>

<body>

    <!-- FACEBOOK WIDGET -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
       <?php
        $this->load->view('include/header');
        ?>
        <!-- TOP AREA -->
        <div class="top-area show-onload">
            <div class="bg-holder full">
                <div class="bg-front full-height bg-front-mob-rel">
                    <div class="container full-height">
                        <div class="rel full-height">
                            <div class="tagline visible-lg" id="tagline"><span>It's time to</span>
                                <ul>
                                    <li>live</li>
                                    <li>have fun</li>
                                    <li>relax</li>
                                    <li>meet</li>
                                    <li>being lost</li>
                                    <li>run away</li>
                                    <li>go</li>
                                    <li>explore</li>
                                    <li>find new friends</li>
                                    <li class="active">discover</li>
                                    <li>play</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-slider owl-carousel-area visible-lg" id="owl-carousel-slider" data-nav="false">
                    <div class="bg-holder full">
                        <div class="bg-mask"></div>
                        <div class="bg-img" style="background-image:url(assets/img/backgrounds/street.jpg);"></div>
                    </div>
                    <div class="bg-holder full">
                        <div class="bg-mask"></div>
                        <div class="bg-img" style="background-image:url(assets/img/backgrounds/taxi.jpg);"></div>
                    </div>
                    <div class="bg-holder full">
                        <div class="bg-mask"></div>
                        <div class="bg-img" style="background-image:url(assets/img/backgrounds/bridge.jpg);"></div>
                    </div>
                </div>
                <div class="bg-img hidden-lg" style="background-image:url(img/2048x1365.png);"></div>
                <div class="bg-mask hidden-lg"></div>
            </div>
        </div>
        <!-- END TOP AREA  -->

        <div class="gap"></div>


        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row row-wrap" data-gutter="120">
                        <div class="col-md-4">
                            <div class="thumb">
                                <header class="thumb-header"><i class="fa fa-briefcase box-icon-black round box-icon-big animate-icon-top-to-bottom"></i>
                                </header>
                                <div class="thumb-caption">
                                    <h5 class="thumb-title"><a class="text-darken" href="#">Combine & Save</a></h5>
                                    <p class="thumb-desc">Risus quisque egestas venenatis potenti lobortis senectus tellus sodales commodo</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb">
                                <header class="thumb-header"><i class="fa fa-thumbs-o-up box-icon-black round box-icon-big animate-icon-top-to-bottom"></i>
                                </header>
                                <div class="thumb-caption">
                                    <h5 class="thumb-title"><a class="text-darken" href="#">Best Travel Agent</a></h5>
                                    <p class="thumb-desc">Montes dictumst tortor a suspendisse accumsan blandit adipiscing proin ut</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb">
                                <header class="thumb-header"><i class="fa fa-send box-icon-black round box-icon-big animate-icon-top-to-bottom"></i>
                                </header>
                                <div class="thumb-caption">
                                    <h5 class="thumb-title"><a class="text-darken" href="#">Best Destinations</a></h5>
                                    <p class="thumb-desc">Cubilia malesuada odio aptent est etiam mollis velit dictumst posuere</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>
        </div>
        <div class="bg-holder">
            <div class="bg-mask"></div>
            <div class="bg-img" style="background-image:url(img/2048x1365.png);"></div>
            <div class="bg-content">
                <div class="container">
                    <div class="gap gap-big text-center text-white">
                        <h2 class="text-uc mb20">Dapatkan diskon termurah hari ini</h2>
                        <ul class="icon-list list-inline-block mb0 last-minute-rating">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <h5 class="last-minute-title">Lapangan GOR Pertamina</h5>
                        <p class="mb20"><b>Rp. 50.000</b> / hour</p><a class="btn btn-lg btn-white btn-ghost" href="#">Book Now <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="gap"></div>
            <h2 class="text-center">Top Destinations</h2>
            <div class="gap">
                <div class="row row-wrap">
                    <div class="col-md-3">
                        <div class="thumb">
                            <header class="thumb-header">
                                <a class="hover-img curved" href="#">
                                    <img src="img/800x600.png" alt="Image Alternative text" title="196_365" />
                                </a>
                            </header>
                            <div class="img-left">
                                <img src="img/flags/32/fr.png" alt="Image Alternative text" title="Image Title" />
                            </div>
                            <div class="thumb-caption">
                                <h4 class="thumb-title"><a class="text-darken" href="#">Paris</a></h4>
                                <div class="thumb-caption">
                                    <p class="thumb-desc">Nullam potenti ac sagittis iaculis justo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumb">
                            <header class="thumb-header">
                                <a class="hover-img curved" href="#">
                                    <img src="img/800x600.png" alt="Image Alternative text" title="El inevitable paso del tiempo" />
                                </a>
                            </header>
                            <div class="img-left">
                                <img src="img/flags/32/hu.png" alt="Image Alternative text" title="Image Title" />
                            </div>
                            <div class="thumb-caption">
                                <h4 class="thumb-title"><a class="text-darken" href="#">Budapest</a></h4>
                                <div class="thumb-caption">
                                    <p class="thumb-desc">Sociis interdum sed a senectus porta</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumb">
                            <header class="thumb-header">
                                <a class="hover-img curved" href="#">
                                    <img src="img/800x600.png" alt="Image Alternative text" title="Upper Lake in New York Central Park" />
                                </a>
                            </header>
                            <div class="img-left">
                                <img src="img/flags/32/us.png" alt="Image Alternative text" title="Image Title" />
                            </div>
                            <div class="thumb-caption">
                                <h4 class="thumb-title"><a class="text-darken" href="#">New York</a></h4>
                                <div class="thumb-caption">
                                    <p class="thumb-desc">Erat ultricies auctor tellus natoque cursus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumb">
                            <header class="thumb-header">
                                <a class="hover-img curved" href="#">
                                    <img src="img/800x600.png" alt="Image Alternative text" title="people on the beach" />
                                </a>
                            </header>
                            <div class="img-left">
                                <img src="img/flags/32/gr.png" alt="Image Alternative text" title="Image Title" />
                            </div>
                            <div class="thumb-caption">
                                <h4 class="thumb-title"><a class="text-darken" href="#">Crete</a></h4>
                                <div class="thumb-caption">
                                    <p class="thumb-desc">Cursus parturient commodo diam donec est</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- Bagian keunggulan2 -->
        <!--
        <div class="bg-color text-white">
            <div class="container">
                <div class="gap"></div>
                <div class="row row-wrap" data-gutter="120">
                    <div class="col-md-4">
                        <div class="thumb">
                            <header class="thumb-header"><i class="fa fa-thumbs-o-up box-icon-border round box-icon-white box-icon-big"></i>
                            </header>
                            <div class="thumb-caption">
                                <h4 class="thumb-title">Lebih Mudah</h4>
                                <p class="thumb-desc">Kami tawarkan kemudahan untuk </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <header class="thumb-header"><i class="fa fa-send box-icon-border round box-icon-white box-icon-big"></i>
                            </header>
                            <div class="thumb-caption">
                                <h4 class="thumb-title">Lebih Cepat</h4>
                                <p class="thumb-desc">Transaksi pembayayan lebih mudah. Karena kami menggunakan Bank Lokal yang ada di Indonesia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <header class="thumb-header"><i class="fa fa-dollar box-icon-border round box-icon-white box-icon-big"></i>
                            </header>
                            <div class="thumb-caption">
                                <h4 class="thumb-title">Lebih Banyak</h4>
                                <p class="thumb-desc">Dapatkan banyak penawaran </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gap gap-small"></div>
            </div>
        </div>
    -->

       

        <?php
            $this->load->view('include/footer');
        ?>
    </div>
</body>

</html>


