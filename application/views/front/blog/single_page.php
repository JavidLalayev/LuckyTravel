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
    <img class="center-image" src="<?php echo base_url("public/front/")?>img/detail/bg_3.jpg" alt="">
    <div class="vertical-align">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <ul class="banner-breadcrumb color-white clearfix">
                        <li><a class="link-blue-2" href="<?php echo base_url("$lang/home")?>"><?php echo $this->lang->line("ana_sehife")?></a> /</li>
                        <li><a class="link-blue-2" href="<?php echo base_url("$lang/blogs_category")?>"><?php echo $this->lang->line("blog")?></a> /</li>
                        <li><span><?php echo $blog["name_$lang"]?></span></li>
                    </ul>
                    <h2 class="color-white"><?php echo $this->lang->line("blog")?></h2>
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
            <br>
            <h3 style="text-align: center"><?php echo $blog["name_$lang"]?></h3>
            <br><br>
            <center>
                <img class="c_blog_responsive_img" src="<?php echo base_url("uploads/blog/$blog[img]")?>" alt="">
            </center>
            <br>
            <?php echo $blog["desc_$lang"]?>
        </div>
    </div>
</div>



<!--Footer-->
<?php $this->load->view("front/includes/footer"); ?>
<!--Footer-->

<!--Scripts-->
<?php $this->load->view("front/includes/scripts"); ?>
<!--Scripts-->