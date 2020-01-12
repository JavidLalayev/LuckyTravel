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

<!-- INNER-BANNER -->
<div class="inner-banner style-6">
    <img class="center-image" src="<?php echo base_url("public/front/")?>img/inner/bg_6.jpg" alt="">
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

<!-- S_NEWS-ENTRY -->
<div class="main-wraper padd-120">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title">

                </div>
            </div>
        </div>
        <div class="blog-grid row">

            <?php foreach ($blogs as $item){?>
                <div class="blog-grid-entry col-mob-12 col-xs-12 col-sm-6 col-md-4">
                <div class="s_news-entry style-2">
                    <a href="<?php echo base_url("$lang/blog/$item[id]")?>"><img class="s_news-img img-responsive" src="<?php echo base_url("uploads/blog/$item[img]")?>" alt=""></a>
                    <h4 class="s_news-title"><a href="<?php echo base_url("$lang/blog/$item[id]")?>"><?php echo $item["name_$lang"]?></a></h4>

                    <div class="s_news-text color-grey-3">
                        <?php

                            $str = (strlen($item["desc_$lang"]) > 120) ? "..." : "";

                            echo mb_substr(strip_tags($item["desc_$lang"]), 0, 120) . $str;

                        ?>
                    </div>
                    <a href="<?php echo base_url("$lang/blog/$item[id]")?>" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o"><span><?php echo $this->lang->line("etrafli")?></span></a>
                </div>
            </div>
            <?php }?>
        </div>

        <div class="c_pagination clearfix">
            <?php print_r($links)?>
        </div>
    </div>
</div>



<!--Footer-->
<?php $this->load->view("front/includes/footer"); ?>
<!--Footer-->

<!--Scripts-->
<?php $this->load->view("front/includes/scripts"); ?>
<!--Scripts-->