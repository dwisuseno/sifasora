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
       
       <div class="gap"></div>


        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Peminjam</h3>
                    <p>Data diri untuk booking lapangan.</p>
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nomor HP</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div class="row">

                        <div class="col-md-7">
                            <h4>Form Pemesanan</h4>
                            <form class="cc-form">
                                <div class="clearfix">
                                    <div class="form-group form-group-cc-number">
                                        <label>Lapangan</label>
                                        <input class="form-control" placeholder="" type="text" /><span class="cc-card-icon"></span>
                                        <br>

                                        <i class="fa fa-plus box-icon-normal box-icon-border-dashed"></i>    
                                        
                                    
                                    </div>
                                </div>
                                <div class="clearfix input-daterange">
                                    <div class="form-group form-group-cc-name">
                                        <label>Waktu</label>
                                        <input class="form-control" name="start" type="text" />
                                    </div>
                                    <div class="form-group form-group-cc-name">
                                        <label>Jam</label>
                                        <input class="time-pick form-control" type="text" />
                                    </div>
                                </div>
                            
                                <button class="btn btn-primary" type="submit" value="" >Pesan</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="booking-item-payment">
                        <header class="clearfix">
                            <a class="booking-item-payment-img" href="#">
                                <img src="<?php echo base_url()?>assets/img/800x600.png" alt="Image Alternative text" title="4 Strokes of Fun" />
                            </a>
                            <h5 class="booking-item-payment-title"><a href="#">Advertisement</a></h5>
                            <ul class="icon-group booking-item-rating-stars">
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
                        </header>
                        <ul class="booking-item-payment-details">
                            <li>
                                <h5>April, 27 Saturday</h5>
                            </li>
                            <li>
                                <h5>Event (2 Guests)</h5>
                                <ul class="booking-item-payment-price">
                                    <li>
                                        <p class="booking-item-payment-price-title">2 guests</p>
                                        <p class="booking-item-payment-price-amount">$105<small>/per guest</small>
                                        </p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <p class="booking-item-payment-total">Total trip: <span>$210</span>
                        </p>
                    </div>
                </div>
            
            </div>
            <div class="gap"></div>
        </div>

       

        <?php
            $this->load->view('include/footer');
        ?>
    </div>
</body>

</html>


