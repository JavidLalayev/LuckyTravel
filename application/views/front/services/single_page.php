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

<!-- INNER-BANNER -->
<div class="inner-banner style-6">
    <img class="center-image" src="<?php echo base_url("public/front/")?>img/inner/bg_3.jpg" alt="">
    <div class="vertical-align">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <ul class="banner-breadcrumb color-white clearfix">
                        <li><a class="link-blue-2" href="<?php echo base_url("$lang/home")?>"><?php echo $this->lang->line("ana_sehife")?></a> /</li>
                        <li><a class="link-blue-2" href="<?php echo base_url("$lang/services")?>"><?php echo $this->lang->line("servisler")?></a> /</li>
                        <li><span></span></li>
                    </ul>
                    <h2 class="color-white"><?php echo $service["name_$lang"]?></h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ICON-BLOCK -->
<div class="main-wraper padd-90">
    <div class="container">
        <div class="row">
            <br>
            <?php echo $service["desc_$lang"]?>
        </div>
    </div>
</div>



<!--Footer-->
<?php $this->load->view("front/includes/footer"); ?>
<!--Footer-->

<!--Scripts-->
<?php $this->load->view("front/includes/scripts"); ?>
<!--Scripts-->