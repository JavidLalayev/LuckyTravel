<!--HTML + Links-->
<?php $this->load->view("front/includes/header"); ?>
<!--Links-->

<!--Loader-->
<?php $this->load->view("front/includes/loading_effect"); ?>
<!--Loader-->

<!--Navigation bar-->
<?php $this->load->view("front/includes/navbar"); ?>
<!--Navigation bar-->

<?php echo $lang = $this->session->userdata("dil")?>

<!-- INNER-BANNER -->
<div class="inner-banner style-6">
    <img class="center-image" src="<?php echo base_url("public/front/")?>img/detail/bg_2.jpg" alt="">
    <div class="vertical-align">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <ul class="banner-breadcrumb color-white clearfix">
                        <li><a class="link-blue-2" href="<?php echo base_url("$lang/home")?>"><?php echo $this->lang->line("ana_sehife")?></a> /</li>
                        <li><a class="link-blue-2" href="<?php echo base_url("$lang/tours")?>"><?php echo $this->lang->line("turlar")?></a> /</li>

                    </ul>
                    <h2 class="color-white">
                        <?php
                            $lang = $this->session->userdata("dil");
                            echo $tour["name_" . $lang]
                        ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- DETAIL WRAPPER -->
<div class="detail-wrapper">
    <div class="container">

        <!--Tour Title and price-->
        <div class="detail-header">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <h2 class="detail-title color-dark-2">
                        <?php
                        $lang = $this->session->userdata("dil");
                        echo $tour["name_" . $lang]
                        ?>
                    </h2>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="detail-price color-dark-2"><span class="color-dr-blue" style="margin-top: "> <i class="fa fa-eye"></i><?php echo $tour["click_times"]?> </span></div>
                </div>
            </div>
        </div>
        <!--Tour Title and price-->



        <div class="row padd-90">
            <div class="col-xs-12 col-md-8">
                <div class="detail-content color-1">

                    <!--Tour Gallery-->
                    <div class="detail-top slider-wth-thumbs style-2">

                        <div class="swiper-container thumbnails-preview" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">

                            <div class="c_wheater weth-icon style-2 bg-blue-light radius-3 fr" data-toggle="tooltip" title="<?php echo $tour["summary"]?>" class="color-white" data-placement="bottom">
<!--                                <img src="img/weather_icon_small.png" alt="">-->
                                <div class="color-white">
                                    <b><?php if ($tour["temperature"] > 0){echo "+";}?><?php echo $tour["temperature"]?><sup>o</sup>C</b>
                                </div>
                            </div>

                            <div class="swiper-wrapper">


                                <div class="swiper-slide active" data-val="0">
                                    <img  style="height: 421px!important;" class="img-responsive img-full" src="<?php echo base_url("uploads/tours/$tour[img]")?>" alt="">
                                </div>



                                <?php $count = 1;
                                      foreach ($tour_gallery as $item){ ?>

                                          <div class="swiper-slide" data-val="<?php echo $count?>">

                                              <img style="height: 421px!important;" class="img-responsive img-full" src="<?php echo base_url("uploads/tour_gallery/$item[file]")?>" alt="">
                                          </div>

                                <?php $count++; } ?>


                            </div>
                            <div class="pagination pagination-hidden"></div>
                        </div>

                        <div class="swiper-container thumbnails" data-autoplay="0"
                             data-loop="0" data-speed="500" data-center="0"
                             data-slides-per-view="responsive" data-xs-slides="3"
                             data-sm-slides="5" data-md-slides="5" data-lg-slides="5"
                             data-add-slides="5">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide current active" data-val="0">
                                    <img style="height: 84px!important;" class="img-responsive img-full" src="<?php echo base_url("uploads/tours/$tour[img]")?>" alt="">
                                </div>

                                <?php $count = 1;
                                foreach ($tour_gallery as $item){ ?>

                                    <div class="swiper-slide" data-val="<?php echo $count?>">
                                        <img style="height: 84px!important;" class="img-responsive img-full" src="<?php echo base_url("uploads/tour_gallery/$item[file]")?>" alt="">
                                    </div>

                                <?php $count++; } ?>

                            </div>
                            <div class="pagination hidden"></div>
                        </div>
                    </div>
                    <!--Tour Gallery-->


                    <!--Tour Detail-->
                    <div class="detail-content-block">

                        <?php echo $tour["desc_$lang"]; ?>

                    </div>
                    <!--Tour Detail-->

                </div>
            </div>


            <!--Popular Tours and need help-->
            <div class="col-xs-12 col-md-4">

                <div class="right-sidebar">

                    <!--Course Detail-->
                    <div class="detail-block bg-dr-blue">
                        <h4 class="color-white"><?php echo $this->lang->line("details")?></h4>
                        <div class="details-desc">

                            <p class="color-grey-9"><?php echo $this->lang->line("tour_code")?>: <span class="color-white"><?php echo $tour["tour_code"]?></span></p>
                            <p class="color-grey-9">
                                <?php echo $this->lang->line("price")?>: 
                                <span class="color-white"><?php echo $tour["tour_price"]?>$</span>
                            </p>
                            <p class="color-grey-9"><?php echo $this->lang->line("tour_date")?>: <span class="color-white"><?php echo $tour["date"]?> - <?php echo $tour["end_date"]?></span></p>
                            <p class="color-grey-9"><?php echo $this->lang->line("click_times")?>: <span class="color-white"><?php echo $tour["click_times"]?></span></p>

                            <div class="container-fluid">

                                <div class="row">
                                    <?php if (!empty($tour_includes)){ ?>
                                        <p style="margin-bottom: 8px" class="color-grey-9"><?php echo $this->lang->line("tour_includes")?>:</p>
                                    <?php }?>

                                    <?php foreach ($tour_includes as $item){?>

                                        <div class="col-md-6 c_tour_includes">
                                            <img class="c_tour_includes_img" width="25px" height="25px" src="<?php echo base_url("uploads/tours_includes/$item[img]") ?>" alt="">
                                            <span class="c_tour_includes_text"><?php echo $item["name_$lang"]?></span>
                                        </div>

                                    <?php }?>

                                </div>
                            </div>

                        </div>
                        <div class="details-btn">
                            <a href="#" class="c-button b-40 bg-tr-1 hv-white" data-toggle="modal" data-target="#myModal"><span><?php echo $this->lang->line("show_on_map")?></span></a>
<!--                            <a href="#" class="c-button b-40 bg-white hv-transparent"><span>book now</span></a>-->
                        </div>
                    </div>
                    <!--Course Detail-->


                    <!--Popular tours-->
                    <div class="popular-tours bg-grey-2">
                        <h4 class="color-dark-2"><?php echo $this->lang->line("popular_tours")?></h4>

                        <?php foreach ($popular_tours as $popular_tour) { ?>
                            <div class="hotel-small style-2 clearfix">
                                <a class="hotel-img black-hover" href="<?php

                                    echo base_url($lang . "/tour/$popular_tour[id]");

                                ?>">
                                    <img class="img-responsive radius-3" src="<?php echo base_url("uploads/tours/$popular_tour[img]")?>" alt="">
                                    <div class="tour-layer delay-1"></div>
                                </a>


                                <div class="hotel-desc">

                                    <!--tour name-->
                                    <h4>
                                        <a href=""><?php echo $popular_tour["name_" . $lang]; ?></a>
                                    </h4>
                                    <!--tour name-->


                                    <!--tour about-->
                                    <div class="hotel-loc">
                                        <?php
                                                if (strlen($popular_tour["desc_". $lang]) > 51){
                                                    echo trim(strip_tags(mb_substr($popular_tour["desc_". $lang], 0, 51) . "..."));
                                                }else{
                                                    echo trim(strip_tags($popular_tour["desc_". $lang]));
                                                }
                                        ?>
                                    </div>
                                    <!--tour about-->

                                </div>
                            </div>
                        <?php }?>


                    </div>
                    <!--Popular tours-->


                    <!--Need Help?-->
                    <div class="help-contact bg-grey-2">
                        <h4 class="color-dark-2"><?php echo $this->lang->line("need_help")?></h4>
                        <p class="color-grey"><?php echo $this->lang->line("need_help_text")?></p>
                        <a class="help-phone color-dark-2 link-dr-blue" href="tel:<?php echo $contact["phone"] ?>"><img src="<?php echo base_url("public/front/")?>img/detail/phone24-dark.png" alt=""><?php echo $contact["phone"]?></a>
                        <a class="help-mail color-dark-2 link-dr-blue" href="mailto:<?php echo $contact["email"] ?>"><img src="<?php echo base_url("public/front/")?>img/detail/letter-dark.png" alt=""><?php echo $contact["email"] ?></a>
                    </div>
                    <!--Need Help?-->

                </div>
            </div>
            <!--Popular Tours and need help-->


        </div>

        <div class="may-interested padd-90">
            <div class="row">
                
                <?php foreach ($last_tours as $item) { ?>
                    <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3">
                        <div class="hotel-item">
                            <div class="radius-top">
                                <img src="<?php echo base_url("uploads/tours/$item[img]")?>" alt="">
                                <div class="price price-s-1">$<?php echo $item["tour_price"]?></div>
                            </div>
                            <div class="title clearfix" >
                                <h4><b><?php echo $item["name_" . $lang]?></b></h4>

                                <p class="f-14">
                                    <?php

                                        if (strlen($item["desc_" . $lang]) > 103){
                                            echo mb_substr(strip_tags(trim($item["desc_" . $lang])), 0,  103) . "...";
                                        }else{
                                            echo strip_tags(trim($item["desc_" . $lang]));
                                        }
                                    ?>
                                </p>

                                <a href="<?php

                                echo base_url($lang . "/tour/$item[id]");

                                ?>" class="c-button bg-dr-blue hv-dr-blue-o b-50 fl"><?php echo $this->lang->line("etrafli")?></a>
                            </div>
                        </div>
                    </div>
                <?php }?>

            </div>
        </div>
    </div>
</div>



<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">
                    <?php echo $tour["name_$lang"]?>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </h4>
            </div>



            <!-- Modal body -->
            <div class="modal-body">
                <div style="height: 500px" id="map"></div>
            </div>

            <script>
                var map;
                function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                        center: {lat: -34.397, lng: 150.644},
                        zoom: 8
                    });
                }
            </script>

        </div>
    </div>
</div>




<!--Footer-->
<?php $this->load->view("front/includes/footer"); ?>
<!--Footer-->

<!--Scripts-->
<?php $this->load->view("front/includes/scripts"); ?>
<!--Scripts-->