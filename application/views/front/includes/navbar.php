
<?php $lang = $this->session->userdata("dil") ?>


<header class="color-1 hovered menu-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="nav">
                    <a href="<?php

                    if ($this->session->userdata("dil") == "az"){
                        echo base_url('az/home');
                    }
                    elseif ($this->session->userdata("dil") == "en"){
                        echo base_url('en/home');
                    }
                    elseif ($this->session->userdata("dil") == "ru"){
                        echo base_url('ru/home');
                    }

                    ?>" class="logo">
                        <img src="<?php echo base_url("uploads/logo/$logo[img]")?>" alt="lucky travel" style="object-fit:contain;width: 78px; height: 66px;" >
                    </a>
                    <div class="nav-menu-icon">
                        <a href="#"><i></i></a>
                    </div>
                    <nav class="menu">
                        <ul>

                            <!--Home Page-->
                            <li  <?php if ($this->uri->segment(2)=="home") { ?>class="type-1 active" <?php } ?> >
                                <a href="<?php

                                if ($this->session->userdata("dil") == "az"){
                                    echo base_url('az/home');
                                }
                                elseif ($this->session->userdata("dil") == "en"){
                                    echo base_url('en/home');
                                }
                                elseif ($this->session->userdata("dil") == "ru"){
                                    echo base_url('ru/home');
                                }

                                ?>">
                                    <?php echo $this->lang->line("ana_sehife"); ?><span class="fa fa-angle-down"></span>
                                </a>
                            </li>
                            <!--Home Page-->




                            <!--About-->
                            <li  <?php if ($this->uri->segment(2)=="about") { ?>class="type-1 active" <?php } ?>>  <a href="<?php

                                if ($this->session->userdata("dil") == "az"){
                                    echo base_url('az/about');
                                }
                                elseif ($this->session->userdata("dil") == "en"){
                                    echo base_url('en/about');
                                }
                                elseif ($this->session->userdata("dil") == "ru"){
                                    echo base_url('ru/about');
                                }

                                ?>"><?php echo $this->lang->line("haqqimizda"); ?><span class="fa fa-angle-down"></span>
                                </a>
                            </li>
                            <!--About-->



                            <!--Tours-->
                            <li <?php if ($this->uri->segment(2)=="tours") { ?>class="type-1 active" <?php } ?>><a href="<?php

                                if ($this->session->userdata("dil") == "az"){
                                    echo base_url('az/tours');
                                }
                                elseif ($this->session->userdata("dil") == "en"){
                                    echo base_url('en/tours');
                                }
                                elseif ($this->session->userdata("dil") == "ru"){
                                    echo base_url('ru/tours');
                                }

                                ?>"><?php echo $this->lang->line("turlar"); ?><span class="fa fa-angle-down"></span></a>

                            </li>
                            <!--Tours-->


                            <!--Services-->
                            <li <?php if ($this->uri->segment(2)=="services") { ?>class="type-1 active" <?php } ?>><a href="<?php

                                if ($this->session->userdata("dil") == "az"){
                                    echo base_url('az/services');
                                }
                                elseif ($this->session->userdata("dil") == "en"){
                                    echo base_url('en/services');
                                }
                                elseif ($this->session->userdata("dil") == "ru"){
                                    echo base_url('ru/services');
                                }

                                ?>"><?php echo $this->lang->line("servisler"); ?><span class="fa fa-angle-down"></span>
                                </a>
                            </li>
                            <!--Services-->


                            <!--Teklifler-->
                            <li <?php if ($this->uri->segment(2)=="offers") { ?>class="type-1 active" <?php } ?>>
                                <a href="<?php echo base_url("$lang/offers")?>">
                                    <?php echo $this->lang->line("teklifler"); ?>
                                    <span class="fa fa-angle-down"></span>
                                </a>
                            </li>
                            <!--Teklifler-->



                            <!--Blog-->
                            <li <?php if ($this->uri->segment(2)=="blogs_category") { ?>class="type-1 active" <?php } ?>>
                                <a href="<?php echo base_url("$lang/blogs_category")?>">
                                    <?php echo $this->lang->line("blog"); ?>
                                    <span class="fa fa-angle-down"></span>
                                </a>
                            </li>
                            <!--Blog-->






                            <!--FAQs-->
                            <li <?php if ($this->uri->segment(2)=="faqs") { ?>class="type-1 active" <?php } ?>>
                                <a href="<?php echo base_url("$lang/faqs")?>">
                                    <?php echo "FAQs"; ?><span class="fa fa-angle-down"></span>
                                </a>
                            </li>
                            <!--FAQs-->


<!--
                            <li <?php /*if ($this->uri->segment(2)=="partners") { */?>class="type-1 active" <?php /*} */?>><a href="#"><?php /*echo $this->lang->line("emekdaslarimiz"); */?><span class="fa fa-angle-down"></span></a>

                            </li>-->




                            <!--Contact-->
                            <li <?php if ($this->uri->segment(2)=="contact") { ?>class="type-1 active" <?php } ?> >
                                <a href="<?php

                                if ($this->session->userdata("dil") == "az"){
                                    echo base_url('az/contact');
                                }
                                elseif ($this->session->userdata("dil") == "en"){
                                    echo base_url('en/contact');
                                }
                                elseif ($this->session->userdata("dil") == "ru"){
                                    echo base_url('ru/contact');
                                }

                                ?>">
                                    <?php echo $this->lang->line("elaqe"); ?>
                                </a>
                            </li>
                            <!--Contact-->


                            <!--Language-->
                            <li class="type-1"><a href="#"><?php echo $this->lang->line("dil"); ?>   <span class="fa fa-angle-down"></span></a>
                                <ul class="dropmenu" style="text-align: center" >
                                    <li>
                                        <a href="<?php

                                        $segment2 = $this->uri->segment(2);
                                        $segment3 = $this->uri->segment(3);
                                        $segment4 = $this->uri->segment(4);

                                        if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                            echo base_url("az/" . $segment2   . "/" .  $segment3  . "/" . $segment4);
                                        }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                            echo base_url("az/" . $segment2   . "/" .  $segment3);
                                        }elseif(!empty($this->uri->segment(2))){
                                            echo base_url("az/" . $segment2);
                                        }else{
                                            echo base_url("az/home");
                                        }

                                        ?>">Az</a>
                                    </li>
                                    <li>
                                        <a href="<?php

                                        if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                            echo base_url("en/" . $segment2   . "/" .  $segment3   . "/" . $segment4);
                                        }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                            echo base_url("en/" . $segment2   . "/" .  $segment3);
                                        }elseif(!empty($this->uri->segment(2))){
                                            echo base_url("en/" . $segment2);
                                        }else{
                                            echo base_url("en/home");
                                        }

                                        ?>">En</a>
                                    </li>
                                    <li>
                                        <a href="<?php

                                        if (!empty($this->uri->segment(2)) && !empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){
                                            echo base_url("ru/" . $segment2   . "/" .  $segment3   . "/" . $segment4);
                                        }elseif(!empty($this->uri->segment(2)) && !empty($this->uri->segment(3))){
                                            echo base_url("ru/" . $segment2   . "/" .  $segment3);
                                        }elseif(!empty($this->uri->segment(2))){
                                            echo base_url("ru/" . $segment2);
                                        }else{
                                            echo base_url("ru/home");
                                        }

                                        ?>">Ru</a>
                                    </li>
                                </ul>
                            </li>
                            <!--Language-->
                        </ul>
                    </nav>
                </div>



            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 center-block">
                <form action='<?php  echo base_url("$lang/tours")?>' method="post">
                    <div class="input-style-1 b-50 color-3">
                        <img src="<?php echo base_url("public/front/")?>img/search_icon_small_grey.png" alt="">
                        <input type="text" class="form-control"  name="search_value" placeholder="<?php echo $this->lang->line("write_tour_name") ?>">
                    </div>
                 </form>
            </div>

        </div>

    </div>
</header>
