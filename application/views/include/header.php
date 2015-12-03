<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<header id="main-header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a class="logo" href="<?php echo base_url()?>">
                                <h3 class="judulatas">SIFASORA</h3>
                            </a>
                        </div>
                        <div class="col-md-3 col-md-offset-2">
                            <form class="main-header-search">
                                <div class="form-group form-group-icon-left">
                                    <i class="fa fa-search input-icon"></i>
                                    <input placeholder="Cari Lapangan" type="text" class="form-control">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <div class="top-user-area clearfix">
                                <!--
                                <ul class="top-user-area-list list list-horizontal list-border">
                                    <?php $flag = 0 ;?>
                                    <?php if($flag == 1){ ?>
                                    <li class="top-user-area-avatar">
                                        <a href="user-profile.html">
                                            <img class="origin round" src="<?php echo base_url('')?>assets/img/40x40.png" alt="Image Alternative text" title="AMaze" />Hi, John</a>
                                    </li>
                                    <li><a href="#">Sign Out</a>
                                    </li>
                                    <?php }else{?>
                                    
                                    <li><a href="<?php echo base_url('')?>login">Login</a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="nav">
                    <ul class="slimmenu" id="slimmenu">
                        <li class="<?php if(isset($active_home)){ echo $active_home;} else { echo " ";} ?>"><a href="<?php echo base_url() ?>">Home</a>
                        </li>
                        <li class="<?php if(isset($active_pesan)){ echo $active_pesan;} else { echo " ";} ?>"><a href="<?php echo base_url() ?>c_pesan_lapangan">Pesan Lapangan</a> 
                        </li>
                        <li class="<?php if(isset($active_bagi)){ echo $active_bagi;} else { echo " ";} ?>"><a href="<?php echo base_url() ?>bagi">Cek Lapangan</a>
                        </li>
                        <li class="<?php if(isset($active_tentang)){ echo $active_tentang;} else {echo " ";} ?>"><a href="<?php echo base_url() ?>user/tentang">Tentang Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
</header>