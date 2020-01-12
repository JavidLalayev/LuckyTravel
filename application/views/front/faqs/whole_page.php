<!--HTML + Links-->
<?php $this->load->view("front/includes/header"); ?>
<!--Links-->

<!--Loader-->
<?php $this->load->view("front/includes/loading_effect"); ?>
<!--Loader-->

<!--Navigation bar-->
<?php $this->load->view("front/includes/navbar"); ?>
<!--Navigation bar-->

<?php $lang = $this->session->userdata("dil") ?>

<div class="inner-banner style-5">
    <img class="center-image" src="<?php echo base_url("public/front/")?>img/inner/bg_1.jpg" alt="">
    <div class="vertical-align">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <ul class="banner-breadcrumb color-white clearfix">
                        <li><a class="link-blue-2" href="<?php echo base_url("$lang/home")?>"><?php echo $this->lang->line("ana_sehife")?></a> /</li>
                        <li><a class="link-blue-2" ><?php echo "FAQs"?></a> /</li>
                        <li><span></span></li>
                    </ul>
                    <h2 class="color-white">FAQs</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!--ACCORDION-->
<div class="main-wraper bg-grey-2 padd-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title">
                    <h4 class="color-dark-2-light">FAQs</h4>
                    <h2><?php echo $this->lang->line("en_cox_verilen_sullar")?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="accordion style-5">

                    <?php for ($i = 0; $i < count($faqs)/2; $i++){?>
                        <div class="acc-panel">
                            <div class="acc-title"><span class="acc-icon"></span><?php echo $faqs[$i]["name_$lang"]?></div>
                            <div class="acc-body">
                                <?php echo $faqs[$i]["desc_$lang"]?>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="accordion style-5">

                    <?php for ($i = count($faqs)/2; $i < count($faqs); $i++){?>
                        <div class="acc-panel">
                            <div class="acc-title"><span class="acc-icon"></span><?php echo $faqs[$i]["name_$lang"]?></div>
                            <div class="acc-body">
                                <?php echo $faqs[$i]["desc_$lang"]?>
                            </div>
                        </div>
                    <?php }?>

                </div>
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

