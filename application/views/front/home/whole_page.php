<!--HTML + Links-->
<?php $this->load->view("front/includes/header"); ?>
<!--Links-->

<!--Loader-->
<?php $this->load->view("front/includes/loading_effect"); ?>
<!--Loader-->

<!--Navigation bar-->
<?php $this->load->view("front/includes/navbar"); ?>
<!--Navigation bar-->

<?php $lang = $this->session->userdata("dil")?>

<!-- Slider and Tour searching -->
<div class="top-baner bg-blue">
    <div class="row no-margin" style="background-color: red!important;">
        <div class="c_swipe_main swiper-container main-slider-4" data-autoplay="0" data-loop="1" data-speed="800" data-center="0" data-slides-per-view="1">
            <div class="swiper-wrapper">
                <?php foreach ($mslides as $mslide) { ?>
                <div class="swiper-slide active" data-val="0">
                    <div class="hover-blue black-hover h_100">
                        <div class="clip">
                            <div class="bg bg-bg-chrome act" style="background-image:url(<?php echo base_url("uploads/main_slide/").$mslide['img'] ?>)"></div>
                        </div>
                        <div class="tour-layer delay-1"></div>
                        <div class="vertical-top">

                        </div>
                        <div class="vertical-align">
                            <div class="item-block style-4">
                                <div class="vertical-align">
<!--                                    <h4>from<b>$960</b></h4>-->
<!--                                    <div class="rate">-->
<!--                                        <span class="fa fa-star color-yellow"></span>-->
<!--                                        <span class="fa fa-star color-yellow"></span>-->
<!--                                        <span class="fa fa-star color-yellow"></span>-->
<!--                                        <span class="fa fa-star color-yellow"></span>-->
<!--                                        <span class="fa fa-star color-yellow"></span>-->
<!--                                    </div>-->
                                    <h3 class="hover-it">
                                        <a href="<?php echo $mslide["link"]?>">
                                            <?php echo $mslide["title1_".$lang] ?>
                                        </a>
                                    </h3>
<!--                                    <div class="main-date">july <strong>19th</strong> to july <strong>26th</strong></div>-->
                                    <p><?php echo $mslide["title2_".$lang] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
            <div class="pagination poin-style-1"></div>
        </div>
        <div class="find-form no-padding col-xs-12 col-md-4">
            <div>
                <h4 class="ff_subtitle">

                    <span style="color: #153a0f"><?php echo $this->session->flashdata("sccs")?></span>
                    <span style="color: #9A0E1B"><?php echo $this->session->flashdata("error")?></span>

<!--                    --><?php //echo $this->lang->line("elaqe"); ?>
                </h4>
                <div class="ff_text"></div>
                <form method="post" action="<?php echo base_url("az/message_send")?>" >
                <div class="form-block clearfix">
                    <div class="form-label color-white"><?php echo $this->lang->line("your_name"); ?></div>
                    <div class="input-style-1">
                        <input type="text" placeholder="<?php echo $this->lang->line("write_your_name"); ?>"  name="user" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-block clearfix">
                            <div class="form-label color-white"><?php echo $this->lang->line("email"); ?></div>
                            <div class="input-style-1">
                                <input type="email" placeholder="<?php echo $this->lang->line("write_your_email"); ?>" name="mail">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-block clearfix">
                            <div class="form-label color-white"><?php echo $this->lang->line("number"); ?></div>
                            <div class="input-style-1">
                                <input type="text" placeholder="<?php echo $this->lang->line("write_your_number"); ?>" name="number" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-block clearfix">
                            <div class="form-label color-white"><?php echo $this->lang->line("your_message"); ?></div>
                            <div class="input-style-1">
                                <input type="text" placeholder="<?php echo $this->lang->line("write_your_message"); ?>" name="msg" required>
                            </div>
                        </div>
                    </div>
                </div>

                <input type="submit" class="c-button bg-white" value="<?php echo $this->lang->line("send_message"); ?>">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Slider and Tour searching -->


<div class="main-wraper color-2 padd-90">
    <img class="center-image" src="<?php echo base_url("public/front/") ?>img/home_4/tour-bg.jpg" alt="">
    <div class="wide-container">
        <div class="row">
            <div class="col-xs-12">
                <div class="second-title style-2">
                    <h2>Burda statik text olacaq</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="1000" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="4" data-md-slides="5" data-lg-slides="6" data-add-slides="6">
                <div class="swiper-wrapper">
                    <?php foreach ($tours as $tour) { ?>
                    <div class="swiper-slide">
                        <div class="tour-item">
                            <div class="radius-top">
                                <img src="<?php echo base_url("uploads/tours/").$tour['img'] ?>" alt="">
                                <div style="cursor:pointer" data-placement="right" data-toggle="tooltip" title="<?php echo $tour["summary"]?>" class="tour-weather"><?php if ($tour["temperature"] > 0){echo "+";}?><?php echo $tour["temperature"]?><span class="sup">o</span>C</div>
                            </div>
                            <div class="tour-desc bg-white" style="height: 184px!important;">
                                <h4><a class="tour-title color-dark-2 link-blue" href="<?php echo base_url("$lang/tour/$tour[id]")?>"><?php echo $tour['name_'.$lang] ?></a></h4>
                                <div class="tour-text color-grey-3"><?php

                                    $str = (strlen(strip_tags($tour['desc_'.$lang])) > 130) ? "..." : "";

                                    echo mb_substr(strip_tags($tour['desc_'.$lang]), 0 , 130) . $str; ?></div>

                                <div class="tour-price"><span class="color-blue"><?php echo $tour['tour_price'] ?>$</span></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="pagination poin-style-2"></div>
            </div>
        </div>
    </div>
</div>


<div class="main-wraper padd-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title">
                    <h2>Bloqlarimiz(Burda statik text olacaq)</h2>
                </div>
            </div>
        </div>
        <div class="row isotope-container">
            <div class="grid-sizer col-mob-12 col-xs-6 col-sm-3"></div>

            <?php if (!empty($blogs[0])){?>
                <?php $blog1 = $blogs[0]; ?>
                <div class="item col-xs-12 col-md-6">
                <div class="tour-block tour-block-s-2 radius-5 hover-blue">
                    <div class="tour-layer delay-1"></div>
                    <img class="center-image" src="<?php echo base_url("uploads/blog/$blog1[img]")?>" alt="">
                    <div class="tour-caption">
                        <div class="vertical-align">
                            <h3 class="hover-it">
                                <a style="transition: none" href="<?php echo base_url("$lang/blog/$blog1[id]")?>">
                                    <?php echo $blog1["name_$lang"]?>
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>


            <?php if (!empty($blogs[1])){?>
                <?php $blog2 = $blogs[1]; ?>
                <div class="item col-xs-12 col-md-6">
                <div class="tour-block tour-block-s-4 radius-5 underline-block hover-blue">
                    <div class="tour-layer delay-1"></div>
                    <img class="center-image" src="<?php echo base_url("uploads/blog/$blog2[img]")?>" alt="">
                    <div class="tour-caption">
                        <div class="vertical-top">
                            <div class="weth-icon fr">
                            </div>
                        </div>
                        <div class="vertical-align">

                            <h3 class="underline hover-it">
                                <a style="transition: none" href="<?php echo base_url("$lang/blog/$blog2[id]")?>">
                                    <?php echo $blog2["name_$lang"]?>
                                </a>
                            </h3>
                            <p class="color-white-light">

                                <?php

                                    $str2 = (strlen(strip_tags($blog2["desc_$lang"]))) ? "..." : "" ;

                                    echo mb_substr(strip_tags($blog2["desc_$lang"]), 0 , 170) . $str2;

                                ?>

                            </p>
                        </div>
                        <div class="vertical-bottom">
                            <div class="fl">
                                <div class="tour-info">
                                </div>
                                <div class="tour-info">
                                </div>
                            </div>
                            <a href="<?php echo base_url("$lang/blog/$blog2[id]")?>" class="c-button b-50 fr bg-white"><span><?php echo $this->lang->line("etrafli")?></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>


            <?php if (!empty($blogs[2])){?>
                <?php $blog3 = $blogs[2]; ?>
                <div class="item col-mob-12 col-xs-6 col-sm-6 col-md-3">
                    <div class="tour-block tour-block-s-2 radius-5 hover-blue">
                        <div class="tour-layer delay-1"></div>
                        <img class="center-image" src="<?php echo base_url("uploads/blog/$blog3[img]")?>" alt="">
                        <div class="tour-caption">
                            <div class="vertical-align">
                                <h3 class="hover-it">
                                    <a style="transition: none" href="<?php echo base_url("$lang/blog/$blog3[id]")?>">
                                        <?php echo $blog3["name_$lang"]?>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>


            <?php if (!empty($blogs[3])){?>
                <?php $blog4 = $blogs[3]; ?>
            <div class="item col-mob-12 col-xs-6 col-sm-6 col-md-3">
                <div class="tour-block tour-block-s-2 radius-5 hover-blue">
                    <div class="tour-layer delay-1"></div>
                    <img class="center-image" src="<?php echo base_url("uploads/blog/$blog4[img]")?>" alt="">
                    <div class="tour-caption">
                        <div class="vertical-align">
                            <h3 class="hover-it">
                                <a style="transition: none" href="<?php echo base_url("$lang/blog/$blog4[id]")?>">
                                    <?php echo $blog4["name_$lang"]?>
                                </a>
                            </h3>

                        </div>
                    </div>
                </div>
            </div>
            <?php }?>



        </div>
    </div>
</div>


<!--Map-->
<div class="map-block">
    <div id="map-canvas" data-lat="33.770242" data-lng="-118.193759" data-zoom="10" data-style="1"></div>
    <div class="addresses-block">
        <a data-lat="33.770242" data-lng="-118.193759" data-string="Santa Monica Hotel"></a>
        <a data-lat="34.018454" data-lng="-118.493610" data-string="Long Beach Hotel"></a>
        <a data-lat="33.949145" data-lng="-118.242369" data-string="Florence-Graham Hotel"></a>
        <a data-lat="34.026421" data-lng="-117.960631" data-string="Industry Hotel"></a>
        <a data-lat="33.97836" data-lng="-117.619659" data-string="Chino Hotel"></a>
        <a data-lat="33.662319" data-lng="-117.589399" data-string="Trabuco Hotel"></a>
        <a data-lat="33.521296" data-lng="-117.701621" data-string="Laguna Hotel"></a>
        <a data-lat="33.387962" data-lng="-118.419819" data-string="Santa Catalina Hotel"></a>
    </div>
</div>
<!--Map-->


<div class="main-wraper padd-120">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title">
                    <h2>Burda statik text olacaq</h2>
                    <p class="color-grey">Burda statik text olacaq</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="top-baner arrows">
                <div class="swiper-container offers-slider" data-autoplay="5000" data-loop="1" data-speed="500" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="2" data-add-slides="2">
                    <div class="swiper-wrapper">

                        <?php foreach ($third_slide as $item) { ?>
                            <div class="swiper-slide" data-val="0">
                                <div class="offers-block style-2 radius-mask underline-block hover-blue" style="min-height: 350px!important; ">
                                    <div class="clip">
                                        <div class="bg bg-bg-chrome act" style="background-image:url(<?php echo base_url("uploads/additional_slide2/$item[img]")?>); object-fit: contain">
                                        </div>
                                    </div>
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-top">

                                    </div>
                                    <div class="vertical-bottom">
                                        <h4 class="offet-title underline hover-it m94">
                                            <a href="<?php echo $item["link"]?>"><?php echo $item["title1_$lang"]?></a>
                                        </h4>
                                        <p><?php echo $item["title2_$lang"]?></p>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <div class="pagination  poin-style-1 pagination-hidden"></div>
                </div>


                <div class="swiper-arrow-left offers-arrow color-2"><span class="fa fa-angle-left"></span></div>
                <div class="swiper-arrow-right offers-arrow color-2"><span class="fa fa-angle-right"></span></div>
            </div>
        </div>

    </div>
</div>


<div class="main-wraper bg-blue padd-100">
    <div class="wide-container clearfix">
        <div class="left-title">
            <div class="second-title">
                <h4 class="subtitle color-white-light">Burda statik text olacaq</h4>
                <h2 class="color-white underline">Burda statik text olacaq</h2>
                <p class="color-white-light">Burda statik text olacaq</p>
            </div>
        </div>

        <div class="left-content">
            <div class="row">
                <div class="swiper-container pad-15" data-autoplay="0" data-loop="1" data-speed="1000" data-center="0" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2" data-md-slides="3" data-lg-slides="4" data-add-slides="4">
                    <div class="swiper-wrapper">
                        <?php foreach ($highest_price_tours as $item) {?>
                            <div class="swiper-slide">
                                <div class="hotel-item style-3">
                                        <div class="radius-top">
                                            <img src="<?php echo base_url("uploads/tours/$item[img]")?>" alt="">
                                            <div class="price price-s-2">$<?php echo $item["tour_price"]?></div>
                                            <div style="cursor: pointer" class="tour-weather">
                                                <?php if ($item["temperature"] > 0){echo "+";}?><?php echo $item["temperature"]?>
                                                <span class="sup">o</span>C
                                            </div>
                                        </div>
                                        <div class="title clearfix" style="height: 212px">
                                            <div class="date"><strong><?php echo $item["date"]?> - <?php echo $item["end_date"]?></strong></div>
                                            <h4>
                                                <b>
                                                    <a href="<?php echo base_url("$lang/tour/$item[id]")?>">
                                                        <?php echo $item["name_$lang"]?>
                                                    </a>
                                                </b>
                                            </h4>
                                            <p class="f-14"><?php

                                                $str = (strlen(strip_tags($item['desc_'.$lang])) > 130) ? "..." : "";

                                                echo mb_substr(strip_tags($item['desc_'.$lang]), 0 , 130) . $str;

                                                ?></p>
                                            <a href="<?php echo base_url("$lang/tour/$item[id]")?>" class="c-button b-40 bg-blue hv-blue-o "><?php echo $this->lang->line("etrafli")?></a>
                                        </div>
                                    </div>
                            </div>
                        <?php }?>

                    </div>
                    <div class="pagination"></div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="main-wraper padd-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title">
                </div>
            </div>
        </div>
        <div class="row isotope-container">
            <div class="grid-sizer col-xs-12 col-sm-3"></div>

            <div class="item col-xs-12 col-md-6">
                <div class="row">
                    <div class="top-baner arrows">
                        <div class="swiper-container offers-slider" data-autoplay="0" data-loop="1" data-speed="500" data-slides-per-view="1">
                            <div class="swiper-wrapper">

                                <?php for ($i = 2; $i < count($second_slide); $i++){ ?>
                                    <?php $item = $second_slide[$i];?>
                                    <div class="swiper-slide" data-val="0">
                                        <div class="tour-block tour-block-s-6 radius-5 underline-block hover-blue">
                                            <div class="tour-layer delay-1"></div>
                                            <img style="object-fit: cover" class="center-image"  src="<?php echo base_url("uploads/additional_slide/$item[img]")?>" alt="">
                                            <div class="tour-caption">
                                                <div class="vertical-align">
                                                    <h4><?php echo $item["title2_$lang"]?></h4>
                                                    <h3 class="underline hover-it"><?php echo $item["title1_$lang"]?></h3>
                                                    <br>
                                                    <a href="<?php echo base_url("$item[link]")?>" class="c-button b-50 bg-white"><span><?php echo $this->lang->line("etrafli")?></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>

                            </div>
                            <div class="pagination  poin-style-1 pagination-hidden"></div>
                        </div>

                        <?php if (!empty($second_slide)){?>
                            <div class="swiper-arrow-left offers-arrow color-2"><span class="fa fa-angle-left"></span></div>
                            <div class="swiper-arrow-right offers-arrow color-2"><span class="fa fa-angle-right"></span></div>
                        <?php }?>
                    </div>
                </div>
            </div>

            <?php if (!empty($second_slide[0])){?>
                <?php $item2 = $second_slide[0]?>
                <div class="item col-xs-12 col-md-6">
                <div class="tour-block tour-block-s-7 radius-5 underline-block hover-blue">
                    <div class="tour-layer delay-1"></div>
                    <img class="center-image" src="<?php echo base_url("uploads/additional_slide/$item2[img]")?>" alt="">
                    <div class="tour-caption">
                        <div class="vertical-align">
                            <h3 class="underline hover-it">
                                <a href="<?php echo base_url("$item2[link]")?>">
                                    <?php echo $item2["title1_$lang"]?>
                                </a>
                            </h3>
                            <p class="color-white-light"><?php echo $item2  ["title2_$lang"]?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>


            <?php if (!empty($second_slide[1])){?>
                <?php $item3 = $second_slide[1]?>
                <div class="item col-xs-12 col-md-6">
                <div class="tour-block tour-block-s-8 radius-5 underline-block hover-blue">
                    <div class="tour-layer delay-1"></div>
                    <img class="center-image" src="<?php echo base_url("uploads/additional_slide/$item3[img]")?>" alt="">
                    <div class="tour-caption">
                        <div class="vertical-align">
                            <h3 class="underline hover-it">
                                <a href="<?php echo base_url("$item3[link]")?>">
                                    <?php echo $item3["title1_$lang"]?>
                                </a>
                            </h3>
                            <p class="color-white-light"><?php echo $item3  ["title2_$lang"]?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>

        </div>
    </div>
</div>



<!-- PARTNERS -->
<div class="main-wraper padd-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title">
                    <h2><?php echo $this->lang->line("emekdasliq_etdiyimiz_sirketler") ?></h2>
                </div>
            </div>
        </div>
        <div class="investors-block">
            <div class="row no-margin">

                <?php foreach ($partners as $item) { ?>
                    <div class="col-mob-6 col-xs-4 col-sm-3 col-md-2 clear-mob-2 clear-xs-3 clear-sm-4 clear-md-6 no-padding" data-toggle="tooltip" title="<?php echo $item["name_$lang"] ?>">
                        <a class="investor-logo" href="<?php echo $item["link"]?>"><img class="img-responsive" src="<?php echo base_url("uploads/partners/$item[img]")?>" alt=""></a>
                    </div>
                <?php }?>

            </div>
        </div>
    </div>
</div>

<!--Footer-->
<?php $this->load->view("front/includes/footer"); ?>
<!--Footer-->

<!--Scripts-->
<?php $this->load->view("front/includes/scripts"); ?>
<!--Scripts-->
