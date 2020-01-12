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
                        <li><a class="link-blue-2" href="<?php echo base_url("$lang/blogs_category")?>"><?php echo $this->lang->line("blog")?></a> /</li>
                        <li><span></span></li>
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
        <br><br><br>

        <div class="row">

            <?php foreach ($blog_category as $item){ ?>
                <div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-4">
                <a class="black-hover" href="<?php echo base_url("$lang/blogs/$item[id]")?>">
                    <img class="img-full img-responsive" src="<?php echo base_url("uploads/blog_category/$item[img]")?>" alt="">
                    <div class="tour-layer delay-1"></div>
                    <div  class="vertical-align">
                        <h4 class="color-white"><b><?php echo $item["name_$lang"]?></b></h4>
                    </div>
                </a>
            </div>
            <?php }?>
        </div>
    </div>
</div>



<!--Footer-->
<?php $this->load->view("front/includes/footer"); ?>
<!--Footer-->

<!--Scripts-->
<?php $this->load->view("front/includes/scripts"); ?>
<!--Scripts-->