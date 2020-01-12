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

<div class="inner-banner style-6">
    <img class="center-image" src="<?php echo base_url("public/front/")?>img/inner/bg_1.jpg" alt="">
    <div class="vertical-align">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <ul class="banner-breadcrumb color-white clearfix">
                        <li><a class="link-blue-2" href="<?php echo base_url("$lang/home")?>"><?php echo $this->lang->line("ana_sehife")?></a> /</li>
                        <li><a class="link-blue-2"><?php echo $this->lang->line("haqqimizda")?></a> /</li>
                        <li><span></span></li>
                    </ul>
                    <h2 class="color-white"><?php echo $this->lang->line("haqqimizda")?></h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SIMPLE-TEXT -->
<div class="main-wraper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title">
                    <h4 class="subtitle color-dr-blue-2 underline"><?php echo $this->lang->line("haqqimizda")?></h4>
                    <h2><?php echo $this->lang->line("bizkimik")?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php echo $about["desc_$lang"]?>
        </div>
    </div>
</div>



<!-- PARTNERS -->
<div class="main-wraper padd-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title">
                    <h4 class="subtitle color-dr-blue-2 underline"><?php echo $this->lang->line("emekdaslarimiz")?></h4>
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

