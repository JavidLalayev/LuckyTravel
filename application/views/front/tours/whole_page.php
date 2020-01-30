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

<div class="inner-banner">
    <img class="center-image" src="<?php echo base_url("public/front/")?>img/tour_list/inner_banner_1.jpg" alt="">
    <div class="vertical-align">;
        <div class="container">

            <h2 class="color-white"><?php echo $this->lang->line("our_tours") ?></h2>

            <h4 class="color-white"><span><?php echo $total_tours?></span> <?php echo $this->lang->line("tour") ?></h4>
        </div>
    </div>
</div>

<div class="list-wrapper bg-grey-2">
    <div class="container">
        <div class="row">


            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="sidebar bg-white clearfix">

<!--                    search-->
                    <div class="sidebar-block c_refresh_search">
                        <h4 class="sidebar-title color-dark-2"><?php echo $this->lang->line("search") ?></h4>
                        <div class="search-inputs">
                            <div class="form-block clearfix">
                                <div class="input-style-1 b-50 color-3">
                                    <img src="<?php echo base_url("public/front/")?>img/loc_icon_small_grey.png" alt="">
                                    <input  class="c_search_value" type="text" placeholder="<?php echo $this->lang->line("write_tour_name") ?>">
                                </div>
                            </div>
                            <div class="form-block clearfix">
                                <div class="input-style-1 b-50 color-3">
                                    <img src="<?php echo base_url("public/front/")?>img/calendar_icon_grey.png" alt="">
                                    <input  type="text" placeholder="<?php echo $this->lang->line("tour_start_date") ?>" class="datepicker c_date_value">
                                </div>
                            </div>

                            <div class="form-block clearfix">
                                <div class="input-style-1 b-50 color-3">
                                    <img src="<?php echo base_url("public/front/")?>img/calendar_icon_grey.png" alt="">
                                    <input  type="text" placeholder="<?php echo $this->lang->line("tour_end_date") ?>" class="datepicker c_date_end_value">
                                </div>
                            </div>

                        </div>
                        <input data-url="<?php echo base_url("$lang/load_data")?>" type="submit" class="c_search_submit c-button b-40 bg-blue-2 hv-blue-2-o" value="<?php echo $this->lang->line("go_search") ?>">
                    </div>
<!--                    search-->


<!--                    price range-->
                    <div class="sidebar-block c_refresh_price_range">
                        <h4 class="sidebar-title color-dark-2"><?php echo $this->lang->line("price_range") ?></h4>
                        <div class="slider-range color-1 clearfix c_price_range_values" data-counter="" data-position="start" data-from="<?php echo $lowest_price["tour_price"]?>" data-to="<?php echo $highest_price["tour_price"]?>" data-min="<?php echo $lowest_price["tour_price"]?>" data-max="<?php echo $highest_price["tour_price"]?>">
                            <div class="range"></div>
                            <input data-price="<?php echo $lowest_price["tour_price"]?>" type="text" class="amount-start" readonly value="$<?php echo $lowest_price["tour_price"]?>">
                            <input data-price="<?php echo $highest_price["tour_price"]?>" type="text" class="amount-end" readonly value="$<?php echo $highest_price["tour_price"]?>">
                        </div>
                        <input type="submit" data-url="<?php echo base_url("$lang/load_data")?>" class="c_price_range c-button b-40 bg-blue-2 hv-blue-2-o" value="<?php echo $this->lang->line("go_search") ?>">
                    </div>
<!--                    price range-->

                </div>
            </div>

            <div class="col-xs-12 col-sm-8 col-md-9">
                <div class="list-header clearfix">

                    <!--Price-->
                    <div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
                        <div class="drop c_refresh_price" data-text="<?php echo $this->lang->line("price") ?>">
                            <b><?php echo $this->lang->line("price") ?></b>
                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                            <span>
								    <a class="c_set_order_price" data-url="<?php echo base_url("$lang/load_data")?>" data-order="asc" href="#"><?php echo $this->lang->line("asc") ?></a>
									<a class="c_set_order_price" data-url="<?php echo base_url("$lang/load_data")?>" data-order="desc" href="#"><?php echo $this->lang->line("desc") ?></a>
							</span>
                        </div>
                    </div>
                    <!--Price-->


                    <!--Popular-->
                    <div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
                        <div class="drop c_refresh_popularity" data-text="<?php echo $this->lang->line("popularity") ?>">
                            <b><?php echo $this->lang->line("popularity") ?></b>
                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                            <span>
								    <a class="c_set_order_popularity" data-url="<?php echo base_url("$lang/load_data")?>" data-order="asc" href="#"><?php echo $this->lang->line("asc") ?></a>
									<a class="c_set_order_popularity" data-url="<?php echo base_url("$lang/load_data")?>" data-order="desc" href="#"><?php echo $this->lang->line("desc") ?></a>
                            </span>
                        </div>
                    </div>
                    <!--Popular-->

                </div>
            </div>


            <div class="c_refresh col-xs-12 col-sm-8 col-md-9" data-url="<?php echo base_url("$lang/load_data")?>">

                <?php $this->load->view("front/tours/refresh_page/tours"); ?>

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