<?php $lang = $this->session->userdata("dil")?>

<footer class="bg-dark type-2">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="footer-block">
                    <img src="<?php echo base_url("uploads/logo/$logo[img]") ?>" alt="" class="logo-footer" style="
                      display: block;
                      margin-left: auto;
                      margin-right: auto;
                      float:none!important;
                      width: 200px;
                      height: 220px;" >

                    <center>
                        <div class="footer-share">
                            <a style="float:none;" href="<?php echo $contact["facebook"]?>"><span class="fa fa-facebook"></span></a>
                            <a style="float:none;" href="<?php echo $contact["twitter"]?>"><span class="fa fa-twitter"></span></a>
                            <a style="float:none;" href="<?php echo $contact["instagram"]?>"><span class="fa fa-instagram"></span></a>
                            <a style="float:none;" href="<?php echo $contact["linkedln"]?>"><span class="fa fa-linkedin"></span></a>
                        </div>
                    </center>

                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-sm-6 no-padding" >
                <div class="footer-block">
                    <h6><?php echo $this->lang->line("teklifler")?></h6>

                    <?php foreach ($last_offers as $item) { ?>
                        <div class="f_news clearfix">
                            <a class="f_news-img black-hover" href="<?php echo base_url("$lang/offer/$item[id]")?>">
                                <img class="img-responsive" src="<?php echo base_url("uploads/offers/$item[img]")?>" alt="">
                                <div class="tour-layer delay-1"></div>
                            </a>
                            <div class="f_news-content">
                                <a class="f_news-tilte color-white link-red" href="<?php echo base_url("$lang/offer/$item[id]")?>"><?php echo $item["name_$lang"]?></a>
                                <a href="<?php echo base_url("$lang/offer/$item[id]")?>" class="r-more"><?php echo $this->lang->line("etrafli")?></a>
                            </div>
                        </div>
                    <?php }?>

                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-sm-6 no-padding" >
                <div class="footer-block">
                    <h6><?php echo $this->lang->line("servisler")?></h6>

                    <?php foreach ($last_services as $item) { ?>
                        <div class="f_news clearfix">
                            <a class="f_news-img black-hover" href="<?php echo base_url("$lang/service/$item[id]")?>">
                                <img class="img-responsive" src="<?php echo base_url("uploads/services/$item[img]")?>" alt="">
                                <div class="tour-layer delay-1"></div>
                            </a>
                            <div class="f_news-content">
                                <a class="f_news-tilte color-white link-red" href="<?php echo base_url("$lang/service/$item[id]")?>"><?php echo $item["name_$lang"]?></a>
                                <a href="<?php echo base_url("$lang/service/$item[id]")?>" class="r-more"><?php echo $this->lang->line("etrafli")?></a>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                <div class="footer-block">
                    <h6><?php echo $this->lang->line("elaqe")?></h6>
                    <div class="contact-info">
                        <div class="contact-line color-grey-3"><i class="fa fa-map-marker"></i><span><?php echo $contact["address_$lang"];?></span></div>
                        <div class="contact-line color-grey-3"><i class="fa fa-phone"></i><a href="tel:93123456789"><?php echo $contact["phone"]?></a></div>
                        <div class="contact-line color-grey-3"><i class="fa fa-envelope-o"></i><a href="mailto:"><?php echo $contact["email"]?></a></div>
                        <div class="contact-line color-grey-3"><i class="fa fa-whatsapp"></i><a href="#"><?php echo $contact["whatsapp"]?></a></div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-link bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <span><?php echo $this->lang->line("huquqlar"); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
